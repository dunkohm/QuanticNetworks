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
<h2 class="text-center small-header">Insert Brands</h2>
<!-- brands input form -->
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg text-light" id="basic-addon1">Brands</span>
  <input type="text" class="form-control w-50" placeholder=" insert Brand"name="brand-title" aria-label="Brands">
</div>
<div class="input-group w-10 mb-2 m-auto">
    <input type="submit" value="Insert Brand" class="border-0 p-2 my-3 bg text-light" name="insert-brand">
</div>
</form>