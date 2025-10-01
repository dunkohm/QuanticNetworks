<?php 
include("includes/connect.php");
include("functions/main_function.php");
cart();
?>
<!doctype html>
<html lang="en">
<head>
  <title>Quantic Shop - Products</title>
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

    /* Header Section */
    .products-header {
      background: linear-gradient(135deg, #6082ff, #4a6cf7);
      color: white;
      padding: 3rem 1rem;
      margin-bottom: 2rem;
      text-align: center;
    }
    .products-header h1 {
      font-size: 2.4rem;
      font-weight: 700;
    }
    .products-header p {
      font-size: 1.1rem;
      opacity: 0.9;
    }

    /* Search Bar */
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
      transition: transform 0.2s, box-shadow 0.2s;
      background: #fff;
      box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }
    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 18px rgba(0,0,0,0.1);
    }
    .product-card img {
      object-fit: cover;
      height: 200px;
      width: 100%;
    }
    .product-card .card-body {
      text-align: center;
    }
    .product-card h5 {
      font-size: 1.1rem;
      font-weight: 600;
      color: #212529;
    }
    .product-card .price {
      color: #6082ff;
      font-weight: 700;
      font-size: 1rem;
    }

    /* Sidebar Styling */
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

    /* Sidebar Headings */
    .sidebar .nav-item.bg-warning .nav-link {
      font-weight: bold;
      color: #212529 !important;
      background-color: #f1e42c !important;
      border-radius: 0;
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

  </style>
</head>

<body>
  <!-- Navigation Bar -->
  <div class="container-fluid mb-3">
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="shop.php">
                <img src="imgs/Quantic Networks SYMBOL.png" alt="Quantic Networks" class="me-2" style="height: 40px;">
                <span class="fw-bold text-primary">Quantic Networks</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="shop.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display_all_products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php">
                          <i class="bi bi-bag-fill"></i>
                          <small class="text-primary"><?php cart_items();?></small>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Total: Kes <span class="text-primary"><?php total_price();?> /=</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./users/user_login.php"><i class="bi bi-person-fill"></i> Login</a>
                    </li>
                    <li class="nav-item d-flex align-items-center ms-3">
                        <a href="#"><i class="bi bi-whatsapp mx-2 fs-5"></i></a>
                        <a href="#"><i class="bi bi-facebook mx-2 fs-5"></i></a>
                        <a href="#"><i class="bi bi-instagram mx-2 fs-5"></i></a> 
                        <a href="#" class="text-dark text-decoration-none">
                          <i class="bi bi-telephone-fill mx-2 fs-5"></i><strong>(+254) 114 063 049</strong>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  </div>

  <main>
    <!-- Page Header -->
    <div class="products-header mt-5">
      <h1>Products</h1>
      <p>Search results from our catalog</p>
    </div>

    <div class="container-fluid">
      <div class="row">
        <!-- Search Bar -->
        <div class="col-12">
          <form class="search" action="search_product.php" method="get">
            <div class="input-group mb-4 shadow-sm">
              <input type="text" class="form-control" placeholder="Search for a product or brand" 
                     name="search_data" aria-label="Search">
              <button type="submit" name="search_data_product" class="btn">
                <i class="bi bi-search me-2"></i> Search
              </button>
            </div>
          </form>
        </div>

        <!-- Products Grid -->
        <div class="col-md-10">
          <div class="row g-3 px-2">
            <?php 
              searchProducts();
              get_unique_Categories();
              get_unique_Brands();
            ?>
          </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-2 sidebar p-0 bg-white shadow-sm">
          <!-- Categories -->
          <ul class="navbar-nav text-center">
            <li class="nav-item bg-warning">
              <span class="nav-link">Categories</span>
            </li>
            <?php getCategories(); ?>
          </ul>

          <!-- Brands -->
          <ul class="navbar-nav text-center mt-3">
            <li class="nav-item bg-warning">
              <span class="nav-link">Brands</span>
            </li>
            <?php getBrands(); ?>
          </ul>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
<footer class="footer mt-5 text-white pt-5 pb-4 position-relative">
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
          <li><a href="legal-documents/terms-conditions.php" class="footer-link">Terms & Conditions</a></li>
          <li><a href="#" class="footer-link">Privacy Policy</a></li>
          <li><a href="#" class="footer-link">Return Policy</a></li>
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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
