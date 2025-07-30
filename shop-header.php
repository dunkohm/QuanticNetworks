<?php 
include("functions/main_function.php");
include("includes/connect.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Responsive Navigation Bar -->
    <nav class="navbar navbar-expand-md bg mb-4">
        <a href="shop.php" class="navbar-brand  fs-3 text-white p-2">Quantic <span class="text-danger">Networks</span></a>
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
            <i class='bx bx-menu text-white bx-md'></i>
        </button>
        <div class="collapse navbar-collapse" id="btn">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a href="shop.php" class="nav-link mx-2 text-white fs-5">Home</a>
                </li>
                <li class="nav-item">
                    <a href="display_all_products.php" class="nav-link mx-2 text-white fs-5">Products</a>
                </li>
                <li class="nav-item">
                    <a href="display_all_products.php" class="nav-link mx-2 text-white fs-5">Total Price : Kes <span class="text-danger">0</span> </a>
                </li>
                
            </ul>
            <div class="d-flex justify-content-evenly ">
                <a href="#"><i class="bi bi-facebook text-white fs-5 mx-3"></i></a>
                <a href="#"><i class="bi bi-instagram text-white fs-5 mx-3"></i></a>
                <a href="#"><h4><i class="bi bi-cart text-white mx-2"><sup class="text-label text-danger"><?php cart_items();?></sup></i></h4></a>
            </div>
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a href="#" class="nav-link mx-2 text-white fs-5">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link mx-2 text-white fs-5">Login</a>
                </li>
                
            </ul>
        </div>
    </nav>
</body>
</html>
    <!-- //Responsive Navigation Bar -->