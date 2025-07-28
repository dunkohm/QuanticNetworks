<?php 
  include("../includes/connect.php");
  if(isset($_POST['insert-brand'])){
      $br_title = $_POST['brand-title'];
      // code to avoid repetition of brands
      $select_query ="select * from `brands` where brand_title= '$br_title'";
      $result_query =mysqli_query($con,$select_query);
      $number=mysqli_num_rows($result_query);
      if($number >0){
          echo"<script>alert('This Brand is already present in the database')</script>";
      }else{
      // code to insert brand input to the database
      $insert_query ="insert into `brands` (brand_title) values ('$br_title')";//mysql insert query
      $result= mysqli_query($con,$insert_query);//execution
      if($result){
          echo "<script>alert('Brand has been added successfully')</script>";
      }
  }}

?>
<div class="container-fluid align-items-center justify-content-center">
    <!-- brands input form -->
  <form action="" method="post" class="mb-2 mt-5">
      <h2 class="text-center text-primary">Insert Brands</h2>
      <div class="input-group mb-2 mt-3">
      <span class="input-group-text bg-secondary text-light" id="basic-addon1">Brands</span>
      <input type="text" class="form-control" placeholder=" insert Brand"name="brand-title" aria-label="Brands">
      </div>
      <div class="input-group mb-2 mt-3 d-grid">
          <input type="submit" value="Insert Brand" class="btn btn-primary text-light" name="insert-brand">
      </div>
  </form>
  <div class="card mb-4 shadow-sm mt-5">
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
</div>