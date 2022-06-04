<div class="search-box-mobile-UI">
    <i class="material-symbols-outlined">
        search
    </i>
    <input type="search" placeholder="Search Products..">
    <select name="" id="">
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