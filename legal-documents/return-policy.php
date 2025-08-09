<!doctype html>
<html lang="en">

<head>
    <title>Return Policy | Quantic Shop</title>
    <!-- Bootstrap and styling from display_all_products.php -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="imgs/Quantic Networks SYMBOL.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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
        .policy-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1rem 0;
        }
        .policy-table th, .policy-table td {
            border: 1px solid #dee2e6;
            padding: 0.75rem;
            text-align: left;
        }
        .policy-table th {
            background-color: #f8f9fa;
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
    <main class="container">
        <div class="policy-content">
            <h1 class="text-center mb-4">Return & Refund Policy</h1>
            <p class="text-muted text-center mb-5">Last updated: <?php echo date('F j, Y'); ?></p>

            <h2>1. Returns</h2>
            <p>We accept returns within 14 days of delivery for most products. To be eligible for a return:</p>
            <ul>
                <li>The item must be unused and in the same condition as received</li>
                <li>The item must be in its original packaging</li>
                <li>You must provide proof of purchase</li>
            </ul>

            <h3>1.1. Non-Returnable Items</h3>
            <p>The following items cannot be returned:</p>
            <ul>
                <li>Software licenses and digital downloads</li>
                <li>Personalized or custom-made products</li>
                <li>Products marked as "final sale"</li>
                <li>Opened consumables (toners, inks, etc.)</li>
            </ul>

            <h2>2. Return Process</h2>
            <p>To initiate a return:</p>
            <ol>
                <li>Contact our customer service at <a href="mailto:returns@quanticnetworks.co.ke">returns@quanticnetworks.co.ke</a> within 14 days of delivery</li>
                <li>Provide your order number and reason for return</li>
                <li>We will provide return instructions and authorization</li>
                <li>Package the item securely with all original accessories</li>
                <li>Ship the item back to us using a trackable method</li>
            </ol>

            <h2>3. Refunds</h2>
            <p>Once we receive and inspect your return, we will notify you of the approval or rejection of your refund. If approved:</p>
            <ul>
                <li>Refunds will be processed to the original payment method within 7 business days</li>
                <li>Shipping costs are non-refundable unless the return is due to our error</li>
                <li>You will be responsible for return shipping costs unless the item is defective or incorrect</li>
            </ul>

            <h2>4. Exchanges</h2>
            <p>We only replace items if they are defective or damaged. If you need to exchange for the same item, contact us at <a href="mailto:support@quanticnetworks.co.ke">support@quanticnetworks.co.ke</a>.</p>

            <h2>5. Damaged or Defective Items</h2>
            <p>If you receive a damaged or defective item, contact us immediately. We may require photos of the damage. We will arrange for replacement or refund at no additional cost to you.</p>

            <h2>6. Return Shipping</h2>
            <p>You will be responsible for return shipping costs unless the return is due to our error. We recommend using a trackable shipping service and purchasing shipping insurance.</p>

            <h2>7. Late or Missing Refunds</h2>
            <p>If you haven't received your refund within 10 business days after approval:</p>
            <ol>
                <li>Check your bank account again</li>
                <li>Contact your credit card company (processing times vary)</li>
                <li>Contact your bank</li>
                <li>If still unresolved, contact us at <a href="mailto:support@quanticnetworks.co.ke">support@quanticnetworks.co.ke</a></li>
            </ol>

            <h2>8. Contact Us</h2>
            <p>For questions about our return policy, contact us at <a href="mailto:returns@quanticnetworks.co.ke">returns@quanticnetworks.co.ke</a> or call (+254) 114 063 049.</p>
        </div>
        <div class="text-center my-5">
            <a href="../shop.php" class="btn btn-lg btn-primary"><i class="bi bi-house-door-fill"></i> Home</a>
        </div>
        <!-- footer -->
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