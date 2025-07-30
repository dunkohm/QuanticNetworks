<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="imgs/Quantic Networks SYMBOL.png">
    <title>Quantic Networks | Reliable Internet Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
                    :root {
                        --quantic-primary: #1a6d8d;
                        --quantic-secondary: #89bac7;
                        --quantic-light: #f8f9fa;
                    }
                    
                    body {
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                        overflow-x: hidden;
                    }
                    
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
                        color:#f1e42c;
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
                    /* Hero Section */
                    .hero {
                        min-height: 100vh;
                        display: flex;
                        align-items: center;
                        position: relative;
                        overflow: hidden;
                        padding-top: 80px;
                    }
                    
                    .hero-container {
                        display: flex;
                        align-items: center;
                        max-width: 1200px;
                        margin: 0 auto;
                        padding: 2rem;
                        position: relative;
                        z-index: 2;
                    }
                    
                    .hero-content {
                        flex: 1;
                        color: white;
                        padding-right: 3rem;
                    }
                    
                    .hero-image {
                        flex: 1;
                        position: relative;
                        border-radius: 12px;
                        overflow: hidden;
                        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
                        transform: perspective(1000px) rotateY(-5deg);
                        transition: all 0.5s ease;
                    }
                    
                    .hero-image:hover {
                        transform: perspective(1000px) rotateY(0deg);
                        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
                    }
                    
                    .hero-image img {
                        width: 100%;
                        height: auto;
                        display: block;
                        transition: transform 0.5s ease;
                    }
                    
                    .hero-image:hover img {
                        transform: scale(1.05);
                    }
                    
                    .hero-logo {
                        max-height: 120px;
                        margin-bottom: 1.5rem;
                        filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.1));
                    }
                    
                    .hero-title {
                        font-size: 3rem;
                        font-weight: 700;
                        margin-bottom: 1.5rem;
                        line-height: 1.2;
                    }
                    
                    .hero-subtitle {
                        font-size: 1.2rem;
                        margin-bottom: 2.5rem;
                        line-height: 1.6;
                        opacity: 0.9;
                    }
                    
                    .hero-buttons {
                        display: flex;
                        gap: 1.5rem;
                    }
                    
                    .btn-primary {
                        background-color: white;
                        color: var(--quantic-primary);
                        border: none;
                        padding: 0.8rem 2rem;
                        font-weight: 600;
                        border-radius: 50px;
                        transition: all 0.3s ease;
                        display: inline-flex;
                        align-items: center;
                        gap: 0.5rem;
                    }
                    
                    .btn-outline {
                        background-color: transparent;
                        color: white;
                        border: 2px solid white;
                        padding: 0.8rem 2rem;
                        font-weight: 600;
                        border-radius: 50px;
                        transition: all 0.3s ease;
                    }
                    
                    .btn-primary:hover {
                        transform: translateY(-3px);
                        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
                    }
                    
                    .btn-outline:hover {
                        background-color: rgba(255, 255, 255, 0.1);
                        transform: translateY(-3px);
                        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                    }
                    
                    /* Background overlay */
                    .hero::after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: linear-gradient(135deg, rgba(26, 109, 141, 0.85) 0%, rgba(137, 186, 199, 0.85) 100%);
                        z-index: 1;
                    }
                    
                    /* Animation */
                    @keyframes float {
                        0%, 100% {
                            transform: translateY(0);
                        }
                        50% {
                            transform: translateY(-10px);
                        }
                    }
                    
                    .hero-image {
                        animation: float 6s ease-in-out infinite;
                    }
                    
                    /* Responsive Adjustments */
                    @media (max-width: 992px) {
                        .hero-container {
                            flex-direction: column;
                            text-align: center;
                            padding: 4rem 2rem;
                        }
                        
                        .hero-content {
                            padding-right: 0;
                            margin-bottom: 3rem;
                        }
                        
                        .hero-buttons {
                            justify-content: center;
                        }
                        
                        .hero-title {
                            font-size: 2.5rem;
                        }
                    }
                    
                    @media (max-width: 576px) {
                        .hero-buttons {
                            flex-direction: column;
                            gap: 1rem;
                        }
                        
                        .btn-primary, .btn-outline {
                            width: 100%;
                            justify-content: center;
                        }
                    }
                /* About Us Section Styles */
                    .about-section {
                        background-color: #f8fafc;
                        position: relative;
                        overflow: hidden;
                    }
                    
                    .about-section::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="%231a6d8d" fill-opacity="0.03" d="M0,0 L100,0 L100,100 Q50,80 0,100 Z"></path></svg>') no-repeat;
                        background-size: cover;
                        z-index: 0;
                    }
                    
                    .about-image-container {
                        perspective: 1000px;
                    }
                    
                    .about-main-image {
                        transform-style: preserve-3d;
                        transform: rotateY(-5deg);
                        transition: all 0.5s ease;
                        border: 10px solid white;
                    }
                    
                    .about-main-image:hover {
                        transform: rotateY(0deg);
                    }
                    
                    .hover-zoom {
                        transition: transform 0.5s ease;
                    }
                    
                    .about-main-image:hover .hover-zoom {
                        transform: scale(1.05);
                    }
                    
                    .about-badge {
                        transform: translateX(-20px);
                        z-index: 2;
                        width: 150px;
                    }
                    
                    .about-icon {
                        transition: all 0.3s ease;
                    }
                    
                    .about-icon:hover {
                        background-color: var(--quantic-primary) !important;
                        color: white !important;
                        transform: translateY(-5px);
                    }
                    .hover-grow {
                    position: relative;
                    overflow: hidden;
                    transition: all 0.4s ease;
                    display: inline-flex;
                    align-items: center;
                    border: none;
                }
                
                    .hover-grow .btn-text {
                        transition: all 0.4s ease;
                        display: inline-block;
                    }
                    
                    .hover-grow .btn-icon {
                        transition: all 0.4s ease;
                        opacity: 0;
                        transform: translateX(-10px);
                        margin-left: -8px;
                        font-size: 1.2rem;
                    }
                    
                    .hover-grow:hover {
                        transform: translateY(-3px);
                        box-shadow: 0 10px 20px rgba(26, 109, 141, 0.2) !important;
                    }
                    
                    .hover-grow:hover .btn-text {
                        transform: translateX(-5px);
                    }
                    
                    .hover-grow:hover .btn-icon {
                        opacity: 1;
                        transform: translateX(5px);
                        margin-left: 8px;
                    }
                    
                    /* Pulse animation on hover */
                    @keyframes pulse {
                        0% { box-shadow: 0 0 0 0 rgba(26, 109, 141, 0.4); }
                        70% { box-shadow: 0 0 0 10px rgba(26, 109, 141, 0); }
                        100% { box-shadow: 0 0 0 0 rgba(26, 109, 141, 0); }
                    }
                    
                    .hover-grow:hover::after {
                        content: '';
                        position: absolute;
                        border-radius: 50px;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        animation: pulse 1.5s infinite;
                    }
                    
                    @media (max-width: 992px) {
                        .about-badge {
                            transform: translate(-20px, 20px);
                        }
                        
                        .ps-lg-5 {
                            padding-left: 0 !important;
                        }
                    }
                    /* Services Section Styles */
                        .services-section {
                            position: relative;
                            overflow: hidden;
                        }
                        
                        .services-section::before {
                            content: '';
                            position: absolute;
                            bottom: 0;
                            left: 0;
                            width: 100%;
                            height: 50%;
                            background: linear-gradient(to top, rgba(26, 109, 141, 0.03), transparent);
                            z-index: 0;
                        }
                        
                        .service-item {
                            display: flex;
                            flex-direction: column;
                        }
                        
                        .service-card {
                            transition: all 0.3s ease;
                            cursor: pointer;
                            border-radius: 12px !important;
                            background-color: white;
                            flex: 1;
                        }
                        
                        .service-card:hover {
                            transform: translateY(-5px);
                            box-shadow: 0 10px 25px rgba(26, 109, 141, 0.1) !important;
                        }
                        
                        .service-icon {
                            transition: all 0.3s ease;
                        }
                        
                        .service-card:hover .service-icon {
                            background-color: var(--quantic-primary) !important;
                            color: white !important;
                            transform: rotate(10deg) scale(1.1);
                        }
                        
                        .service-details {
                            width: 100%;
                            z-index: 2;
                            position: relative;
                        }
                        
                        .service-details .card {
                            margin-top: 15px;
                            border-radius: 12px !important;
                        }
                        
                        .packages-grid {
                            display: grid;
                            grid-template-columns: 1fr;
                            gap: 1rem;
                        }
                        
                        .package-card {
                            transition: all 0.3s ease;
                            border-radius: 10px !important;
                        }
                        
                        .package-card:hover {
                            transform: translateY(-3px);
                            box-shadow: 0 8px 15px rgba(26, 109, 141, 0.1) !important;
                        }
                        
                        /* Animation for service details */
                        .service-details.collapsing {
                            transition: height 0.25s ease;
                        }
                        
                        /* Mobile optimization */
                        @media (max-width: 767.98px) {
                            .service-item {
                                margin-bottom: 1.5rem;
                            }
                            
                            .service-details .card {
                                margin-top: 10px;
                            }
                        }
                
                        .contact-section {
                            background-color: #f8fafc;
                            position: relative;
                        }
                
                .contact-section::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="%231a6d8d" fill-opacity="0.03" d="M0,100 L100,0 L100,100 Z"></path></svg>') no-repeat;
                    background-size: cover;
                    z-index: 0;
                }
                
                .contact-icon {
                    transition: all 0.3s ease;
                }
                
                .contact-icon:hover {
                    background-color: var(--quantic-primary) !important;
                    color: white !important;
                    transform: rotate(10deg) scale(1.1);
                }
                
                .form-control {
                    border: 1px solid #dee2e6;
                    padding: 0.75rem 1rem;
                    transition: all 0.3s ease;
                }
                
                .form-control:focus {
                    border-color: var(--quantic-primary);
                    box-shadow: 0 0 0 0.25rem rgba(26, 109, 141, 0.25);
                }
                
                .btn-success {
                    background-color: #25D366;
                    border-color: #25D366;
                    transition: all 0.3s ease;
                }
                
                .btn-success:hover {
                    background-color: #128C7E;
                    border-color: #128C7E;
                    transform: translateY(-3px);
                    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                }
                
                iframe {
                    min-height: 100%;
                }
                
                @media (max-width: 767.98px) {
                    .ratio-1x1 {
                        --bs-aspect-ratio: 75%;
                    }
                    
                    .contact-section::before {
                        background-size: 100% 50%;
                    }
                }
                /* Custom Styles for Enhanced Modal */
            .btn-group-pills .btn-pill {
                border-radius: 50px !important;
                margin: 0 5px;
                transition: all 0.3s ease;
                border: 1px solid #dee2e6;
                background: white;
            }
            
            .btn-group-pills .btn-pill.active {
                background: var(--quantic-primary);
                color: white;
                border-color: var(--quantic-primary);
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(26, 109, 141, 0.2);
            }
            
            .portfolio-card {
                transition: all 0.3s ease;
                border-radius: 12px !important;
            }
            
            .portfolio-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(26, 109, 141, 0.15) !important;
            }
            
            .portfolio-image-wrapper {
                position: relative;
                overflow: hidden;
                border-radius: 12px 12px 0 0 !important;
            }
            
            .portfolio-image {
                transition: transform 0.5s ease;
            }
            
            .portfolio-hover-content {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, rgba(26, 109, 141, 0.85) 0%, rgba(137, 186, 199, 0.85) 100%);
                opacity: 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 2rem;
                transition: opacity 0.3s ease;
            }
            
            .portfolio-card:hover .portfolio-hover-content {
                opacity: 1;
            }
            
            .portfolio-card:hover .portfolio-image {
                transform: scale(1.05);
            }
            
            #lightboxModal .modal-content {
                background: rgba(0,0,0,0.8);
                backdrop-filter: blur(5px);
            }
    </style>
