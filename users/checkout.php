<?php 
    // include("shop-header.php");
    include('../includes/connect.php');
    // include('../functions/main_function.php');
session_start();
?>
<!doctype html>
<html lang="en">
    <!-- calling the cart function -->
    <head>
            <title>Quantic Shop</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="icon" type="image/png" href="imgs/Quantic Networks SYMBOL.png">
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
            </style>
    </head>

    <body>
        <!-- Responsive Navigation Bar -->
        <!-- Navigation Bar -->
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
                                    <a class='nav-link' href='./users/logout.php'>Logout</a>
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
        <main>
                <div class="container container-fluid">
                    <div class="col-md-12">
                    <div class="row px-1">
                    <?php
                    if(!isset($_SESSION['username'])){
                        include('user_login.php');
                    }
                    else{
                        include('payment.php');
                    }
                    ?>    
                    </div>
                    </div>
                    </ul>
                    </ul>
                    </div>
                </div>
                </div>
        </main>
        <footer>

        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    </body>

</html>