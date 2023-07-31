<!DOCTYPE HTML>
<html>
<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
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
  </style>
</head>
<body>
<?php require("conncet_1.php")
	
	?>

<div class="wrap">
    <div class="header">
      <div class="headertop_desc">
        <div class="call">
          <p><span>CUSTOMER SUPPORT</span> Hotline <span class="number"> 1900 1508</span></span></p>
        </div>
        <div class="account_desc">
          <ul>
            <li><a href="login.php" style="background-color:#003333;">Login</a></li>
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="product.php">Shop</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="Search.php">Search</a></li>
          </ul>
        </div>

        <div class="clear"></div>
      </div>
    </div>
</br>
    <div class="main">
   

 		
		<?php
			if(!empty($_GET["idpro"]))
			{
			$sql = "select * from Product where Id= ".$_GET["idpro"];
			$stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch();
			
			//echo $result["Name"];
			//echo $result["Image"];
			//echo $result["Price"];
			//echo $result["Description"];		
		?>
			   <table width="286" height="209" border="1" style="background-color:#FFEFD5;">
        <tr>
				  <td width="82"><?php echo $result["Name"]; ?></td>
				  <td width="102" rowspan="3"><?php echo $result["Description"];?></td>
				</tr>
				<tr>
				  <td><img src = "image/<?php echo $result["Image"];?>" height="200px" width="150px"/></td>
				</tr>
				<tr>
				  <td><?php echo $result["Price"];?> VND </br> </td>
				</tr>
				<td colspan="2">
          <a href="addcart.php?idpro=<?php echo $result["Id"]; ?>">
            Thêm vào giỏ hàng
          </a>
        </td>
      </tr>
				</table>
		<?php
		}
	    ?>
			



			</div>

<div class="footer">
  <div class="wrap">	
	<div class="section group">
	  <div class="col_1_of_4 span_1_of_4">
		<h4>Information</h4>
		<ul>
		  <li><a href="about.php">About Us</a></li>
		  <li><a href="contact.php">Customer Service</a></li>
		  <li><a href="#">Advanced Search</a></li>
		  <li><a href="delivery.php">Orders and Returns</a></li>
		  <li><a href="contact.php">Contact Us</a></li>
		</ul>
	  </div>
	  <div class="col_1_of_4 span_1_of_4">
		<h4>Why buy from us</h4>
		<ul>
		  <li><a href="about.php">About Us</a></li>
		  <li><a href="contact.php">Customer Service</a></li>
		  <li><a href="#">Privacy Policy</a></li>
		  <li><a href="contact.php">Site Map</a></li>
		  <li><a href="#">Search Terms</a></li>
		</ul>
	  </div>
	  <div class="col_1_of_4 span_1_of_4">
		<h4>My account</h4>
		<ul>
		  <li><a href="contact.php">Sign In</a></li>
		  <li><a href="index.php">View Cart</a></li>
		  <li><a href="#">My Wishlist</a></li>
		  <li><a href="#">Track My Order</a></li>
		  <li><a href="contact.php">Help</a></li>
		</ul>
	  </div>
	  <div class="col_1_of_4 span_1_of_4">
		<h4>Contact</h4>
		<ul>
		  <li><span>+91-123-456789</span></li>
		  <li><span>+00-123-000000</span></li>
		</ul>
		<div class="social-icons">
		  <h4>Follow Us</h4>
		  <ul>
			<li><a href="#" target="_blank"><img src="images/facebook.png" alt="" /></a></li>
			<li><a href="#" target="_blank"><img src="images/twitter.png" alt="" /></a></li>
			<li><a href="#" target="_blank"><img src="images/skype.png" alt="" /> </a></li>
			<li><a href="#" target="_blank"> <img src="images/dribbble.png" alt="" /></a></li>
			<li><a href="#" target="_blank"> <img src="images/linkedin.png" alt="" /></a></li>
			<div class="clear"></div>
		  </ul>
		</div>
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
</div>
</body>
</html>