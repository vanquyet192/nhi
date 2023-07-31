<!DOCTYPE HTML>
<head>
<title>Free Home Shoppe Website Template | News :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<style type="text/css">
	body{
		position: relative;
		background: lightgray;
	}
	
	.container {
		max-width: 500px;
		margin: 0 auto;
		padding: 20px;
		background-color: #f5f5f5;
		border-radius: 5px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	}
	
	.form-heading {
		font-size: 35px;
		color: #668B8B;
		text-align: center;
		margin-bottom: 30px;
	}
	
	.form-group {
		margin-bottom: 20px;
	}
	
	.form-group label {
		display: block;
		margin-bottom: 5px;
		font-size: 16px;
		font-weight: bold;
		color: #333;
	}
	
	.form-group input {
		width: 100%;
		padding: 10px;
		font-size: 16px;
		border-radius: 5px;
		border: 1px solid #ccc;
	}
	
	.form-group input[type="submit"] {
		background-color: #4A708B;
		color: #fff;
		cursor: pointer;
	}
	
	.form-group input[type="submit"]:hover {
		background-color: #003333;
	}
	
	.clear {
		clear: both;
	}
	
	.text-center {
		text-align: center;
	}
	
	.copy_right {
		margin-top: 20px;
		text-align: center;
	}
</style>
</head>
<body>
	
<?php require("conncet_1.php")
	?>
<div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				<p><span>CUSTOMER SUPPORT</span> Hotline <span class="number"> 1900 1508 </span></p>
			</div>
			<div class="account_desc">
				<ul>
					<li><a href="index.php" style="background-color:#003333;">Home</a></li>
					<li><a href="login.php" style="background-color:#003333;">Login</a></li>
				</ul>
				<style>
				li {
					font-size: 28px;
				}
				</style>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="center">
				<video width="400px" height="200px" playsinline autoplay muted loop>
					<source src="images/DONG.mp4" type="video/mp4">
 				</video>
 				<style>
				.center {
					margin: 0 auto;
					width: 50px;
					display: block;
				}
				</style>
			</div>
		</div>
	</div>
			</br>
			
	<div class="container">
		<form method="post">
			<h1 class="form-heading">Sign up for an account</h1>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" id="username" name="Username" required />
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="Password" required />
			</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" id="name" name="Name" required />
			</div>
			<div class="form-group">
				<label for="mobile">Mobile</label>
				<input type="text" id="mobile" name="Mobile" required />
			</div>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" id="address" name="Address" required />
			</div>
			<div class="form-group">
				<label for="isactive">IsActive</label>
				<select id="isactive" name="IsActive">
					<option value="0">0</option>
				</select>
			</div>
			<div class="form-group text-center">
				<input type="submit" name="OK" value="Register" />
			</div>
		</form>
		
			 <br/>


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
				echo "You didn't enter full data" ;
				return;
			}
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
				echo "This username already exists. registration failed";
				return;
			}
			$sql = "Insert into customer values ('{$id}','{$user}','{$pass}','{$name}','{$mobile}','{$address}', '{$isactive}')";
			
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			echo "Sign Up Success";
			header("Location:index.php");
		}
		catch(PDOException $e){
			echo "Registration failed ".$e->getMessage();
		}
	}
	?>
	
</div>
</div>
</div>



			 <br/>
			 <br/>
			



 
    </div>
 
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
				echo "You didn't enter full data" ;
				return;
			}
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
				echo "This username already exists. registration failed";
				return;
			}
			$sql = "Insert into customer values ('{$id}','{$user}','{$pass}','{$name}','{$mobile}','{$address}', '{$isactive}')";
			
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			echo "Sign Up Success";
			header("Location:index.php");
		}
		catch(PDOException $e){
			echo "Registration failed ".$e->getMessage();
		}
	}
	?>
	
</div>
</div>
</div>



			 <br/>
			 <br/>
			



 
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

