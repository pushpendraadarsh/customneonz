<?php 
    include 'config/connection.php';
    $v = rand(0,100);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="assets/css/style.v2.css?v=<?php echo $v; ?>">
    <link rel="stylesheet" href="assets/css/responsive.v2.css?v=<?php echo $v; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <script src="assets/js/app.main.js"></script>
    <title>Custom Neon Z® -  Neon Signs & Neon Led Lights USA, UK & Canada</title>
</head>

<body>
    <main>
        <?php include 'tricks/header.php'; ?>
        <?php include 'tricks/android_side_bar.php'; ?>
        <?php include 'tricks/android_search_bar.php'; ?>
        <section class="tabs page1">
            <div class="d-sm-flex w-100 h-100 align-items-center" style="padding: 0 9%;">
                <div class="name d-flex justify-content-start flex-column w-100 h-100">
                    <div><span class="maxine-title">Custom NeonZ</span></div>
                    <div class="sub-title ">America’s Premium <span>Neon</span> sign lights</div>
                </div>
                <div class="buttons d-flex justify-content-start flex-column align-items-start w-100 h-100 ml-10%">
                    <a href="Design_your_own_sign.php"><button class="btn">Customize your Neon Light</button></a>
                    <a href="upload-your-own-sign.php"><button class="btn">Upload your own design</button></a>
                    <a href="hire-neon-designer.php"> <button class="btn">Hire a Neon designer</button></a>
                </div>
            </div>
            <?php include 'tricks/subscribe-popup.php'; ?>
        </section>
		<?php include 'tricks/partners.php'; ?>
        <!--<section class="tabs page2 d-flex w-100 h-100 align-items-center">
            <div>Free Express Shipping</div>
            <div>2 Year Warranty</div>
            <div>Free Dimmer/Remote</div>
            <div class="position-fixed" style="bottom: 10px; right: 10px; z-index: 5000; background-color: white;">
                <a href="https://wa.me/1800288920?text=Hey%20I%20am%20Intrested%20your%20Designs"
                    target="_blank"><button
                        class="btn active box d-flex justify-content-center align-items-center">1800-288-920<img
                            src="assets/images/icons/important/whatsapp neon signs.png" alt=""></button></a>
            </div>
        </section> -->
        
        <section class="tabs page3 video-section position-relative ">
            <img src="assets/images/icons/important/dashboard_image_static.jpg" alt="" class="w-100">
        </section>
        <section class="tabs page4 text ">
            <div class="texts1 d-flex justify-content-around w-100 h-100 align-items-center ">
                <div class="title-container d-flex justify-content-around ">
                    <h1>The most affordable neon signs in the world.</h1>
                </div>
                <div class="paragraph-container mta-5 text-wrap">
                    <p>Apart from offering the some top-end neon sign lights, we are also America’s most affordable neon
                        signs marketplace. We offer you unlimited options for your neon signs. You can customize your
                        neon signs with 100s of fonts, colors and
                        sizes.You can also just upload your own design or your companies logo and we can make your it
                        glow neon-ic.Also you could hire our neon designer and he could design as per your requirements
                        and needs.</p>
                </div>
            </div>
        </section>
        <section class="tabs page5 mb-2">
        </section>
        <?php include 'tricks/testimonial.php'; ?>
        <section class="tabs page7 text ">
            <div class="texts2 d-flex justify-content-around w-100 h-100 align-items-center ">
                <div class="paragraph-container ">
                    <p class="w-100" style="padding: 35px 0 0 110px;">Apart from offering the some top-end neon sign
                        lights, we are also America’s most affordable neon signs marketplace. We offer you unlimited
                        options for your neon signs. You can customize your neon signs with 100s of fonts, colors and
                        sizes.You can also just upload your own design or your companies logo and we can make your it
                        glow neon-ic.Also you could hire our neon designer and he could design as per your requirements
                        and needs.</p>
                </div>
                <div class="title-container d-flex justify-content-around ">
                    <h1>The most affordable neon signs in the world.</h1>
                </div>
            </div>
        </section>
        <?php include 'tricks/bestsellers.php'; ?>
        <?php include 'tricks/subscribe-foot.php'; ?>
        <section class="tabs horizontal-line m-auto" style="width: 90% !important;"></section>
        <?php include 'tricks/footer-home.php'; ?>
    </main>

</body>

</html>