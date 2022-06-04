<?php
include '../config/connection.php';
$size_code = $_POST['size_code'];
$sql = "SELECT * FROM calculation WHERE code='$size_code'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $price = array(explode(",",$row['price_array']));
    $myObj = array("length"=>$row['length'],"height"=>$row['height'],"price"=>$price,"addon"=>$row['addon']);
    $myJSON = json_encode($myObj);

echo $myJSON;
}
?>