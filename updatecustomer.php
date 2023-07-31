<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cập nhật thông tin cá nhân</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }
        
        .account_desc {
    font-size: 30px;
  }

  .center {
    margin: 0 auto;
    width: 400px;
    display: block;
  }

  .header {
    text-align: center;
  }

  .header_top {
    margin-top: 20px;
  }
      
  .personal-info-container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
}

.personal-info-heading {
  text-align: center;
  margin-bottom: 20px;
  font-size: 24px;
  color: #016161;
}

.personal-info-container form {
  padding: 20px;
  border-radius: 5px;
}

.personal-info-container label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

.personal-info-container input[type="text"] {
  width: 100%;
  padding: 10px;
  border-radius: 3px;
  border: 1px solid #ccc;
}

.personal-info-container input[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #003333;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  margin-top: 20px;
}

.personal-info-container input[type="submit"]:hover {
  background-color: #005555;
}

        

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #003333;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-top: 20px;
        }
        
        input[type="submit"]:hover {
            background-color: #005555;
        }
    </style>
</head>
<body>

<div class="wrap">
  <div class="header">
    <div class="headertop_desc">
      <div class="call">
        <p><span>CUSTOMER SUPPORT</span> Hotline <span class="number"> 1900 1508 </span></span></p>
      </div>
      <div class="account_desc">
        <ul>
          <li><a href="HomeU.php" style="background-color:#003333;">Home</a></li>
          <li><a href="login.php" style="background-color:#003333;">Logout</a></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <div class="header_top">
      <div class="center">
        <video width="400px" height="200px" playsinline autoplay muted loop>
          <source src="images/DONG.mp4" type="video/mp4" >
        </video>
      </div>
    </div>
  </div>
    </br>

<?php
session_start();
require("conncet_1.php");

$user = $_SESSION['suser'];

// Xử lý khi người dùng nhấn nút "Cập nhật"
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy thông tin từ form
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    try {
        // Cập nhật thông tin trong cơ sở dữ liệu sử dụng PDO
        $stmt = $conn->prepare("UPDATE CUSTOMER SET Name = :name, Mobile = :mobile, Address = :address WHERE Username = :user");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':user', $user);
        $stmt->execute();

        // Cập nhật thành công, thông báo cho người dùng và chuyển hướng về trang chủ
        echo "Personal information has been successfully updated!";
        header("Location: HomeU.php");
        exit();
    } catch (PDOException $e) {
        // Cập nhật thất bại, thông báo lỗi
        echo "An error occurred while updating personal information: " . $e->getMessage();
    }
}

try {
    // Truy vấn thông tin cá nhân từ cơ sở dữ liệu sử dụng PDO
    $stmt = $conn->prepare("SELECT * FROM CUSTOMER WHERE Username = :user");
    $stmt->bindParam(':user', $user);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "An error occurred while querying personal information: " . $e->getMessage();
}

// Đóng kết nối cơ sở dữ liệu
$conn = null;
?>

<div class="personal-info-container">
    <h2 class="personal-info-heading">Update personal information</h2>
    <form method="POST" action="">
        <label for="name">First name</label>
        <input type="text" name="name" id="name" value="<?php echo $row['Name']; ?>" required><br>

        <label for="mobile">Phone number:</label>
        <input type="text" name="mobile" id="mobile" value="<?php echo $row['Mobile']; ?>" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" value="<?php echo $row['Address']; ?>" required><br>

        <input type="submit" value="Updates">
    </form>
    </div>
</body>
</html>
