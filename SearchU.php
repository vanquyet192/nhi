<!DOCTYPE HTML>
<html>
<head>
<title>Search</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
<style>
body {
  font-family: Arial, sans-serif;
}



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

.form-container {
  text-align: center;
  margin-top: 40px;
}

.form-container input[type="text"] {
  width: 200px;
  height: 40px;
  padding: 5px;
  font-size: 16px;
}

.form-container input[type="submit"] {
  width: 80px;
  height: 40px;
  padding: 5px;
  font-size: 16px;
  background-color: #008B8B;
  color: #ffffff;
  border: none;
  cursor: pointer;
}

.product-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 40px;
}

.product-card {
  width: 200px;
  margin: 10px;
  padding: 10px;
  border: 1px solid #ccc;
  text-align: center;
}

.product-card img {
  width: 150px;
  height: 150px;
  margin-bottom: 10px;
}

.product-card h3 {
  font-size: 16px;
  margin: 0;
}

.product-card p {
  font-size: 14px;
  color: #888888;
  margin: 5px 0;
}

.no-products {
  text-align: center;
  margin-top: 40px;
  font-size: 18px;
  color: #888888;
}
</style>
</head>
<body>
<?php require("conncet_1.php"); ?>

<div class="container">
<div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
			<p><span>CUSTOMER SUPPORT</span> Hotline <span class="number"> 1900 1508</span></span></p>
			</div>
			<div class="account_desc">
				<ul>
					<li><a href="login.php" style="background-color:#003333;">Logout</a></li>
					
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
			     <li class="active"><a href="HomeU.php">Home</a></li>
			    	<li><a href="AboutU.php">About</a></li>
			    	<li><a href="productu.php">Shop</a></li>
			    	<li><a href="NewsU.php">News</a></li>
			    	<li><a href="ContactU.php">Contact</a></li>
					<li><a href="SearchU.php">Search</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="clear"></div>
	     </div>	     	
   </div>
 

  <div class="form-container">
    <form action="SearchU.php" method="GET">
      <input type="text" name="product_name" placeholder="Product Name">
      <input type="text" name="price" placeholder="Price">
      <input type="submit" name="search" value="Search">
    </form>
  </div>

  <?php
    if(isset($_GET['search']) && $_GET['search'] == "Search") {
      $product_name = $_GET['product_name'];
      $price = $_GET['price'];

      $sql = "SELECT * FROM Product";
      $whereClause = "";

      if(!empty($product_name) && !empty($price)) {
        $whereClause = " WHERE Name LIKE '%$product_name%' AND Price = $price";
      } elseif (!empty($product_name)) {
        $whereClause = " WHERE Name LIKE '%$product_name%'";
      } elseif (!empty($price)) {
        $whereClause = " WHERE Price = $price";
      }

      $sql .= $whereClause;

      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();

      if (count($result) > 0) {
  ?>
  <div class="product-container">
    <?php
      foreach($result as $item) {
    ?>
    <div class="product-card">
      <img src="Image/<?php echo $item["Image"]; ?>" alt="<?php echo $item["Name"]; ?>">
      <h3><?php echo $item["Name"]; ?></h3>
      <p><?php echo $item["Price"]; ?></p>
      <a href="addcartu.php?idpro=<?php echo $item["Id"]?>">Add to Cart</a>
    </div>
    <?php
      }
    ?>
  </div>
  <?php 
      } else {
        echo "<p class='no-products'>No products found.</p>";
      }
    }
  ?>
</div>
  </br>
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
