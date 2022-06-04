<?php
include '../config/connection.php';
$sql = "SELECT * FROM calculation";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    $obj = [];
    while ($row = mysqli_fetch_assoc($result)) {
    $price = array(explode(",",$row['price_array']));
    array_push($obj, [
        'size_name'=>$row['size_name'],
        'size_code'=>$row['code'],
        'lengths'=>$row['length'],
        'height'=>$row['height'],
        'price'=> $price,
        'addon'=> $row['addon']
        ]);
    }

    echo json_encode($obj);
}
?>