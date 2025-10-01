<?php
include('../includes/connect.php');
session_start();

// Check login
if(!isset($_SESSION['username'])) {
    header("Location: user_login.php");
    exit();
}

// Check order_id
if(!isset($_GET['order_id'])) {
    die("Order ID not provided");
}

$order_id = $_GET['order_id'];
$user_id = $_SESSION['user_id'];

// Fetch order details
$select_data = "SELECT * FROM `user_orders` WHERE order_id = $order_id AND user_id = $user_id";
$result = mysqli_query($con, $select_data);

if(!$result || mysqli_num_rows($result) == 0) {
    die("Order not found or not allowed");
}

$row_fetch = mysqli_fetch_assoc($result);
$invoice_number = $row_fetch['invoice_number'];
$amount_due = $row_fetch['amount_due'];

$config = require __DIR__ . '/../configs/config.php';

// Handle form submit
if(isset($_POST['confirm_payment'])) {
    $payment_mode = $_POST['payment_mode'];

    if($payment_mode == 'mpesa') {
        $phone_number = $_POST['phone_number'];

        // Validate phone number
        if(!preg_match('/^(\+?254|0)?[7][0-9]{8}$/', $phone_number)) {
            $error = "Invalid phone number format.";
        } else {
            $response = processMpesaPayment($phone_number, $amount_due, $invoice_number, $order_id);

            if($response['success']) {
                $_SESSION['success'] = "Payment request sent to your phone. Please complete on M-Pesa.";
                $update_order = "UPDATE `user_orders` SET order_status = 'Pending' WHERE order_id = $order_id";
                mysqli_query($con, $update_order);
            } else {
                $error = "M-Pesa Error: " . $response['message'];
            }
        }
    } elseif($payment_mode == 'cod') {
        $update_order = "UPDATE `user_orders` 
                         SET order_status = 'Complete', payment_method='Cash on Delivery' 
                         WHERE order_id = $order_id";
        mysqli_query($con, $update_order);
        $_SESSION['success'] = "Order confirmed. Pay on delivery.";
        header("Location: profile.php");
        exit();
    }
}

/**
 * STK Push Handler
 */
