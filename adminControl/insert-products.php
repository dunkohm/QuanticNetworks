<!-- php logic -->
<?php
    //  include("admin-header.php");
    include("../includes/connect.php");
    if(isset($_POST['insert_product'])){
        $product_title=$_POST['product_title'];
        $product_description=$_POST['product_description'];
        $product_keywords=$_POST['product_keywords'];
        $product_category=$_POST['product_category'];
        $product_brand=$_POST['product_brand'];
        $product_price=$_POST['product_price'];
        $product_status='true';
        // accessing Images
        $product_image1=$_FILES['product_image1']['name'];
        $product_image2=$_FILES['product_image2']['name'];
        $product_image3=$_FILES['product_image3']['name'];
        // accessing tmp name
        $tmp_image1=$_FILES['product_image1']['tmp_name'];
        $tmp_image2=$_FILES['product_image2']['tmp_name'];
        $tmp_image3=$_FILES['product_image3']['tmp_name'];
        // Condition to check for empty fields
        if($product_title=='' or $product_description==''or $product_keywords=='' or
        $product_category=='' or $product_brand=='' or $product_image1=='' or $product_image2=='' or $product_image3=='' or $product_price==''){

            echo "<script>alert('Please Fill all the available fields')</script>";
            exit();
        }
            move_uploaded_file($tmp_image1,"./product-images/$product_image1");
            move_uploaded_file($tmp_image2,"./product-images/$product_image2");
            move_uploaded_file($tmp_image3,"./product-images/$product_image3");

            // insert query
            $insert_product_query="insert into `products` (product_title,product_description,product_keywords
            ,category_id,brand_id,product_image1,product_image2,product_image3,product_price,date,status) values('$product_title','$product_description',
            '$product_keywords','$product_category','$product_brand','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
            $result_query=mysqli_query($con,$insert_product_query);
            if($result_query){
                echo "<script>alert('Product Succesfully added!')</script>";
            }

        }
    
    
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="imgs/Quantic Networks SYMBOL.png">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-light">
    <!-- adminpage header -->
        <div class="container-fluid d-flex align-items-center justify-content-center">
        <!-- form -->
        <!-- you have to add the enctype attribute to insert files that are not in text format eg. Images,videos -->
        <form action="" method="post" enctype="multipart/form-data" class="mt-4">
            <h3 class="text-primary text-center mt-4">Add new product</h3>
            <!-- product-title -->
            <div class="form-outline mb-4 m-auto">
                <label for="product_title"class="form-label lead ">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                placeholder="Enter Product title" autocomplete="off" required="required">
            </div>
            <!-- product description -->
            <div class="form-outline mb-4 m-auto">
                <label for="product_description"class="form-label lead ">Product Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control"
                placeholder="Enter Product Description" autocomplete="off" required="required">
            </div>
            <!-- product keyword -->
            <div class="form-outline mb-4 m-auto">
                <label for="product_keywords"class="form-label lead ">Product keyword</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control"
                placeholder="Enter Product keywords" autocomplete="off" required="required">
            </div>
            <!-- categories -->
            <div class="form-outline mb-4 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select a category</option>
                    <!-- Code to select brand data from the database -->
                    <?php
                    // queries
                    $select_query="select * from `categories`";
                    $result_query=mysqli_query($con,$select_query);
                    // while loop 
                    while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];//variable to store what is in the title column
                        $category_id=$row['category_id'];//variable to store what is in the id column
                        //  display database info on the select input form
                        echo "<option value='$category_id'>$category_title</option>";
                    }
                    ?>
                </select>
            </div>
            <!-- Brands -->
            <div class="form-outline mb-4 m-auto">
                <select name="product_brand" id="" class="form-select">
                    <option value="">Select a Brand</option>
                    <!-- Code to select brand data from the database -->
                    <?php 
                    // queries
                    $select_query="select * from `brands`";
                    $result_query=mysqli_query($con,$select_query);
                    // while loop
                    while($row=mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id'];

                        echo "<option value='$brand_id'>$brand_title</option>";
                    }
                    
                    ?>
                </select>
            </div>
            <!-- image 1 -->
            <div class="form-outline mb-4 m-auto">
                <label for="product_image1"class="form-label lead">Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control"
                required="required">
            </div>
            <!-- image 2 -->
            <div class="form-outline mb-4 m-auto">
                <label for="product_image2"class="form-label lead ">Product Image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control"
                required="required">
            </div>
            <!-- image 3 -->
            <div class="form-outline mb-4 m-auto">
                <label for="product_image3"class="form-label lead ">Product Image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control"
                required="required">
            </div>
            <!-- product Price -->
            <div class="form-outline mb-4 m-auto">
                <label for="product_price"class="form-label lead ">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control"
                placeholder="Enter Product Price" autocomplete="off" required="required">
            </div>
            <!-- Insert product button -->
            <div class="form-outline mb-4 d-grid m-auto">
                <input type="submit" value="Insert Product" class="btn btn-primary text-light" name="insert_product">
            </div>
        </form>
    </div>

        
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
            </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
            </script>
</body>

</html>