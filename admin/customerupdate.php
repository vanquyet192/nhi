
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
    .form-group {
		margin-bottom: 20px;
	}

	.form-group label {
		display: block;
		font-weight: bold;
		margin-bottom: 5px;
	}

	.form-group input,
	.form-group select {
		width: 100%;
		padding: 8px;
		border: 1px solid #ccc;
		border-radius: 4px;
	}

	.form-group input[type="submit"] {
		background-color: #668B8B;
		color: #fff;
		font-weight: bold;
		cursor: pointer;
	}

	.form-group input[type="submit"]:hover {
		background-color: #003333;
	}

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
            if(!empty($_GET["id"]))
        {
            $id= $_GET["id"];
            $sql = "select * from customer Where Id ='{$id}'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch();
            $user = $result["Username"];
            $pass = $result["Password"];
            $name = $result["Name"];
            $mobile =$result["Mobile"];
            $address =$result["Address"];
             $isactive = $result["IsActive"];
               $chon0="";
               $chon1="";
               $chon2="";
               $chon3="";
            if($isactive==0)
              {
                 $chon0 = "Selected";
              }
            else if ($isactive==1)
             {
            $chon1 = "Selected";
             }
            else if ($isactive==2)
              {
            $chon2 = "Selected";
             }
             else
             {
           $chon3 = "Selected";
             }   
        }
    ?>


<div class="section">
<div class="form-container">
				<h1 class="form-heading"> Customer management</h1></br>
                <form method="post">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" id="username" name="Username" readonly value="<?php echo $user ?>">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" name="Password" value="<?php echo $pass ?>">
					</div>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" id="name" name="Name" value="<?php echo $name ?>">
					</div>
					<div class="form-group">
						<label for="mobile">Mobile</label>
						<input type="text" id="mobile" name="Mobile" value="<?php echo $mobile ?>">
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" id="address" name="Address" value="<?php echo $address ?>">
					</div>
					<div class="form-group">
						<label for="isactive">IsActive</label>
						<select id="isactive" name="IsActive">
							<option value="0" <?php echo $chon0 ?>>0</option>
							<option value="1" <?php echo $chon1 ?>>1</option>
							<option value="2" <?php echo $chon2 ?>>2</option>
							<option value="3" <?php echo $chon3 ?>>3</option>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" name="OK" value="Update">
					</div>
				</form>
               
    <?php
            if(isset($_POST["OK"]))
            {
                $user = "";
                $pass = "";
                $name = "";
                $mobile ="";
                $address ="";

                if(empty($_POST["Username"])||empty($_POST["Password"])||empty($_POST["Name"])||empty($_POST["Mobile"])||empty($_POST["Address"]))
                {
                    echo "Ban chua nhap du lieu day du";
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
                    $sql = "Update customer set Username = '($user)', Password = '{$pass}', Name ='{$name}',Mobile ='{$mobile}', Address='{$address}',  IsActive = '{$isactive}' where Id ='{$id}' ";
                    $stmt =$conn->prepare($sql);
                    $stmt->execute();
                    echo "Update thanh cong";
                    header("Location:customer.php");

                }
                catch(PDOException $e){
                    echo "Update that bai ".$e->getMessage();
                }
            }
 
    ?>
</div>
        </div>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
<div class="copy_right"class="copy_right">
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