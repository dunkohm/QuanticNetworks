<?php 
include("../includes/connect.php");
if(isset($_POST['insert-category'])){
    $cat_title = $_POST['category-title'];
    // code to avoid repetition of categories
    $select_query ="select * from `categories` where category_title= '$cat_title'";
    $result_query =mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_query);
    if($number >0){
        echo"<script>alert('This category is already present in the database')</script>";
    }else{
    // code to insert category input to the database
    $insert_query ="insert into `categories` (category_title) values ('$cat_title')";//mysql insert query
    $result= mysqli_query($con,$insert_query);//execution
    if($result){
        echo "<script>alert('Category has been added successfully')</script>";
    }
}}

?>
<h2 class="text-center small-header">Insert Category</h2>
<!-- Category input form -->
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg text-light" id="basic-addon1">Categories</span>
  <input type="text" class="form-control w-50" placeholder=" insert Categories"name="category-title" aria-label="Categories">
</div>
<div class="input-group w-10 mb-2 m-auto">
    <input type="submit" value="Insert Category" class="border-0 p-2 my-3 bg text-light" name="insert-category">
    
</div>
</form>