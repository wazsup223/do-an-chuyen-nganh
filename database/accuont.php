<?php
$servername = "localhost"; // Thay localhost bằng địa chỉ máy chủ MySQL nếu cần thiết
$username = "root"; // Thay your_username bằng tên đăng nhập của bạn
$password = ""; // Thay your_password bằng mật khẩu của bạn
$dbname = "csdldienthoai"; // Thay your_database bằng tên cơ sở dữ liệu bạn đã tạo

try {
    // Kết nối vào cơ sở dữ liệu
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Thông tin người dùng
    $username = "example_user";
    $password = password_hash("example_password", PASSWORD_DEFAULT); // Băm mật khẩu với bcrypt
    $email = "example@example.com";

    // SQL query để chèn thông tin người dùng mới vào bảng Users
    $sql = "INSERT INTO Users (username, password, email) VALUES (:username, :password, :email)";
    $stmt = $conn->prepare($sql);

    // Bind các giá trị tham số
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email', $email);

    // Thực hiện câu truy vấn
    $stmt->execute();

    echo "Tài khoản người dùng đã được lưu thành công.";
}
catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

// Đóng kết nối
$conn = null;
?>
