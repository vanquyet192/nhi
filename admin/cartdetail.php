<!DOCTYPE HTML>
<html>
<head>
<title>Cart Detail</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    color: #668B8B;
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    padding: 10px;
    border: 1px solid #ccc;
}

table th {
    background-color: #DEB887;
    color: #fff;
    text-align: left;
}

table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table tr:hover {
    background-color: #e0e0e0;
}

.total {
    margin-top: 20px;
    text-align: right;
    font-weight: bold;
}

form {
    margin-top: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="radio"] {
    margin-right: 10px;
}

input[type="submit"] {
    padding: 5px 10px;
    background-color: #4A708B;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #003366;
}
</style>
</head>
<body>
<div class="container">
    <h1>Cart Detail</h1>

<?php require("../conncet_1.php");
	session_start();
?>

<?php 

        if(!empty($_GET["idBill"]))
        {
            $idBill = $_GET["idBill"];
            $sql2 = "Select * from DetailBill,Product where
            IdBill = {$idBill} and DetailBill.IdPro = Product.Id";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->execute();
            $result2 = $stmt2->fetchAll();
            
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td>Product's name</td>";
            echo "<td>Quantity</td>";
            echo "<td>Price</td>";
            echo "</tr>";
            $tongtien = 0;
            foreach($result2 as $item2)
            {
                $tongtien = $tongtien + ( $item2["Quantity"] * $item2["Price"]);
                echo "<tr>";
                echo "<td>".$item2["Name"]."</td>";
                echo "<td>".$item2["Quantity"]."</td>";
                echo "<td>".$item2["Price"]."</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "Tổng tiền : ".$tongtien;
        }
        ?>

        <?php 
                $status1 = "";
                $status2 = "";
                if(!empty($_GET["idStatus"]))
                {
                    $idstatus = $_GET["idStatus"];
                    if($idstatus==1)
                        $status1 = "checked";
                    else
                        $status2 = "checked";
                }

                if(isset($_POST["update"]))
                {
                    if($_POST["status"]==1)
                        $sql3 = "update Bill set IdStatus = 1 where id = {$idBill}";
                    else
                        $sql3 = "update Bill set IdStatus = 2 where id = {$idBill}";
                
                    $stmt3 = $conn->prepare($sql3);
                    $stmt3->execute();
                    header("Location:cart.php");
                }
        ?>
  <form method="post">
  Status:
    <input type="radio" name="status" value="1" <?php echo $status1 ?> /> No process
    <input type="radio" name="status" value="2" <?php echo $status2 ?> /> Processed
    <br/>
    <input type="submit" name="update" value="Update status" />
</form>
</div>
</body>
</html>

   