<!DOCTYPE HTML>
<head>
<title></title>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }
    
   
  
    
    
    
    .section {
        margin: 20px;
		
        display: flex;
        justify-content: center;
        align-items: center;
		
    }
    
    .form-heading {
        font-size: 35px;
        color: #668B8B;
        text-align: center;
    }
    
    .form-container {
        max-width: 600px;
        margin: 0 auto;
        background-color: #DEB887;
        padding: 20px;
    }
    
    .form-container input[type="text"],
    .form-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 5px;
    }
    
    .form-container input[type="submit"] {
        background-color: #4A708B;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    
    .copy_right {
        background-color: #333;
        padding: 10px;
        color: #fff;
        text-align: center;
    }
</style>
		
</head>
<body>
<?php require("conncet_1.php")
	
	?>
  <div class="wrap">
	<div class="header" >
		<div class="headertop_desc" >
			<div class="call">
			<p><span>CUSTOMER SUPPORT</span> Hotline <span class="number"> 1900 1508 </span></span></p>
			</div>
			<div class="account_desc">
				<ul>
				<li><a href="index.php" style="background-color:#003333;">Home</a></li>
				

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
			<source src="images/DONG.mp4" type="video/mp4" >
 			</video>
			 <style>
				.center {
    			 margin: 0 auto;
				 width: 400px;
   		 		display: block
				}
			</style>
			</div>
			<a href="logout.php"></a>

	</div>	 
		
			 
	<div class="section group">
        <div class="grid_1_of_4 images_1_of_4">
            <h1 class="form-heading">LOGIN</h1>
            <div class="form-container">
                <form action="login.php" method="post">
                    <input type="text" name="username" placeholder="Username" required><br>
                    <input type="password" name="password" placeholder="Password" required><br>
                    <input type="submit" name="ok" value="Login">
                   
                </form>
<p>Don't have an account? <a href="register.php">Register here</a></p>
			</br>
<?php
if(isset($_POST["ok"]))
{
	$user = "";
	$pass= "";
	if(empty($_POST["username"]))
	{
		echo "ban chua nhap Username";
		return;
	}
	if (empty($_POST["password"])) 
	{

		echo "ban chua nhap password";
		return;

	}
	$user = $_POST["username"];
	$pass = $_POST["password"];
   //echo ("welcome ".$user."<br/>your password: ".$pass)."<br/>";

	try{
		$sql = "Select * from customer where Username like '{$user}' ";
		$stmt= $conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetch();
			if (!$result)
			{
				echo "You are not logged in";
				return;
			}
			if($result["Password"]=$pass && $result["IsActive"]=1)
			{
				session_start();
				$_SESSION["suser"]=$user;
				$_SESSION["sname"] =$result["Name"];
				$_SESSION["sidcus"]=$result["Id"];

				header("Location:result.php");
			}
			else
				echo "Login failed ";
				
		}
	catch(PDOException $e){
		echo "Connection failed ".$e->getMessage();
	}

}
?>
<?php
if(isset($_POST["dk"]))
{
	

				header("Location:register.php");
		

}
?>
<?php
if(isset($_POST["hi"]))
{
	

				header("Location:admin/login.php");
		

}
?>
		</div>
</div>
</div>

<br/>
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			 

</body>
</html>


 
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
