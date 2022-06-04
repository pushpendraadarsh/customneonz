<?php include_once '../api/shorts.php'; ?>    
<div style="width: 63%;" class="cartItem-container h-100 d-flex flex-column align-items-start">
    <?php
        $sql = "SELECT * FROM `product` WHERE userid = '$userId' ORDER BY id ASC";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) { ?>
    <table class="text-justify table w-100">
        <tbody>
            <?php
        while ($row = mysqli_fetch_assoc($result)) {
                             ?>
            <tr>
                <td class="w-25" scope="row">
                    <div class="mt-auto previewImage"
                        style="background-color:grey;background-image:url('<?php echo $row['image'] ?>')"></div>
                </td>
                <td style="
                                font-weight: 275;
                                font-size: 10.5px;
                                line-height: 15px;
                                color: #3a3939;
                                width: 40%;
                                " class="text-justify">
                    <div class="title"><?php echo $row['product_name'] ?></div>
					<?php if ($row['size_name'] == "") {} else { ?>
                    <div class="font-size">Size Name: <?php echo $row['size_name']; ?>
                    </div><?php } ?>
					<?php if ($row['product_font'] == "") {} else { ?>
                    <div class="font-size">product_font:<?php echo $row['product_font']; ?>
                    </div><?php } ?>
					<?php if ($row['color'] == "") {} else { ?>
                    <div class="color">Select Your Colour: <?php echo $row['color'] ?>
                    </div><?php } ?>
					<?php if ($row['width'] == "" && $row['height'] == "") {} else { ?>
                    <div class="size">Pick Your Size: <?php echo $row['width']." ".$row['height']; ?>
                    </div><?php } ?>
					<?php if ($row['power_adapter'] == "") {} else { ?>
                    <div class="additional">Power Adapter: <br/>
                                <i><?php echo $row['power_adapter']; ?></i>
							</div><?php } ?>
							<?php if ($row['backboard_shape'] == "") {}else{ ?>
							<div class="additional">Backboard shape: <br/>
                               <i> <?php echo $row['backboard_shape']; ?></i>
							</div> <?php } ?>
					<?php if ($row['size_name'] != "" || $row['product_font'] != "") { ?>
                    <div class="previewImageBtn">Preview: <a href="<?php echo $row['image'] ?>" target="_blank">Click To
                            View Image</a></div>
					<?php } ?>
                    <div class="amount"><b>$<?php echo ($row['amount'] * $row['quantity']); ?></b></div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>
    <input type="text" class="form-control" placeholder="" id="inputZip">
    <div class="mt-4 horizontal-line w-100"></div>
    <div class="row w-100 mt-4" style="
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 20px;
                    color: #000000;">
        <div class="form-group col-md-9">
            Subtotal:
        </div>
        <div class="text-right form-group col-md-3">
            $ <?php echo all_amount_by_userId($conn,$userId); ?>
        </div>
    </div>
    <div class="row w-100" style="
                    font-style: normal;
                    font-weight: 600;
                    font-size: 18px;
                    line-height: 25px;
                    color: #FD08B6;
                    ">
        <div class="form-group col-md-9">
            Flash Sale - Ends TODAY! 10%
        </div>
        <div class="text-right form-group col-md-3">
            -$ <?php echo all_amount_include_discount($conn,all_amount_by_userId($conn,$userId),"flash_sale","1"); ?>
        </div>
    </div>
    <div class="mt-2 horizontal-line w-100"></div>
    <div class="row w-100 mt-4" style="
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 20px;
                    color: #000000;
                    ">
        <div class="form-group col-md-9">
            Grand Total:
        </div>
        <div class="text-right form-group col-md-3">
            <span style="font-size: 22px;font-weight:600;">$<?php                          
				echo all_amount_include_discount($conn,all_amount_by_userId($conn,$userId),"flash_sale","");?></span>
        </div>
    </div>
    <div class="row w-100 mt-1" style="
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 20px;
                    color: #000000;
                    ">
        <div class="form-group col-md-3">
        </div>
        <div class="botprodheckp form-group col-md-9">
            <span class="botprodheck">Tax included. Shipping included.</span>
        </div>
    </div>
</div>