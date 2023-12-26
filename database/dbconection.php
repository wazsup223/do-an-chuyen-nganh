<?php
$servername = "localhost"; // Thay localhost bằng địa chỉ máy chủ MySQL nếu cần thiết
$username = "root"; // Thay your_username bằng tên đăng nhập của bạn
$password = ""; // Thay your_password bằng mật khẩu của bạn
$dbname = "doanweb"; // Thay your_database bằng tên cơ sở dữ liệu bạn đã tạo

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Thiết lập chế độ lỗi để PDO ném ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Kết nối thành công";

    // Các thao tác với cơ sở dữ liệu có thể được thực hiện ở đây
}
catch(PDOException $e) {
    echo "Kết nối không thành công: " . $e->getMessage();
}

// Đóng kết nối
$conn = null;
?>
