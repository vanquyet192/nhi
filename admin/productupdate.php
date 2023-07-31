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

	<style type="text/css">
			div
		{
			width: auto;
			right:-500px;
			
		}
	</style>







  <?php
        if(!empty($_GET["id"]))
        {
            $id= $_GET["id"];
            
            $sql = "Select * from product where Id ='{$id}'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch();
            $name = $result["Name"];
            $image = $result["Image"];
            $price = $result["Price"];
            $description = $result["Description"];
            $idcata = $result ["IdCata"];
    ?>
    <div>
<div class="section group"   >
				<div class="grid_1_of_4 images_1_of_4" style="background-color:#DEB887" >
        <form method="post" style="color:#666699" >
            Id <input type="text" name="Id" readonly value="<?php echo $id ?>"/> <br/> <br/>
            Name <input type="text" name="Name" value="<?php echo $name ?>"/> <br/> <br/>
            Image <input type="text" name="Image" value="<?php echo $image ?>"/> <br/> <br/>
            Price <input type="text" name="Price" value="<?php echo $price ?>"/> <br/> <br/>
            Description <input type="text" name="Description" value="<?php echo $description ?>"/> <br/> <br/>
            IdCata <input type="text" name="IdCata" value="<?php echo $idcata ?>"/> <br/> <br/>
           
           
            <input type="submit" name="OK" value="Update" style="background-color:#4A708B;"/> <br/> <br/>
            </form>
        <?php
            if(isset($_POST["OK"]))
            {
                $name = "";
                $image ="";
                $price ="";
                $description ="";
                $idcata ="";
                if(empty($_POST["Name"])||empty($_POST["Image"])||empty($_POST["Price"])||empty($_POST["Description"])||empty($_POST["IdCata"]))
                {
                    echo "You have not entered complete data";
                    return;
                }
                $name = $_POST ["Name"];
                $image = $_POST["Image"];
                $price = $_POST["Price"];
                $description = $_POST["Description"];
                $idcata = $_POST["IdCata"];
                try 
                {
                    $sql = "Update Product SET Name ='{$name}', Image ='{$image}', Price = '{$price}', Description ='{$description}', IdCata ='{$idcata}' where Id = '{$id}'";
                    $stmt =$conn->prepare($sql);
                    $stmt->execute();
                    echo "Update successful";
                    header("Location:product.php");

                }
                catch(PDOException $e){
                    echo "Update failed ".$e->getMessage();
                }
             }
             } 
        ?>

    </div>
</div>
    </div>
</body>
</html>