<?php
// function to fetch products from the database
function getProducts(){
    global $con;
    // condition to check if isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){  
     // query
     $select_query="select * from `products` order by rand() limit 0,9";
      $result_query=mysqli_query($con,$select_query);
      //  while loop
      while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
      //   display products
        echo "<div class='col-md-4 mb-2'>
        <div class='card text-center mb-3 border-0 shadow'>
          <img src='adminControl/product-images/$product_image1' class='card-img-center' alt='$product_title'>
          <div class='card-body'>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text text-center'>$product_description</p>
            <h5 class=' card-text text-center text-dark '> KES $product_price</h5>
            <a href='shop.php?add_to_cart=$product_id' class='btn bg btn-outline-primary'>Add to cart</a>
            <a href='product_details.php?product_id=$product_id' class='btn btn-outline-warning'>View more</a>
          </div>
        </div>
      </div>";
        
      }
    }
  }
}
// function to get unique Categories
function get_unique_Categories(){
    global $con;

    // condition to check if isset or not
    if(isset($_GET['category'])){
            $category_id=$_GET['category'];
     // query
     $select_query="select * from `products` where category_id=$category_id ";
      $result_query=mysqli_query($con,$select_query);
      //  checks number of products in a category and if none displays message
      $number_of_rows=mysqli_num_rows($result_query);
      if($number_of_rows==0){
          echo "<h1 class='text-primary  p-5'>Sorry! No products for this category</h1>";
      }
      //  while loop
      while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
    //   display products
      echo "<div class='col-md-4 mb-2'>
      <div class='card text-center'>
        <img src='adminControl/product-images/$product_image1' class='card-img-center' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text'>$product_description</p>
          <h5 class=' card-text text-center text-dark '> KES $product_price</h5>
          <a href='shop.php?add_to_cart=$product_id' class='btn bg btn-outline-primary'>Add to cart</a>
          <a href='product_details.php?product_id= $product_id' class='btn btn-outline-warning'>View more</a>
        </div>
      </div>
    </div>";
    }
  }
}
// function to get unique Brands
function get_unique_Brands(){
  global $con;

  // condition to check if isset or not
  if(isset($_GET['brand'])){
          $brand_id=$_GET['brand'];
   // query
   $select_query="select * from `products` where brand_id=$brand_id";
  $result_query=mysqli_query($con,$select_query);
   //  checks number of products in a brand and if none displays message
  $number_of_rows=mysqli_num_rows($result_query);
  if($number_of_rows==0){
      echo "<h1 class='text-danger p-5'>Sorry! No products for this Brand</h1>";}
     //  while loop
  while($row=mysqli_fetch_assoc($result_query)){
    $product_id=$row['product_id'];
    $product_title=$row['product_title'];
    $product_description=$row['product_description'];
    $product_image1=$row['product_image1'];
    $product_price=$row['product_price'];
    $category_id=$row['category_id'];
    $brand_id=$row['brand_id'];
      //   display products
    echo "<div class='col-md-4 mb-2'>
    <div class='card text-center'>
      <img src='adminControl/product-images/$product_image1' class='card-img-center' alt='$product_title'>
      <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'>$product_description</p>
        <h5 class=' card-text text-center text-dark '> KES $product_price</h5>
        <a href='shop.php?add_to_cart=$product_id' class='btn bg  btn-outline-success'>Add to cart</a>
        <a href='product_details.php?product_id= $product_id' class='btn btn-outline-success'>View more</a>
          </div>
        </div>
      </div>";
    }
  }
}
// This is the function to fetch brands from the db.
function getBrands(){
    global $con;
    // mysqli_query
    $select_brands= "select * from `brands`";
    $result_brands=mysqli_query($con,$select_brands);
    // $row_data=mysqli_fetch_assoc($result_brands);
    while($row_data=mysqli_fetch_assoc($result_brands)){
      $brand_title=$row_data['brand_title'];
      $brand_id=$row_data['brand_id'];
      echo "<li class='nav-item'>
      <a href='shop.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
    </li>";
    }
}
// This is the function to fetch categories
function getCategories(){
    global $con;
    // mysqli_query
    $select_categories= "select * from `categories`";
    $result_categories=mysqli_query($con,$select_categories);
    // $row_data=mysqli_fetch_assoc($result_brands);
    while($row_data=mysqli_fetch_assoc($result_categories)){
      $category_title=$row_data['category_title'];
      $category_id=$row_data['category_id'];
      echo "<li class='nav-item'>
      <a href='shop.php?category=$category_id' class='nav-link text-light'>$category_title</a>
    </li>";
    }
}
// Function to search products
function searchProducts(){
    global $con;
    if(isset($_GET['search_data_product'])){
    $search_value=$_GET['search_data'];
    
    // query to search for like keywords in the database
    $search_query="select * from `products` where product_keywords like '%$search_value%'";//search value is inisde double quotes because its of type varchar
    $result_query=mysqli_query($con,$search_query);
      //  checks number of products in db with the search value and if none displays message
      $number_of_rows=mysqli_num_rows($result_query);
      if($number_of_rows==0){
        echo "<h1 class='text-danger p-5'>Sorry! No Results match for this product.</h1>";
          }
    //  while loop
    while($row=mysqli_fetch_assoc($result_query)){
      $product_id=$row['product_id'];
      $product_title=$row['product_title'];
      $product_description=$row['product_description'];
      $product_image1=$row['product_image1'];
      $product_price=$row['product_price'];
      $category_id=$row['category_id'];
      $brand_id=$row['brand_id'];
  //   display products
      echo "<div class='col-md-4 mb-2'>
      <div class='card text-center border-0 shadow'>
        <img src='adminControl/product-images/$product_image1' class='card-img-center' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <p class='card-text text-center'>$product_description</p>
          <h5 class=' card-text text-center text-dark '> KES $product_price</h5>
          <a href='shop.php?add_to_cart=$product_id' class='btn bg btn-outline-primary'>Add to cart</a>
          <a href='product_details.php?product_id= $product_id' class='btn btn-outline-warning'>View more</a>
        </div>
      </div>
    </div>";
      
    }
  }
}
// Function to display all display all the products
function get_all_products(){
  global $con;
    // condition to check if isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){  
     // query
     $select_query="select * from `products` order by rand()";
    $result_query=mysqli_query($con,$select_query);
    //  while loop
      while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
    //   display products
        echo "<div class='col-md-4 mb-2 mt-2'>
        <div class='card text-center mt-3 border-0 shadow'>
          <img src='adminControl/product-images/$product_image1' class='card-img-center' alt='$product_title'>
          <div class='card-body '>
            <h5 class='card-title'>$product_title</h5>
            <p class='card-text text-center'>$product_description</p>
            <h5 class=' card-text text-center text-dark '> KES $product_price</h5>
            <a href='shop.php?add_to_cart=$product_id' class='btn bg btn-outline-primary'>Add to cart</a>
            <a href='product_details.php?product_id= $product_id' class='btn btn-outline-warning'>View more</a>
          </div>
        </div>
      </div>";
    }
    }
  }
}
// Function to view Related products on the view product details page
function view_product_details(){
  global $con;
    if(isset($_GET['product_id'])){
    // condition to check if isset or not
    if(!isset($_GET['category'])){
        if(!isset($_GET['brand'])){ 
        $product_id=$_GET['product_id']; 
     // query
     $select_query="select * from `products` where product_id=$product_id";
    $result_query=mysqli_query($con,$select_query);
    //  while loop
      while($row=mysqli_fetch_assoc($result_query)){
        $product_id=$row['product_id'];
        $product_title=$row['product_title'];
        $product_description=$row['product_description'];
        $product_image1=$row['product_image1'];
        $product_image2=$row['product_image2'];
        $product_image3=$row['product_image3'];
        $product_price=$row['product_price'];
        $category_id=$row['category_id'];
        $brand_id=$row['brand_id'];
    //   display products
      echo "<div class='col-md-4 mb-2'>
      <div class='card text-center mb-3 shadow'>
        <img src='adminControl/product-images/$product_image1' class='card-img-center' alt='$product_title'>
        <div class='card-body'>
          <h5 class='card-title'>$product_title</h5>
          <h3 class='fw-bold'>Kes $product_price/-</h3>
          
          <a href='shop.php?add_to_cart=$product_id' class='btn bg btn-outline-success'>Add to cart</a>
          <a href='display_all_products.php' class='btn btn-outline-primary'>Shop more</a>
        </div>
      </div>
    </div>
    <!-- This is where the related product images go -->
            <div class='col-md-8'>
              <div class='row'>
                <div class='col-md-12'>
                  <h4 class='text-center text-label'>More Images for this product</h4>
                </div>
                <div class='col-md-6 mb-2 text-center'>
                  <img src='adminControl/product-images/$product_image2' class='card-img-center img-fluid' alt='$product_title' style='width: 250px;'>
                </div>
                <div class='col-md-6 mb-2 text-center'>
                  <img src='adminControl/product-images/$product_image3' class='card-img-center image-fluid' alt='$product_title' style='width: 250px;'>
                </div>
                <div class='col-md-12 border border-secondary rounded bg-secondary text-light mb-5 shadow'>
                  <h4 class='text-center text-light mt-3'>Product Description</h4>
                  <p class='mt-3 lead text-center mt-3'>$product_description</p>
                </div>
              </div>
            </div>";
    }
    }
  }
  }
}
// This is the function to get user IP addresses
function getIPAddress() {  
      //whether ip is from the share internet  
      if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                  $ip = $_SERVER['HTTP_CLIENT_IP'];  
          }  
      //whether ip is from the proxy  
      elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
      }  
  //whether ip is from the remote address  
      else{  
          $ip = $_SERVER['REMOTE_ADDR'];  
      }  
      return $ip;  
}  

  //Cart function
  function cart(){
    if (isset($_GET['add_to_cart'])) {
      global $con;
      $get_ip = getIPAddress();
      $get_product_id =$_GET['add_to_cart'];
      $select_query= "select * from `cart_details` where ip_address='$get_ip' and product_id=$get_product_id";
      $result_query=mysqli_query($con,$select_query);
      $number_of_rows=mysqli_num_rows($result_query);
      if ($number_of_rows>0) {
        echo "<script>alert('This item is already present in the cart')</script>";
        echo "<script>window.open('shop.php','_self')</script>"; //_self ensures the redirect opens in the same tab and not a new tab.

      }else{
        // if the cart data is not present in the database now it is added
        $insert_query="insert into `cart_details` (product_id,ip_address,quantity) values($get_product_id,'$get_ip',0)";//the quantity is 0 as the default before finishing the cart logic
        $result_query=mysqli_query($con,$insert_query);
        echo "<script>alert('Item added to cart successfully')</script>";
        echo "<script>window.open('display_all_products.php','_self')</script>";
      }
    }
  } 
  // function for getting number of products in the cart
  function cart_items(){
    if (isset($_GET['add_to_cart'])) {
      global $con;
      $get_ip = getIPAddress();//calling the function to get user Ip address and storing it in get_ip
      $select_query= "select * from `cart_details` where ip_address='$get_ip'";
      $result_query=mysqli_query($con,$select_query);
      $cart_items_count=mysqli_num_rows($result_query);
      }else{
      global $con;
      $get_ip = getIPAddress();//calling the function to get user Ip address and storing it in get_ip
      $select_query= "select * from `cart_details` where ip_address='$get_ip'";
      $result_query=mysqli_query($con,$select_query);
      $cart_items_count=mysqli_num_rows($result_query);
      
    }
    echo $cart_items_count;
  }
  // function for getting the total price of the cart items
  function total_price(){
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
        $product_values=array_sum($product_price);
        $total_price+=$product_values;
        }
      }
      echo $total_price;
  }
  // get user order details
  function get_user_order_details(){
    global $con;
    $username = $_SESSION['username'];
    $get_details="select * from `user_table` where user_name='$username'";
    $result_query=mysqli_query($con,$get_details);
    while($row_query=mysqli_fetch_array($result_query)){
      $user_id=$row_query['user_id'];
      if(!isset($_GET['edit_account'])){
        if(!isset($_GET['my_orders'])){
          if(!isset($_GET['delete_account'])){
              $get_orders="select * from `user_orders` where user_id=$user_id and order_status='pending'";
              $result_orders_query=mysqli_query($con,$get_orders);
              $row_count=mysqli_num_rows($result_orders_query);
              if($row_count>0){
                echo "<h3 class='text-center text-light mt-3 mb-3'>You have <span class='text-info'>$row_count </span> pending orders</h3>
                <p class='text-center'><a class='text-light btn btn-outline-warning text-decoration-none' href='profile.php?my_orders'>Order Details</a></p>";
              }else{
                echo "<h3 class='text-center text-light mt-3 mb-3'>You have <span class='text-info'>Zero </span> pending orders</h3>
                <p class='text-center'><a class='text-light btn btn-outline-warning text-decoration-none' href='../display_all_products.php'>Explore Products</a></p>";
              }
          }
        }
      }
    }
  }
?>