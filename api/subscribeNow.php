<?php
include '../config/connection.php';

if (isset($_POST['email'])) {
    $emailId = $_POST['email'];
    $currentDate = date("d-M-Y h:i:s");
    if ($emailId == "") {
        echo 100;
    }else{
        $sql = "SELECT * FROM `subscribers` WHERE email='$emailId'";
        $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
       echo 300;
    }else{
        $sql = "INSERT INTO subscribers (email,datetime) VALUES ('$emailId','$currentDate')";
        if (mysqli_query($conn,$sql)) {
            echo 200;
        }
    }
}
}
?>