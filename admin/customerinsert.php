
<!DOCTYPE HTML>
<head>
<title>Free Home Shoppe Website Template | News :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<style>
	li {
		font-size: 28px;
	}

	.center {
    	margin: 0 auto;
		width: 400px;
   		display: block;
	}
			
	.section {
		margin: 20px;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.form-heading {
		font-size: 25px;
		color: #668B8B;
		text-align: center;
		margin-top: 30px;
	}

	table {
		width: 100%;
		border-collapse: collapse;
		margin-top: 20px;
	}

	table th, table td {
		padding: 8px;
		border: 1px solid #668B8B;
		text-align: center;
		
	}
	table th{
	background-color: #DEB887;
	}
	table td a {
		text-decoration: none;
		color: #000;
	}
	form {
		margin-top: 30px;
		display: flex;
		
		align-items: center;
	
		
	
	}
	form input[type="text"],
	form input[type="password"],
	form select {
		width: 100%;
		padding: 10px;
		margin-bottom: 10px;
		border-radius: 5px;
		border: 1px solid #ccc;
	}
	form input[type="submit"] {
		width: 100%;
		padding: 10px;
		background-color: #999999;
		color: #fff;
		border: none;
		border-radius: 5px;
		cursor: pointer;
	}

	
</style>
</head>
<body>
<?php require("../conncet_1.php")
	
	?>
	
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc" >
			<div class="call">
			<p><span>CUSTOMER SUPPORT</span> Hotline <span class="number"> 1900 1508 </span></span></p>
			</div>
			<div class="account_desc">
				<ul>
				<li><a href="../index.php" style="background-color:#003333">Home</a></li>
					<li><a href="login.php" style="background-color:#003333">Login</a></li>
					
			
				</ul>
	
			</div>
			<div class="clear"></div>
	</div>
		<div class="header_top" >
		<div class="center">
			<video width="400px" height="200px" playsinline autoplay muted loop>
			<source src="../images/DONG.mp4" type="video/mp4" >
 			</video>
			 
			</div>
	</div>	 



	
<div class="section">
			<div class="grid_1_of_4">
	<h1 class="form-heading"> Sign Up </h1> </br>
	<form  method="post" >
	<input type="text" name="Username" placeholder="Username">
					<input type="password" name="Password" placeholder="Password">
					<input type="text" name="Name" placeholder="Name">
					<input type="text" name="Mobile" placeholder="Mobile">
					<input type="text" name="Address" placeholder="Address">
					<select name="IsActive">
						<option value="0">0</option>
					</select>
					<input type="submit" name="OK" value="Register">
				</form>
		

	<?php 
		if(isset($_POST['OK']))
		{
			$user = "";
			$pass = "";
			$name ="";
			$mobile ="";
			$address ="";
			if(empty($_POST["Username"])||empty($_POST["Password"])||empty($_POST["Name"])
			||empty($_POST["Mobile"])||empty($_POST["Address"]))
			{
				echo "Ban chua nhap du lieu day du";
				return;
			}
			$id = $_POST["Id"];
			$user = $_POST["Username"];
			$pass = $_POST["Password"];
			$name = $_POST["Name"];
			$mobile = $_POST["Mobile"];
			$address = $_POST["Address"];
			$isactive = $_POST["IsActive"];
		try
		{
			$sql = "Select * from customer where Username = '{$user}'";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll();
			if(count($result)>0)
			{
				echo "Username nay da ton tai. Dang ky that bai";
				return;
			}
			$sql = "Insert into customer values ('{$id}','{$user}','{$pass}','{$name}','{$mobile}','{$address}', '{$isactive}')";
			echo $sql;
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			echo "Dang ky thanh cong";
			header("Location:customer.php");
		}
		catch(PDOException $e){
			echo "Dang ky that bai ".$e->getMessage();
		}
		}
	?>
	</div>
		</div>
	
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