<?php
require("conncet_1.php");
session_start();

if (isset($_POST["buy"])) {
    if (!empty($_SESSION["suser"])) {
        $idcus = $_SESSION["sidcus"];
        $idstatus = 1;
        $sql = "INSERT INTO bill VALUES (NULL, '{$idcus}', CURDATE(), '{$idstatus}')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $idBill = $conn->lastInsertId();
        $_SESSION['idBill'] = $idBill;

        header("location: detailbill.php");
        exit;
    } else {
        echo "User not logged in!";
        header("location: login.php");
        exit;
    }
}

// Logout functionality
if (isset($_POST["logout"])) {
    session_destroy();
    unset($_SESSION["suser"]);
    unset($_SESSION["sidcus"]);
    header("location: login.php");
    exit;
}
?>
<form action="detailbill.php" method="post">
    <input type="submit" name="login" value="Login">
</form>

