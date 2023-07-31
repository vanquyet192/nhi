<?php
  $servername = 'us-cdbr-east-06.cleardb.net';
  $username = 'b521b45c895dd7';
  $password = '07998afa';
  $database = 'heroku_3993de4450eb54e';
  
  try
  {
	  $conn = new PDO("mysql:host=".$servername.";dbname=".$database,$username,$password);
	  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	  
	  $conn->query('SET NAMES utf8');
	  
	// echo "Kết nối thành công";	  
  }
  catch(PDOException $e)
  {
	  echo "Lỗi kết nối " . $e->getMessage();
  }  
?>




