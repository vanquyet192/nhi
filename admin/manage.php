
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
					font-size:28px;
					
				}
				.center {
    			 margin: 0 auto;
				 width: 400px;
   		 		display: block
				}
				.form-heading {
        font-size: 35px;
        color: #668B8B;
        text-align: center;
    }
				.section {
        margin: 20px;
		
        display: flex;
        justify-content: center;
        align-items: center;
		
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
		
			</div>
			<div class="clear"></div>
	</div>
		<div class="header_top">
		<div class="center">
			<video width="400px" height="200px" playsinline autoplay muted loop>
			<source src="../images/DONG.mp4" type="video/mp4" >
 			</video>
			
			</div>
	</div>	 


<div class="section group" >
				<div class="grid_1_of_4 images_1_of_4" >
	<h3 class="form-heading" > Manage</h3> 
	<?php
	require("../conncet 1.php");

	session_start();
	$user = $_SESSION["sadmin"];
	$role = $_SESSION["srole"];
	echo "Welcome : " .$user. " - Role :".$role;
?>


<?php 

	$error = "";
	if(!empty($_SESSION["error"]))
		$error = $_SESSION["error"];

	echo "<div style='color:red'>{$error}</div>";
	$_SESSION["error"]="";
?>
	<ol >

		<li><a href="admin.php">Admin</a></li> 
		<li><a href="customer.php">Customer</a></li>
		<li><a href="product.php">Product</a></li> 
		<li><a href="cart.php">Shopping Cart</a></li>

    </ol>


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

