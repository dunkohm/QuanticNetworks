<?php 
// include("shop-header.php");
include('../includes/connect.php');
// include('../functions/main_function.php');

?>
<!doctype html>
<html lang="en">
<!-- calling the cart function -->

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
</head>

<body>
<!-- Responsive Navigation Bar -->
    <nav class="navbar navbar-expand-md bg mb-4">
        <a href="shop.php" class="navbar-brand  fs-3 text-white p-2">Quantic <span class="text-danger">Networks</span></a>
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
            <i class='bx bx-menu text-white bx-md'></i>
        </button>
        <div class="collapse navbar-collapse" id="btn">
            
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