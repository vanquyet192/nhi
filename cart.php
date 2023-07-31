<!DOCTYPE html>
<html>
<head>
    <title>Cart Information</title>
</head>
<body>

<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Chuyển hướng người dùng đến trang đăng nhập
    header("Location: login.php");
    exit;
}

require("conncet_1.php");

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Process cancellation of cart
if (isset($_POST['cancel'])) {
    $_SESSION['cart'] = array(); // Clear the cart
    header("location: cart.php"); // Redirect to the cart page
    exit;
}

// Check if cart is empty
if (empty($_SESSION['cart'])) {
    echo "<h2>Cart is empty</h2>";
    echo "<a href='product.php'>Continue to choose goods</a>";
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

<h1>Cart Information</h1>

<form method="POST">
    <table width="602" border="1">
        <tbody>
            <tr>
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
                $money1 = $name;
                $money = $price * $qty;
                $total += $money;

                echo "<tr>";
                echo "<td>{$dem}</td>";
                echo "<td>{$name}</td>";
                echo "<td>{$image}</td>";
                echo "<td>{$price}</td>";
                echo "<td>{$qty}</td>";
                echo "<td>{$money} <a href='cart.php?id={$id}'>Delete<a/> ";
                echo "</tr>";

                // Check if 'id' parameter is passed through the URL
                if (!empty($_GET['id'])) {
                    $id = $_GET['id'];
                    unset($_SESSION['cart'][$id]);
                    header("location: cart.php");
                    exit;
                }
            }
            ?>








            <tr style="text-align:center;font-weight:bold">
                <td colspan="5">Total amount</td>
                <td><?php echo $total; ?></td>
            </tr>
        </tbody>
    </table>
    <a href="product.php">Continue to choose goods</a>
    <input type="submit" name="cancel" value="Cancel cart" />
    <input type="submit" name="buy" value="Purchase"  formaction="bill.php" />
</form>

</body>
</html>
