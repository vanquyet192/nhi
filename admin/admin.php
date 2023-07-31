
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

				
</style>
</head>
<body>
<?php require("../conncet_1.php")
	
	?>
  <div class="wrap">
	<div class="header" >
		<div class="headertop_desc" >
			<div class="call" >
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


<?php
    session_start();
    $user = $_SESSION["sadmin"];
    $role = $_SESSION["srole"];
    if($role!=1)
    {
        $_SESSION["error"]="You do not have permission to access this website";
        header("Location:manage.php");
    }
?>

	
<div class="section">
			<div class="grid_1_of_4">
				<h1 class="form-heading">Admin Management</h1>
<table>
	
		<tr>
		<th>Username</th>
						<th>Password</th>
						<th>Role</th>
						<th>Action</th>
						<th>Action</th>
						<th>Action</th>
		</tr>	
				
	


	<?php
		$sql = "Select * from admin";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		foreach($result as $item) 
		{
			echo "<tr>";
				echo "<td>".$item["Username"]."</td>";
				echo "<td>".$item["Password"]."</td>";
				echo "<td>".$item["Role"]."</td>";	
				$user = $item["Username"];	
				echo "<td> <a href='admin.php?user={$user}' onclick='return check();'>Delete</a></td>";
				echo "<td> <a href='admininsert.php'>Insert</a></td>";
				echo "<td> <a href='adminupdate.php?user={$user}'>Update</a></td>";	
			echo "</tr>";
		}		
		if(!empty($_GET["user"]))
		{
			$user = $_GET["user"];
			$sql = "Delete from admin where Username = '{$user}'";
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			header("Locaion:admin.php");
		}
	?>
		</table>
		<script>
		function check()
			{
				return confirm("You really want to delete");
			}
		</script>
		


</div>
</div>
</div>


			 <br/>
			 <br/>
			 <br/>
			 <br/>

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


