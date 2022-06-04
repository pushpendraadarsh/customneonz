<?php 
    include 'config/connection.php';
    $v=rand(0,100);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.v2.css?v=<?php echo $v; ?>">
    <link rel="stylesheet" href="assets/css/responsive.v2.css?v=<?php echo $v; ?>">
    <link rel="stylesheet" href="assets/css/upload-image.v2.css?v=<?php echo $v; ?>">
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
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icon/favicon-16x16.png">
    <title>Upload Sign | Custom NeonZ</title>
</head>

<body>
    <main>
        <?php include 'tricks/header.php'; ?>
        <?php include 'tricks/android_side_bar.php'; ?>
        <?php include 'tricks/subscribe-popup.php'; ?>
        <section class="tabs page1">
            <div class="d-sm-flex w-100 h-100 align-items-center">
                <div class="name d-flex justify-content-start flex-column w-100 h-100">
                    <div><span class="maxine-title">Custom NeonZ</span></div>
                    <div class="sub-title text-center w-100" style="font-size: 34px; font-weight: 700;">Upload your own
                        design
                    </div>
                </div>
            </div>

            <div class="d-sm-flex w-100 cahs justify-content-start align-items-start mta-3">
                <div class="upload-box w-100">
                    <input type="file" name="" class="d-none" id="image">

                    <div class="d-flex flex-column align-items-center justify-content-center uploader w-100">
                        <label for="image">
                            <h2>Drag and Drop</h2>
                            <div style="font-size: 25px;">
                                <center> <i class="fa-solid fa-arrow-down"></i></center>
                            </div>
                        </label>
                    </div>

                    <h1 class="w-100 mta-5">Confused about your design?</h1>
                    <a href="hire-neon-designer.php"><button type="button"
                            class="hire btn mta-5 ml-auto mr-auto active box d-flex justify-content-center align-items-center">
                            Hire a Neon designer
                        </button></a>
                    <a href="https://wa.me/1800288920?text=Hey%20I%20am%20Intrested%20your%20Designs"
                        target="_blank"><button
                            class="btn active box ml-auto mr-auto mta-3 d-flex justify-content-center align-items-center">1800-288-920<img
                                src="assets/images/icons/important/whatsapp neon signs.png" alt=""></button></a>
                </div>
                <div class="pricing-box w-75 d-flex justify-content-center align-items-start">
                    <div class="container w-100 h-100">
                        <div class="row mta-3 p-3 w-100">
                            <div class="cont d-flex flex-column align-items-center col-md-6">
                                <h5>Length (in inches)</h5>
                                <input class="style w-75" type="text">
                            </div>
                            <div class="cont d-flex flex-column align-items-center col-md-6">
                                <h5>Height (in inches)</h5>
                                <input class="style w-75" type="text">
                            </div>
                        </div>
                        <div class="pta-3 pba-3 row mta-3 ml-auto mr-auto w-100 style">
                            <div class="cont d-flex flex-column align-items-center col-md-7 f-20">
                                Total Estimated Cost :
                            </div>
                            <div class="cont d-flex flex-column align-items-center col-md-5 f-20-b">
                                $199
                            </div>
                        </div>
                        <h5 class="mta-3">Select Color: </h5>
                        <div class="d-flex justify-content-start align-items-start flex-wrap text-center sizes w-100">
                            <i neon="rgb(255 255 255) 0px 0px 5px, rgb(255 255 255) 0px 0px 10px, rgb(255 253 207) 0px 0px 20px, rgb(255 253 207) 0px 0px 30px, rgb(255 253 207) 0px 0px 40px, rgb(255 253 207) 0px 0px 55px, rgb(255 253 207) 0px 0px 75px"
                                color="white" style="color: rgba(199, 193, 193, 0.925);" name="white"
                                class="material-icons color cont active">highlight</i>
                            <i neon="rgb(255 255 255) 0px 0px 5px, rgb(255 255 255) 0px 0px 10px, rgb(255 249 124) 0px 0px 20px, rgb(255 249 124) 0px 0px 30px, rgb(255 249 124) 0px 0px 40px, rgb(255 249 124) 0px 0px 55px, rgb(255 249 124) 0px 0px 75px"
                                color="rgb(255, 255, 255)" style="color: rgb(255, 249, 124);" name="Lemon Yellow"
                                class="material-icons color cont">highlight</i>
                            <i neon="rgb(255 255 255) 0px 0px 5px, rgb(255 255 255) 0px 0px 10px, rgb(255 141 2) 0px 0px 20px, rgb(255 141 2) 0px 0px 30px, rgb(255 141 2) 0px 0px 40px, rgb(255 141 2) 0px 0px 55px, rgb(255 141 2) 0px 0px 75px"
                                name="Orange" style="color: orange;" color="rgb(255, 255, 255)"
                                class="material-icons color cont">highlight</i>
                            <i neon="rgb(255 255 255) 0px 0px 5px, rgb(255 255 255) 0px 0px 10px, rgb(255 42 77) 0px 0px 20px, rgb(255 42 77) 0px 0px 30px, rgb(255 42 77) 0px 0px 40px, rgb(255 42 77) 0px 0px 55px, rgb(255 42 77) 0px 0px 75px"
                                name="red" style="color: red;" color="rgb(255, 255, 255)"
                                class="material-icons color cont">highlight</i>
                            <i neon="rgb(255 255 255) 0px 0px 5px, rgb(255 255 255) 0px 0px 10px, rgb(255 144 255) 0px 0px 20px, rgb(255 144 255) 0px 0px 30px, rgb(255 144 255) 0px 0px 40px, rgb(255 144 255) 0px 0px 55px, rgb(255 144 255) 0px 0px 75px"
                                name="Pink" style="color: pink;" color="rgb(255, 255, 255)"
                                class="material-icons color cont">highlight</i>
                            <i neon="rgb(255 255 255) 0px 0px 5px, rgb(255 255 255) 0px 0px 10px, rgb(255 92 232) 0px 0px 20px, rgb(255 92 232) 0px 0px 30px, rgb(255 92 232) 0px 0px 40px, rgb(255 92 232) 0px 0px 55px, rgb(255 92 232) 0px 0px 75px"
                                name="Deep Pink" style="color: deeppink;" color="rgb(255, 255, 255)"
                                class="material-icons color cont">highlight</i>
                            <i neon="rgb(255 255 255) 0px 0px 5px, rgb(255 255 255) 0px 0px 10px, rgb(2 116 252) 0px 0px 20px, rgb(2 116 252) 0px 0px 30px, rgb(2 116 252) 0px 0px 40px, rgb(2 116 252) 0px 0px 55px, rgb(2 116 252) 0px 0px 75px"
                                name="Deep Blue" style="color: blue;" color="rgb(255, 255, 255)"
                                class="material-icons color cont">highlight</i>
                            <i neon="rgb(255 255 255) 0px 0px 5px, rgb(255 255 255) 0px 0px 10px, rgb(99 170 255) 0px 0px 20px, rgb(99 170 255) 0px 0px 30px, rgb(99 170 255) 0px 0px 40px, rgb(99 170 255) 0px 0px 55px, rgb(99 170 255) 0px 0px 75px"
                                name="Electric Blue" style="color: blue;" color="rgb(255, 255, 255)"
                                class="material-icons color cont">highlight</i>
                            <i neon="rgb(255 255 255) 0px 0px 5px, rgb(255 255 255) 0px 0px 10px, rgb(11 215 72) 0px 0px 20px, rgb(11 215 72) 0px 0px 30px, rgb(11 215 72) 0px 0px 40px, rgb(11 215 72) 0px 0px 55px, rgb(11 215 72) 0px 0px 75px"
                                name="Green" style="color: green;" color="rgb(255, 255, 255)"
                                class="material-icons color cont">highlight</i>
                        </div>
                        <h5 class="mta-3">Tell us more about your design : </h5>
                        <div class="d-flex justify-content-start align-items-start flex-wrap text-center sizes w-100">
                            <textarea id="type_text" class="col-md-12 h-50" cols="10" rows="5"
                                placeholder="Enter Description"></textarea>
                        </div>
                        <div class="d-flex w-100 mta-3">
                            <h5><input type="radio" name="" id="radio"></h5>
                            <h5 class="mla-4"><label for="radio">Discuss with our designer <b>Free</b></label></h5>
                        </div>
                        <h6>*our designers will call you once the checkout is comleted </h6>
                        <div
                            class="d-flex mta-3 mba-2 justify-content-center align-items-center flex-wrap text-center sizes w-100 pta-2 pba-2  ml-2">
                            <div class="col-md-12 btn cart">Add to Cart</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tabs page5 mb-0" style="margin: 2rem 0 !important;">
        </section>
        <?php include 'tricks/partners.php'; ?>
        <section class="tabs page4 text mt-1">
            <div class="d-flex justify-content-around flex-wrap w-100 h-100 align-items-center ">
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

        <?php include 'tricks/testimonial.php'; ?>
        <?php include 'tricks/bestsellers.php'; ?>
        <section class="tabs horizontal-line m-auto" style="width: 90% !important;"></section>
        <?php include 'tricks/subscribe-foot.php'; ?>
        <?php include 'tricks/footer-home.php'; ?>

    </main>
    <script>
    $(".color.cont").click(function() {
        $(".color").removeClass("active");
        let color = $(this).attr("color");
        let neon = $(this).attr("neon");
        $(".text-preview").css({
            "color": color,
            "text-shadow": neon
        });
        let position = $(this).position();
        alter($(this).attr("name"), position);
    });
    $(".cont").click(function() {
        this.classList.toggle("active");
    });
    </script>
</body>

</html>