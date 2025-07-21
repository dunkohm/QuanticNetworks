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
<body class="bg-light">
    <div class="container-fluid m-0 p-0">
        <h1 class="text-center mt-2 navbar-logo-text">User Login</h1>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6 mt-5">
                <div class="text-center">
                    <img src="../imgs/Quantic Networks SYMBOL.png" style="width:150px;" alt="">
                    <h3 class="navbar-logo-text">Authentication</h3>
                </div>
                <form action="" method="post" class="mx-5" >
                    <!-- username field -->
                <div class="form-outline mb-3">
                    <label for="username" class="form-label lead">Username</label>
                    <input type="text" id="username" class="form-control" placeholder="Enter your username" required="required" name="user_username" />
                </div>
                <!-- Password field -->
                <div class="form-outline mb-3">
                    <label for="Password" class="form-label lead">Password</label>
                    <input type="password" id="Password" class="form-control" placeholder="Enter your new Password" required="required" name="user_userpass" />
                </div>
                <!-- Login button -->
                <div class="mt-4 pt-2 d-grid">
                    <input type="button" value="Login" class="btn btn-outline-primary px-4 py-2" name="user_login">
                    <p class="mt-2 small fw-bold mb-0">Don't have an account? <a href="user_registration.php" class="text-primary text-decoration-none" >Register</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>