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

<!-- Category input form -->
<div class="container-fluid d-flex align-items-center justify-content-center">
    <form action="" method="post" class="mb-2 mt-5">
        <h3 class="text-center text-primary">Insert Category</h3>
        <div class="input-group mb-2 mt-5">
        <span class="input-group-text bg-secondary text-light" id="basic-addon1">Categories</span>
        <input type="text" class="form-control w-50" placeholder=" Enter Category"name="category-title" aria-label="Categories" Required="required">
        </div>
        <div class="input-group d-grid mb-2 m-auto">
        <input type="submit" value="Insert Category" class="btn btn-primary text-light" name="insert-category"> 
        </div>
    </form>
</div>
<div class="card mb-4 shadow-sm">
  <div class="card-body">
    <div class="row text-center">
      <div class="col-4 border-end">
        <h3 class="mb-0">24</h3>
        <small class="text-muted">Categories</small>
      </div>
      <div class="col-4 border-end">
        <h3 class="mb-0">156</h3>
        <small class="text-muted">Products</small>
      </div>
      <div class="col-4">
        <h3 class="mb-0">8</h3>
        <small class="text-muted">Brands</small>
      </div>
    </div>
  </div>
</div>
