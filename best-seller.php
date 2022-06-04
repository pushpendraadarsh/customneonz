<?php 
    include 'config/connection.php';
    $v= rand(0,100);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.v2.css?v=1">
    <link rel="stylesheet" href="assets/css/best-seller.v2.css?v=<?php echo $v; ?>">
    <link rel="stylesheet" href="assets/css/responsive.v2.css?v=<?php echo $v; ?>">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <title>Bestseller | Custom NeonZ</title>
</head>

<body>
    <main>
        <?php echo include 'tricks/header.php'; ?>
        <?php include 'tricks/android_side_bar.php'; ?>
        <section class="tabs page1">
            <div class="d-sm-flex w-100 h-100 align-items-center">
                <div class="name d-flex justify-content-start flex-column w-100 h-100">
                    <div><span class="maxine-title">Custom NeonZ</span></div>
                    <div class="sub-title text-center w-100" style="font-size: 34px; font-weight: 700;">
                        <h1 class="title">Bestsellers</h1>
                    </div>
                </div>
            </div>
            <div class="d-sm-flex h-100 justify-content-start align-items-start mt-3 search-con-best-seller">
                <form class="w-100 h-100" method="post" id="bestseller_search">
                    <div class="d-flex justify-content-start flex-wrap align-items-center bestseller-search w-100">
                        <div class="columns search h-100 d-flex justify-content-start align-items-center">
                            <button type="submit" name="bestseller_search"
                                style="background-color: transparent; border:none;">
                                <i class="fa-solid ml-2 fa-magnifying-glass"></i>
                            </button>
                            <input type="search" name="bestseller_input" class="w-100 h-100 search-input"
                                placeholder="Search..">
                        </div>
                        <div class="columns popularity h-100 d-flex justify-content-start align-items-center">
                            Sort by Popularity :
                            <select name="bestseller_popularity" class="selectpicker show-menu-arrow">
                                <option value="DESC">High to Low</option>
                                <option value="ASC">Low to High</option>
                            </select>
                        </div>
                        <div class="columns price h-100 d-flex justify-content-start align-items-center">
                            Prices :
                            <select name="bestseller_price" class="selectpicker show-menu-arrow">
                                <option value="DESC">High to Low</option>
                                <option value="ASC">Low to High</option>
                            </select>
                        </div>

                    </div>
                </form>
            </div>

            <section class="tabs page9 bestseller-container-item">
                <div style="width: 95%;"
                    class="content d-flex justify-content-start h-100 p-3 align-items-center flex-wrap m-auto"
                    id="bestsellers_search_output">
                    <?php
        $tag = '1';
        $sql= "SELECT * FROM all_products WHERE featured = 'on'";
                    $result= mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="item-container">
                        <div class="img-container"
                            style="background-image:url('http://admin.customneonz.com/product-image/<?php echo $row['img1']; ?>')">
                        </div>
                        <div class="text-container d-flex flex-column align-items-center justify-content-center">
                            <div>
                                <?php echo $row['product_name']; ?>
                            </div>
                            <p><span>$<?php echo $row['small_size']; ?></span><span
                                    style="text-decoration: line-through;margin-left:10px;">$<?php echo $row['small_size']; ?></span>
                            </p>
                        </div>
                    </div>
                    <?php } }else{ ?>
                    <h2 class="text-center m-auto">No Data Found!</h2>
                    <?php } ?>
            </section>
            <?php include 'tricks/subscribe-popup.php'; ?>
        </section>
        <!-- <section class="tabs page9 bestseller-content-more">
            <div class="content d-flex justify-content-start w-100 h-100 p-3 align-items-center flex-wrap m-auto">
                <div class="down-arrow more-bestseller-button btn">
                    <i class="fa-solid fa-arrow-down"></i>
                </div>
            </div>
        </section> -->
        <?php include 'tricks/partners.php'; ?>
        <?php include 'tricks/subscribe-foot.php'; ?>
        <section class="tabs horizontal-line m-auto" style="width: 90% !important;"></section>
        <?php include 'tricks/footer-home.php'; ?>
    </main>
    <script src="assets/js/app.main.js"></script>
    <script>
    $("#bestseller_search").on("submit", function(e) {
        e.preventDefault();
        let data = new FormData(this);
        bestseller_search_box(data);
    });
    </script>
</body>

</html>