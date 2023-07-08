<?php 
// include("shop-header.php");
include("includes/connect.php");
include("functions/main_function.php");

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

    <!-- Bootstrap CSS -->
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
        </style>
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
                    <a href="display_all_products.php" class="nav-link mx-2 text-white fs-5">Total Price : Kes <span class="text-danger"><?php total_price();?> /=</span> </a>
                </li>
                
            </ul>
            <div class="d-flex justify-content-evenly ">
                <a href="#"><i class="bi bi-facebook text-white fs-5 mx-3"></i></a>
                <a href="#"><i class="bi bi-instagram text-white fs-5 mx-3"></i></a>
                <a href="cart.php"><h4><i class="bi bi-cart text-white mx-2"><sup class="text-label text-danger"><?php cart_items();?></sup></i></h4></a>
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
  <main>
    <div class="container container-fluid">
      <div class="row bg text-light text-center ">
        <div class="col-md-6">
          <h3 class="mt-4">Welcome to Quantic Networks shop</h3>
          <h1 class="text-danger small-header">Discounted prices</h1>
          <p class="text-label text-light">Save Time and Money with our *free delivery* for orders more than <br>Ksh/=
            10,000.00</p>
          <a href="#" class="btn btn-outline-success m-3">Shop for Networking Equipment</a>
        </div>
        <div class="col-md-6">
          <img src="imgs/Shop.jpg" class="w-50 h-90 m-3">
        </div>
      </div>
    </div>
    <div class="container container-fluid bg-light p-0">
      <div class="row">
        <div class="products-header text-center p-2">
          <h2 class="small-header">Products</h2>
          <p class="text-label">Here are some of the Products we offer...</p>
        </div>
        <!-- search area -->
        <form class="search" action="search_product.php" method="get">
          <div class="input-group mb-2 p-2">
            <input type="text" class="form-control" placeholder="Search" name="search_data" aria-label="Search"
              aria-describedby="button-addon2">
            <!-- <button class="btn btn-outline-success" type="button" id="button-addon2">Search</button> -->
            <input type="submit" value="search" class="btn btn-outline-success" name="search_data_product" >
          </div>
        </form>
        <div class="col-md-10">
          <div class="row px-1">
            <!-- Calling function to fetch products from the database -->
            <?php 
           getProducts();
           get_unique_Categories();
           get_unique_Brands();
           // $ip = getIPAddress();  
           //   echo 'User Real IP Address - '.$ip;

            ?>
          
          </div>
        </div>

        <div class="col-md-2 bg p-0">
          <!-- products to be displayed -->
          <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-success">
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
            <li class="nav-item bg-success">
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