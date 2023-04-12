<?php 
include("shop-header.php");
include("includes/connect.php");
include("functions/main_function.php");
?>
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

</head>

<body>
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