<?php
include('../includes/connect.php');
include('../functions/main_function.php');
@session_start();

// Check if user is logged in first
if(!isset($_SESSION['username'])) {
    header("Location: user_login.php");
    exit();
}
// Get user_id from session instead of IP address
$user_id = $_SESSION['user_id']; // Make sure you store user_id in session during login
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../imgs/Quantic Networks SYMBOL.png">
    <title>Billing-user </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
                /* Navigation Bar */
                .navbar {
                    z-index: 1030; /* Ensure this is higher than other elements */
                    background-color: white;
                    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
                    padding: 1rem 0;
                    transition: all 0.3s ease;
                }
                
                .navbar.scrolled {
                    padding: 0.5rem 0;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                }
                
                .navbar-brand {
                    padding: 0;
                    margin-right: 1rem;
                }

                .navbar-logo-symbol {
                    height: 32px; /* Adjust based on your symbol's aspect ratio */
                    width: auto;
                    transition: all 0.3s ease;
                }

                .navbar-logo-text {
                    color: #6082ff; /* Uses your blue color variable */
                    font-weight: 700;
                    font-size: 1.25rem;
                    letter-spacing: 0.5px;
                    transition: all 0.3s ease;
                }

                .navbar-brand:hover .navbar-logo-symbol {
                    transform: rotate(10deg) scale(1.1);
                }

                .navbar-brand:hover .navbar-logo-text {
                    color: var(--quantic-secondary); /* Lighter blue on hover */
                }

                /* Mobile adjustments */
                @media (max-width: 991.98px) {
                    .navbar-logo-symbol {
                        height: 28px;
                    }
                    
                    .navbar-logo-text {
                        font-size: 1.1rem;
                    }
                }
                .nav-link {
                    color: #495057;
                    font-weight: 500;
                    margin: 0 0.5rem;
                    padding: 0.5rem 1rem;
                    position: relative;
                    transition: all 0.3s ease;
                }
                
                .nav-link:before {
                    content: '';
                    position: absolute;
                    width: 0;
                    height: 2px;
                    bottom: 0;
                    left: 0;
                    background-color: var(--quantic-primary);
                    transition: all 0.3s ease;
                }
                
                .nav-link:hover:before,
                .nav-link.active:before {
                    width: 100%;
                }
                
                .nav-link:hover,
                .nav-link.active {
                    color: var(--quantic-primary);
                }
                
                .navbar-toggler {
                    border: none;
                    padding: 0.5rem;
                }
                
                .navbar-toggler:focus {
                    box-shadow: none;
                }
                
                @media (max-width: 991.98px) {
                    .navbar-collapse {
                        position: absolute;
                        top: 100%;
                        left: 0;
                        right: 0;
                        z-index: 1050;
                        background-color: white;
                        padding: 1rem;
                        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
                    }
                    
                    .nav-link {
                        margin: 0.5rem 0;
                        padding: 0.75rem 1.5rem;
                    }
                    
                    .nav-link:before {
                        display: none;
                    }
                }
                .payment-steps {
                    border: 1px solid #e0e0e0;
                }
                .payment-steps ol li {
                    padding: 8px 0;
                    text-align: left;
                }
                .btn-success {
                    background-color: #00B300;
                    border-color: #00B300;
                }
        </style>
</head>
<body class="bg-light">
    <!-- php code to access user_id -->
    <?php 
       


    
    ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                    <div class="container">
                        <a class="navbar-brand d-flex align-items-center" href="#">
                            <img src="../imgs/Quantic Networks SYMBOL.png" alt="Quantic Networks" class="navbar-logo-symbol me-2">
                            <span class="navbar-logo-text">Quantic Networks</span>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <?php
                                    if(!isset($_SESSION['username'])){
                                        echo " <li class='nav-item'>
                                        <a class='nav-link' href='#'></i> Welcome Guest</a>
                                    </li>";
                                    }else{
                                        echo " <li class='nav-item'>
                                        <a class='nav-link' href='#'></i> Welcome ".$_SESSION['username']."</a>
                                    </li>"; }

                                    if(!isset($_SESSION['username'])){
                                        echo " <li class='nav-item'>
                                        <a class='nav-link' href='./users/user_login.php'><i class='bi bi-person-fill'></i> Login</a>
                                    </li>";
                                    }else{
                                        echo " <li class='nav-item'>
                                        <a class='nav-link' href='logout.php'>Logout</a>
                                    </li>";
                                    }
                                    ?>  
                                <li class="nav-item">
                                    <a class="nav-link active" href="../shop.php">Home</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact Us (+245) 114 063 049</a>
                                </li>
                            </ul>
                        </div>
                    </div>
    </nav>
    <div class="container mt-5">
        <div class="row mt-5 d-flex justify-content-center align-items-center">
            <div class="col-md-12 text-center text-primary mt-5">
                <h2>Payment Options</h2>
            </div>
            <div class="col-md-6 border border-1 text-center shadow mt-5 mb-5" style="background-color:#fff;">
    <img src="../imgs/mpesalogo.png" alt="" class="img-fluid" style="height: 80px;">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-success text-center mt-3">Lipa Na M-Pesa</h2>
            <div class="payment-steps bg-light p-3 rounded mx-auto mb-3" style="max-width: 500px;">
                <h5 class="text-center text-primary mb-3">Simple & Secure Payment</h5>
                <ol class="list-unstyled">
                    <li class="mb-2 d-flex align-items-start">
                        <span class="badge bg-primary rounded-circle me-2">1</span>
                        <span>Enter your Safaricom number</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <span class="badge bg-primary rounded-circle me-2">2</span>
                        <span>Click "Pay Now" button</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <span class="badge bg-primary rounded-circle me-2">3</span>
                        <span>Check your phone for STK Push</span>
                    </li>
                    <li class="mb-2 d-flex align-items-start">
                        <span class="badge bg-primary rounded-circle me-2">4</span>
                        <span>Enter your M-Pesa PIN when prompted</span>
                    </li>
                    <li class="d-flex align-items-start">
                        <span class="badge bg-primary rounded-circle me-2">5</span>
                        <span>You'll receive payment confirmation via SMS</span>
                    </li>
                </ol>
                
                <div class="payment-form mt-4">
                    <form action="process_payment.php" method="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="phone" class="form-label"><strong>Safaricom Number</strong></label>
                            <input type="tel" class="form-control text-center" id="phone" 
                                name="phone" placeholder="07XXXXXXXX" pattern="[0-9]{9,12}" required>
                            <div class="invalid-feedback">
                                Please enter a valid Safaricom number
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                        <button type="submit" class="btn btn-success btn-lg w-100 py-2">
                            <i class="bi bi-phone"></i> Pay Now via M-Pesa
                        </button>
                    </form>
                </div>
                
                <div class="payment-info mt-3 small text-muted">
                    <p class="mb-1">• Standard M-Pesa charges apply</p>
                    <p class="mb-1">• Payment processed instantly</p>
                    <p>• Need help? Call (+254) 114 063 049</p>
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="col-md-6 text-center">
                <a href="order.php?user_id=<?php echo $user_id ?>" class="h2 text-decoration-none">Pay Offline</a>
            </div>
        </div>
    </div>
        <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script>
        // Form validation
        (function () {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
</body>
</html>
