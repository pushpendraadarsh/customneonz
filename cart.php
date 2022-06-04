<?php 
session_start();
include 'config/connection.php';
include 'api/shorts.php';
$v = rand(0,100);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cart.v2.css?v=<?php echo $version; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.v2.css?v=<?php echo $version; ?>">
    <link rel="stylesheet" href="assets/css/responsive.v2.css?v=<?php echo $version; ?>">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/app.main.js?v=<?php echo $version; ?>"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <title>Cart | Custom NeonZ</title>
    <script>
    </script>
</head>

<body>
    <main>
        <?php include 'tricks/header.php'; ?>
        <?php include 'tricks/android_side_bar.php'; ?>
        <section style="height:31vh;" class="tabs page1 mt-5">
            <div class="d-sm-flex w-100 h-100 align-items-center">
                <div class="name d-flex justify-content-start flex-column w-100 h-100">
                    <div><span class="maxine-title" style="font-size: 82px !important;">Custom NeonZ</span></div>
                    <div style="font-size: 50px !important;margin-top: 0 !important;
                    font-weight: 600;height: max-content;" class="m-auto sm sub-title">Your Cart</div>
                </div>
            </div>
        </section>
        <section class="tabs cart w-75 h-100  ml-auto mr-auto mt-5">
            <?php 
                    if (isset($_COOKIE['userId'])) {
                        $userid = $_COOKIE['userId'];
                        $sql = "SELECT * FROM `product` WHERE userid = '$userid' ORDER BY id ASC";
                        $result = mysqli_query($conn,$sql);
                        if (mysqli_num_rows($result) > 0) { ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col"></th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) { $i++;
                    ?>
                    <tr>
                        <td class="w-25 text-justify" scope="row">
                            <div class="previewImage"
                                style="background-image:url('<?php echo $row['image']; ?>');background-color:black;">
                            </div>
                            <p class="mt-5"><?php echo $row['product_name']; ?></p>
                        </td>
                        <td style="width: 35%;" class="text-justify">
							<?php if ($row['product_font'] == "") {} else { ?>
                            <div class="font-size">Pick Your Font: <?php echo $row['product_font']; ?></div>
							<?php } ?>
							<?php if ($row['color'] == "") {} else { ?>
                            <div class="color">Select Your Colour: <?php echo $row['color']; ?></div>
							<?php } ?>
							<?php if ($row['size_name'] == "") {} else { ?>
                            <div class="size name">Size Name: <?php echo $row['size_name']; ?></div>
							<?php } ?>
							<?php if ($row['width'] == "" && $row['height'] == "") {} else { ?>
                            <div class="size">Pick Your Size: <br/> <?php echo $row['width'].' '.$row['height']; ?></div>
							<?php } ?>
							<?php if ($row['power_adapter'] == "") {} else { ?>
							<div class="additional">Power Adapter: <br/>
                                <i><?php echo $row['power_adapter']; ?></i>
							</div><?php } ?>
							<?php if ($row['backboard_shape'] == "") {}else{ ?>
							<div class="additional">Backboard shape: <br/>
                               <i> <?php echo $row['backboard_shape']; ?></i>
							</div> <?php } ?>
							<?php if ($row['size_name'] != "" || $row['product_font'] != "") { ?>
                            <div class="action-btns btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal<?php echo $i; ?>">Preview
                                Image</div>
                            <div class="action-btns btn btn-danger"
                                onclick="deleteProduct('<?php echo $row['productid']; ?>')">
                                Remove
                            </div>
							<?php }else{ ?>
							Equipments
							<?php } ?>
                        </td>
                        <td class="text-justify"><span class="oldPrice">$<?php echo $row['amount']; ?></span><span
                                class="ml-2">$<?php echo $row['amount']; ?></span></td>
                        <td class="text-justify"><?php echo $row['quantity']; ?></td>
                        <td class="text-justify">$<?php echo $row['amount']*$row['quantity']; ?></td>
                    </tr>
                    <div class="modal fade" id="exampleModal<?php echo $i; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Image Preview</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo $row['image']; ?>" id="preview_images" alt=""
                                        style="background-color: black;" class="w-auto h-auto">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary close-btn"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="3">
                            <p class="salebtn text-right">Flash Sale - Ends TODAY! 10% -$
								<?php
							echo all_amount_include_discount($conn,all_amount_by_userId($conn,$userid),"flash_sale","1");
							?>
							</p>
                            <div
                                class="text-right subtotal d-flex flex-row w-75 h-50 ml-auto justify-content-between align-items-end">
                                <p class="mb-0">Subtotal:</p>
                                <p class="mb-0" id="overall_amount_cart">$
									<?php
							        echo all_amount_include_discount($conn,all_amount_by_userId($conn,$userid),"flash_sale","");
                                    ?>
								</p>
                            </div>
                            <p class="text-right sub-title">Tax included. Shipping included.</p>
                            <div class="d-flex justify-content-end align-items-end">
                                <button id="checkout" class="btn btn-primary btn-lg ml-auto">Add To Cart</button>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <?php } else{ ?>
            <br>
            <a style="margin-top:20px;color:red;font-size:25px;" href="#">No data Found!</a>
            <?php } 
        } else{?>
            <br>
            <a style="margin-top:20px;color:red;font-size:25px;" href="#">No data Found!</a>
            <?php  } ?>
        </section>
        <?php include 'tricks/partners.php'; ?>
        <section class="tabs horizontal-line ml-auto mr-auto mt-5" style="width: 90% !important;"></section>
        <?php include 'tricks/footer-home.php'; ?>
    </main>
    <script src="assets/js/app.main.js"></script>
    <script>
    // $('#myModal').on('shown.bs.modal', function() {})
    $('#myInput').trigger('focus');
    $(document).ready(function() {
        $("tr td input").on('change', function() {
            if ($(this).val() <= 0) {
                $(this).val(1);
            }
            let exactAmount = "₹ " + numberWithCommas(parseInt(
                $(this)
                .parent().parent()
                .children(".amount")[0].innerText.replace(",", '')
                .replace("₹", '')) * parseInt($(this).val()))
            $(this).parent().parent().children(".all")[0].innerText = exactAmount;
        });
        $("tr td").on('change', function() {
            if ($(this).val() < 0) {
                $(this).val(0);
            }
        });
        $("#checkout").click(function() {
            window.location.href = "checkout/1.php";
        });
    });
    </script>
</body>

</html>