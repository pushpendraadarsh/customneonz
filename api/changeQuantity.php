<?php
include '../config/connection.php';
if (isset($_COOKIE['userId'])) {
    $userId = $_COOKIE['userId'];
    $id = $_POST['product_id'];
    $q = $_POST['value'];
$sql= "UPDATE product SET quantity='$q' WHERE userId='$userId' and productid='$id'";
if (mysqli_query($conn, $sql)){
      $sql1 = "SELECT * FROM product WHERE userId= '$userId'";
      $result1 = mysqli_query($conn,$sql1);
    $amount = 0;
    while ($row = mysqli_fetch_assoc($result1)) {
        $amount = ($row['amount'] * $row['quantity']) + $amount;
    }
      echo $amount;
}else{
      echo 100;
}
}
?>