<?php 
// include("shop-header.php");
include("includes/connect.php");
include("functions/main_function.php");
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Quantic Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="imgs/Quantic Networks SYMBOL.png">
    <!-- Bootstrap CSS -->
     <link rel="icon" type="image/png" href="imgs/Quantic Networks SYMBOL.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <style>
        .card-img-center{
                width: 100%;
                height: 200px;
                object-fit: contain;
                margin: 10px;  
              }
                /* Navigation Bar */
        .navbar {
            z-index: 1030; /* Ensure this is higher than other elements */
            background-color: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
            transition: all 0.3s ease;}  
        .navbar.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);}
        
        .navbar-brand {
            padding: 0;
            margin-right: 1rem;}

        .navbar-logo-symbol {
            height: 50px; /* Adjust based on your symbol's aspect ratio */
            width: auto;
            transition: all 0.3s ease;
        }

        .navbar-logo-text {
            color: #6082ff; /* Uses your blue color variable */
            font-weight: 700;
            font-size: 1.0rem;
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
            .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            overflow: hidden;
            padding: 4rem 2rem;
            background: url('imgs/stck.jpg') center center / cover no-repeat;
            z-index: 1;
          }

          .hero::before {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(96, 130, 255, 0.6); /* light overlay */
            z-index: 0;
          }

          .hero > * {
            position: relative;
            z-index: 1;
          }

          .hero h1 span {
            color: #f1e42c;
          }

          .blob {
            position: absolute;
            top: -100px;
            left: -100px;
            width: 600px;
            height: 600px;
            background-color: #f1e42c;
            border-radius: 50%;
            opacity: 0.2;
            filter: blur(120px);
            animation: pulse 6s ease-in-out infinite;
            z-index: 0;
          }

          @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
          }

          .floating-icons {
            display: flex;
            align-self: center;
            gap: 1rem;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 2rem;
            z-index: 1;
          }

          .floating-icons span {
            font-size: 2rem;
            animation: float 3s ease-in-out infinite;
          }

          .floating-icons span:nth-child(odd) {
            animation-delay: 0.5s;
          }

          @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
          }

          .btn-shop {
            background-color: #f1e42c;
            color: #000;
            border: none;
            padding: 0.75rem 1.5rem;
            font-size: 1.2rem;
            border-radius: 8px;
            transition: background-color 0.3s;
          }

          .btn-shop:hover {
            background-color: #ffe83a;
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
  <!-- Navigation Bar -->
  <div class="container-fluid mb-3">
    <nav class="navbar navbar-expand-md navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="shop.php">
                <img src="imgs/Quantic Networks SYMBOL.png" alt="Quantic Networks" class="navbar-logo-symbol me-2">
                <span class="navbar-logo-text">Quantic Networks</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="shop.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display_all_products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><p><i class="bi bi-bag-fill"></i><small class="text-primary"> <?php cart_items();?></small></p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display_all_products.php">Total Price : Kes <span class="text-primary"><?php total_price();?> /=</span></a>
                    </li>
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
                    <li class="nav-item d-flex align-items-bottom">
                        <a href="#"><i class="bi bi-whatsapp mx-3 fs-5"></i></a>
                        <a href="#"><i class="bi bi-facebook mx-3 fs-5"></i></a>
                        <a href="#"><i class="bi bi-instagram  mx-3 fs-5"></i></a> 
                        <a href="#" style="text-decoration: none;"><i class="bi bi-telephone-fill mx-3 fs-5"></i><strong>(+254) 114 063 049</strong></a>
                  
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  </div>
  <main>
   
    <div class="container container-fluid bg-light p-0">
      <div class="row">
        <div class="products-header text-center p-2 mt-5">
          <h2 class="navbar-logo-text mt-3" style="font-size: 2.0rem;">Products</h2>
          <p class="text-label">Here are some of the Products we offer...</p>
        </div>
       <!-- search area -->
        <form class="search" action="search_product.php" method="get">
          <div class="input-group mb-2 p-2 shadow">
            <input type="text" class="form-control border-primary border-3" placeholder="Search for a product or brand" name="search_data" aria-label="Search"
              aria-describedby="button-addon2">
            <!-- <button class="btn btn-outline-success" type="button" id="button-addon2">Search</button> -->
            <button type="submit" name="search_data_product" class="btn btn-warning border-warning border-3">
              <i class="bi bi-search me-2"></i> Search
            </button>
          </div>
        </form>
        <div class="col-md-10">
          <div class="row px-1">
            <!-- Calling function to fetch products from the database -->
            <?php 
          get_all_products();
           get_unique_Categories();
           get_unique_Brands();
            ?>
          
          </div>
        </div>

        <div class="col-md-2 p-0 mt-4" style="background-color: rgba(96, 130, 255, 0.6);">
          <!-- products to be displayed -->
          <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-warning">
              <a href="#" class="nav-link text-light">
                <h4>Categories</h4>
              </a>
            </li>
          <!-- Calling function to fetch Categories from db and display on side nav -->
            <?php 
            getCategories();
           
            ?>
          </ul>
          <!-- brands to be displayed -->
          <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-warning">
              <a href="#" class="nav-link text-light">
                <h4>Brands</h4>
              </a>
            </li>
            <!-- Calling function to fetch Brands from db and display on side nav -->
            <?php 
            getBrands();
            
            ?>
          </ul>
        </div>
      </div>
    </div>


  </main>
<footer class="footer mt-5 text-white pt-5 pb-4 position-relative">
  <!-- Background animation blob -->
  <div class="footer-blob"></div>

  <div class="container">
    <div class="row text-center text-md-start">
      <!-- About / Info -->
      <div class="col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold">About Us</h5>
        <p>We offer the best deals on tech and networking equipment for individuals and businesses across Kenya.</p>
      </div>

      <!-- Policies -->
      <div class="col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold">Policies</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="footer-link">Terms & Conditions</a></li>
          <li><a href="#" class="footer-link">Privacy Policy</a></li>
          <li><a href="#" class="footer-link">Return Policy</a></li>
        </ul>
      </div>

      <!-- Quick Links -->
      <div class="col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="footer-link">FAQs</a></li>
          <li><a href="#" class="footer-link">Contact Us</a></li>
          <li><a href="#" class="footer-link">Support</a></li>
        </ul>
      </div>

      <!-- Contact / Location -->
      <div class="col-md-3 mb-4">
        <h5 class="text-uppercase fw-bold">Visit Us</h5>
        <p>Nairobi Kasarani,<br>3rd Floor, Sunton Business Center</p>
        <p><strong>Hours:</strong><br>Mon - Sat: 9:00AM - 6:00PM</p>
        <p><i class="bi bi-telephone-fill"></i> +254 114 063049</p>
      </div>
    </div>

    <div class="text-center mt-4 border-top pt-3" style="border-color: rgba(255, 255, 255, 0.2);">
      <p class="mb-0">&copy; 2025 Quantic Networks Kenya. All rights reserved.</p>
    </div>
  </div>
</footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>