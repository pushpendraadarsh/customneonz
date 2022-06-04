<?php 
session_start();
include 'config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cart.v2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.v2.css?v=1">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/app.main.js?v=10."></script>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <title>Refund Policy | Custom NeonZ</title>
    <style>
    body {
        font-size: 20rem !important;
    }

    .page2 {
        padding: 35rem !important;
    }

    h2 {
        font-weight: 400 !important;
        color: #FF7AC7 !important;
        font-size: 30rem !important;
    }

    .privacy-policy {
        color: #777777;
    }
    </style>
</head>

<body>
    <main>
        <?php include 'tricks/header.php'; ?>
        <section style="height:31vh;" class="tabs page1 mt-5">
            <div class="d-sm-flex w-100 h-100 align-items-center" style="padding: 1rem 4rem;">
                <div class="name d-flex justify-content-start flex-column w-100 h-100">
                    <div><span class="maxine-title" style="font-size: 82rem !important;">Custom NeonZ</span></div>
                    <div style="font-size: 50rem !important;margin-top: 0 !important;
                    font-weight: 600;height: max-content;" class="m-auto sm sub-title">Refund Policy</div>
                </div>
            </div>
        </section>
        <section class="tabs page2 mt-5">
            <div class="d-sm-flex w-100 align-items-center" style="padding: 1rem 4rem;">
                <div class="privacy-policy cms-content">
                    <p>1. All our products are custom made and manufactured on order. We do not offer any refunds or accept any returns for Custom Order Products.<br><br>
2. If the Goods arrive to the Buyer in a damaged state, the Buyer is required to notify the delivery agent and us within 24 hours in writing inclusive of photography or a video evidence of the damage to the Goods and associated packaging to verify. Failure to comply with this request and timeframe will void the Seller obligations. <br><br>
3. Due to the hand-rendered nature of the Goods, they can be subject to variations and slight discolorations. Some variations in color can also occur as a result of the computer screen and printer calibration. The Buyer acknowledges that these variations and discolorations are not a fault of the Products and accepts the potential of such occurrence.<br><br>
4. The Buyer shall inspect the Goods on delivery and shall within 24 hours of delivery notify us in writing of any alleged defect, shortage in quantity or damage. The Buyer shall afford the us an opportunity to inspect the Goods within a reasonable time following delivery. If the Buyer shall fail to comply with these provisions the Goods shall be conclusively presumed to be in accordance with the terms and conditions and free from any defect or damage.<br><br>
5. Please contact us in case of technical problems.<br><br></p>
                </div>
            </div>
        </section>

        <section class="tabs horizontal-line ml-auto mr-auto mt-5" style="width: 90% !important;"></section>
        <?php include 'tricks/footer-home.php'; ?>

    </main>
</body>

</html>