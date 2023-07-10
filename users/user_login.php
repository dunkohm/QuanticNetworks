<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User -Login </title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid m-0 p-0">
        <h2 class="text-center mt-2">User Login</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6 mt-5">
                <form action="" method="post" >
                    <!-- username field -->
                <div class="form-outline mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" class="form-control" placeholder="Enter your username" required="required" name="user_username" />
                </div>
                <!-- Password field -->
                <div class="form-outline mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" id="Password" class="form-control" placeholder="Enter your new Password" required="required" name="user_userpass" />
                </div>
                <!-- Login button -->
                <div class="mt-4 pt-2">
                    <input type="button" value="Login" class="btn btn-outline-success px-4 py-2" name="user_login">
                    <p class="mt-2 small fw-bold mb-0">Don't have an account? <a href="user_registration.php" class="text-danger text-decoration-none" >Register</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>