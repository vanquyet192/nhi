<?php
session_start();
if(!empty($_GET["idpro"]))
{
    $idpro =$_GET["idpro"];
    if(isset($_SESSION['cart'][$idpro]))
    $qty = $_SESSION['cart'][$idpro] + 1;
    else
        $qty =1;
}
else
{
    header("location:productu.php");
}
$_SESSION['cart'][$idpro] = $qty;
header("location:cartu.php");
?>