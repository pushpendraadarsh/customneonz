<?php 
    include 'config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.v2.css?v=1">
    <link rel="stylesheet" href="assets/css/hire.v2.css">
    <link rel="stylesheet" href="assets/css/responsive.v2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app.main.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <title>Hire Neon Designer | Custom NeonZ</title>
</head>

<body>
    <main>
        <?php include 'tricks/header.php'; ?>
        <?php include 'tricks/android_side_bar.php'; ?>
        <section class="tabs page1">
            <div class="d-sm-flex w-100 h-100 align-items-center position-relative" style="padding: 2rem 0rem 0 70rem;">
                <div class="name d-flex justify-content-start align-items-center flex-column w-100 h-100">
                    <div><span class="maxine-title">Custom NeonZ</span></div>
                    <div class="sub-title" style="font-weight: 700 !important;"> Hire a Neon Designer @ 39$
                    </div>
                    <button class="designer-btn"><a href="#">Hire a Neon Designer</a></button>
                </div>
                <div class="buttons d-flex justify-content-start flex-column align-items-end w-100 h-100">
                    <img class="persons" src="assets/images/icons/important/img1.png" alt="">
                </div>
            </div>
            <div class="d-sm-flex w-100 h-100 align-items-center featureHire position-relative" style="padding: 0;">
                <div class="d-flex justify-content-start flex-column w-100 h-100" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                    padding: 25rem;">
                    <div class="p-5">
                        <div class="featureContent">
                            <h1 class="">No Time Boundations</h1>
                            <p>No time Limit, No boundations. Our Designers will work on yourneon light till you are
                                completely</p>
                        </div>
                        <div class="featureContent">
                            <h1 class="">Satisfaction Guarantee</h1>
                            <p>No time Limit, No boundations. Our Designers will work on yourneon light till you are
                                completely</p>
                        </div>
                        <div class="featureContent">
                            <h1 class="">Professionaly custom</h1>
                            <p>No time Limit, No boundations. Our Designers will work on yourneon light till you are
                                completely</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start flex-column align-items-end w-75 h-100">
                    <h1 style="font-weight: 800 !important;font-size:46.5rem;" class="text-center p-5">Why Hire a Neon
                        Designer ?</h1>
                </div>
            </div>
        </section>
        <section class="tabs page2 d-flex justify-content-around w-100 h-100 align-items-center">
            <div>Free Express Shipping</div>
            <div>2 Year Warranty</div>
            <div>Free Dimmer/Remote</div>
        </section>
        <section class="tabs page5 mb-2" style="background-image: url(assets/images/icons/important/threeHire.png);margin: 8rem 0 !important;
                margin: 150rem 0 !important;">
        </section>

        <?php include 'tricks/testimonial.php'; ?>

        <?php include 'tricks/partners.php'; ?>
        <?php include 'tricks/subscribe-foot.php'; ?>
        <section class="tabs horizontal-line m-auto" style="width: 90% !important;"></section>
        <?php include 'tricks/footer-home.php'; ?>
        </section>
    </main>
</body>

</html>