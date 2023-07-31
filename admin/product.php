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
<style>
				li {
					font-size:28px;
					
				}
                .center {
    			 margin: 0 auto;
				 width: 400px;
   		 		display: block
				
				}
                .form-heading
		{
	font-size: 35px;
    color: #668B8B;
    text-align: center;
	
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


<div style="  width: 400%;">
<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
    <h1 class="form-heading" > Product Management </h1> </br> 
    <table>
        <tr>
            <th> ID Product </th>
            <th>Name </th>
            <th>Image </th>
            <th>Price </th>
            <th>Description</th>
            <th>IdCata</th>
            <th>Acction</th>
            <th>Acction</th>
            <th>Acction </th>
        </tr>
        
        <?php
            $sql = "select * from product ";
            $stmt = $conn-> prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
      
             foreach($result as $item)
            {
                echo"<tr>";
                echo"<td>".$item["Id"]."</td>";
                echo"<td>".$item["Name"]."</td>";
                echo"<td>".$item["Image"]."</td>";
                echo"<td>".$item["Price"]."</td>";
                echo"<td>".$item["Description"]."</td>";
                echo"<td>".$item["IdCata"]."</td>";
                $id =$item["Id"];  
                echo "<td> <a href='product.php?id={$id}'onclick='return check();'>Delete</a></td>";
                echo "<td> <a href='productinsert.php'>Insert</a></td>";
                echo "<td> <a href=productupdate.php?id={$id}>Update</a></td>";
                echo "</tr>";
            }
                if(!empty($_GET["id"]))
                {
                    $name = $_GET["id"];
                    $sql = "Delete from product where Id = '{$id}'";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    header("Location:product.php");
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
