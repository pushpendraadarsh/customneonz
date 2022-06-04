<?php
    include '../config/connection.php';
    session_start();
        if (isset($_POST['image'])) {
    $date = date("d_M_Y_h_i_s");
    $image = $_POST['image'];
    $name = trim($_POST['name']);
    $font = $_POST['font'];
    $color = $_POST['color'];
    $size = implode("','", $_POST['size']);//name,amount,width,height
    $power_adapter = $_POST['power_adapter'];
    $backboard_shape = $_POST['backboard_shape'];
    $bumper_sale = $_POST['bumper_sale'];
    $hanging = $_POST['hanging'];
    $wall_mounting = $_POST['wall_mounting'];
    $currentTime = date("d-M-Y h:i:S");
    $offerPercentage = 19.9;
    $userid = "";
    if (isset($_COOKIE['userId'])) {
        $userid = $_COOKIE['userId'];
    }else{
        $userid = "cnz_guest_".date("dyhis").'_'.rand(0,10);
        setcookie('userId', $userid, time() + (86400 * 40), "/");
        $sql = "INSERT INTO userdetail (`name`, `userId`, `password`, `firstname`, `lastname`, `email`, `mobile`, `country`,
     `address`,`state`, `timestamp`)
    VALUES ('TEMP_USER','$userid', '', '', '', '', '','','','','$currentTime');";
     if (mysqli_query($conn,$sql)) {
    }else{
        echo 100;
    }
    }
    $productId = $userid."_".$name."_".date("dmhis");
    $sql = "INSERT INTO product (`productid`, `userId`, `product_name`, `image`, `product_font`, `color`, `quantity`, `size_name`,
	`amount`, `width`, `height`, `power_adapter`, `backboard_shape`, `offer`, `status`, `timestamp`)
     VALUES ('$productId','$userid', '$name', '$image',  '$font', '$color', '1','$size', '$power_adapter',
     '$backboard_shape','$offerPercentage','cart', '$currentTime');";
     $sql .= "INSERT INTO product (`productid`, `userId`, `product_name`, `image`, `product_font`, `color`, `quantity`, `size_name`,
	`amount`, `width`, `height`, `power_adapter`, `backboard_shape`, `offer`,`status`, `timestamp`)
      VALUES ('$productId','$userid', 'Remote and Dimmer', '/assets/images/icons/remote_dimmer.png','', '', '1','','0','','', '',
     '','0', 'cart', '$currentTime');";

    if ($hanging == "yes") {
     $sql .= "INSERT INTO product (`productid`, `userId`, `product_name`, `image`, `product_font`, `color`, `quantity`, `size_name`,
	`amount`, `width`, `height`, `power_adapter`, `backboard_shape`, `offer`, `status`, `timestamp`)
	 VALUES ('$productId','$userid', 'Hanging chain', '/assets/images/icons/hanging.png','', '', '1','','15','','', '',
     '','0','cart', '$currentTime');";
        }
        
        if ($wall_mounting == "yes") {
            $sql .= "INSERT INTO product (`productid`, `userId`, `product_name`, `image`, `product_font`, `color`, `quantity`, `size_name`,
	`amount`, `width`, `height`, `power_adapter`, `backboard_shape`, `offer`, `status`, `timestamp`)
	VALUES ('$productId','$userid', 'Wall Mounting', '/assets/images/icons/wall_mounting.png','', '', '1','','15','','', '',
     '','0','cart', '$currentTime');";
        }
    //  echo $sql;
     if (mysqli_multi_query($conn,$sql)) {
         echo 200;
        }else{
	 echo 100;
	 }
    }
    ?>