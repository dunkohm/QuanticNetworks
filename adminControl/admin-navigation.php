<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="imgs/Quantic Networks SYMBOL.png">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="">
    <!-- Sidebar Navigation -->
    <div class="sidebar">
        <div class="sidebar-header d-block">
            <img src="../imgs/team-1.jpg" alt="Admin" class="admin-img">
            <div class="admin-info">
                <h5>Admin Name</h5>
                <p>Administrator</p>
            </div>
        </div>
        
        <div class="sidebar-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?insert-product">
                        <i class="fas fa-plus-circle"></i>
                        <span>Insert Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-eye"></i>
                        <span>View Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?insert-category">
                        <i class="fas fa-tags"></i>
                        <span>Insert Category</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-list"></i>
                        <span>View Categories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?insert-brand">
                        <i class="fas fa-copyright"></i>
                        <span>Insert Brands</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-list"></i>
                        <span>View Brands</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-shopping-cart"></i>
                        <span>All Orders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-credit-card"></i>
                        <span>All Payments</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-users"></i>
                        <span>List Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- Main Header -->
    <header class="header">
        <button class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </button>
        
        <div class="page-title d-flex align-items-center">
            <img src="../imgs/Quantic Networks SYMBOL.png" alt="logo" style="width: 50px;">
            <h3 class="text-primary">Manage Shop</h3>
        </div>
        
        <div class="header-actions">
            <button class="notification-btn">
                <i class="fas fa-bell"></i>
            </button>
            <button class="logout-btn">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </div>
    </header>
        <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    
    <script>
        // Toggle sidebar on mobile
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });
        
        // Highlight active menu item
        const currentPage = window.location.href;
        const navLinks = document.querySelectorAll('.nav-link');
        
        navLinks.forEach(link => {
            if (link.href === currentPage) {
                link.classList.add('active');
            }
        });
        
        // Add smooth transitions
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.sidebar');
            const menuToggle = document.getElementById('menuToggle');
            
            if (window.innerWidth <= 992 && 
                !sidebar.contains(event.target) && 
                event.target !== menuToggle && 
                !menuToggle.contains(event.target)) {
                sidebar.classList.remove('active');
            }
        });
    </script>
</body>
</html>