<?php
session_start();
include '../config/DBconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            
            if ($user['role'] === 'admin') {
                header("Location: home_admin.php");
            } else {
                header("Location: home.php");
            }
            exit();
        } else {
            $error = "Sai mật khẩu!";
        }
    } else {
        $error = "Tên đăng nhập không tồn tại!";
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0d0d0d;
            color: #fff;
        }
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #1a1a1a;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 0, 127, 0.5);
        }
        .btn-custom {
            background: linear-gradient(135deg, #ff007f, #5a00ff);
            border: none;
            color: #fff;
            width: 100%;
        }
        .btn-custom:hover {
            background: linear-gradient(135deg, #5a00ff, #ff007f);
        }
        .form-control {
            background: transparent;
            border: 1px solid #ff007f;
            color: #fff;
        }
        .form-control:focus {
            box-shadow: 0 0 10px #ff007f;
            border-color: #ff007f;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2 class="text-center text-danger">Đăng Nhập</h2>
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="username" class="form-label">Tên đăng nhập</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <?php if (!empty($error)) echo "<p class='text-danger text-center'>$error</p>"; ?>
                <button type="submit" class="btn btn-custom">Đăng nhập</button>
            </form>
        </div>
    </div>
</body>
</html>
