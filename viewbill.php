<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xem tất cả đơn hàng</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
    <style>
         .account_desc {
    font-size: 30px;
  }

  
  .header {
    text-align: center;
  }

 
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            color: #333;
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color:  #668B8B;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        
        .total {
            text-align: right;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="wrap">
  <div class="header">
    <div class="headertop_desc">
      <div class="call">
        <p><span>CUSTOMER SUPPORT</span> Hotline <span class="number"> 1900 1508 </span></span></p>
      </div>
      <div class="account_desc">
        <ul>
          <li><a href="HomeU.php" style="background-color:#003333;">Home</a></li>
          <li><a href="login.php" style="background-color:#003333;">Logout</a></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    
    <div class="wrap">
        <div class="container">
            <h2>View all orders</h2>

            <?php
            session_start();
            require("conncet_1.php");

            $idcus = $_SESSION["sidcus"];
            $sql = "SELECT * FROM bill WHERE IdCus = {$idcus}";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();

            foreach ($result as $item) {
                $idBill = $item["Id"];
                $status = ($item["IdStatus"] == 1) ? "No process" : "Processed";
                
                echo "<div class='order'>";
                echo "<p class='order-id'><strong>Code Bill:</strong> " . $item["Id"] . "</p>";
                echo "<p class='order-date'><strong>Order date:</strong> " . $item["Date"] . "</p>";
                echo "<p class='order-status'><strong>Status:</strong> " . $status . "</p>";
                echo "<table>";
                echo "<tr>";
                echo "<th>Product's name</th>";
                echo "<th>Quantity</th>";
                echo "<th>Price</th>";
                echo "</tr>";
                $total = 0;
                
                $sql2 = "SELECT * FROM DetailBill WHERE idBill = {$idBill}";
                $stmt2 = $conn->prepare($sql2);
                $stmt2->execute();
                $result2 = $stmt2->fetchAll();
                
                foreach ($result2 as $item2) {
                    $productName = $item2["Name"];
                    $quantity = $item2["Quantity"];
                    $price = $item2["Price"];
                    $subtotal = $quantity * $price;
                    
                    echo "<tr>";
                    echo "<td>$productName</td>";
                    echo "<td>$quantity</td>";
                    echo "<td>$price</td>";
                    echo "</tr>";
                    
                    $total += $subtotal;
                }
                
                echo "<tr>";
                echo "<td colspan='3' class='total'>Total amount: $total</td>";
                echo "</tr>";
                echo "</table>";
                echo "</div>";
            }
            
            $conn = null;
            ?>
        </div>
    </div>
</body>
</html>
