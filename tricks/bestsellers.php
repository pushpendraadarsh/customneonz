    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
.no-data-found {
    font-size: 25rem;
    margin-inline: 15em !important;
    padding: 0;
}
    </style>
    <section class="tabs page8 bestsellers ">
        <h1 class="title ">Bestsellers</h1>
        <div class="content d-flex justify-content-center w-100 h-100 align-items-center mt-5">
            <?php $sql= "SELECT * FROM tag ORDER BY code ASC";
    $result= mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <button onclick="bestseller_open('<?php echo $row['code']; ?>')"
                class="btn app-bestseller d-flex justify-content-around align-items-center"><?php echo $row['tag_name']; ?></button>
            <?php } } ?>
        </div>
    </section>
    <section class="tabs page9 bestseller-container-item">
        <div style="width: 100%;"
            class="content d-flex justify-content-start h-100 p-5 align-items-center flex-wrap m-auto"
            id="bestsellers_container">
            <?php
        $tag = '1';
        $sql= "SELECT * FROM all_products WHERE featured = 'on' and tag='$tag' LIMIT 8";
                    $result= mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                ?>
            <div class="item-container">
                <div class="img-container"
                    style="background-image:url('http://admin.customneonz.com/product-image/<?php echo $row['img1']; ?>')">
                </div>
                <div class="text-container d-flex flex-column align-items-start justify-content-center">
                    <div>
                        <?php echo $row['product_name']; ?>
                    </div>
                    <p><span style="font-weight: 600;">$<?php echo $row['small_size']; ?></span
                            style="font-weight: 300; font-size: 18px;"><span
                            style="text-decoration: line-through;margin-left:10px;">$<?php echo $row['small_size']; ?></span>
                    </p>
                </div>
            </div>
            <?php } }else{ ?>
            <center>
                <h2 class="no-data-found text-center">No Data Found!</h2>
            </center>
            <?php } ?>
    </section>
    <section class="tabs page9 bestseller-content-more">
        <div class="content d-flex justify-content-start w-100 h-100 p-3 align-items-center flex-wrap m-auto">
            <div class="down-arrow more-bestseller-button btn">
                <a href="javascript:void(0)" onclick="more_data()">
                    <i class="fa-solid fa-arrow-down"></i>
                </a>
            </div>
        </div>
    </section>

    <script>
$(document).ready(function() {
    $(".btn.app-bestseller:first-child").addClass("active");
    $(".btn.app-bestseller").click(function() {
        $(".btn.app-bestseller").removeClass("active");
        $(this).addClass("active");
    });
});
    </script>