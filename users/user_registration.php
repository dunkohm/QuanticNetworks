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
                <form action="" method="post" enctype="multipart/form-data" >
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
                    <input type="button" value="Register" class="btn btn-outline-success px-4 py-2" name="user_register">
                    <p class="mt-2 small fw-bold mb-0">Already have an account? <a href="user_login.php" class="text-danger text-decoration-none" >Login</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>