
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

	


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require("../conncet 1.php");
    ?>  
    <?php
        if(!empty($_GET["user"]))
            {
             $user= $_GET["user"];
             $sql = "select * from admin where Username ='{$user}'";
             $stmt = $conn->prepare($sql);
             $stmt->execute();
             $result = $stmt->fetch();
             $pass = $result["Password"];
             $role = $result["Role"];

          $chon1="";
          $chon2="";
          $chon3="";
             if($role==1)
              {
                 $chon1 = "selected";
              }
             else if ($role==2)
              {
                 $chon2 = "selected";
              }
             else  
             {
                $chon3 = "selected";
              }

            }
    ?>

<style type="text/css">
			div
		{
			width: auto;
			right:-500px;
			
		}
	</style>
<div class="section group"   >
				<div class="grid_1_of_4 images_1_of_4" style="background-color:#DEB887" >
 <form method="post" style="color:#666699">
    Username <input type="text" name="Username" readonly value="<?php echo $user ?>"/> <br/> <br/>
    Password <input type="password" name="Password" value="<?php echo $pass ?>"/> <br/> <br/>
    Role
    <select name="role">
            <option value="1" <?php echo $chon1 ?> > Tallest </option>
            <option value="2" <?php echo $chon2 ?> >Level 2</option>
            <option value="3" <?php echo $chon3 ?> >Level 3</option>
    </select> <br/> <br/>

    <input type="submit" name="OK" value="Update" style="background-color:#999999"/> <br/> <br/>
    </form>
<?php
            if(isset($_POST["OK"]))
            {
                $pass = "";
                if(empty($_POST["Password"]))
                {
                    echo "You have not entered complete data";
                    return;
                }
                $user= $_POST["Username"];
                $pass = $_POST["Password"];
                $role = $_POST["Role"];
           
                try 
                {
                    $sql = "Update admin Set Password = '{$pass}', Role = '{$role}' where Username ='{$user}'";
                    ///echo $sql;
                    $stmt =$conn->prepare($sql);
                    $stmt->execute();
                    echo "Update successful";
                    header("Location:admin.php");

                }
                catch(PDOException $e){
                    echo "Update failed ".$e->getMessage();
                }
      }
    ?>
    </div>
    </div>
</body>
</html>