<?php 
    include 'config/connection.php';
    $rand = rand(0,10);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.v2.css?v=<?php echo $rand; ?>">
    <link rel="stylesheet" href="assets/css/design-own.v2.css?v=<?php echo $rand; ?>">
    <link rel="stylesheet" href="assets/css/responsive.v2.css?v=<?php echo $rand; ?>">
    <link rel="stylesheet" href="assets/css/responsiveDesign.v2.css?v=<?php echo $rand; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/html2canvas.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <title>Design Your Own Sign | Custom NeonZ</title>
</head>

<body>
    <div id="preloader"></div>
    <main>
        <?php include 'tricks/header.php'; ?>
        <?php include 'tricks/android_side_bar.php'; ?>
        <section class="tabs page1">
            <div class="d-sm-flex w-100 align-items-center">
                <div class="name d-flex justify-content-start flex-column w-100">
                    <div><span class="maxine-title">Custom NeonZ</span></div>
                    <div class="sub-title text-center w-100" style="font-size: 34px; font-weight: 700;">Design your
                        slang!
                    </div>
                </div>
            </div>
            <div class="d-sm-flex w-100 h-100 justify-content-start align-items-start mt-3 cont-Pre-Edit">
			<div class="editing imagePreview position-relative">
                <div class="editing mover ">
                    <div class="size-handler vertical">
                        <div class="first"></div>
                        <div class="text"></div>
                        <div class="last"></div>
                    </div>
                    <p class="text-preview" id="typed_text"></p>
                    <div class="size-handler horizontal">
                        <div class="first"></div>
                        <div class="text"></div>
                        <div class="last"></div>
                    </div>
					<div class="background-slider-container">
					    <img class="bgs active" src="assets/images/background/background1.jpg">
						<img class="bgs" src="assets/images/background/background2.jpg">
						<img class="bgs" src="assets/images/background/background3.jpg">
						<img class="bgs" src="assets/images/background/background4.jpg">
						<img class="bgs" src="assets/images/background/background5.jpg">
						<img class="bgs" src="assets/images/background/background6.jpg">
						<img class="bgs" src="assets/images/background/background7.jpg">
						<img class="bgs" src="assets/images/background/background8.jpg">
					</div>
                </div>
			</div>
                <div class="editing editor-container">
                    <div class="content-editor w-100 h-100">
                        <div class="w-100 header row">
                            <div class="d-flex justify-content-center align-items-center active items col-md-4 tabs"
                                id="text_btn">Text</div>
                            <div class="d-flex justify-content-center align-items-center items col-md-4 tabs"
                                id="font_btn">Font</div>
                            <div class="d-flex justify-content-center align-items-center items col-md-4 tabs"
                                id="color_btn">Color</div>
                        </div>
                        <div class="p-2 w-100 all-content">
                            <div class="text-container tablet">
                                <textarea name="" id="type_text" rows="5" class="w-100" placeholder="Enter Text Here..
   Press Enter for a new Line"></textarea>
                            </div>
                            <div class="font-container tablet d-none">
                                <h5 class="mla-7">Select your Font</h5>
                                <div
                                    class="d-flex justify-content-start align-items-start flex-wrap text-center sizes w-100">
                                    <div style="font-family: alexa;" size="80px" lineh="94%" class="font cont active">
                                        <img src="assets/images/fonts/alexa.svg" alt="">
                                    </div>
                                    <div style="font-family: amanda;" size="80px" lineh="125%" class="font cont">
                                        <img src="assets/images/fonts/amanda.svg" alt="">
                                    </div>
                                    <div style="font-family: amsterdam;" size="88px" lineh="105%" class="font cont">
                                        <img src="assets/images/fonts/amsterdam.svg" alt="">
                                    </div>
                                    <div style="font-family: austin;" size="115px" lineh="76%" class="font cont">
                                        <img src="assets/images/fonts/austin.svg" alt="">
                                    </div>
                                    <div style="font-family: avante;" size="75px" lineh="97%" class="font cont">
                                        <img src="assets/images/fonts/avante.svg" alt="">
                                    </div>
                                    <div style="font-family: barcelona;" size="70px" lineh="150%" class="font cont">
                                        <img src="assets/images/fonts/barcelona.svg" alt="">
                                    </div>
                                    <div style="font-family: bayview;" size="105px" lineh="90%" class="font cont">
                                        <img src="assets/images/fonts/bayview.svg" alt="">
                                    </div>
                                    <div style="font-family: beachfront;" size="73px" lineh="120%" class="font cont">
                                        <img src="assets/images/fonts/beachfront.svg" alt="">
                                    </div>
                                    <div style="font-family: bellview;" size="100px" lineh="88%" class="font cont">
                                        <img src="assets/images/fonts/bellview.svg" alt="">
                                    </div>
                                    <div style="font-family: buttercup;" size="120px" lineh="90%" class="font cont">
                                        <img src="assets/images/fonts/buttercup.svg" alt="">
                                    </div>
                                    <div style="font-family: chelsea;" size="110px" lineh="100%" class="font cont">
                                        <img src="assets/images/fonts/chelsea.svg" alt="">
                                    </div>
                                    <div style="font-family: freehand;" size="90px" lineh="97%" class="font cont">
                                        <img src="assets/images/fonts/freehand.svg" alt="">
                                    </div>
                                    <div style="font-family: freespirit;" size="47px" lineh="180%" class="font cont">
                                        <img src="assets/images/fonts/freespirit.svg" alt="">
                                    </div>
                                    <div style="font-family: greenworld;" size="100px" lineh="84%" class="font cont">
                                        <img src="assets/images/fonts/greenworld.svg" alt="">
                                    </div>
                                    <div style="font-family: loveneon;" size="60px" lineh="95%" class="font cont">
                                        <img src="assets/images/fonts/loveneon.svg" alt="">
                                    </div>
                                    <div style="font-family: lovenote;" size="70px" lineh="100%" class="font cont">
                                        <img src="assets/images/fonts/lovenote.svg" alt="">
                                    </div>
                                    <div style="font-family: marquee;" size="85px" lineh="100%" class="font cont">
                                        <img src="assets/images/fonts/marquee.svg" alt="">
                                    </div>
                                    <div style="font-family: mayfair;" size="76px" lineh="95%" class="font cont">
                                        <img src="assets/images/fonts/mayfair.svg" alt="">
                                    </div>
                                    <div style="font-family: melbourne;" size="70px" lineh="100%" class="font cont">
                                        <img src="assets/images/fonts/melbourne.svg" alt="">
                                    </div>
                                    <div style="font-family: monaco;" size="70px" lineh="87%" class="font cont">
                                        <img src="assets/images/fonts/monaco.svg" alt="">
                                    </div>
                                    <div style="font-family: neonglow;" size="75px" lineh="100%" class="font cont">
                                        <img src="assets/images/fonts/neonglow.svg" alt="">
                                    </div>
                                    <div style="font-family: neonlite;" size="62px" lineh="95%" class="font cont">
                                        <img src="assets/images/fonts/neonlite.svg" alt="">
                                    </div>
                                    <div style="font-family: neonscript;" size="95px" lineh="115%" class="font cont">
                                        <img src="assets/images/fonts/neonscript.svg" alt="">
                                    </div>
                                    <div style="font-family: neontrace;" size="62px" lineh="100%" class="font cont">
                                        <img src="assets/images/fonts/neontrace.svg" alt="">
                                    </div>
                                    <div style="font-family: neotokyo;" size="73px" lineh="105%" class="font cont">
                                        <img src="assets/images/fonts/neotokyo.svg" alt="">
                                    </div>
                                    <div style="font-family: nevada;" size="100px" lineh="93%" class="font cont">
                                        <img src="assets/images/fonts/nevada.svg" alt="">
                                    </div>
                                    <div style="font-family: newcursive;" size="100px" lineh="87%" class="font cont">
                                        <img src="assets/images/fonts/newcursive.svg" alt="">
                                    </div>
                                    <div style="font-family: northshore;" size="93px" lineh="115%" class="font cont">
                                        <img src="assets/images/fonts/northshore.svg" alt="">
                                    </div>
                                    <div style="font-family: photogenic;" size="90px" lineh="120%" class="font cont">
                                        <img src="assets/images/fonts/photogenic.svg" alt="">
                                    </div>
                                    <div style="font-family: rocket;" size="50px" lineh="160%" class="font cont">
                                        <img src="assets/images/fonts/rocket.svg" alt="">
                                    </div>
                                    <div style="font-family: royalty;" size="68px" lineh="130%" class="font cont">
                                        <img src="assets/images/fonts/royalty.svg" alt="">
                                    </div>
                                    <div style="font-family: scifi;" size="50px" lineh="108%" class="font cont">
                                        <img src="assets/images/fonts/scifi.svg" alt="">
                                    </div>
                                    <div style="font-family: signature;" size="100px" lineh="95%" class="font cont">
                                        <img src="assets/images/fonts/signature.svg" alt="">
                                    </div>
                                    <div style="font-family: sorrento;" size="70px" lineh="130%" class="font cont">
                                        <img src="assets/images/fonts/sorrento.svg" alt="">
                                    </div>
                                    <div style="font-family: typewriter;" size="70px" lineh="92%" class="font cont">
                                        <img src="assets/images/fonts/typewriter.svg" alt="">
                                    </div>
                                    <div style="font-family: venetian;" size="80px" lineh="100%" class="font cont">
                                        <img src="assets/images/fonts/venetian.svg" alt="">
                                    </div>
                                    <div style="font-family: vintage;" size="75px" lineh="110%" class="font cont">
                                        <img src="assets/images/fonts/vintage.svg" alt="">
                                    </div>
                                    <div style="font-family: waikiki;" size="70px" lineh="87%" class="font cont">
                                        <img src="assets/images/fonts/waikiki.svg" alt="">
                                    </div>
                                    <div style="font-family: wildscript;" size="105px" lineh="105%" class="font cont">
                                        <img src="assets/images/fonts/wildscript.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="color-container tablet d-none">
                                <h5 class="mla-7">Select your Color</h5>
                                <div
                                    class="d-flex justify-content-start align-items-start flex-wrap text-center sizes w-100">
                                    <i neon="rgb(255 255 255) 0px 0px 5px, rgb(255 255 255) 0px 0px 10px, rgb(255 253 207) 0px 0px 20px, rgb(255 253 207) 0px 0px 30px, rgb(255 253 207) 0px 0px 40px, rgb(255 253 207) 0px 0px 55px, rgb(255 253 207) 0px 0px 75px"
                                        color="white" style="color: rgba(199, 193, 193, 0.925);" name="white"
                                        class="material-icons color cont active">highlight</i>
                                    <i neon="rgb(255 255 255) 0px 0px 5px, rgb(255 255 255) 0px 0px 10px, rgb(255 249 124) 0px 0px 20px, rgb(255 249 124) 0px 0px 30px, rgb(255 249 124) 0px 0px 40px, rgb(255 249 124) 0px 0px 55px, rgb(255 249 124) 0px 0px 75px"
                                        color="rgb(255, 255, 255)" style="color: rgb(255, 249, 124);"
                                        name="Lemon Yellow" class="material-icons color cont">highlight</i>
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
                            </div>
                            <h5 class="mla-7">Select your options</h5>
                            <div
                                class="coo d-flex justify-content-start align-items-start flex-wrap text-center sizes w-100">
                                <div class="cont active size d-flex justify-content-around align-items-center flex-row"
                                    size-code="cnz1">
                                    <div class="p-1 text-lg">
                                        <div>Small</div>
                                        <div class="small-price">$99</div>
                                    </div>
                                    <div class="p-1 text-sm">
                                        <div class="m-1">Length: <span class="small-length"></span>"</div>
                                        <div class="m-1">Height: <span class="small-height"></span>"</div>
                                    </div>
                                </div>
                                <div class="cont size d-flex justify-content-around align-items-center flex-row"
                                    size-code="cnz2">
                                    <div class="p-1 text-lg">
                                        <div>Medium</div>
                                        <div class="medium-price">$125</div>
                                    </div>
                                    <div class="p-1 text-sm">
                                        <div class="m-1">Length: <span class="medium-length"></span>"</div>
                                        <div class="m-1">Height: <span class="medium-height"></span>"</div>
                                    </div>
                                </div>
                                <div class="cont size d-flex justify-content-around align-items-center flex-row"
                                    size-code="cnz3">
                                    <div class="p-1 text-lg">
                                        <div>Large</div>
                                        <div class="large-price">$150</div>
                                    </div>
                                    <div class="p-1 text-sm">
                                        <div class="m-1">Length: <span class="large-length"></span>"</div>
                                        <div class="m-1">Height: <span class="large-height"></span>"</div>
                                    </div>
                                </div>
                                <div class="cont size d-flex justify-content-around align-items-center flex-row"
                                    size-code="cnz4">
                                    <div class="p-1 text-lg">
                                        <div>X Large</div>
                                        <div class="x-large-price">$165</div>
                                    </div>
                                    <div class="p-1 text-sm">
                                        <div class="m-1">Length: <span class="x-large-length"></span>"</div>
                                        <div class="m-1">Height: <span class="x-large-height"></span>"</div>
                                    </div>
                                </div>
                                <div class="cont size d-flex justify-content-around align-items-center flex-row"
                                    size-code="cnz5">
                                    <div class="p-1 text-lg">
                                        <div>XX Large</div>
                                        <div class="xx-large-price">$190</div>
                                    </div>
                                    <div class="p-1 text-sm">
                                        <div class="m-1">Length: <span class="xx-large-length"></span>"</div>
                                        <div class="m-1">Height: <span class="xx-large-height"></span>"</div>
                                    </div>
                                </div>
                                <div class="cont size d-flex justify-content-around align-items-center flex-row"
                                    size-code="cnz6">
                                    <div class="p-1 text-lg">
                                        <div>Collosal</div>
                                        <div class="collosal-price">$230</div>
                                    </div>
                                    <div class="p-1 text-sm">
                                        <div class="m-1">Length: <span class="collosal-length"></span>"</div>
                                        <div class="m-1">Height: <span class="collosal-height"></span>"</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row w-100 mt-5">
                                <h5 class="col-md-6">Power adapter</h5>
                                <select name="" id="power_adapter" class="col-md-6">
                                    <option value="UK / IRELAND 230V">UK / IRELAND 230V</option>
									<option value="EUROPE 230V">EUROPE 230V</option>
									<option value="USA / CANADA 120V">USA / CANADA 120V</option>
									<option value="AUSTRALIA / NZ 230V">AUSTRALIA / NZ 230V</option>
									<option value="JAPAN 100V">JAPAN 100V</option>
                                </select>
                            </div>
                            <div class="row w-100 mt-3">
                                <h5 class="col-md-6">Backboard shape</h5>
                                <select name="" id="backboard_shape" class="col-md-6">
                                    <option value="Cut Around Acrylic: Hang/Wall-mount">Cut Around Acrylic: Hang/Wall-mount</option>
									<option value="Rectangle Acrylic: Hang/Wall-mount">Rectangle Acrylic: Hang/Wall-mount</option>
									<option value="Cut To Letter: Hang/Wall-mount">Cut To Letter: Hang/Wall-mount</option>
                                </select>
                            </div>
                            <div class="d-flex checkboxes w-100 mt-5">
								<div class="check customcb">
                                     <input type="checkbox" checked value="1" id="bumper_sale" name="bumper_sale" />
                                     <label class="inner" for="bumper_sale"></label>
                                </div><h5 class="mla-4"><label for="bumper_sale"><b>Free</b> Bumper Sale: Remote and Dimmer</label>
                                </h5>
                            </div>
                            <div class="d-flex checkboxes w-100 mt-3">
								<div class="check customcb">
                                     <input type="checkbox" value="1" id="hanging" name="hanging" />
                                     <label class="inner" for="hanging"></label>
                                </div>
                                <h5 class="mla-4"><label for="hanging">Sign Hanging chain Kit $15</label></h5>
                            </div>
                            <div class="d-flex checkboxes w-100 mt-3">
								<div class="check customcb">
                                     <input type="checkbox" value="1" id="wall_mounting" name="wall_mounting" />
                                     <label class="inner" for="wall_mounting"></label>
                                </div>
                                <h5 class="mla-4"><label for="wall_mounting">Sign Wall Mounting Kit $15</label></h5>
                            </div>
                            <div
                                class="d-flex justify-content-start m-auto align-items-center flex-wrap text-center sizes w-100 pt-2 pb-2 cont total-amount">
                                <div class="col-md-6 a2">Total Amount :</div>
                                <div class="col-md-6 h price amount" id="OverallAmount">$99</div>
                            </div>
                            <div
                                class="cart-btn d-flex justify-content-center align-items-center flex-wrap text-center sizes pt-2 pb-2 btn a2">
                                <button class="col-md-12 cart" id="add_cart" style="background-color: transparent;
    border: none;">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tabs page5 mb-2" style="margin:135rem 0 !important"></section>
        <?php include 'tricks/partners.php'; ?>
        <section class="tabs page7 text mb-10">
            <div class="d-flex justify-content-around w-100 h-100 align-items-center ">
                <div class="title-container d-flex justify-content-around">
                    <h1>Why choose us?</h1>
                </div>
                <div class="paragraph-container ">
                    <p class="w-100" style="padding: 35px 0 0 110px;">
                        Apart from offering the some top-end neon sign lights, we are also America’s most affordable
                        neon signs marketplace. We offer you unlimited options for your neon signs. You can customize
                        your neon signs with 100s of fonts, colors and sizes.You can also
                        just upload your own design or your companies logo and we can make your it glow neon-ic.Also you
                        could hire our neon designer and he could design as per your requirements and needs.</p>
                </div>
            </div>
        </section>
        <?php include 'tricks/subscribe-foot.php'; ?>
        <section class="tabs horizontal-line m-auto" style="width: 90% !important;"></section>
        <?php include 'tricks/footer-home.php'; ?>
		<div class="sms"><div id="sms"></div></div>
    </main>
    <script src="assets/js/app.main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
		$(document).on('scroll',function(){
		console.log($(this).scrollTop());
			let y = $(this).scrollTop();
			if(y >= 380 && y < 555){
			$(".mover").addClass("sticky");
			}else {
			$(".mover").removeClass("sticky");
			}
       });
    $(document).ready(function() {
        waitForWebfonts(['alexa', 'amanda', 'amsterdam', 'austin', 'avante', 'barcelona', 'bayview',
            'beachfront', 'bellview', 'buttercup', 'chelsea', 'classictype', 'freehand', 'freespirit',
            'greenworld', 'loveneon', 'lovenote', 'marquee', 'mayfair', 'melbourne', 'monaco',
            'neonglow', 'neonlite', 'neonscript', 'neontrace', 'neotokyo', 'nevada', 'newcursive',
            'northshore', 'photogenic', 'rocket', 'royalty', 'scifi', 'signature', 'sorrento',
            'typewriter', 'venetian', 'vintage', 'waikiki', 'wildscript'
        ], function() {
            setTimeout(() => {
                $("#preloader").fadeOut();
            }, 100);
        });
        tabs("text");
        tabs("font");
        tabs("color");
        dragElement(document.getElementById("typed_text"));
        let PreviewText = $(".text-preview");
        let PreviewWidthText = $(".horizontal-scale span");
        let PreviewHeightText = $(".vertical-scale span");
        const pixelEachCm = 0.02645833333;
        text_enter_preview();
        $("textarea").on('keyup', function() {
            text_enter_preview();
            let position = $("#typed_text").position();
            let width = $("#typed_text").width() * pixelEachCm;
            let height = $("#typed_text").height() * pixelEachCm;
            width = width.toFixed(2);
            height = height.toFixed(2);
            priceDeclare();
			let text_length = parseInt($(this).val().length);
			if (text_length > 46) {
				$(".sms").fadeIn();
				$(".sms").css("display","flex");
				$("#sms").html("For more than 45 words whatsapp to get a quote - 1800945642.");
				$(".sms").click(function () {
                $(".sms").fadeOut();
				});
			}
        });
        $(".font.cont").click(function() {
            $(".font").removeClass("active");
            let font = this.style.fontFamily;
            let line_height = $(this).attr("lineh");
            let font_size = $(this).attr("size");
            $(".text-preview").css({
                "font-family": font,
                "line-height": line_height,
                "font-size": font_size
            });
            priceDeclare();
        });
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
        $(".size.cont").click(function() {
            $(".size").removeClass("active");
            setTimeout(() => {
                priceDeclare();
            }, 1000);
        });
		$(".bgs").click(function() {
			$(".bgs").removeClass("active");
			$(this).addClass("active");
			let bgg = $(this).attr("src");
            $(".mover").css({
                "background-image": "url('"+bgg+"')",
            });
        });
        $(".cont").click(function() {
            this.classList.toggle("active");
        });

    });
    </script>
</body>

</html>