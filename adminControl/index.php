<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
                :root {
                    --primary-color: #6082ff;
                    --secondary-color: #4a6cf7;
                    --dark-color: #1e293b;
                    --light-color: #f8fafc;
                    --sidebar-width: 280px;
                    --header-height: 70px;
                }
                
                body {
                    font-family: 'Poppins', sans-serif;
                    background-color: #f5f7fb;
                    color: #334155;
                    overflow-x: hidden;
                }
                
                /* Sidebar Styles */
                .sidebar {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: var(--sidebar-width);
                    height: 100vh;
                    background: white;
                    box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
                    z-index: 1000;
                    transition: all 0.3s ease;
                    padding-top: var(--header-height);
                }
                
                .sidebar-header {
                    padding: 1.5rem;
                    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
                    display: flex;
                    align-items: center;
                    gap: 1rem;
                }
                
                .admin-img {
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    object-fit: cover;
                    border: 3px solid var(--primary-color);
                }
                
                .admin-info h5 {
                    font-size: 1rem;
                    margin-bottom: 0.2rem;
                    color: var(--dark-color);
                }
                
                .admin-info p {
                    font-size: 0.8rem;
                    color: #64748b;
                    margin-bottom: 0;
                }
                
                .sidebar-menu {
                    padding: 1.5rem 0;
                }
                
                .nav-link {
                    display: flex;
                    align-items: center;
                    padding: 0.75rem 1.5rem;
                    color: #64748b;
                    font-weight: 500;
                    border-left: 3px solid transparent;
                    transition: all 0.3s ease;
                }
                
                .nav-link:hover, 
                .nav-link.active {
                    background-color: rgba(74, 108, 247, 0.1);
                    color: var(--primary-color);
                    border-left-color: var(--primary-color);
                }
                
                .nav-link i {
                    margin-right: 12px;
                    font-size: 1.1rem;
                    width: 20px;
                    text-align: center;
                }
                
                /* Main Content Styles */
                .main-content {
                    margin-left: var(--sidebar-width);
                    padding: 2rem;
                    min-height: calc(100vh - var(--header-height));
                }
                
                /* Header Styles */
                .header {
                    position: fixed;
                    top: 0;
                    left: var(--sidebar-width);
                    right: 0;
                    height: var(--header-height);
                    background: white;
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
                    z-index: 999;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    padding: 0 2rem;
                }
                
                .page-title h2 {
                    color: var(--dark-color);
                    font-weight: 600;
                    margin-bottom: 0;
                }
                
                .header-actions {
                    display: flex;
                    align-items: center;
                    gap: 1rem;
                }
                
                .notification-btn, 
                .logout-btn {
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background: rgba(74, 108, 247, 0.1);
                    color: var(--primary-color);
                    border: none;
                    transition: all 0.3s ease;
                }
                
                .notification-btn:hover, 
                .logout-btn:hover {
                    background: var(--primary-color);
                    color: white;
                }
                
                /* Card Styles */
                .card {
                    border: none;
                    border-radius: 10px;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
                    margin-bottom: 2rem;
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }
                
                .card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
                }
                
                .card-header {
                    background: white;
                    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
                    padding: 1.25rem 1.5rem;
                    border-radius: 10px 10px 0 0 !important;
                }
                
                .card-title {
                    font-weight: 600;
                    color: var(--dark-color);
                    margin-bottom: 0;
                }
                
                /* Responsive Adjustments */
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
                    
                    .header {
                        left: 0;
                    }
                    
                    .menu-toggle {
                        display: block !important;
                    }
                }
                
                .menu-toggle {
                    display: none;
                    background: none;
                    border: none;
                    font-size: 1.5rem;
                    color: var(--dark-color);
                }
    </style>
</head>
<body class="bg-light">
    <!-- Navigation -->
    <?php include("admin-navigation.php");?>
    
    <!-- Main Content Area -->
    <main class="main-content">
        <div class="container-fluid">
            <?php 
            // getter function insert categories
            if(isset($_GET['insert-product'])){
                include('insert-products.php');
            }
            // getter function insert categories
            if(isset($_GET['insert-category'])){
                include('insert-category.php');
            }
            // getter function insert brands
            if(isset($_GET['insert-brand'])){
                include('insert-brand.php');
            }
            ?>
        </div>
    </main>
    
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