</head>
<body>
   <?php include("partials/navigation.php") ?>
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Connectivity Unmatched</h1>
                <p class="hero-subtitle">
                    Providing fast, dependable, and cost-effective solutions for homes and businesses alike. 
                    More than just a service provider, we're your trusted partner in the digital world.
                </p>
                <div class="hero-buttons">
                    <a href="https://api.whatsapp.com/send?phone=254738477554&text=Hi,I am requesting for a Wifi Installation today." 
                       class="btn btn-primary">
                       <i class="bi bi-whatsapp"></i> Request Installation
                    </a>
                    <a href="#services" class="btn btn-outline">Learn More →</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="imgs/Img1.jpg" alt="Quantic Networks Connectivity">
            </div>
        </div>
    </section>
    <!-- About Us Section -->
    <section id="about" class="about-section py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <!-- Image Column -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about-image-container position-relative">
                        <div class="about-main-image overflow-hidden rounded-4 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                                alt="Quantic Networks Team" 
                                class="img-fluid w-100 hover-zoom">
                        </div>
                        <div class="about-badge bg-primary text-white p-4 rounded-4 shadow position-absolute bottom-0 start-0 translate-middle-y">
                            <h3 class="mb-0">5+ Years</h3>
                            <p class="mb-0">Industry Experience</p>
                        </div>
                    </div>
                </div>

            <!-- Content Column -->
            <div class="col-lg-6">
                <div class="ps-lg-5">
                    <span class="text-primary fw-bold mb-2 d-block">ABOUT OUR COMPANY</span>
                    <h2 class="display-5 fw-bold mb-4">Your Trusted Connectivity Partner</h2>
                    
                    <div class="about-features mb-4">
                        <div class="d-flex mb-3">
                            <div class="about-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 me-4">
                                <i class="bi bi-lightning-charge-fill fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-2">Reliable Infrastructure</h4>
                                <p class="mb-0 text-muted">Enterprise-grade network backbone with 99.9% uptime guarantee</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-3">
                            <div class="about-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 me-4">
                                <i class="bi bi-people-fill fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-2">Customer-Centric Approach</h4>
                                <p class="mb-0 text-muted">Dedicated support team available 24/7 to resolve your issues</p>
                            </div>
                        </div>
                        
                        <div class="d-flex">
                            <div class="about-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 me-4">
                                <i class="bi bi-shield-check fs-3"></i>
                            </div>
                            <div>
                                <h4 class="mb-2">Future-Ready Solutions</h4>
                                <p class="mb-0 text-muted">Continuously upgrading our technology to serve you better</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="#contact" class="btn btn-primary btn-lg px-4 mt-3 hover-grow">
                        <span class="btn-text">Get In Touch</span>
                        <i class="bi bi-arrow-right btn-icon"></i>
                    </a>
                </div>
            </div>
        </div>
     </div>
    </section>
