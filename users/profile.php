<?php
include('../includes/connect.php');
include('../functions/main_function.php');
@session_start();

// Redirect if not logged in
if(!isset($_SESSION['username'])) {
    header("Location: user_login.php");
    exit();
}

// Get user details
$username = $_SESSION['username'];
$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - Quantic Networks</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6082ff;
            --sidebar-width: 250px;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        /* Navbar Styles (keep your existing navbar styles) */
        .navbar {
            z-index: 1030;
            background-color: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-logo-text {
            color: #6082ff;
            font-weight: 700;
        }
        .navbar-logo-symbol {
                        height: 32px; /* Adjust based on your symbol's aspect ratio */
                        width: auto;
                        transition: all 0.3s ease;
                    }
        
        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 56px; /* Navbar height */
            background: white;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            transition: all 0.3s;
            z-index: 1020;
        }
        
        .sidebar-menu {
            padding: 20px 0;
        }
        
        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: #495057;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .sidebar-link:hover, .sidebar-link.active {
            background: rgba(96, 130, 255, 0.1);
            color: var(--primary-color);
        }
        
        .sidebar-link i {
            margin-right: 10px;
            font-size: 1.1rem;
        }
        
        /* Main Content */
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 20px;
            margin-top: 56px; /* Navbar height */
        }
        
        .dashboard-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 20px;
            margin-bottom: 20px;
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="../shop.php">
                <img src="../imgs/Quantic Networks SYMBOL.png" alt="Quantic Networks" class="navbar-logo-symbol me-2">
                <span class="navbar-logo-text">Quantic Networks</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person-fill"></i> Welcome <?php echo $username; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../shop.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar mt-5">
        <div class="sidebar-menu mt-5">
            <div class="img-fluid text-center my-3">
                <img src="upImages/img.jpeg" style="width:150px;border-radius:120px;" alt="" class="border border-secondary border-3">
            </div>
            <a href="profile.php" class="sidebar-link active">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
            <a href="pending_orders.php" class="sidebar-link">
                <i class="bi bi-hourglass-split"></i> Pending Orders
            </a>
            <a href="my_orders.php" class="sidebar-link">
                <i class="bi bi-list-check"></i> My Orders
            </a>
            <a href="edit_account.php" class="sidebar-link">
                <i class="bi bi-pencil-square"></i> Edit Account
            </a>
            <a href="delete_account.php" class="sidebar-link text-danger">
                <i class="bi bi-trash"></i> Delete Account
            </a>
            <a href="logout.php" class="sidebar-link">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
            <h2 class="mb-4">My Dashboard</h2>
            
            <!-- Dashboard Cards -->
            <div class="row">
                <div class="col-md-6">
                    <div class="dashboard-card">
                        <h4><i class="bi bi-hourglass text-warning"></i> Pending Orders</h4>
                        <p class="display-6">3</p>
                        <a href="pending_orders.php" class="btn btn-sm btn-outline-warning">View All</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="dashboard-card">
                        <h4><i class="bi bi-check-circle text-success"></i> Completed Orders</h4>
                        <p class="display-6">7</p>
                        <a href="my_orders.php" class="btn btn-sm btn-outline-success">View History</a>
                    </div>
                </div>
            </div>
            
            <!-- Recent Orders -->
            <div class="dashboard-card mt-4">
                <h4 class="mb-4">Recent Orders</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Date</th>
                                <th>Items</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ORD-1001</td>
                                <td>2023-06-15</td>
                                <td>3</td>
                                <td>Kes 12,500</td>
                                <td><span class="badge bg-success">Delivered</span></td>
                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                            </tr>
                            <tr>
                                <td>ORD-1002</td>
                                <td>2023-06-18</td>
                                <td>2</td>
                                <td>Kes 8,300</td>
                                <td><span class="badge bg-warning">Processing</span></td>
                                <td><a href="#" class="btn btn-sm btn-primary">View</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <!-- Account Info -->
            <div class="dashboard-card mt-4">
                <h4 class="mb-4">Account Information</h4>
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Name:</strong> <?php echo $username; ?></p>
                        <p><strong>Email:</strong> user@example.com</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Phone:</strong> +254 7XXXXXXXX</p>
                        <p><strong>Member Since:</strong> 2023-01-15</p>
                    </div>
                </div>
                <a href="edit_account.php" class="btn btn-primary mt-3">Edit Profile</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle sidebar on mobile
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>