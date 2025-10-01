<?php
if(isset($_GET['edit_account'])){
    $user_session_name=$_SESSION['username'];
    $select_query="Select * from `user_table` where user_name='$user_session_name'";
    $result_query=mysqli_query($con,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $user_id=$row_fetch['user_id'];
    $user_name=$row_fetch['user_name'];
    $user_email=$row_fetch['user_email'];
    $user_address=$row_fetch['user_address'];
    $user_contact=$row_fetch['user_contact'];
}
    if(isset($_POST['user_update'])){
        $update_id=$user_id;
        $user_name=$_POST['user_username'];
        $user_email=$_POST['user_email'];
        $user_address=$_POST['user_address'];
        $user_mobile=$_POST['user_mobile'];
        $user_image=$_FILES['user_image']['name'];
        $user_image_tmp=$_FILES['user_image']['tmp_name'];
        move_uploaded_file($user_image_tmp,"upImages/$user_image");
        // update query
        $update_user="update `user_table` set user_name='$user_name',user_email='$user_email',user_image='$user_image',user_address='$user_address',user_contact='$user_mobile'
        where user_id=$update_id";
        $result_query_update=mysqli_query($con,$update_user);
        if($result_query_update){
            echo "<script>alert('Profile updated successfully!')</script>";
            echo "<script>window.open('logout.php','_self')</script>";
        }
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
</head>
<body>
    <h3 class="text-center text-light my-5">Edit User Account</h3>
    <form action="" method="post" enctype="multipart/form-data" class="text-center mx-5">
        <div class="form-outline mb-4">
            <label for="username" class="text-light lead">Username</label>
            <input type="text" class="form-control m-auto" name="user_username" value="<?php echo $user_name  ?>" name="user_username">
        </div>
        <div class="form-outline mb-4">
            <label for="email" class="text-light lead">Email</label>
            <input type="email" class="form-control m-auto" value="<?php echo $user_email  ?>" name="user_email">
        </div>
        <div class="form-outline mb-4 d-flex g-2 m-auto">
            <input type="file" class="form-control m-auto" name="user_image">
            <img src="upImages/<?php echo $user_image ?>" alt="" style="width:120px;border-radius:120px;" class="border border-secondary border-3">
        </div>
        <div class="form-outline mb-4">
            <label for="address" class="text-light lead">Address</label>
            <input type="text" class="form-control m-auto" value="<?php echo $user_address  ?>" name="user_address">
        </div>
        <div class="form-outline mb-4">
            <label for="Contact" class="text-light lead">Phone Number</label>
            <input type="text" class="form-control m-auto" value="<?php echo $user_contact  ?>" name="user_mobile">
        </div>
        <input type="submit" class="btn btn-outline-warning mb-3 px-5" value="Update User" name="user_update">
    </form>
</body>
</html>