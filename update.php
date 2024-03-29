<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Khai báo thông tin kết nối
$ser = "localhost"; // Server
$u = "root"; // User
$p = ""; // Pass
$db = "b"; // Tên database

// Tạo kết nối CSDL
$conn = new mysqli($ser, $u, $p, $db);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lệnh UPDATE
$sql = "UPDATE test SET HoTen='Linh', SoDT='1234' WHERE Ma=2";

// Thực thi lệnh UPDATE
if ($conn->query($sql) === TRUE) {
    echo "Cập nhật thành công";
} else {
    echo "Lỗi: " . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
