<?php
include('../includes/connect.php');
include('../functions/main_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User -Registration </title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid m-0 p-0">
        <!-- Responsive Navigation Bar -->
    <nav class="navbar navbar-expand-md bg mb-4">
        <a href="shop.php" class="navbar-brand  fs-3 text-white p-2">Quantic <span class="text-danger">Networks</span></a>
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
            <i class='bx bx-menu text-white bx-md'></i>
        </button>
        <div class="collapse navbar-collapse" id="btn">

        </div>
    </nav>
        <h2 class="text-center mt-2">User Registration</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <!-- enctype is used because I am inserting an image to the database -->
                <form action="" method="POST" enctype="multipart/form-data" >
                    <!-- username field -->
                <div class="form-outline mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" class="form-control" placeholder="Enter your username" required="required" name="user_username" />
                </div>
                 <!-- Contact field -->
                 <div class="form-outline mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" id="contact" class="form-control" placeholder="Enter your Mobile number" required="required" name="user_usercontact" />
                </div>
                <!-- email field -->
                <div class="form-outline mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter your Email address" required="required" name="user_useremail" />
                </div>
                <!-- Password field -->
                <div class="form-outline mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" id="Password" class="form-control" placeholder="Enter your new Password" required="required" name="user_userpass" />
                </div>
                <!-- Confirm Password field -->
                <div class="form-outline mb-3">
                    <label for="CPassword" class="form-label">Confirm Password</label>
                    <input type="password" id="CPassword" class="form-control" placeholder="Confirm your new Password" required="required" name="user_Confuserpass" />
                </div>
                 <!-- image field -->
                 <div class="form-outline mb-3">
                    <label for="image" class="form-label">User Image</label>
                    <input type="file" id="image" class="form-control"  name="user_userimage" />
                </div>
                <!-- Address field -->
                <div class="form-outline mb-3">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" id="Address" class="form-control" placeholder="Enter your physical address" required="required" name="user_useraddress" />
                </div>
                <!-- Register button -->
                <div class="mt-4 pt-2">
                    <input type="submit" value="Register" class="btn btn-outline-success px-4 py-2" name="user_register">
                    <p class="mt-2 small fw-bold mb-0">Already have an account? <a href="user_login.php" class="text-danger text-decoration-none" >Login</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php
if(isset($_POST['user_register'])){
    $username=$_POST['user_username'];
    $contact=$_POST['user_usercontact'];
    $useremail=$_POST['user_useremail'];
    $userpass=$_POST['user_userpass'];
    $user_Confuserpass=$_POST['user_Confuserpass'];
    $userimage=$_FILES['user_userimage']['name'];
    $userimageTmp=$_FILES['user_userimage']['tmp_name'];
    $user_useraddress=$_POST['user_useraddress'];
    $user_ip=getIPAddress();

    // select query to check if user already exists
    $select_query="select * from `user_table` where user_name='$username' or user_email='$useremail'";
    $sql_exc=mysqli_query($con,$select_query);
    $rowCount=mysqli_num_rows($sql_exc);
    // Variable rowcount to store the number of rows
    if($rowCount > 0){
        echo "<script>alert('Username and Email Already Exists in the Database')</script>"; 
        // check if passwords match
    }elseif($userpass!=$user_Confuserpass){
        echo "<script>alert('Passwords do not match!')</script>";
    }
    else{
    //  Insert query
    // function to move uploaded images to a new directory in the users area. params(Temp file name,(enclose in double quotes)path to move image/image to move)
    move_uploaded_file($userimageTmp,"./upImages/$userimage");
    $insert_query="insert into `user_table`(user_name,user_contact,user_email,user_password,user_image,user_ipaddress,user_address)
    values('$username','$contact','$useremail','$userpass','$userimage',' $user_ip','$user_useraddress')";
    $sql_query=mysqli_query($con,$insert_query);
    if($sql_query){
        echo "<script>alert('Data inserted successfully')</script>";
    }else{
        die(mysqli_error($con));
    }
}
}

?>