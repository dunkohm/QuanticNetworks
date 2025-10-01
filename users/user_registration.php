<?php
include('../includes/connect.php');
include('../functions/main_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imgs/Quantic Networks SYMBOL.png">
    <title>User -Registration </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
       /* Navigation Bar */
        .navbar {
            z-index: 1030; /* Ensure this is higher than other elements */
            background-color: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            padding: 0;
            margin-right: 1rem;
        }

        .navbar-logo-symbol {
            height: 32px; /* Adjust based on your symbol's aspect ratio */
            width: auto;
            transition: all 0.3s ease;
        }

        .navbar-logo-text {
            color: #6082ff; /* Uses your blue color variable */
            font-weight: 700;
            font-size: 1.25rem;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover .navbar-logo-symbol {
            transform: rotate(10deg) scale(1.1);
        }

        .navbar-brand:hover .navbar-logo-text {
            color: var(--quantic-secondary); /* Lighter blue on hover */
        }

        /* Mobile adjustments */
        @media (max-width: 991.98px) {
            .navbar-logo-symbol {
                height: 28px;
            }
            
            .navbar-logo-text {
                font-size: 1.1rem;
            }
        }
        .nav-link {
            color: #495057;
            font-weight: 500;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link:before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--quantic-primary);
            transition: all 0.3s ease;
        }
        
        .nav-link:hover:before,
        .nav-link.active:before {
            width: 100%;
        }
        
        .nav-link:hover,
        .nav-link.active {
            color: var(--quantic-primary);
        }
        
        .navbar-toggler {
            border: none;
            padding: 0.5rem;
        }
        
        .navbar-toggler:focus {
            box-shadow: none;
        }
        
        @media (max-width: 991.98px) {
            .navbar-collapse {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                z-index: 1050;
                background-color: white;
                padding: 1rem;
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
            }
            
            .nav-link {
                margin: 0.5rem 0;
                padding: 0.75rem 1.5rem;
            }
            
            .nav-link:before {
                display: none;
            }
        }
        </style>
</head>
<body>
    <div class="container-fluid m-0 p-0">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="../imgs/Quantic Networks SYMBOL.png" alt="Quantic Networks" class="navbar-logo-symbol me-2">
                    <span class="navbar-logo-text">Quantic Networks</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="../shop.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us <span>(+254) 738 477 554</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid my-5 p-0 mt-5">
        <div class="row d-flex align-items-center justify-content-center">
            <h2 class="text-center mt-5 navbar-logo-text">User Registration</h2>
            <div class="col-lg-12 col-xl-6">
                <!-- enctype is used because I am inserting an image to the database -->
                <form action="" method="POST" enctype="multipart/form-data" class="mx-5" >
                    <!-- username field -->
                <div class="form-outline mb-3">
                    <label for="username" class="form-label lead">Username</label>
                    <input type="text" id="username" class="form-control" placeholder="Enter your username" required="required" name="user_username" />
                </div>
                 <!-- Contact field -->
                 <div class="form-outline mb-3">
                    <label for="contact" class="form-label lead">Contact</label>
                    <input type="text" id="contact" class="form-control" placeholder="Enter your Mobile number" required="required" name="user_usercontact" />
                </div>
                <!-- email field -->
                <div class="form-outline mb-3">
                    <label for="email" class="form-label lead">Email</label>
                    <input type="email" id="email" class="form-control" placeholder="Enter your Email address" required="required" name="user_useremail" />
                </div>
                <!-- Password field -->
                <div class="form-outline mb-3">
                    <label for="Password" class="form-label lead">Password</label>
                    <input type="password" id="Password" class="form-control" placeholder="Enter your new Password" required="required" name="user_userpass" />
                </div>
                <!-- Confirm Password field -->
                <div class="form-outline mb-3">
                    <label for="CPassword" class="form-label lead">Confirm Password</label>
                    <input type="password" id="CPassword" class="form-control" placeholder="Confirm your new Password" required="required" name="user_Confuserpass" />
                </div>
                 <!-- image field -->
                 <div class="form-outline mb-3">
                    <label for="image" class="form-label lead">User Image</label>
                    <input type="file" id="image" class="form-control"  name="user_userimage" />
                </div>
                <!-- Address field -->
                <div class="form-outline mb-3">
                    <label for="Address" class="form-label lead">Address</label>
                    <input type="text" id="Address" class="form-control" placeholder="Enter your physical address" required="required" name="user_useraddress" />
                </div>
                <!-- Register button -->
                <div class="mt-4 pt-2 d-grid text-center">
                    <input type="submit" value="Register" class="btn btn-outline-primary px-4 py-2" name="user_register">
                    <p class="mt-2 small fw-bold mb-0">Already have an account? <a href="user_login.php" class="text-primary text-decoration-none" >Login</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!-- php logic -->
<?php
    if(isset($_POST['user_register'])){
        $username=$_POST['user_username'];
        $contact=$_POST['user_usercontact'];
        $useremail=$_POST['user_useremail'];
        $userpass=$_POST['user_userpass'];
        $hashpass=password_hash($userpass,PASSWORD_DEFAULT);//Password hash method
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
        values('$username','$contact','$useremail','$hashpass','$userimage',' $user_ip','$user_useraddress')";//add $hashpass to db instead of $userpass
        $sql_query=mysqli_query($con,$insert_query);
        if($sql_query){
            echo "<script>alert('Data inserted successfully')</script>";
        }else{
            die(mysqli_error($con));
        }
        }
        // selecting cart items
        $select_cart_item ="select * from `cart_details` where ip_address='$user_ip'";
        $results_cart=mysqli_query($con,$select_cart_item);
        $row_count=mysqli_num_rows($results_cart);
        if($row_count>0){
            $_SESSION['username']=$user_username;
            echo "<script>alert('You have items in your cart')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
        }else{
            echo "<script>window.open('../shop.php','_self')</script>";
        }
    }
?>