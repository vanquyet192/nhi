<?php
require("conncet_1.php");
session_start();

// Check user login status
if (!isset($_SESSION['user'])) {
    echo "login_required";
    exit;
}

// Handle product deletion
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    unset($_SESSION['cart'][$id]);
    echo "success";
    exit;
}
?>
