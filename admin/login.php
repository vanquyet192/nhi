
<!DOCTYPE HTML>
<head>
<title></title>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>


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
			

			</br>
			</br>
			</br>

<div class="section group">
				<div class="grid_1_of_4 images_1_of_4" >
<h1 class="form-heading"> Login Admin</h1> </br> 
<div class="form-container">
<form action="Login.php" method="post"  style="color:#666699" >
Username: <input type="text" name="username" /><br /> </br> 
Password: <input type="password" name="password" /><br /> </br> 
<input type="submit" name="ok" value="Login" style="background-color:#4A708B;"  /> </br> 
</form>
<?php require("../conncet_1.php");
	session_start();

	if (isset($_POST["ok"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
	
		if (empty($username) || empty($password)) {
			echo "Please enter both username and password.";
		} else {
			try {
				$stmt = $conn->prepare("SELECT * FROM admin WHERE Username = :username");
				$stmt->bindParam(':username', $username);
				$stmt->execute();
				$result = $stmt->fetch();
	
				if ($result && $result["Password"] == $password) {
					$_SESSION["sadmin"] = $username;
					$_SESSION["srole"] = $result["Role"];
					header("Location: manage.php");
					exit;
				} else {
					echo "Invalid username or password.";
				}
			} catch (PDOException $e) {
				echo "Oops! An error occurred.";
				error_log("Login error: " . $e->getMessage());
			}
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

