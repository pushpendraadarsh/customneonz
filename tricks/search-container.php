<div class="p-2 search">
    <a href="javascript:void(0)">
        <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
        <i class="search-icon material-symbols-outlined">
            search
        </i>
    </a>
    <div class="search-container mt-2" id="search">
        <form action="" class="w-100 h-100">
            <div class="input-group row h-100">
                <input type="text" class="search-top-input border-none form-control col-md-8"
                    aria-label="Text input with dropdown button" placeholder="Search...">
                <select class="col-md-4 h-100" style="background-color: transparent; border: none;outline: none;">
                    <?php 
                    $sql = "SELECT * FROM category ORDER BY category_name ASC"; 
                    $result = mysqli_query($conn,$sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                    <option value="<?php echo $row['code']; ?>"><?php echo $row['category_name']; ?></option>
                    <?php }
                    }
                    ?>
                </select>
            </div>
        </form>
    </div>
</div>