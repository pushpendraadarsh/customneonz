<header>
    <?php  $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>
    <div class="d-flex justify-content-center w-75 h-100 align-items-center m-auto" style="padding:0 0 0 69rem">
        <?php if($curPageName == "index.php"){ ?>
        <div class="p-2 active"><a href="/">Home</a></div>
        <?php } else{ ?>
        <div class="p-2"><a href="/">Home</a></div>
        <?php } ?>

        <?php if($curPageName == "Design_your_own_sign.php"){ ?>
        <div class="p-2 active"><a href="Design_your_own_sign.php">Customize your Neon Light</a></div>
        <?php } else{ ?>
        <div class="p-2"><a href="Design_your_own_sign.php">Customize your Neon Light</a></div>
        <?php } ?>

        <?php if($curPageName == "upload-your-own-sign.php"){ ?>
        <div class="p-2 active"><a href="upload-your-own-sign.php">Upload your own design</a></div>
        <?php } else{ ?>
        <div class="p-2"><a href="upload-your-own-sign.php">Upload your own design</a></div>
        <?php } ?>
        <?php if($curPageName == "best-seller.php"){ ?>
        <div class="p-2 bestsellers-nav active"><a href="best-seller.php">Our Bestsellers</a>
            <?php } else{ ?>
            <div class="p-2 bestsellers-nav"><a href="best-seller.php">Our Bestsellers</a>
                <?php } ?>
                <div class="dropdown-content">
                    <?php
                        $sql="SELECT * FROM sub_category ORDER BY name ASC";
                        $result = mysqli_query($conn,$sql);
                        if (mysqli_num_rows($result) > 0) {
                      while ($row=mysqli_fetch_assoc($result)) {
                                $subcat = $row['name']; ?>
                    <div class="items">
                        <div class="title"><?php echo $row['name']; ?></div>
                        <?php $sql2 = "SELECT * FROM category WHERE sub_category='$subcat'";
                    $res2 = mysqli_query($conn,$sql2);
                    if (mysqli_num_rows($res2) > 0) { ?>
                        <ul>
                            <?php while ($row2=mysqli_fetch_assoc($res2)) {
                    ?>
                            <li><?php echo $row2['category_name']; ?></li>
                            <?php } ?>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php }  }  ?>
                </div>
            </div>
            <?php include 'tricks/search-container.php'; ?>
</header>
<a href="#" class="scroll-auto">
    <span class="material-symbols-outlined">
        arrow_upward
    </span>
</a>
<script>
$(document).scroll(function() {
    let value = $(this).scrollTop();
    if (value < 700) {
        $(".scroll-auto").hide();
    } else {
        $(".scroll-auto").show();
    }
});
</script>