<?php

include('./includes/connect.php');

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
       <div class='card text-center mb-3'>
         <img src='adminControl/product-images/$product_image1' class='card-img-center' alt='$product_title'>
         <div class='card-body'>
           <h5 class='card-title'>$product_title</h5>
           <p class='card-text'>$product_description</p>
           <a href='#' class='btn bg text-light btn-outline-secondary'>Order</a>
           <a href='product_details.php?product_id=$product_id' class='btn btn-outline-success'>View more</a>
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
        echo "<h1 class='text-danger  p-5'>Sorry! No products for this category</h1>";
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
           <a href='#' class='btn bg text-light btn-outline-secondary'>Order</a>
           <a href='product_details.php?product_id= $product_id' class='btn btn-outline-success'>View more</a>
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
      echo "<h1 class='text-danger p-5'>Sorry! No products for this Brand</h1>";
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
         <a href='#' class='btn bg text-light btn-outline-secondary'>Order</a>
         <a href='product_details.php?product_id= $product_id' class='btn btn-outline-success'>View more</a>
          </div>
        </div>
      </div>";
     }
  }
}
// This is the function to fetch brands from the db
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
     <div class='card text-center'>
       <img src='adminControl/product-images/$product_image1' class='card-img-center' alt='$product_title'>
       <div class='card-body'>
         <h5 class='card-title'>$product_title</h5>
         <p class='card-text'>$product_description</p>
         <a href='#' class='btn bg text-light btn-outline-secondary'>Order</a>
         <a href='product_details.php?product_id= $product_id' class='btn btn-outline-success'>View more</a>
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
       echo "<div class='col-md-4 mb-2'>
       <div class='card text-center'>
         <img src='adminControl/product-images/$product_image1' class='card-img-center' alt='$product_title'>
         <div class='card-body'>
           <h5 class='card-title'>$product_title</h5>
           <p class='card-text'>$product_description</p>
           <a href='#' class='btn bg text-light btn-outline-secondary'>Order</a>
           <a href='product_details.php?product_id= $product_id' class='btn btn-outline-success'>View more</a>
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
       <div class='card text-center mb-3'>
         <img src='adminControl/product-images/$product_image1' class='card-img-center' alt='$product_title'>
         <div class='card-body'>
           <h5 class='card-title'>$product_title</h5>
           <p class='card-text'>$product_description</p>
           <a href='#' class='btn bg text-light btn-outline-secondary'>Order</a>
           <a href='product_details.php?product_id=$product_id' class='btn btn-outline-success'>View more</a>
         </div>
       </div>
     </div>
     <!-- This is where the related product images go -->
            <div class='col-md-8'>
              <div class='row'>
                <div class='col-md-12'>
                  <h4 class='text-center text-label'>Related products</h4>
                </div>
                <div class='col-md-6'>
                  <img src='adminControl/product-images/$product_image2' class='card-img-center' alt='$product_title'>

                </div>
                <div class='col-md-6'>
                  <img src='adminControl/product-images/$product_image3' class='card-img-center' alt='$product_title'>

                </div>
              </div>
            </div>";
       
     }
    }
}
}
}
?>