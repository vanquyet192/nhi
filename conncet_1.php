<?php
  $servername = 'us-cdbr-east-06.cleardb.net';
  $username = 'bd1f86f2563982';
  $password = 'aab66807';
  $database = 'heroku_76ed7a8fda4e263';

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query('SET NAMES utf8');
    // echo "Kết nối thành công";
  } catch (PDOException $e) {
    echo "Lỗi kết nối " . $e->getMessage();
  }
?>
