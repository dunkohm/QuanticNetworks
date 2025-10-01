<?php 
include("includes/connect.php");
include("functions/main_function.php");
session_start();
cart();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Product Details | Quantic Shop</title>
    <meta name="description" content="Explore detailed specifications, features, and prices of networking equipment and tech accessories at Quantic Shop.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- OpenGraph for SEO & Social Sharing -->
    <meta property="og:title" content="Product Details - Quantic Shop">
    <meta property="og:description" content="Shop networking equipment & tech accessories.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://yourdomain.com/product-details">
    <meta property="og:image" content="imgs/Quantic Networks SYMBOL.png">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="imgs/Quantic Networks SYMBOL.png">

    <!-- External CSS & Bootstrap -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .product-header {
            background: linear-gradient(to right, #f8f9fa, #eef2ff);
            border-bottom: 1px solid #e9ecef;
            margin-bottom: 2rem;
            text-align: center;
        }
        .breadcrumb-item a { color: #6082ff; text-decoration: none; }
        .breadcrumb-item a:hover { color: #4a6cf7; }
        .navbar { background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.08); }
        .navbar-logo-symbol { height: 32px; width: auto; }
        aside.sidebar { background: #f8f9ff; padding: 1rem; border-radius: 0.5rem; }
        .sidebar h4 { font-size: 1.2rem; margin-bottom: 1rem; color: #333; }
        .search input { border-radius: 30px 0 0 30px; }
        .search .btn { border-radius: 0 30px 30px 0; }
        
    </style>
</head>

<body>
<!-- ✅ Navigation -->
<header>
<nav class="navbar navbar-expand-md navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="shop.php">
            <img src="imgs/Quantic Networks SYMBOL.png" alt="Quantic Networks Logo" class="navbar-logo-symbol me-2">
            <span class="fw-bold text-primary">Quantic Networks</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link active" href="shop.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="display_all_products.php">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="cart.php"><i class="bi bi-bag-fill"></i> <span class="badge bg-primary"><?php cart_items();?></span></a></li>
                <li class="nav-item"><span class="nav-link">Kes <span class="text-primary"><?php total_price();?> /=</span></span></li>
                <?php if(!isset($_SESSION['username'])): ?>
                    <li class="nav-item"><a class="nav-link">Welcome Guest</a></li>
                    <li class="nav-item"><a class="nav-link" href="./users/user_login.php"><i class="bi bi-person-fill"></i> Login</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link">Welcome <?= $_SESSION['username']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="./users/logout.php">Logout</a></li>
                <?php endif; ?>
                <li class="nav-item d-flex align-items-center ms-3">
                    <a href="#"><i class="bi bi-whatsapp fs-5 mx-2"></i></a>
                    <a href="#"><i class="bi bi-facebook fs-5 mx-2"></i></a>
                    <a href="#"><i class="bi bi-instagram fs-5 mx-2"></i></a>
                    <span class="fw-bold text-dark ms-2">(+254) 738 477 554</span>
                </li>
            </ul>
        </div>
    </div>
</nav>
</header>

<!-- ✅ Main Content -->
<main class="container mt-5 pt-5">
    <div class="product-header py-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="shop.php">Home</a></li>
                <li class="breadcrumb-item"><a href="display_all_products.php">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
            </ol>
        </nav>
        <h1 class="fw-bold text-primary">Product Details</h1>
        <p class="lead text-muted">All specifications and features at a glance</p>
    </div>

    <!-- 🔎 Search -->
    <form class="search mb-4" action="search_product.php" method="get">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search products..." name="search_data">
            <button class="btn btn-warning" type="submit" name="search_data_product">Search</button>
        </div>
    </form>

    <div class="row">
        <!-- Product Section -->
        <section class="col-md-9">
            <div class="row g-4">
                <?php 
                    view_product_details();
                    get_unique_Categories();
                    get_unique_Brands();
                ?>
            </div>
        </section>

        <!-- Sidebar -->
        <aside class="col-md-3 sidebar">
            <h4 class="bg-warning text-light p-2 rounded">Categories</h4>
            <ul class="list-unstyled">
                <?php getCategories(); ?>
            </ul>

            <h4 class="bg-warning text-light p-2 rounded mt-4">Brands</h4>
            <ul class="list-unstyled">
                <?php getBrands(); ?>
            </ul>
        </aside>
    </div>
</main>

<!-- ✅ Footer -->
<footer class="text-center py-4 mt-5 bg-primary">
    <p class="mb-0 text-light">&copy; <?= date("Y"); ?> Quantic Networks. All Rights Reserved.</p>
</footer>

<!-- ✅ Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
