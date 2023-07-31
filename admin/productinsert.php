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



<div>
<div class="section group"   >
				<div class="grid_1_of_4 images_1_of_4" style="background-color:#DEB887"  >
    <form method="post" style="color:#666699" >
    Id <input type="text" name="Id"  /> <br/> <br/> 
    Name <input type="text" name="Name" /> <br/> <br/>
    Image <input type="text" name="Image" /> <br/> <br/>
    Price <input type="text" name="Price" /> <br/> <br/>
    Description <input type="text" name="Description" /> <br/> <br/>
    IdCata <input type="text" name="IdCata" /> <br/> <br/>
    <input type="submit" name="OK" value="Insert" style="background-color:#4A708B;"/> <br/> <br/>
    </form>

<?php
    if(isset($_POST["OK"]))
    {   
        $name = "";
        $image = "";
        $price ="";
        $description="";
        $idcata="";
        if(empty($_POST["Name"])|| empty($_POST["Image"])||empty($_POST["Price"])||empty($_POST["Description"])||empty($_POST["IdCata"]))
        {
            echo " You have not entered complete data";
            return;
        }
        $id =$_POST["Id"];
        $name = $_POST["Name"];
        $image = $_POST["Image"];
        $price = $_POST["Price"];
        $description =$_POST["Description"];
        $idcata =$_POST["IdCata"];
        try
        {
            $sql = "SELECT * from product where Id = '{$id}'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchALL();
            if(count($result)>0)
            {
                echo "This ID already exists. Insert failed ";
                return;
            }
            $sql = "Insert into product values ('{$id}', '{$name}', '{$image}', '{$price}', '{$description}', '{$idcata}')";
            $stmt = $conn->prepare($sql);
            $stmt-> execute();
        
            echo "Insert successful";
            header("Location:product.php");
        }
        catch(PDOException $e){
            echo "Insert failed".$e->getMessage();
        }
    }
?>

                </div>
</div>
</body>
</html>