function processMpesaPayment($phone, $amount, $invoice, $order_id) {
    $config = require __DIR__ . '/../configs/config.php';

    // Format phone number
    $phone = preg_replace('/^0/', '254', $phone);
    $phone = preg_replace('/^\+/', '', $phone);

    // Get Access Token
    $credentials = base64_encode($config['consumer_key'] . ':' . $config['consumer_secret']);
    $token_url = "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $token_url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Basic $credentials"]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $token_response = curl_exec($ch);
    curl_close($ch);

    $token_data = json_decode($token_response, true);
    if(!isset($token_data['access_token'])) {
        return ['success' => false, 'message' => 'Failed to get access token'];
    }
    $access_token = $token_data['access_token'];

    // Prepare STK Push
    $timestamp = date('YmdHis');
    $password = base64_encode($config['shortcode'] . $config['passkey'] . $timestamp);

    $stk_data = [
        'BusinessShortCode' => $config['shortcode'],
        'Password' => $password,
        'Timestamp' => $timestamp,
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' => $amount,
        'PartyA' => $phone,
        'PartyB' => $config['shortcode'],
        'PhoneNumber' => $phone,
        'CallBackURL' => $config['callback_url'],
        'AccountReference' => "INV-" . $invoice,
        'TransactionDesc' => "Payment for Order #" . $order_id
    ];

    $stk_url = "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";
    $headers = [
        "Authorization: Bearer $access_token",
        "Content-Type: application/json"
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $stk_url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($stk_data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $stk_response = curl_exec($ch);
    curl_close($ch);

    $stk_result = json_decode($stk_response, true);

    if(isset($stk_result['ResponseCode']) && $stk_result['ResponseCode'] == '0') {
        return ['success' => true, 'message' => 'STK Push sent'];
    } else {
        $error = $stk_result['errorMessage'] ?? 'Unknown STK error';
        return ['success' => false, 'message' => $error];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Confirmation - Quantic Networks</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root { --primary-color: #6082ff; --secondary-color: #4a6cf7; }
        body { background-color: #f8f9fa; font-family: 'Segoe UI', sans-serif; }
        .payment-container { max-width: 600px; margin: 2rem auto; background: white; border-radius: 10px; box-shadow: 0 0 20px rgba(0,0,0,0.1); }
        .payment-header { background: var(--primary-color); color: white; padding: 1.5rem; text-align: center; }
        .payment-body { padding: 2rem; }
        .form-section { margin-bottom: 1.5rem; padding: 1.5rem; border: 1px solid #e9ecef; border-radius: 8px; }
        .mpesa-section { background-color: rgba(0, 179, 0, 0.05); border-left: 4px solid #00B300; }
        .cod-section { background-color: rgba(108, 117, 125, 0.05); border-left: 4px solid #6c757d; }
        .btn-mpesa { background-color: #00B300; border-color: #00B300; color: white; }
        .btn-mpesa:hover { background-color: #009900; border-color: #009900; color: white; }
        .payment-instructions { background-color: #f8f9fa; padding: 1rem; border-radius: 8px; margin-top: 1rem; font-size: 0.9rem; }
        .instruction-step { display: flex; margin-bottom: 0.5rem; }
        .step-number { background-color: var(--primary-color); color: white; width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 10px; font-size: 0.8rem; }
    </style>
</head>
<body>
    <div class="payment-container">
        <div class="payment-header">
            <h2><i class="bi bi-credit-card"></i> Confirm Payment</h2>
            <p class="mb-0">Complete your order #<?php echo $invoice_number; ?></p>
        </div>
        
        <div class="payment-body">
            <?php if(isset($error)): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            
            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
            <?php endif; ?>
            
            <div class="alert alert-info">
                <strong>Order Total:</strong> Kes <?php echo number_format($amount_due, 2); ?>
            </div>
            
            <form action="" method="post" id="paymentForm">
                <div class="form-section">
                    <h5>Select Payment Method</h5>
                    <div class="form-group">
                        <select name="payment_mode" id="paymentMode" class="form-select" required>
                            <option value="">-- Select Payment Method --</option>
                            <option value="mpesa">M-Pesa</option>
                            <option value="cod">Cash on Delivery</option>
                        </select>
                    </div>
                </div>
                
                <!-- M-Pesa Section -->
                <div class="form-section mpesa-section" id="mpesaSection" style="display: none;">
                    <h5><i class="bi bi-phone"></i> M-Pesa Payment</h5>
                    <div class="form-group">
                        <label for="phoneNumber" class="form-label">Safaricom Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phone_number" placeholder="07XX XXX XXX" value="<?php echo isset($_POST['phone_number']) ? $_POST['phone_number'] : ''; ?>">
                        <div class="form-text">Enter your M-Pesa registered phone number</div>
                    </div>
                    
                    <div class="payment-instructions">
                        <h6>How to pay with M-Pesa:</h6>
                        <div class="instruction-step">
                            <span class="step-number">1</span>
                            <span>Click "Pay with M-Pesa" button</span>
                        </div>
                        <div class="instruction-step">
                            <span class="step-number">2</span>
                            <span>Check your phone for STK Push prompt</span>
                        </div>
                        <div class="instruction-step">
                            <span class="step-number">3</span>
                            <span>Enter your M-Pesa PIN to complete payment</span>
                        </div>
                        <div class="instruction-step">
                            <span class="step-number">4</span>
                            <span>Wait for confirmation message</span>
                        </div>
                    </div>
                </div>
                
                <!-- Cash on Delivery Section -->
                <div class="form-section cod-section" id="codSection" style="display: none;">
                    <h5><i class="bi bi-cash"></i> Cash on Delivery</h5>
                    <p>Pay with cash when your order is delivered.</p>
                    <div class="alert alert-warning">
                        <i class="bi bi-info-circle"></i> Additional delivery charges may apply.
                    </div>
                </div>
                
                <div class="d-grid gap-2">
                    <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg" id="submitButton">
                        Confirm Payment
                    </button>
                    <a href="profile.php" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
            <!-- Manual M-Pesa Payment Instructions -->
            <div class="mt-4 p-3 border rounded bg-light">
                <h5 class="text-success"><i class="bi bi-wallet2"></i> Pay Manually via M-Pesa</h5>
                <p class="small mb-2">If you prefer to pay manually, follow these steps:</p>
                <ol class="mb-3">
                    <li>Go to your Safaricom <strong>M-Pesa</strong> menu.</li>
                    <li>Select <strong>Lipa na M-Pesa</strong>.</li>
                    <li>Choose <strong>Buy Goods and Services</strong>.</li>
                    <li>Enter our Till Number: <strong>4333384</strong>.</li>
                    <li>Enter the amount: <strong><?php echo number_format($amount_due, 2); ?> KES</strong>.</li>
                    <li>Enter your M-Pesa PIN and confirm.</li>
                </ol>
                <div class="alert alert-info">
                    <i class="bi bi-telephone"></i> For assistance, call us at 
                    <a href="tel:0738477554" class="fw-bold text-dark">0738477554</a>.
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const paymentMode = document.getElementById('paymentMode');
            const mpesaSection = document.getElementById('mpesaSection');
            const codSection = document.getElementById('codSection');
            const submitButton = document.getElementById('submitButton');
            
            paymentMode.addEventListener('change', function() {
                if (this.value === 'mpesa') {
                    mpesaSection.style.display = 'block';
                    codSection.style.display = 'none';
                    submitButton.innerHTML = '<i class="bi bi-phone"></i> Pay with M-Pesa';
                    submitButton.classList.remove('btn-primary');
                    submitButton.classList.add('btn-mpesa');
                } else if (this.value === 'cod') {
                    mpesaSection.style.display = 'none';
                    codSection.style.display = 'block';
                    submitButton.innerHTML = 'Confirm Cash on Delivery';
                    submitButton.classList.remove('btn-mpesa');
                    submitButton.classList.add('btn-primary');
                } else {
                    mpesaSection.style.display = 'none';
                    codSection.style.display = 'none';
                    submitButton.innerHTML = 'Confirm Payment';
                    submitButton.classList.remove('btn-mpesa');
                    submitButton.classList.add('btn-primary');
                }
            });
            
            // Form validation
            document.getElementById('paymentForm').addEventListener('submit', function(e) {
                if (paymentMode.value === 'mpesa') {
                    const phoneNumber = document.getElementById('phoneNumber').value;
                    const phoneRegex = /^(\+?254|0)?[7][0-9]{8}$/;
                    
                    if (!phoneRegex.test(phoneNumber)) {
                        e.preventDefault();
                        alert('Please enter a valid Safaricom phone number (e.g., 07XX XXX XXX or +2547XX XXX XXX)');
                        return false;
                    }
                }
            });
        });
    </script>
</body>
</html>