<!-- Services Section -->
<section id="services" class="services-section py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <span class="text-primary fw-bold mb-2 d-block">Services</span>
            <h2 class="display-5 fw-bold mb-3">Comprehensive Solutions</h2>
            <p class="lead text-muted mx-auto" style="max-width: 700px;">Tailored to your needs, from connectivity, to infrastructure, to cutting-edge security and software solutions</p>
        </div>

        <div class="row g-4" id="services-container">
            <!-- LAN Network Infrastructure -->
            <div class="col-md-6 col-lg-4 service-item">
                <div class="service-card card border-0 shadow-sm h-100" data-bs-toggle="collapse" href="#lan-details">
                    <div class="card-body p-4">
                        <div class="service-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 mb-4" style="width: fit-content;">
                            <i class="bi bi-hdd-network fs-3"></i>
                        </div>
                        <h3 class="h4 mb-3">LAN Network Infrastructure</h3>
                        <p class="text-muted mb-4">Structured cabling and network optimization for seamless connectivity.</p>
                        <div class="d-flex align-items-center">
                            <span class="text-primary fw-bold me-2">Learn more</span>
                            <i class="bi bi-arrow-right-short fs-5"></i>
                        </div>
                    </div>
                </div>
                <div class="service-details collapse" id="lan-details" data-parent="#services-container">
                    <div class="card mt-3 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="mb-4">Our LAN Packages</h4>
                            <div class="packages-grid">
                                <!-- NYATI Plan -->
                                <div class="package-card bg-white p-4 rounded-3 mb-3 shadow-sm">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">NYATI Plan</h5>
                                        <span class="badge bg-primary bg-opacity-10 text-primary">7 Mbps</span>
                                    </div>
                                    <h3 class="text-primary mb-3">KES 1,500 <small class="text-muted fs-6">/month</small></h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Reliable speeds</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Perfect for browsing</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Unlimited data</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Ideal for 1-2 devices</li>
                                    </ul>
                                </div>
                                
                                <!-- NDOVU Plan -->
                                <div class="package-card bg-white p-4 rounded-3 mb-3 shadow-sm border-primary border-2">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">NDOVU Plan</h5>
                                        <span class="badge bg-primary text-white">10 Mbps</span>
                                    </div>
                                    <h3 class="text-primary mb-3">KES 1,850 <small class="text-muted fs-6">/month</small></h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Enhanced performance</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Great for streaming</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Unlimited data</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Ideal for 3-4 devices</li>
                                    </ul>
                                </div>
                                
                                <!-- CHUI Plan -->
                                <div class="package-card bg-white p-4 rounded-3 shadow-sm">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="mb-0">CHUI Plan</h5>
                                        <span class="badge bg-primary bg-opacity-10 text-primary">14 Mbps</span>
                                    </div>
                                    <h3 class="text-primary mb-3">KES 1,999 <small class="text-muted fs-6">/month</small></h3>
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Seamless HD streaming</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Perfect for remote work</li>
                                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i>Unlimited data</li>
                                        <li><i class="bi bi-check-circle-fill text-primary me-2"></i>Ideal for 5-7 devices</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-center mt-4">
                                <a href="https://api.whatsapp.com/send?phone=254738477554" class="btn btn-outline-primary px-4">
                                    <i class="bi bi-whatsapp me-2"></i>Request Installation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Network & Tech Accessories Sales -->
            <div class="col-md-6 col-lg-4 service-item">
                <div class="service-card card border-0 shadow-sm h-100" data-bs-toggle="collapse" href="#accessories-details">
                    <div class="card-body p-4">
                        <div class="service-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 mb-4" style="width: fit-content;">
                            <i class="bi bi-cart fs-3"></i>
                        </div>
                        <h3 class="h4 mb-3">Network & Tech Accessories</h3>
                        <p class="text-muted mb-4">High-quality routers, modems, and essential tech gadgets.</p>
                        <div class="d-flex align-items-center">
                            <span class="text-primary fw-bold me-2">Learn more</span>
                            <i class="bi bi-arrow-right-short fs-5"></i>
                        </div>
                    </div>
                </div>
                <div class="service-details collapse" id="accessories-details" data-parent="#services-container">
                    <div class="card mt-3 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="mb-4">Available Accessories</h4>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">Routers</h5>
                                        <p class="text-muted small mb-0">High-performance wireless routers</p>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">Modems</h5>
                                        <p class="text-muted small mb-0">Latest modem technology</p>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">Ethernet Cables</h5>
                                        <p class="text-muted small mb-0">Cat6/Cat7 shielded cables</p>
                                    </div>
                                </div>
                                <div class="col-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">WiFi Extenders</h5>
                                        <p class="text-muted small mb-0">Boost your network coverage</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="https://api.whatsapp.com/send?phone=254738477554" class="btn btn-outline-primary px-4">
                                    <i class="bi bi-whatsapp me-2"></i>Inquire About Products
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CCTV Installation -->
            <div class="col-md-6 col-lg-4 service-item">
                <div class="service-card card border-0 shadow-sm h-100" data-bs-toggle="collapse" href="#cctv-details">
                    <div class="card-body p-4">
                        <div class="service-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 mb-4" style="width: fit-content;">
                            <i class="bi bi-camera-video fs-3"></i>
                        </div>
                        <h3 class="h4 mb-3">CCTV Installation</h3>
                        <p class="text-muted mb-4">Advanced surveillance solutions for security.</p>
                        <div class="d-flex align-items-center">
                            <span class="text-primary fw-bold me-2">Learn more</span>
                            <i class="bi bi-arrow-right-short fs-5"></i>
                        </div>
                    </div>
                </div>
                <div class="service-details collapse" id="cctv-details" data-parent="#services-container">
                    <div class="card mt-3 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="mb-4">CCTV Solutions</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">Residential</h5>
                                        <ul class="text-muted small mb-0 ps-3">
                                            <li>4-8 camera systems</li>
                                            <li>Night vision</li>
                                            <li>Mobile monitoring</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">Commercial</h5>
                                        <ul class="text-muted small mb-0 ps-3">
                                            <li>8-32 camera systems</li>
                                            <li>4K resolution</li>
                                            <li>Cloud storage</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="https://api.whatsapp.com/send?phone=254738477554" class="btn btn-outline-primary px-4">
                                    <i class="bi bi-whatsapp me-2"></i>Get Security Consultation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Biometric Systems -->
            <div class="col-md-6 col-lg-4 service-item">
                <div class="service-card card border-0 shadow-sm h-100" data-bs-toggle="collapse" href="#biometric-details">
                    <div class="card-body p-4">
                        <div class="service-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 mb-4" style="width: fit-content;">
                            <i class="bi bi-fingerprint fs-3"></i>
                        </div>
                        <h3 class="h4 mb-3">Biometric Systems</h3>
                        <p class="text-muted mb-4">Secure access control with advanced verification.</p>
                        <div class="d-flex align-items-center">
                            <span class="text-primary fw-bold me-2">Learn more</span>
                            <i class="bi bi-arrow-right-short fs-5"></i>
                        </div>
                    </div>
                </div>
                <div class="service-details collapse" id="biometric-details" data-parent="#services-container">
                    <div class="card mt-3 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="mb-4">Biometric Solutions</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">Fingerprint</h5>
                                        <ul class="text-muted small mb-0 ps-3">
                                            <li>Time & attendance</li>
                                            <li>Access control</li>
                                            <li>Multi-user support</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">Facial Recognition</h5>
                                        <ul class="text-muted small mb-0 ps-3">
                                            <li>Contactless entry</li>
                                            <li>High-speed verification</li>
                                            <li>Anti-spoofing technology</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="https://api.whatsapp.com/send?phone=254738477554" class="btn btn-outline-primary px-4">
                                    <i class="bi bi-whatsapp me-2"></i>Request Demo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TV Mounting -->
            <div class="col-md-6 col-lg-4 service-item">
                <div class="service-card card border-0 shadow-sm h-100" data-bs-toggle="collapse" href="#tv-details">
                    <div class="card-body p-4">
                        <div class="service-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 mb-4" style="width: fit-content;">
                            <i class="bi bi-tv fs-3"></i>
                        </div>
                        <h3 class="h4 mb-3">TV Mounting</h3>
                        <p class="text-muted mb-4">Professional installations for optimal viewing.</p>
                        <div class="d-flex align-items-center">
                            <span class="text-primary fw-bold me-2">Learn more</span>
                            <i class="bi bi-arrow-right-short fs-5"></i>
                        </div>
                    </div>
                </div>
                <div class="service-details collapse" id="tv-details" data-parent="#services-container">
                    <div class="card mt-3 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="mb-4">TV Mounting Options</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">Basic Mounting</h5>
                                        <ul class="text-muted small mb-0 ps-3">
                                            <li>Up to 55" screens</li>
                                            <li>Fixed position</li>
                                            <li>Cable management</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">Premium Mounting</h5>
                                        <ul class="text-muted small mb-0 ps-3">
                                            <li>Up to 85" screens</li>
                                            <li>Full-motion articulating</li>
                                            <li>Wall reinforcement</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="https://api.whatsapp.com/send?phone=254738477554" class="btn btn-outline-primary px-4">
                                    <i class="bi bi-whatsapp me-2"></i>Schedule Installation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Software Development -->
            <div class="col-md-6 col-lg-4 service-item">
                <div class="service-card card border-0 shadow-sm h-100" data-bs-toggle="collapse" href="#software-details">
                    <div class="card-body p-4">
                        <div class="service-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 mb-4" style="width: fit-content;">
                            <i class="bi bi-code-slash fs-3"></i>
                        </div>
                        <h3 class="h4 mb-3">Software Development</h3>
                        <p class="text-muted mb-4">Custom solutions for your business needs.</p>
                        <div class="d-flex align-items-center">
                            <span class="text-primary fw-bold me-2">Learn more</span>
                            <i class="bi bi-arrow-right-short fs-5"></i>
                        </div>
                    </div>
                </div>
                <div class="service-details collapse" id="software-details" data-parent="#services-container">
                    <div class="card mt-3 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="mb-4">Development Services</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">Web Applications</h5>
                                        <ul class="text-muted small mb-0 ps-3">
                                            <li>Responsive design</li>
                                            <li>E-commerce solutions</li>
                                            <li>CMS development</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">Business Systems</h5>
                                        <ul class="text-muted small mb-0 ps-3">
                                            <li>Inventory management</li>
                                            <li>CRM solutions</li>
                                            <li>ERP integration</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="https://api.whatsapp.com/send?phone=254738477554" class="btn btn-outline-primary px-4">
                                    <i class="bi bi-whatsapp me-2"></i>Discuss Project
                                </a>
                                <a href="portfolio.html" class="btn btn-primary px-4">
                                    <i class="bi bi-laptop me-2"></i>View Projects
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Graphic Design Service -->
            <div class="col-md-6 col-lg-4 service-item">
                <div class="service-card card border-0 shadow-sm h-100" data-bs-toggle="collapse" href="#graphic-design-details">
                    <div class="card-body p-4">
                        <div class="service-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 mb-4" style="width: fit-content;">
                            <i class="bi bi-brush fs-3"></i>
                        </div>
                        <h3 class="h4 mb-3">Graphic Design</h3>
                        <p class="text-muted mb-4">Professional designs for posters, certificates, and marketing materials.</p>
                        <div class="d-flex align-items-center">
                            <span class="text-primary fw-bold me-2">Learn more</span>
                            <i class="bi bi-arrow-right-short fs-5"></i>
                        </div>
                    </div>
                </div>
                <div class="service-details collapse" id="graphic-design-details" data-parent="#services-container">
                    <div class="card mt-3 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h4 class="mb-4">Graphic Design Services</h4>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">Print Materials</h5>
                                        <ul class="text-muted small mb-0 ps-3">
                                            <li>Business cards</li>
                                            <li>Brochures & flyers</li>
                                            <li>Posters & banners</li>
                                            <li>Certificates</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="bg-white p-3 rounded-3 shadow-sm h-100">
                                        <h5 class="text-primary">Digital Designs</h5>
                                        <ul class="text-muted small mb-0 ps-3">
                                            <li>Social media graphics</li>
                                            <li>Email templates</li>
                                            <li>Presentation designs</li>
                                            <li>Logo creation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <a href="https://api.whatsapp.com/send?phone=254738477554" class="btn btn-outline-primary px-4 me-2">
                                    <i class="bi bi-whatsapp me-2"></i>Request Design
                                </a>
                                <button type="button" class="btn btn-primary px-4" data-bs-toggle="modal" data-bs-target="#graphicDesignPortfolio">
                                    <i class="bi bi-images me-2"></i>View Samples
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Section -->
<section id="contact" class="contact-section py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mb-5">
                <span class="text-primary fw-bold mb-2 d-block">GET IN TOUCH</span>
                <h2 class="display-5 fw-bold mb-3">Contact Quantic Networks</h2>
                <p class="lead text-muted">Reach out for inquiries, support, or to schedule a service installation.</p>
            </div>
        </div>

        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4 p-lg-5">
                        <h3 class="h4 mb-4">Contact Information</h3>
                        
                        <div class="d-flex mb-4">
                            <div class="contact-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 me-4">
                                <i class="bi bi-telephone fs-3"></i>
                            </div>
                            <div>
                                <h4 class="h5 mb-1">Phone</h4>
                                <p class="mb-0">
                                    <a href="tel:+254738477554" class="text-decoration-none">+254 738 477554</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="contact-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 me-4">
                                <i class="bi bi-envelope fs-3"></i>
                            </div>
                            <div>
                                <h4 class="h5 mb-1">Email</h4>
                                <p class="mb-0">
                                    <a href="mailto:info@quanticnetworks.com" class="text-decoration-none">info@quanticnetworks.com</a>
                                </p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="contact-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 me-4">
                                <i class="bi bi-geo-alt fs-3"></i>
                            </div>
                            <div>
                                <h4 class="h5 mb-1">Address</h4>
                                <p class="mb-0">Bishop Ireri Rd Kasarani - Mwiki Rd<br>P.O. Box 19753 - 00100<br>Nairobi, Kenya</p>
                            </div>
                        </div>
                        
                        <div class="d-flex">
                            <div class="contact-icon bg-primary bg-opacity-10 text-primary rounded-3 p-3 me-4">
                                <i class="bi bi-clock fs-3"></i>
                            </div>
                            <div>
                                <h4 class="h5 mb-1">Business Hours</h4>
                                <p class="mb-0">Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 9:00 AM - 2:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form & Map -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <!-- Contact Form -->
                            <div class="col-md-6 p-4 p-lg-5">
                                <h3 class="h4 mb-4">Send Us a Message</h3>
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="John Doe">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" placeholder="john@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" placeholder="+254 700 000000">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea class="form-control" id="message" rows="4" placeholder="Your message here..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="bi bi-send me-2"></i> Send Message
                                    </button>
                                </form>
                            </div>
                            
                            <!-- Map -->
                            <div class="col-md-6">
                                <div class="h-100 ratio ratio-1x1">
                                    <iframe 
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63818.649132667254!2d36.85557931436593!3d-1.213907417065555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f16e9c426c8f1%3A0x24a73cfce1101e3c!2sKasarani%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1708850000000" 
                                        style="border:0;" 
                                        allowfullscreen="" 
                                        loading="lazy" 
                                        referrerpolicy="no-referrer-when-downgrade"
                                        class="rounded-end">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- WhatsApp CTA -->
        <div class="text-center mt-5">
            <a href="https://api.whatsapp.com/send?phone=254738477554&text=Hello, I am asking about" class="btn btn-success btn-lg px-4">
                <i class="bi bi-whatsapp me-2"></i> Chat on WhatsApp
            </a>
        </div>
    </div>
