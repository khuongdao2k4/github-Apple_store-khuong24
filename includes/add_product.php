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
        .features {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }
        .feature-box {
            background: white;
            color: black;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            flex: 1;
            margin: 0 10px;
            text-align: center;
        }
        .feature-box i {
            font-size: 30px;
            margin-bottom: 10px;
            display: block;
        }
        .feature-box .highlight {
            color: #007aff;
            font-weight: bold;
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

    <header class="hero">
        <h1>Apple Store tạo nên mọi khác biệt. </h1>
        <h2>Thêm nhiều lý do để mua sắm cùng chúng tôi.</h2>
        <button class="btn btn-dark">Tìm Hiểu</button>
    </header>
    <div class="container features">
        <div class="feature-box">
            <i class="fas fa-dollar-sign" style="color: #34c759;"></i>
            <p>Thanh toán hàng tháng dễ dàng. Bao gồm lựa chọn <span class="highlight">lãi suất 0%</span>.</p>
        </div>
        <div class="feature-box">
            <i class="fas fa-sync-alt" style="color: #007aff;"></i>
            <p><span class="highlight">Đổi thiết bị cũ</span> đủ điều kiện để nhận điểm tín dụng.</p>
        </div>
        <div class="feature-box">
            <i class="fas fa-truck" style="color: #34c759;"></i>
            <p>Giao hàng miễn phí.</p>
        </div>
        <div class="feature-box">
            <i class="fas fa-shopping-bag" style="color: #007aff;"></i>
            <p>Trải nghiệm <span class="highlight">mua sắm cá nhân hóa</span> với ứng dụng.</p>
        </div>
    </div>
    <section class="container my-5">
        <form action="add_sp.php" method="post">
        <?php if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
        <section class="container my-5">
            <h2 class="text-center">Thêm Sản Phẩm</h2>
            <?php if(isset($_SESSION['success_message'])): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['success_message']; unset($_SESSION['success_message']); ?>
                </div>
            <?php endif; ?>
            <form action="add_product.php" method="post">
                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" name="id" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Giá</label>
                    <input type="number" class="form-control" name="price" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Ảnh minh họa</label>
                    <input type="text" class="form-control" name="image" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Nội dung</label>
                    <textarea class="form-control" name="content" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
            </form>
        </section>
    <?php else: ?>
        <p class="text-center mt-4">Bạn không có quyền truy cập chức năng này.</p>
    <?php endif; ?>
        </form>
    </section>
    <!-- Footer -->
    <footer class="text-center py-3 mt-4">
        &copy; 2025 Shop Điện Thoại. All rights reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
