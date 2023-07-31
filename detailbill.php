<!DOCTYPE html>
<html>
<head>
    <title>Thông tin giỏ hàng</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/styleu.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
<style>
    .account_desc {
  font-size: 30px; /* Chỉnh kích thước chữ cho mục "Login" */
}
  .logo-container {
  display: flex;
  justify-content: center;
}

.logo-video {
  width: 300px;
  height: 150px;
}
.navigation {
  background-color: #008B8B;
  padding: 20px;
}

.navigation ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
}

.navigation li {
  margin-right: 50px;
}

.navigation li a {
  color: #ffffff;
  text-decoration: none;
  font-size: 30px;
  font-weight: bold;
}

.navigation li a:hover {
  color: #FFDAB9;
}


.form-heading
		{
	font-size: 35px;
    color: #668B8B;
    text-align: center;
			
		}
.empty-cart {
    text-align: center;
    margin-top: 20px;
}

.empty-cart h2 {
    font-size: 24px;
    color: #333;
}

.empty-cart .continue-shopping {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4caf50;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
    margin-top: 20px;
}

.empty-cart .continue-shopping:hover {
    background-color: #45a049;
}
</style>
</head>
<body>
<div class="wrap">
  <div class="header">
    <div class="headertop_desc">
      <div class="call">
        <p><span>CUSTOMER SUPPORT</span> Hotline <span class="number"> 1900 1508</span></span></p>
      </div>
      <div class="account_desc">
        <ul>
          <li><a href="login.php" style="background-color:#003333;">Logout</a></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <div class="header_top">
      <div class="center">
        <div class="logo-container">
          <video class="logo-video" playsinline autoplay muted loop>
            <source src="images/DONG.mp4" type="video/mp4" >
          </video>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="header_bottom">
    <div class="navigation">
      <ul>
        <li class="active"><a href="HomeU.php">Home</a></li>
        <li><a href="AboutU.php">About</a></li>
        <li><a href="productu.php">Shop</a></li>
        <li><a href="NewsU.php">News</a></li>
        <li><a href="ContactU.php">Contact</a></li>
        <li><a href="SearchU.php">Search</a></li>
      </ul>
    </div>
</br>


<?php
session_start();
require("conncet_1.php");

if (!isset($_SESSION['idBill'])) {
    header("location: cart.php");
    exit;
}

$idBill = $_SESSION['idBill'];
unset($_SESSION['idBill']);

if (empty($_SESSION['cart'])) {
    echo "Giỏ hàng rỗng";
    echo "<a href='result.php'>Về trang quản lý cá nhân</a>";
    exit;
}

$sql = "SELECT * FROM Product";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

$total = 0;

foreach ($result as $item) {
    $idpro = $item['Id'];
    $price = $item['Price'];
    $name = $item['Name'];
    if (isset($_SESSION['cart'][$idpro])) {
        $qty = $_SESSION['cart'][$idpro];
        $money1 = $name;
        $money = $price * $qty;
        $total += $money;

        $sql2 = "INSERT INTO detailbill VALUES (NULL, '{$idBill}', '{$idpro}', '{$name}', '{$qty}', '{$price}')";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->execute();
    }
}

unset($_SESSION['cart']);
echo '<div class="empty-cart">';
echo '<h2>Mua hàng thành công</h2>';
echo '<a class="continue-shopping" href="result.php">Về trang quản lý cá nhân</a>';
echo '</div>';
return;
?>


</body>
</html>