</section>
<!-- Graphic Design Portfolio Modal -->
<div class="modal fade" id="graphicDesignPortfolio" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-md-down modal-xl modal-dialog-centered">
    <div class="modal-content border-0" style="background-color: #f8fafc;">
      <div class="modal-header border-0 position-relative">
        <div class="w-100 text-center">
          <h2 class="modal-title display-5 fw-bold text-primary">Our Design Gallery</h2>
          <p class="text-muted">Explore our creative work</p>
        </div>
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body p-4">
        <!-- Animated Filter Tabs -->
        <div class="d-flex justify-content-center mb-5">
          <div class="btn-group btn-group-pills shadow-sm" role="group">
            <button type="button" class="btn btn-pill active" data-filter="all">
              <i class="bi bi-grid-fill me-2"></i>All
            </button>
            <button type="button" class="btn btn-pill" data-filter="posters">
              <i class="bi bi-file-image me-2"></i>Posters
            </button>
            <button type="button" class="btn btn-pill" data-filter="certificates">
              <i class="bi bi-award me-2"></i>Certificates
            </button>
            <button type="button" class="btn btn-pill" data-filter="branding">
              <i class="bi bi-brush me-2"></i>Branding
            </button>
          </div>
        </div>
        
        <!-- Interactive Portfolio Grid -->
        <div class="row g-4 portfolio-grid" id="masonry-grid">
          <!-- Sample 1 - Poster -->
          <div class="col-lg-4 col-md-6 portfolio-item" data-category="posters">
            <div class="portfolio-card card border-0 shadow-sm overflow-hidden h-100">
              <div class="portfolio-image-wrapper">
                <img src="Images/QN002.jpg" 
                     class="img-fluid w-100 portfolio-image" 
                     alt="Music Festival Poster"
                     loading="lazy">
                <div class="portfolio-hover-content">
                  <h5 class="text-white fw-bold">Brand Ads</h5>
                  <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-sm btn-light zoom-btn" data-img="https://source.unsplash.com/random/600x800/?poster,design">
                      <i class="bi bi-zoom-in"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-light view-details-btn">
                      Details
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-primary bg-opacity-10 text-primary">Poster</span>
                  <small class="text-muted">2023</small>
                </div>
              </div>
            </div>
          </div>
           <!-- Sample 1 - Poster -->
          <div class="col-lg-4 col-md-6 portfolio-item" data-category="posters">
            <div class="portfolio-card card border-0 shadow-sm overflow-hidden h-100">
              <div class="portfolio-image-wrapper">
                <img src="Images/QN003.jpg" 
                     class="img-fluid w-100 portfolio-image" 
                     alt="Music Festival Poster"
                     loading="lazy">
                <div class="portfolio-hover-content">
                  <h5 class="text-white fw-bold">Brand Ads</h5>
                  <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-sm btn-light zoom-btn" data-img="https://source.unsplash.com/random/600x800/?poster,design">
                      <i class="bi bi-zoom-in"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-light view-details-btn">
                      Details
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-primary bg-opacity-10 text-primary">Poster</span>
                  <small class="text-muted">2023</small>
                </div>
              </div>
            </div>
          </div>
           <!-- Sample 1 - Poster -->
          <div class="col-lg-4 col-md-6 portfolio-item" data-category="posters">
            <div class="portfolio-card card border-0 shadow-sm overflow-hidden h-100">
              <div class="portfolio-image-wrapper">
                <img src="Images/QN013.jpg" 
                     class="img-fluid w-100 portfolio-image" 
                     alt="Music Festival Poster"
                     loading="lazy">
                <div class="portfolio-hover-content">
                  <h5 class="text-white fw-bold">Brand Ads</h5>
                  <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-sm btn-light zoom-btn" data-img="https://source.unsplash.com/random/600x800/?poster,design">
                      <i class="bi bi-zoom-in"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-light view-details-btn">
                      Details
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-primary bg-opacity-10 text-primary">Poster</span>
                  <small class="text-muted">2023</small>
                </div>
              </div>
            </div>
          </div>
           <!-- Sample 1 - Poster -->
          <div class="col-lg-4 col-md-6 portfolio-item" data-category="posters">
            <div class="portfolio-card card border-0 shadow-sm overflow-hidden h-100">
              <div class="portfolio-image-wrapper">
                <img src="Images/QN005.jpg" 
                     class="img-fluid w-100 portfolio-image" 
                     alt="Music Festival Poster"
                     loading="lazy">
                <div class="portfolio-hover-content">
                  <h5 class="text-white fw-bold">Brand Ads</h5>
                  <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-sm btn-light zoom-btn" data-img="https://source.unsplash.com/random/600x800/?poster,design">
                      <i class="bi bi-zoom-in"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-light view-details-btn">
                      Details
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-primary bg-opacity-10 text-primary">Poster</span>
                  <small class="text-muted">2023</small>
                </div>
              </div>
            </div>
          </div>
           <!-- Sample 1 - Poster -->
          <div class="col-lg-4 col-md-6 portfolio-item" data-category="posters">
            <div class="portfolio-card card border-0 shadow-sm overflow-hidden h-100">
              <div class="portfolio-image-wrapper">
                <img src="Images/QN005.jpg" 
                     class="img-fluid w-100 portfolio-image" 
                     alt="Music Festival Poster"
                     loading="lazy">
                <div class="portfolio-hover-content">
                  <h5 class="text-white fw-bold">Brand Ads</h5>
                  <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-sm btn-light zoom-btn" data-img="https://source.unsplash.com/random/600x800/?poster,design">
                      <i class="bi bi-zoom-in"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-light view-details-btn">
                      Details
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-primary bg-opacity-10 text-primary">Poster</span>
                  <small class="text-muted">2023</small>
                </div>
              </div>
            </div>
          </div>
           <!-- Sample 1 - Poster -->
          <div class="col-lg-4 col-md-6 portfolio-item" data-category="posters">
            <div class="portfolio-card card border-0 shadow-sm overflow-hidden h-100">
              <div class="portfolio-image-wrapper">
                <img src="Images/QN006.jpg" 
                     class="img-fluid w-100 portfolio-image" 
                     alt="Music Festival Poster"
                     loading="lazy">
                <div class="portfolio-hover-content">
                  <h5 class="text-white fw-bold">Brand Ads</h5>
                  <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-sm btn-light zoom-btn" data-img="https://source.unsplash.com/random/600x800/?poster,design">
                      <i class="bi bi-zoom-in"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-light view-details-btn">
                      Details
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-primary bg-opacity-10 text-primary">Poster</span>
                  <small class="text-muted">2023</small>
                </div>
              </div>
            </div>
          </div>
           <!-- Sample 1 - Poster -->
          <div class="col-lg-4 col-md-6 portfolio-item" data-category="posters">
            <div class="portfolio-card card border-0 shadow-sm overflow-hidden h-100">
              <div class="portfolio-image-wrapper">
                <img src="Images/QN009.jpg" 
                     class="img-fluid w-100 portfolio-image" 
                     alt="Music Festival Poster"
                     loading="lazy">
                <div class="portfolio-hover-content">
                  <h5 class="text-white fw-bold">Brand Ads</h5>
                  <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-sm btn-light zoom-btn" data-img="https://source.unsplash.com/random/600x800/?poster,design">
                      <i class="bi bi-zoom-in"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-light view-details-btn">
                      Details
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-primary bg-opacity-10 text-primary">Poster</span>
                  <small class="text-muted">2023</small>
                </div>
              </div>
            </div>
          </div>
           <!-- Sample 1 - Poster -->
          <div class="col-lg-4 col-md-6 portfolio-item" data-category="posters">
            <div class="portfolio-card card border-0 shadow-sm overflow-hidden h-100">
              <div class="portfolio-image-wrapper">
                <img src="Images/QN011.jpg" 
                     class="img-fluid w-100 portfolio-image" 
                     alt="Music Festival Poster"
                     loading="lazy">
                <div class="portfolio-hover-content">
                  <h5 class="text-white fw-bold">Brand Ads</h5>
                  <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-sm btn-light zoom-btn" data-img="https://source.unsplash.com/random/600x800/?poster,design">
                      <i class="bi bi-zoom-in"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-light view-details-btn">
                      Details
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-primary bg-opacity-10 text-primary">Poster</span>
                  <small class="text-muted">2023</small>
                </div>
              </div>
            </div>
          </div>
               <!-- Sample 1 - Poster -->
          <div class="col-lg-4 col-md-6 portfolio-item" data-category="posters">
            <div class="portfolio-card card border-0 shadow-sm overflow-hidden h-100">
              <div class="portfolio-image-wrapper">
                <img src="Images/QN014.jpg" 
                     class="img-fluid w-100 portfolio-image" 
                     alt="Music Festival Poster"
                     loading="lazy">
                <div class="portfolio-hover-content">
                  <h5 class="text-white fw-bold">Brand Ads</h5>
                  <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-sm btn-light zoom-btn" data-img="https://source.unsplash.com/random/600x800/?poster,design">
                      <i class="bi bi-zoom-in"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-light view-details-btn">
                      Details
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-primary bg-opacity-10 text-primary">Poster</span>
                  <small class="text-muted">2023</small>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Sample 2 - Certificate -->
          <div class="col-lg-4 col-md-6 portfolio-item" data-category="certificates">
            <div class="portfolio-card card border-0 shadow-sm overflow-hidden h-100">
              <div class="portfolio-image-wrapper">
                <img src="/Images/CertificateTemplateDesign3.jpg" 
                     class="img-fluid w-100 portfolio-image" 
                     alt="Achievement Certificate"
                     loading="lazy">
                <div class="portfolio-hover-content">
                  <h5 class="text-white fw-bold">Achievement Award</h5>
                  <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-sm btn-light zoom-btn" data-img="/Images/CertificateTemplateDesign3.jpg">
                      <i class="bi bi-zoom-in"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-light view-details-btn">
                      Details
                    </button>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-white border-0">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-primary bg-opacity-10 text-primary">Certificate</span>
                  <small class="text-muted">2024</small>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Add more samples following the same pattern -->
        </div>
      </div>
      
      <div class="modal-footer border-0 justify-content-center">
        <button class="btn btn-primary px-4" data-bs-dismiss="modal">
          <i class="bi bi-check-circle me-2"></i>Got Inspired? Let's Create Yours
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Lightbox Modal -->
<div class="modal fade" id="lightboxModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-header border-0">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="" id="lightboxImage" class="img-fluid rounded-3 shadow-lg" style="max-height: 80vh;">
        <p id="lightboxCaption" class="text-white mt-3"></p>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Update active nav link on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');
            
            window.addEventListener('scroll', function() {
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    
                    if (pageYOffset >= (sectionTop - 300)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            });
            
            // Also update on click for smooth scrolling
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    navLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
    <script>
        // Add smooth scrolling to all links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Parallax effect for hero image
        window.addEventListener('scroll', function() {
            const hero = document.querySelector('.hero');
            const scrollPosition = window.pageYOffset;
            hero.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
        });
    </script>
   <script>
       // Initialize Bootstrap collapses and handle mobile behavior
       document.addEventListener('DOMContentLoaded', function() {
           // Automatically scroll to expanded content on mobile
           document.querySelectorAll('.service-details').forEach(detail => {
               detail.addEventListener('shown.bs.collapse', function() {
                   if (window.innerWidth < 992) {
                       setTimeout(() => {
                           this.scrollIntoView({
                               behavior: 'smooth',
                               block: 'nearest'
                           });
                       }, 100);
                   }
               });
           });
       });
   </script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterButtons = document.querySelectorAll('[data-filter]');
    filterButtons.forEach(button => {
      button.addEventListener('click', function() {
        filterButtons.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');
        
        const filter = this.getAttribute('data-filter');
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        
        portfolioItems.forEach(item => {
          if (filter === 'all' || item.getAttribute('data-category') === filter) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
    
    // Lightbox functionality
    const zoomButtons = document.querySelectorAll('.zoom-btn');
    const lightboxModal = new bootstrap.Modal(document.getElementById('lightboxModal'));
    
    zoomButtons.forEach(button => {
      button.addEventListener('click', function() {
        const imgSrc = this.getAttribute('data-img');
        const caption = this.closest('.portfolio-card').querySelector('img').alt;
        
        document.getElementById('lightboxImage').src = imgSrc;
        document.getElementById('lightboxCaption').textContent = caption;
        lightboxModal.show();
      });
    });
    
    // View details functionality
    const detailButtons = document.querySelectorAll('.view-details-btn');
    detailButtons.forEach(button => {
      button.addEventListener('click', function() {
        const card = this.closest('.portfolio-card');
        const title = card.querySelector('.portfolio-hover-content h5').textContent;
        const category = card.querySelector('.badge').textContent;
        const year = card.querySelector('.text-muted').textContent;
        
        // You can implement a detailed view modal here
        alert(`Project: ${title}\nCategory: ${category}\nYear: ${year}`);
      });
    });
  });
</script>
</body>
</html>