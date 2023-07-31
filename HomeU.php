
<!DOCTYPE HTML>
<head>
<!DOCTYPE HTML>
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
					<li><a href="logout.php" style="background-color:#003333;">Logout</a></li>
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
		
     			</ul>
	     	</div>
	     	
			 <div class="clear"></div>
	     </div>	 
	   
	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				  <ul>
				  	<h3>Categories</h3>
					  <li><a href="productu.php?idcata=1">Perfume</a></li>
				      <li><a href="productu.php?idcata=2">Serum</a></li>
				      <li><a href="productu.php?idcata=3">Mark</a></li>
				      <li><a href="productu.php?idcata=4">Lipstick</a></li>
				      <li><a href="productu.php?idcata=5">Cleanser</a></li>
					  <li><a href="productu.php?idcata=6">Moisturizer</a></li>
					  <li><a href="productu.php?idcata=7">Toner</a></li>
					  <li><a href="productu.php?idcata=8">Cushion</a></li>
					  <li><a href="productu.php?idcata=9">Foundation</a></li>
				  </ul>
				</div>					
	  	     </div>
					 <div class="header_bottom_right">					 
					 	 <div class="slider">					     
							 <div id="slider">
			                    <div id="mover">
			                    	<div id="slide-1" class="slide">			                    
									 <div class="slider-img">
									     <a href="previewu.php"><img src="images/sl.jpg" alt="learn more" /></a>									    
									  </div>
						             	<div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 20% OFF</h2>
									   <div class="features_list">
									   	<h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>							               
							            </div>
							             <a href="previewu.php" class="button">Shop Now</a>
					                   </div>			               
									  <div class="clear"></div>				
				                  </div>	
						             	<div class="slide">
						             		<div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 40% OFF</h2>
									   <div class="features_list">
									   	<h4>Get to Know More About Our Memorable Services</h4>							               
							            </div>
							             <a href="previewu.php" class="button">Shop Now</a>
					                   </div>		
						             	 <div class="slider-img">
									     <a href="previewu.php"><img src="images/sl1.jpg" alt="learn more" /></a>
									  </div>						             					                 
									  <div class="clear"></div>				
				                  </div>
				                  <div class="slide">						             	
					                  <div class="slider-img">
									     <a href="previewu.php"><img src="images/sl3.jpg" alt="learn more" /></a>
									  </div>
									  <div class="slider-text">
		                                 <h1>Clearance<br><span>SALE</span></h1>
		                                 <h2>UPTo 10% OFF</h2>
									   <div class="features_list">
									   	<h4>Get to Know More About Our Memorable Services Lorem Ipsum is simply dummy text</h4>							               
							            </div>
							             <a href="previewu.php" class="button">Shop Now</a>
					                   </div>	
									  <div class="clear"></div>				
				                  </div>												
			                 </div>		
		                </div>
					 <div class="clear"></div>					       
		         </div>
		      </div>
		   <div class="clear"></div>
		</div>
   </div>
 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>New Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="productu.php">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					
					 <a href="previewu.php?idpro=137"><img src="images/kda.jpg" alt="" height="150" || width="150" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">720.00</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="previewu.php">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="previewu1.php?idpro=2"><img src="images/nch.jpg" alt="" height="150" || width="150" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">2.500.00</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="previewu1.php">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					<br/>
				    
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="previewu2.php?idpro=3"><img src="images/dir.jpg" alt="" height="150" || width="150" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">850.00</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="previewu2.php">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
					<br/>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="previewu3.php?idpro=4"><img src="images/ser.jpg" alt="" height="150" || width="150" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">350</span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="previewu3.php">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>				     
				</div>
			</div>
			
 
   <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Information</h4>
						<ul>
						<li><a href="aboutU.php">About Us</a></li>
						<li><a href="ContactU.php">Customer Service</a></li>
						<li><a href="#">Advanced Search</a></li>
						<li><a href="productu.php">Orders and Returns</a></li>
						<li><a href="ContactU.php">Contact Us</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Why buy from us</h4>
						<ul>
						<li><a href="AboutU.php">About Us</a></li>
						<li><a href="ContactU.php">Customer Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="ContactU.php">Site Map</a></li>
						<li><a href="#">Search Terms</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>My account</h4>
						<ul>
							<li><a href="ContactU.php">Sign In</a></li>
							<li><a href="HomeU.php">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="ContactU.php">Help</a></li>
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
    
</body>
</html>

