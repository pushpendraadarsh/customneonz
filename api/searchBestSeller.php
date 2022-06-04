<?php 
include '../config/connection.php';
include './shorts.php';
$url = "http://admin.customneonz.com/product-image";
// $url = "administration/product-image";
$bestseller_popularity = 'ASC';
$bestseller_price = 'ASC';
if (isset($_POST['bestseller_input'])) {
    $bestseller_input = $_POST['bestseller_input'];
    $bestseller_popularity = $_POST['bestseller_popularity'];
    $bestseller_price = $_POST['bestseller_price'];
    $sql = "SELECT * FROM all_products 
    WHERE product_name LIKE '%$bestseller_input%' or search_tag LIKE '%$bestseller_input%' and featured = 'on'";
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