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
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #1a1a1a;
            transition: background 0.3s ease-in-out;
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
            transition: transform 0.3s;
        }
        .navbar-brand:hover {
            transform: scale(1.1);
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
        .hero {
            background: linear-gradient(120deg, #6e57e0, #ff8c00);
            color: white;
            text-align: center;
            padding: 50px 20px;
            border-radius: 0 0 50px 50px;
            animation: fadeInDown 1s ease-in-out;
        }
        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
            animation: fadeInUp 1.5s ease-in-out;
        }
        .btn-dark {
            background-color: #ff007f;
            border: none;
            padding: 10px 20px;
            transition: transform 0.3s, background 0.3s;
        }
        .btn-dark:hover {
            background-color: #e60073;
            transform: scale(1.05);
        }
        .product-card img {
            width: 100%;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }
        .product-card {
            text-align: center;
            padding: 15px;
            transition: transform 0.3s;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
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
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Technoloy</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Order</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Payment</a></li>
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

    <header class="hero">
        <h1>Vì sao Apple là nơi tốt nhất để mua iPhone.</h1>
        <button class="btn btn-dark">Tìm Hiểu</button>
    </header>
    <section class="container my-5">
        <h2 class="text-center">Sản Phẩm Mới Nhất </h2>
        <div class="text-center mb-3">
        <a href="add_product.php" class="btn btn-success">Thêm mới</a>
    </div>
        <div class="row">
            <div class="col-md-3">
                <div class="product-card">
                    <img src="https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16pro__erw9alves2qa_xlarge.png" alt="Phone 16 Pro">
                    <h5>IPhone 16 Pro</h5>
                    <button class="btn btn-primary">Mua ngay</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16__c5bvots96jee_xlarge.png" alt="Phone 2">
                    <h5>IPhone 16</h5>
                    <button class="btn btn-primary">Mua ngay</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_16e__cubm3xoy5qaa_xlarge.png" alt="Phone 3">
                    <h5>IPhone 16e</h5>
                    <button class="btn btn-primary">Mua ngay</button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="product-card">
                    <img src="https://www.apple.com/v/iphone/home/cb/images/overview/select/iphone_15__buwagff0mwwi_xlarge.png" alt="Phone 4">
                    <h5>IPhone 15 </h5>
                    <button class="btn btn-primary">Mua ngay</button>
                </div>
            </div>
        

            <?php
                include '../config/DBconnect.php';
                $sql = "SELECT id, name, price, image_url FROM products ORDER BY id DESC LIMIT 8";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='col-md-3'>";
                        echo "<div class='product-card'>";
                        echo "<img src='" . $row['image_url'] . "' alt='" . $row['name'] . "'>";
                        echo "<h5>" . $row['name'] . "</h5>";
                        echo "<button class='btn btn-primary'>Mua ngay</button>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<p class='text-center'>Không có sản phẩm nào.</p>";
                }
                $conn->close();
            ?>

    </div>
    </section>
    <br>
    <br>
    <br>
    <hr style=" border: 2px solid  #ff007f;">
    <!-- Footer -->
    <footer class="text-center py-3 mt-4">
        &copy; 2025 Shop Điện Thoại. All rights reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
