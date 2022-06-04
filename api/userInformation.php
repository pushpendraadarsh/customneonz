<?php
session_start();
include '../config/connection.php';
include '../api/shorts.php';
if (isset($_COOKIE['userId'])) {
$userId = $_COOKIE['userId'];
$email = $_POST['email'];
$country = $_POST['country'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$address = $_POST['address'];
$city = $_POST['city'];
$mobile = $_POST['mobile'];
$state = $_POST['state'];
$current_time = date("d-M-Y h:i:s");

$sql= "UPDATE userdetail SET firstname='$firstName',lastname='$lastName',email='$email',mobile='$mobile',country='$country',address='$address',state='$state',timestamp='$current_time' WHERE userId='$userId'";
if (mysqli_query($conn, $sql)){
    $_SESSION['status'] = "in_shipping";
    echo update_status($conn,$_COOKIE['userId'],"in_shipping");
}else{
    echo 100;
}
}
?>