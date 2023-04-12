<?php include("admin-header.php"); ?>
<!doctype html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style>
    .admin-img{
    width: 200px;
    object-fit: contain;
    }
</style>
</head>

<body>
    <!-- adminpage header -->
 <div class="bg-light text-center">
    <h2 class="small-header">Manage Shop Details</h2>
 </div>
 <!-- Admin menu -->
 <div class="row">
    <div class="col-md-12 bg p-3 d-flex align-items-center">
        <!-- Admin image/name section -->
        <div class="px-3">
            <a href="#"><img src="../imgs/team-1.jpg" alt=""class="admin-img p-2"></a>
            <p class="text-light text-center">Admin name</p>
        </div>
        <!-- Admin-control buttons -->
        <div class="button text-center mb-2">
            <button class="bg btn-outline-success"><a href="insert-products.php" class="nav-link text-light  my-2 mx-2">Insert Products</a></button>
            <button class="bg btn-outline-success"><a href="" class="nav-link text-light  my-2 mx-2">view Products</a></button>
            <button class="bg btn-outline-success"><a href="index.php?insert-category" class="nav-link text-light  my-2 mx-2">Insert Category</a></button>
            <button class="bg btn-outline-success"><a href="" class="nav-link text-light  my-2 mx-2">View category</a></button>
            <button class="bg btn-outline-success"><a href="index.php?insert-brand" class="nav-link text-light  my-2 mx-2">Insert brands</a></button>
            <button class="bg btn-outline-success"><a href="" class="nav-link text-light  my-2 mx-2">View Brands</a></button>
            <button class="bg btn-outline-success"><a href="" class="nav-link text-light  my-2 mx-2">All orders</a></button>
            <button class="bg btn-outline-success"><a href="" class="nav-link text-light  my-2 mx-2">All Payments</a></button>
            <button class="bg btn-outline-success mt-2"><a href="" class="nav-link text-light  my-2 mx-2">List Users</a></button>
            <button class="bg btn-outline-success mt-2"><a href="" class="nav-link text-light my-2 mx-2">Logout</a></button>
        </div>
    </div>
 </div>
 <div class="container my-5">
    <?php 
   //  getter function insert categories
    if(isset($_GET['insert-category'])){
        include('insert-category.php');
    }
   //  getter function insert brands
    if(isset($_GET['insert-brand'])){
      include('insert-brand.php');
  }
    ?>
 </div>
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>