<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store</title>
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #0d0d0d;
            color: #fff;
            overflow-x: hidden;
        }
        .navbar {
            background-color: #1a1a1a;
        }
        .banner {
            background-color: #0d0d0d;
            padding: 20px 0;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 24px;
            color: #ff007f;
            display: flex;
            align-items: center;
        }
        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }
        .navbar-nav .nav-link {
            color: #fff;
            font-size: 18px;
            margin-right: 15px;
            transition: color 0.3s ease-in-out;
        }
        .navbar-nav .nav-link:hover {
            color: #ff007f;
        }
        .search-bar {
            background: transparent;
            border: 1px solid #ff007f;
            border-radius: 20px;
            padding: 5px 15px;
            color: #fff;
        }
        .menu-icon {
            background-color: #ff007f;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .hero-section {
            text-align: center;
            padding: 500px 20px 140px 20px;
            background-image: url(https://news.khangz.com/wp-content/uploads/2024/09/iphone-16-pro-max-wifi-7-thumbnail-750x536.jpg);
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }
        .product-card {
            background-color: #1a1a1a;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 15px rgba(255, 0, 127, 0.5);
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .btn-custom {
            background: linear-gradient(135deg, #ff007f, #5a00ff);
            border: none;
            color: #fff;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .btn-custom:hover {
            transform: scale(1.1);
            box-shadow: 0 0 10px rgba(255, 0, 127, 0.7);
        }
        .dropdown-menu {
            background-color: #1a1a1a;
        }
        .dropdown-item {
            color: #fff;
        }
        .dropdown-item:hover {
            background-color: #ff007f;
        }
        .section-title {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-top: 40px;
            color: #ff007f;
            animation: glow 1.5s infinite alternate;
        }
        @keyframes glow {
            0% { text-shadow: 0 0 5px #ff007f; }
            100% { text-shadow: 0 0 15px #ff007f; }
        }
    </style>
    </style>
</head>
<body>
    <!-- Thanh điều hướng -->
    <nav class="navbar navbar-expand-lg navbar-dark banner">
        <div class="container">
        <a class="navbar-brand" href="#">
                <img src="https://i.pinimg.com/236x/fa/5e/67/fa5e67376018e06bd8ffb06b3129a717.jpg" alt="Logo">
                Apple Store
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="hỏme_admin.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Technoloy</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Ca</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Prentiny Estins</a></li>
                </ul>
                <input type="text" class="search-bar mx-3" placeholder="Search">
                <div class="dropdown">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                        <?php if(isset($_SESSION['username'])): ?>
                            <li><span class="dropdown-item">Xin chào,<?php echo $_SESSION['username']; ?>!</span></li>
                            <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                        <?php else: ?>
                            <li><a class="dropdown-item" href="login.php">Đăng nhập</a></li>
                            <li><a class="dropdown-item" href="register.php">Đăng ký</a></li>
                        <?php endif; ?>
                    </ul> 
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section">
        <h1>Khám Phá Công Nghệ Mới Nhất</h1>
        <p>Sản phẩm điện thoại hiện đại với thiết kế đột phá</p>
        <button class="btn btn-custom">Khám Phá Ngay</button>
    </div>

    <!-- Tittle Sản Phẩm Mới Nhất -->
    <div class="container">
        <h2 class="section-title">Sản Phẩm Mới Nhất</h2>
        <hr class="neon-hr">
    </div>

    <div class="slideshow-container">
    <!-- Danh sách sản phẩm -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16pro__erw9alves2qa_xlarge.png" class="img-fluid" alt="Điện thoại">
                    <h5 class="mt-3">iPhone 16 Pro</h5>
                    <p>Giá: 29.000.000đ</p>
                    <button class="btn btn-custom">Mua ngay</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_15__buwagff0mwwi_xlarge.png" class="img-fluid" alt="Điện thoại">
                    <h5 class="mt-3">Iphone 15</h5>
                    <p>Giá: 20.000.000đ</p>
                    <button class="btn btn-custom">Mua ngay</button>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-card">
                    <img src="https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16__c5bvots96jee_xlarge.png" class="img-fluid" alt="Điện thoại">
                    <h5 class="mt-3">Iphone 16</h5>
                    <p>Giá: 23.000.000đ</p>
                    <button class="btn btn-custom">Mua ngay</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3 mt-4">
        &copy; 2025 Shop Điện Thoại. All rights reserved.
    </footer>

    <script>
                document.addEventListener("DOMContentLoaded", function () {
            // Hiệu ứng xuất hiện Hero Section
            const heroSection = document.querySelector(".hero-section");
            heroSection.style.opacity = "1";
            heroSection.style.transform = "translateY(0)";
            
            // Hiệu ứng sản phẩm xuất hiện khi cuộn xuống
            const productCards = document.querySelectorAll(".product-card");
            function revealProducts() {
                productCards.forEach((card, index) => {
                    const rect = card.getBoundingClientRect();
                    if (rect.top < window.innerHeight - 50) {
                        card.style.opacity = "1";
                        card.style.transform = "translateY(0)";
                    }
                });
            }
            window.addEventListener("scroll", revealProducts);
            revealProducts();
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>
