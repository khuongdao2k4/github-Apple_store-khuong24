<?php
session_start();
include '../config/DBconnect.php';
// Xử lý khi form được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image_url'];
    $content = $_POST['content'];

    // Chuẩn bị câu lệnh SQL
    $sql = "INSERT INTO products (id, name, price, image_url, content) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isdss", $id, $name, $price, $image, $content);

    if ($stmt->execute()) {
        echo "<script>alert('Thêm sản phẩm thành công!'); window.location.href='product.php';</script>";
    } else {
        echo "<script>alert('Lỗi khi thêm sản phẩm!');</script>";
    }

    $stmt->close();
}

$conn->close();
?>
