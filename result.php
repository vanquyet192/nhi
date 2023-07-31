<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<style>
	
  .account_desc {
    font-size: 30px;
  }

  .center {
    margin: 0 auto;
    width: 400px;
    display: block;
  }

  .header {
    text-align: center;
  }

  .header_top {
    margin-top: 20px;
  }
  .main {
    text-align: center;
    margin-bottom: 20px;
  }
  
  .main p {
    font-size: 18px;
    margin-bottom: 10px;
  }
  
  .main a {
    display: inline-block;
    padding: 10px 20px;
    background-color: #32A6A6;
    color: #fff;
    text-decoration: none;
    margin: 5px;
    border-radius: 3px;
  }
  
  .main a:hover {
    background-color: #005555;
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
    <div class="header_top">
      <div class="center">
        <video width="400px" height="200px" playsinline autoplay muted loop>
          <source src="images/DONG.mp4" type="video/mp4" >
        </video>
      </div>
    </div>
  </div>

  <div class="main">
 
	<?php session_start();
		$user = $_SESSION['suser']; 
		$name = $_SESSION['sname'];
		echo "<p>Welcome: <span style='font-weight:bold;'>$user</span></p>";
   		 echo "<p>Full Name: <span style='font-weight:bold;'>$name</span></p>";
    ?>

	<a href="updatecustomer.php">Edit personal information</a>
	
	<a href="cartu.php">View cart</a>

	<a href="ViewBill.php">View all orders</a>
	
	</div>	 
	<div class="footer">
    <div class="wrap">
      <div class="copy_right">
        <p>&copy; 2013 home_shoppe. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(document).ready(function() {			
      $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  <a href="#" id="toTop"><span id="toTopHover"></span></a>
</body>
</html>