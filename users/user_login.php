<?php
include('../includes/connect.php');
include('../functions/main_function.php');
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="../imgs/Quantic Networks SYMBOL.png">
  <title>User - Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
      background: url('../imgs/stck.jpg') center center/cover no-repeat fixed;
      position: relative;
      min-height: 100vh;
    }
    body::before {
      content: "";
      position: absolute;
      top:0; left:0;
      width:100%; height:100%;
      background: rgba(96,130,255,0.7);
      z-index:0;
    }
    .login-container {
      position: relative;
      z-index: 1;
      margin-top: 6rem;
      background: #fff;
      border-radius: 15px;
      padding: 2rem 3rem;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    .navbar-logo-text {
      color: #6082ff;
      font-weight: 700;
      letter-spacing: .5px;
    }
    .btn-quantic {
      background-color: #f1e42c;
      border: none;
      color: #000;
      font-weight: 600;
    }
    .btn-quantic:hover {
      background-color: #ffe83a;
    }
    .form-control:focus {
      border-color: #6082ff;
      box-shadow: 0 0 0 .2rem rgba(96,130,255,.25);
    }
    .password-toggle {
      cursor: pointer;
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #6c757d;
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-6 col-lg-5 login-container">
      <div class="text-center mb-4">
        <img src="../imgs/Quantic Networks SYMBOL.png" style="width:90px;" alt="Quantic Networks">
        <h3 class="navbar-logo-text mt-2">User Authentication</h3>
      </div>
      <form action="" method="post">
        <!-- Username field -->
        <div class="form-outline mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" id="username" class="form-control" placeholder="Enter your username" required="required" name="user_username" />
        </div>
        <!-- Password field with toggle -->
        <div class="form-outline mb-3 position-relative">
          <label for="Password" class="form-label">Password</label>
          <input type="password" id="Password" class="form-control" placeholder="Enter your password" required="required" name="user_userpass" />
          <i class="bi bi-eye-slash password-toggle mt-3" id="togglePassword"></i>
        </div>
        <!-- Login button -->
        <div class="d-grid mt-4">
          <input type="submit" value="Login" class="btn btn-quantic py-2" name="user_login">
          <p class="mt-3 small fw-bold mb-0 text-center">Don't have an account? 
            <a href="user_registration.php" class="text-primary text-decoration-none">Register</a>
          </p>
        </div>
      </form>
    </div>
  </div>

  <!-- Show/Hide Password Script -->
  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#Password');
    togglePassword.addEventListener('click', function () {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.classList.toggle('bi-eye');
      this.classList.toggle('bi-eye-slash');
    });
  </script>
</body>
</html>

<?php 
if(isset($_POST['user_login'])){
    $user_username=$_POST['user_username'];
    $user_userpass=$_POST['user_userpass'];
    $select_query="select * from `user_table` where user_name='$user_username'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result); 
    $user_ip=getIPAddress();
    $_SESSION['user_id'] = $row_data['user_id'];
    // cart items
    $select_query_cart="select * from `cart_details` where ip_address='$user_ip'";
    $result_ip=mysqli_query($con,$select_query_cart);
    $row_count_cart=mysqli_num_rows($result_ip);
    if($row_count>0){
        $_SESSION['username']=$user_username;
        if(password_verify($user_userpass,$row_data['user_password'])){
            if($row_count==1 and $row_count_cart==0){
                $_SESSION['username']=$user_username;
                echo "<script>alert('Login Successful!')</script>";
                echo "<script>window.open('profile.php','_self')</script>";
            }else{
                $_SESSION['username']=$user_username;
                echo "<script>alert('Login Successful!')</script>";
                echo "<script>window.open('payment.php','_self')</script>";
            }
        }else{
            echo "<script>alert('Invalid credentials!')</script>";
        }
    }else{
        echo "<script>alert('Invalid credentials!')</script>";
    }
}
?>
