<?php 
include '../config/connection.php';
include './shorts.php';
$url = "http://admin.customneonz.com/product-image";
// $url = "administration/product-image";
if (isset($_POST['tag_code'])) {
    $tag_code = $_POST['tag_code'];

    $sql = "SELECT * FROM all_products WHERE featured = 'on' and tag = $tag_code LIMIT 8";
    $result = mysqli_query($conn,$sql);
    $someArray = [];
    if (mysqli_num_rows($result) > 0) {
        array_push($someArray, [
            'status'  => 200,
        ]);
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($someArray, [
                'product_image'  => $url.'/'.$row['img1'],
                'product_name'  => $row['product_name'],
                'small_size'  => $row['small_size']
            ]);
        }
    }else {
        array_push($someArray, [
            'status'  => 100,
        ]);
    }
    echo json_encode($someArray);
}
?>