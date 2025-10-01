<?php 
  include("includes/connect.php");
  include("functions/main_function.php");
  session_start();
  cart();
?>
<!doctype html>
<html lang="en">
<head>
    <title>Quantic Shop - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="imgs/Quantic Networks SYMBOL.png">

    <!-- Bootstrap + Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
        background-color: #f8f9fa;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      }

      /* Navbar */
      .navbar {
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
      }
      .navbar-logo-symbol {
        height: 40px;
      }
      .navbar-logo-text {
        font-weight: 700;
        color: #6082ff;
      }
      .nav-link {
        font-weight: 500;
        color: #212529;
        transition: 0.2s;
      }
      .nav-link:hover {
        color: #6082ff;
      }

      /* Hero Section */
      .hero {
        position: relative;
        min-height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: url('imgs/stck.jpg') center center / cover no-repeat;
        color: white;
      }
      .hero::before {
        content: "";
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
        background: rgba(96,130,255,0.65);
      }
      .hero h1 {
        font-weight: 700;
        font-size: 2.5rem;
      }
      .hero h1 span {
        color: #f1e42c;
      }
      .btn-shop {
        background-color: #f1e42c;
        border: none;
        padding: 0.8rem 1.5rem;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 8px;
        transition: 0.3s;
      }
      .btn-shop:hover {
        background-color: #ffe83a;
      }

      /* Section Header */
      .products-header {
        background: linear-gradient(135deg, #6082ff, #4a6cf7);
        color: #fff;
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        border-radius: 12px;
      }
      .products-header h2 {
        font-size: 2rem;
        font-weight: 700;
      }

      /* Search */
      .search .form-control {
        border-radius: 8px 0 0 8px;
        border: 2px solid #6082ff;
        box-shadow: none;
      }
      .search button {
        border-radius: 0 8px 8px 0;
        background-color: #f1e42c;
        border: 2px solid #f1e42c;
        font-weight: 600;
        transition: 0.3s;
      }
      .search button:hover {
        background-color: #ffe83a;
      }

      /* Product Cards */
      .product-card {
        border: none;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        transition: transform 0.2s, box-shadow 0.2s;
      }
      .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      }
      .product-card img {
        height: 200px;
        object-fit: cover;
        width: 100%;
      }
      .product-card .card-body {
        text-align: center;
      }
      .product-card h5 {
        font-size: 1.05rem;
        font-weight: 600;
      }
      .product-card .price {
        color: #6082ff;
        font-weight: 700;
      }

      /* Sidebar */
      .sidebar ul li a {
        color: #212529;
        text-decoration: none;
        display: block;
        padding: 0.5rem 0.75rem;
        border-radius: 6px;
        transition: background 0.2s, color 0.2s;
      }
      .sidebar ul li a:hover {
        background-color: #6082ff;
        color: #fff;
      }
      .sidebar .nav-item.bg-warning .nav-link {
        font-weight: 700;
        background-color: #f1e42c !important;
        color: #212529 !important;
      }

      /* Footer */
      .footer {
        background-color: #6082ff;
        color: white;
      }
      .footer-link {
        color: #f1e42c;
        text-decoration: none;
      }
      .footer-link:hover {
        color: #fff;
        text-decoration: underline;
      }
    </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="shop.php">
        <img src="imgs/Quantic Networks SYMBOL.png" class="navbar-logo-symbol me-2">
        <span class="navbar-logo-text">Quantic Networks</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item"><a class="nav-link active" href="shop.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="display_all_products.php">Products</a></li>
          <li class="nav-item"><a class="nav-link" href="cart.php"><i class="bi bi-bag-fill"></i> <small class="text-primary"><?php cart_items();?></small></a></li>
          <li class="nav-item"><a class="nav-link">Total: Kes <span class="text-primary"><?php total_price();?> /=</span></a></li>
          <?php
            if(!isset($_SESSION['username'])){
              echo "<li class='nav-item'><a class='nav-link'>Welcome Guest</a></li>";
              echo "<li class='nav-item'><a class='nav-link' href='users/user_registration.php'>Register</a></li>";
              echo "<li class='nav-item'><a class='nav-link' href='./users/user_login.php'><i class='bi bi-person-fill'></i> Login</a></li>";
            } else {
              echo "<li class='nav-item'><a class='nav-link'>Welcome ".$_SESSION['username']."</a></li>";
              echo "<li class='nav-item'><a class='nav-link' href='users/profile.php'>My Account</a></li>";
              echo "<li class='nav-item'><a class='nav-link' href='./users/logout.php'><i class='bi bi-box-arrow-right text-danger'></i> Logout</a></li>";
            }
          ?>
          <li class="nav-item d-flex align-items-center ms-3">
            <a href="#" class="text-dark text-decoration-none"><i class="bi bi-telephone-fill me-2"></i><strong>(+254) 738 477 554</strong></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero d-flex align-items-center justify-content-center">
    <div class="container position-relative z-2 text-white">
      <h1 class="display-5 fw-bold">Your One-Stop Shop for <br><span>Tech & Networking Gear</span></h1>
      <p class="lead mt-3">Explore computers, CCTV, routers, and more — for both home and business.</p>
      <a href="display_all_products.php" class="btn btn-shop mt-3">Shop Now <i class="bi bi-arrow-right ms-2"></i></a>
    </div>
  </section>

  <!-- Products Section -->
  <div class="container my-5">
    <div class="products-header text-center">
      <h2>Featured Products</h2>
      <p>Here are some of the products we offer...</p>
    </div>

    <div class="row">
      <!-- Search -->
      <div class="col-12">
        <form class="search" action="search_product.php" method="get">
          <div class="input-group mb-4 shadow-sm">
            <input type="text" class="form-control" name="search_data" placeholder="Search for a product or brand">
            <button type="submit" name="search_data_product" class="btn"><i class="bi bi-search me-2"></i>Search</button>
          </div>
        </form>
      </div>

      <!-- Products Grid -->
      <div class="col-md-10">
        <div class="row g-3 px-2">
          <?php 
            getProducts();
            get_unique_Categories();
            get_unique_Brands();
          ?>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-md-2 sidebar bg-white shadow-sm p-2">
        <ul class="navbar-nav text-center mb-3">
          <li class="nav-item bg-warning"><span class="nav-link">Categories</span></li>
          <?php getCategories(); ?>
        </ul>
        <ul class="navbar-nav text-center">
          <li class="nav-item bg-warning"><span class="nav-link">Brands</span></li>
          <?php getBrands(); ?>
        </ul>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer pt-4 pb-3">
    <div class="container text-center">
      <p class="mb-1">&copy; 2025 Quantic Networks Kenya. All rights reserved.</p>
      <p>
        <a href="legal-documents/terms-conditions.php" class="footer-link">Terms</a> | 
        <a href="legal-documents/privacy-policy.php" class="footer-link">Privacy</a> | 
        <a href="legal-documents/return-policy.php" class="footer-link">Returns</a>
      </p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
