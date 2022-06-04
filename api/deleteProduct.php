<?php 
session_start();
include '../config/connection.php';
if (isset($_POST['productid'])) {
    $userId = $_COOKIE['userId'];
    $productid = $_POST['productid'];
    $sql = "DELETE FROM product WHERE userId='$userId' && productid='$productid'";
    if (mysqli_query($conn,$sql)) {
        echo 200;
    }else{
       echo 100;
   }
}
?>