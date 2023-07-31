<!DOCTYPE html>
<html>
<head>
    <title>Cart Information</title>
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

        .cart-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .cart-table td, .cart-table th {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }

    .cart-table th {
        font-weight: bold;
    }

    .cart-table .total-row {
        font-weight: bold;
        text-align: center;
    }

    .cart-actions {
        margin-top: 20px;
        text-align: center;
    }

    .cart-actions a, .cart-actions input {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        font-weight: bold;
        cursor: pointer;
        margin-right: 10px;
    }

    .cart-actions input[type="submit"]:hover {
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
require("conncet_1.php");
session_start();


                // Check if 'remove' parameter is passed through the URL
                if (!empty($_GET['remove'])) {
                  $removeId = $_GET['remove'];
                  unset($_SESSION['cart'][$removeId]);
                  header("location: cartu.php");
                  exit;
                }
// Process cancellation of cart
if (isset($_POST['cancel'])) {
    $_SESSION['cart'] = array(); // Clear the cart
    header("location: cartu.php"); // Redirect to the cart page

   
    exit;
}

// Check if cart is empty
if (empty($_SESSION['cart'])) {
  echo '<div class="empty-cart">';
  echo '<h2>Cart is empty</h2>';
  echo '<a class="continue-shopping" href="productu.php">Continue to choose goods</a>';
  echo '</div>';
  exit;
}

// Get product IDs from the cart
$productIds = array_keys($_SESSION['cart']);
$str = implode(",", $productIds);

// Retrieve product information from the database
$sql = "SELECT * FROM Product WHERE Id IN ({$str})";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

$dem = 0;
$total = 0;


?>



<div class="cart-container">
<h1 class="form-heading">Cart Information</h1></br>

<form method="POST" class="cart-form">

<table class="cart-table">
        <tbody>
            <tr style="background-color:#45a049"> 
                <td width="68">Order</td>
                <td width="132">Product's name</td>
                <td width="95">Image</td>
                <td width="72">Price</td>
                <td width="111">Quantity</td>
                <td width="84">Into money</td>
            </tr>

            <?php
            foreach ($result as $item) {
                $dem++;
                $id = $item['Id'];
                $name = $item['Name'];
                $image = $item['Image'];
                $price = $item['Price'];
                $qty = $_SESSION['cart'][$id];
                $money = $price * $qty;
                $total += $money;

                echo "<tr>";
                echo "<td>{$dem}</td>";
                echo "<td>{$name}</td>";
                echo "<td><img src='image/{$image}' alt='Product Image' style='width:100px;height:100px'></td>";
                echo "<td>{$price}</td>";
                echo "<td>{$qty}</td>";
                echo "<td>{$money} <a href='cartu.php?remove={$id}'>Delete<a/> ";
                echo "</tr>";

            }
            ?>








            <tr class="total-row" style="text-align:center;font-weight:bold">
                <td colspan="5">Total amount</td>
                <td><?php echo $total; ?></td>
            </tr>
        </tbody>
    </table>
    <div class="cart-actions">
    <a href="productu.php">Continue to choose goods</a>
    <input type="submit" name="cancel" value="Cancel cart" />
    <input type="submit" name="buy" value="Purchase"  formaction="bill.php" />
    </div>
</form>
</div>
</br>
		 </br>
		 </br>
		 </br>
		 </br>
		 </br>
		 </br>
		 </br>



</body>
</html>
