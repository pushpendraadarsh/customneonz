<?php
session_start();
include '../config/connection.php';
include '../api/shorts.php';
if (isset($_COOKIE['userId']) && isset($_SESSION['status']) && $_SESSION['status'] == "in_shipping") {
    $status = "in_payment";
$_SESSION['shipMethod'] = $_POST['method'];
    echo update_status($conn,$_COOKIE['userId'],$status);
}
?>