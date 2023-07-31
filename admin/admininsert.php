<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<title>Free Home Shoppe Website Template | News :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<style type="test/css">
	
</style>
</head>
<body>
<?php require("../conncet_1.php")
	
	?>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
			<p><span>CUSTOMER SUPPORT</span> Hotline <span class="number"> 1900 1508 </span></span></p>
			</div>
			<div class="account_desc">
				<ul>
				<li><a href="../index.php" style="background-color:#003333">Home</a></li>
					<li><a href="login.php" style="background-color:#003333">Login</a></li>
					
			
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

	<style type="text/css">
			div
		{
			width: auto;
			right:-500px;
			
		}
	</style>


<div>


<div class="section group"   >
				<div class="grid_1_of_4 images_1_of_4" style="background-color:#DEB887" >
<form method="post" style="color:#666699">
	Username <input type="text" name="username"/> <br/> <br/> 
	Password <input type="password" name="password"/> <br/> <br/> 
	Role
		<select name="role">
		<option value="1">Tallest</option>
		<option value="2">Level 2</option>
		<option value="2">Level 3</option>
		</select> <br/> <br/>
		<input type="submit" name="OK" value="Insert"  style="background-color:#4A708B;"/> <br/> <br/>
</form>
<body>

	<?php 
		require("../conncet 1.php");
	?>
	<?php 
		if(isset($_POST['OK']))
		{
			$user = "";
			$pass = "";
			if(empty($_POST["username"])||empty($_POST["password"])||empty($_POST["role"]))
			{
				echo "You have not entered complete data";
				return;
			}
			$user = $_POST["username"];
			$pass = $_POST["password"];
			$role = $_POST["role"];
		try
			{
			$sql = "Select * from admin where Username = '{$user}'";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$result = $stmt->fetchAll();
			if(count($result)>0)
			{
				echo "This username already exists. Insert failed";
				return;
			}
			$sql = "insert into admin values ('{$user}','{$pass}','{$role}')";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			echo "Insert successful";
			}
		catch(PDOException $e){
			echo "Insert failed ".$e->getMessage();
			}
		}
	?>
</div>
</div>
</body>