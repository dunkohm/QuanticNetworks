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
          .cart-img{
                   width: 80px;
                   height: 80px;
                   object-fit: contain;
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
    
    <div class="container container-fluid bg-light p-0">
      <div class="row">
        <div class="products-header text-center p-2">
          <h2 class="small-header">Products</h2>
          <p class="text-label">Here are some of the Products we offer...</p>
        </div>
      </div>
         <div class="container">
          <div class="row">
            <form action="" method="post">
            <table class="table table-bordered text-center">
              <thead>
                <tr>
                  <th>Product title</th>
                  <th>Product Image</th>
                  <th>Quantity</th>
                  <th>Total Price</th>
                  <th>Remove</th>
                  <th colspan="2">Operations</th>
                </tr>
              </thead>
              <tbody>
                <!-- PHP code to display dynamic cart items from the database -->
                <?php
                global $con;
     $total_price=0;
      $get_ip = getIPAddress();//calling the function to get user Ip address and storing it in get_ip
      $cart_query= "select * from `cart_details` where ip_address='$get_ip'";
      $result_query=mysqli_query($con,$cart_query);
      while($row=mysqli_fetch_array($result_query)){
        $product_id=$row['product_id'];
        $select_products="select * from `products` where product_id='$product_id'";
        $result_products=mysqli_query($con,$select_products);
        while($row_product_price=mysqli_fetch_array($result_products)){
          $product_price=array($row_product_price['product_price']);
          $price_table=$row_product_price['product_price'];
          $product_title=$row_product_price['product_title'];
          $product_image1=$row_product_price['product_image1'];
          $product_values=array_sum($product_price);
          $total_price+=$product_values;
                ?>
                <tr>
                  <td><?php echo $product_title ; ?></td>
                  <td> <img src="adminControl/product-images/<?php echo $product_image1 ; ?>" class="cart-img"> </td>
                  <td> <input type="text" name="" class="form-input w-50"> </td>
                  <td><?php echo $price_table ; ?>/=</td>
                  <td> <input type="checkbox" name="qty" id=""> </td>
                  <!-- Code to update quantity -->
                  <?php
                  $get_ip = getIPAddress();
                  if(isset($_POST['update_cart'])){
                    $quantity=$_POST['qty'];
                    $update_query="update `cart_details` set quantity=$quantity where ip_address=$get_ip";
                    $result_query=mysqli_query($con,$update_query);

                  }


                  ?>
                  <td>
                    <input type="submit" name="update_cart" value="Update Cart" class="btn btn-outline-success">
                    <input type="submit" name="" value="Delete" class="btn btn-outline-danger">
                  </td>
                </tr>
                <?php   }
      }?>
              </tbody>
            </table>
            <!-- Subtotal section -->
            <div class="d-flex">
              <h4 class="px-3 m-2">Subtotal : KES <strong class="text-danger"><?php echo $total_price ; ?></strong>/= </h4>
              <a href="shop.php"><button class="btn btn-outline-success px-3 py-2 mx-2" type="button" id="button-addon2">Shop for more Products</button></a>
              <a href="#"><button class="btn btn-outline-secondary px-3 py-2" type="button" id="button-addon2">Proceed to Checkout</button></a>
            </div>
          </div>
        </div>
        </form>


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