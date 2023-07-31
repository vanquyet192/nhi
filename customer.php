<?php
session_start();
require("conncet_1.php");

// Truy vấn thông tin cá nhân từ cơ sở dữ liệu dựa trên userId
$userId = $_SESSION['suser'];
$sql = "SELECT * FROM customers WHERE UserId = :userId";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':userId', $userId);
$stmt->execute();
$userInfo = $stmt->fetch();

$name = $userInfo['Name'];
$email = $userInfo['Email'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thông tin cá nhân</title>
</head>
<body>
    <h1>Thông tin cá nhân</h1>
    <p><strong>Họ tên:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
</body>
</html>
