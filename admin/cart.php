<!DOCTYPE HTML>
<html>
<head>
<title>Bill List</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
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
    font-size: 24px;
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

.actions {
    display: flex;
    justify-content: center;
}

.actions a {
    margin-right: 10px;
    padding: 5px 10px;
    background-color: #4A708B;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.actions a:hover {
    background-color: #003366;
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
				<li><a href="../index.php" style="background-color:#003333">Home</a></li>
					<li><a href="login.php" style="background-color:#003333">Logout</a></li>
			
				</ul>
				<style>
				li {
					font-size:28px;
					
				}
			</style>
			</div>
			<div class="clear"></div>
	</div>
		<div class="header_top">
		<div class="center">
			<video width="400px" height="200px" playsinline autoplay muted loop>
			<source src="../images/DONG.mp4" type="video/mp4" >
 			</video>
			 <style>
				.center {
    			 margin: 0 auto;
				 width: 400px;
   		 		display: block
				}
			</style>
			</div>
	</div>	 

<div class="container">
    <h1>Bill List</h1></br>

<?php require("../conncet_1.php");
	session_start();
?>
<?php
$sql = "Select Bill.*,Name from Bill, Customer where Bill.IdCus = Customer.Id order by Bill.Id desc ";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

echo "<table border='1'>";
echo "<tr>";
echo "<td>Code Bill</td>";
echo "<td>Orderer</td>";
echo "<td>Booking date</td>";
echo "<td>Status</td>";
echo "<td>Action</td>";
echo "</tr>";


foreach($result as $item)
{
    echo "<tr>";
        $idBill = $item["Id"];
        $date = new DateTime($item["Date"]);

        echo "<td>".$idBill."</td>";
        echo "<td>".$item["Name"]."</td>";
        echo "<td>".date_format($date,'d/m/Y')."</td>";

        if($item["IdStatus"]==1)
            echo "<td> No process </td>";
        else
        echo "<td> Processed </td>";

    echo "<td><a href='cartdetail.php?idBill={$idBill}
    &&idStatus={$item['IdStatus']}'>Invoice details</a></td>";

                echo "</tr>";
}
        echo "</table>";
?>
</div>
  <div class="copy_right">
		<p>&copy; 2013 home_shoppe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		   </div>
    </div>
   <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>