<?php 
// include("shop-header.php");
include("includes/connect.php");
include("functions/main_function.php");
session_start();
?>
<!doctype html>
<html lang="en">
<!-- calling the cart function -->
<?php
  cart();
  ?>
<head>
    <title>Quantic Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="imgs/Quantic Networks SYMBOL.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
          .product-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            margin-bottom: 30px;
        }
        
        .breadcrumb {
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
        }
        
        .breadcrumb-item a {
            color: #6082ff;
            transition: color 0.2s;
        }
        
        .breadcrumb-item a:hover {
            color: #4a6cf7;
            text-decoration: none;
        }
        
        .breadcrumb-item.active {
            color: #6c757d;
        }
                /* Navbar Styles (keep your existing navbar styles) */
        .navbar {
            z-index: 1030;
            background-color: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-logo-text {
            color: #6082ff;
            font-weight: 700;
        }
        .navbar-logo-symbol {
                        height: 32px; /* Adjust based on your symbol's aspect ratio */
                        width: auto;
                        transition: all 0.3s ease;
                    }
        
    </style>
</head>

<body>
  <!-- Responsive Navigation Bar -->
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
                          <a href="#" style="text-decoration: none;"><strong>(+254) 114 063 049</strong></a>
                    
                      </li>
                  </ul>
              </div>
          </div>
    </nav>
  <main>
    <div class="container container-fluid">
    <div class="container container-fluid bg-light p-0">
      <div class="row">
        <div class="product-header text-center py-4">
            <div class="container">
                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                    <ol class="breadcrumb bg-transparent mb-0">
                        <li class="breadcrumb-item"><a href="shop.php" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="display_all_products.php" class="text-decoration-none">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold text-primary mt-3">Product Details</h1>
                <p class="lead text-muted">Explore all the specifications and features of this product</p>
            </div>
        </div>
        <!-- search area -->
        <form class="search" action="search_product.php" method="get">
          <div class="input-group mb-2 p-2">
            <input type="text" class="form-control" placeholder="Search" name="search_data" aria-label="Search"
              aria-describedby="button-addon2">
            <!-- <button class="btn btn-outline-success" type="button" id="button-addon2">Search</button> -->
            <input type="submit" value="search" class="btn btn-warning" name="search_data_product" >
          </div>
        </form>
        <div class="col-md-10">
          <div class="row px-1">            
            <!-- Calling function to fetch products from the database -->
            <?php 
            view_product_details();
            get_unique_Categories();
            get_unique_Brands();
            ?>
          
          </div>
        </div>

        <div class="col-md-2 bg p-0" style="background-color: rgba(96, 130, 255, 0.6);">
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
  <footer>
    <!-- place footer here -->
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