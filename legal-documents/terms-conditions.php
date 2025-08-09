<!doctype html>
<html lang="en">

<head>
    <title>Terms & Conditions | Quantic Shop</title>
    <!-- Bootstrap and styling from display_all_products.php -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="imgs/Quantic Networks SYMBOL.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .body{
            overflow-x: hidden;
        }
        /* Copy all styles from display_all_products.php */
        .policy-content {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            padding: 2rem;
            margin-top: 5rem;
            margin-bottom: 3rem;
        }
        .policy-content h2 {
            color: #6082ff;
            border-bottom: 2px solid #f1e42c;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }
        .policy-content h3 {
            color: #495057;
            margin-top: 1.5rem;
        }
            .footer {
                background-color: #6082ff;
                position: relative;
                z-index: 1;
                }

                .footer-link {
                color: #f1e42c;
                text-decoration: none;
                transition: color 0.3s ease;
                }

                .footer-link:hover {
                color: white;
                text-decoration: underline;
                }

                .footer-blob {
                position: absolute;
                top: -50px;
                right: -50px;
                width: 300px;
                height: 300px;
                background-color: #f1e42c;
                opacity: 0.15;
                border-radius: 50%;
                filter: blur(80px);
                animation: floatBlob 10s ease-in-out infinite;
                z-index: 0;
                }

                @keyframes floatBlob {
                    0%, 100% { transform: translateY(0); }
                    50% { transform: translateY(-20px); }
                }
    </style>
</head>

<body class="bg-light">
    <!-- Navigation Bar (same as display_all_products.php) -->
    

    <main class="container">
        <div class="policy-content">
            <h1 class="text-center mb-4">Terms & Conditions</h1>
            <p class="text-muted text-center mb-5">Last updated: <?php echo date('F j, Y'); ?></p>

            <h2>1. General Terms</h2>
            <p>By accessing and placing an order with Quantic Networks, you confirm that you are in agreement with and bound by the terms and conditions contained in this document.</p>

            <h3>1.1. Intellectual Property</h3>
            <p>All products and materials sold on this website are the intellectual property of Quantic Networks or our suppliers. You may not reproduce, distribute, or create derivative works from any content without express written permission.</p>

            <h3>1.2. Communications</h3>
            <p>By completing an order, you agree to receive emails related to your order and promotional materials. You can unsubscribe from promotional emails at any time.</p>

            <h2>2. Order Process</h2>
            <p>All orders are subject to product availability. If an item is not in stock, we will notify you and refund or credit your account for the unavailable product.</p>

            <h3>2.1. Pricing</h3>
            <p>Prices are subject to change without notice. We reserve the right to modify or discontinue products without notice. We shall not be liable for any modification, price change, suspension or discontinuance.</p>

            <h3>2.2. Payment</h3>
            <p>We accept various payment methods including M-Pesa, credit/debit cards, and bank transfers. Payment must be completed before order processing begins.</p>

            <h2>3. Shipping & Delivery</h2>
            <p>Delivery times are estimates only. Quantic Networks is not responsible for any delays caused by shipping companies or customs clearance processes.</p>

            <h2>4. Returns & Refunds</h2>
            <p>Please refer to our <a href="return-policy.php">Return Policy</a> for detailed information about returns and refunds.</p>

            <h2>5. Governing Law</h2>
            <p>These terms shall be governed by and construed in accordance with the laws of Kenya. Any disputes shall be subject to the exclusive jurisdiction of the Kenyan courts.</p>
        </div>
        <div class="text-center my-5">
            <a href="../shop.php" class="btn btn-lg btn-primary"><i class="bi bi-house-door-fill"></i> Home</a>
        </div>
        <footer class="footer mt-3 text-white pt-3 pb-3 position-relative">
            <!-- Background animation blob -->
            <div class="footer-blob"></div>

            <div class="container">
                <div class="row text-center text-md-start">
                <!-- About / Info -->
                <div class="col-md-3 mb-4">
                    <h5 class="text-uppercase fw-bold"><i class="bi bi-info-circle-fill"></i> About Us</h5>
                    <p>We offer the best deals on tech and networking equipment for individuals and businesses across Kenya.</p>
                </div>

                <!-- Policies -->
                <div class="col-md-3 mb-4">
                    <h5 class="text-uppercase fw-bold"><i class="bi bi-list-ol"></i> Policies</h5>
                    <ul class="list-unstyled">
                    <li><a href="terms-conditions.php" class="footer-link">Terms & Conditions</a></li>
                    <li><a href="privacy-policy.php" class="footer-link">Privacy Policy</a></li>
                    <li><a href="return-policy.php" class="footer-link">Return Policy</a></li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="col-md-3 mb-4">
                    <h5 class="text-uppercase fw-bold"><i class="bi bi-box-arrow-up-right"></i> Quick Links</h5>
                    <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">FAQs</a></li>
                    <li><a href="#" class="footer-link">Contact Us</a></li>
                    <li><a href="#" class="footer-link">Support</a></li>
                    </ul>
                </div>

                <!-- Contact / Location -->
                <div class="col-md-3 mb-4">
                    <h5 class="text-uppercase fw-bold"><i class="bi bi-map-fill"></i> Visit Us</h5>
                    <p>Nairobi Kasarani,<br>3rd Floor, Sunton Business Center</p>
                    <p><strong><i class="bi bi-hourglass-split"></i> Hours:</strong><br>Mon - Sat: 9:00AM - 6:00PM</p>
                    <p><i class="bi bi-telephone-fill"></i> +254 114 063049</p>
                </div>
                </div>

                <div class="text-center mt-4 border-top pt-3" style="border-color: rgba(255, 255, 255, 0.2);">
                <p class="mb-0">&copy; 2025 Quantic Networks Kenya. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </main>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>