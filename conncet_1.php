<?php
  $servername = 'us-cdbr-east-06.cleardb.net';
  $username = 'bf0e31f2b575da';
  $password = '7b421c39';
  $database = 'heroku_ac3be1bd3be83bb';

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query('SET NAMES utf8');
    // echo "Kết nối thành công";
  } catch (PDOException $e) {
    echo "Lỗi kết nối " . $e->getMessage();
  }
?>

