<?php
include 'config/connection.php';
$sql = "SELECT * FROM calculation";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
</head>

<body>
    <div id="output"> </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    function priceDeclare(data) {
        let a = data.text.length;
        let size_code = data.size_code;
        let new_line = 35;

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        let <?php echo $row['size_name']; ?> = {
            "length": <?php echo $row['length']; ?>,
            "height": <?php echo $row['height']; ?>,
            "price": [<?php echo $row['price_array']; ?>],
            "addon": <?php echo $row['addon']; ?>
        };
        <?php } ?>
        let price;
        if (a <= 15) {
            price = small.price[a - 1];
        } else {
            price = small.price[14] + (small.addon * (a - 15))
        }
        let output = {
            "text-size": a,
            "length": a * small.length,
            "height": small.height,
            "price": price
        };
        return output
    }
    $(document).ready(function() {
        let data = {
            "text": "AdarshPandeyClassFifth",
            "size_code": 1
        }
        console.table(priceDeclare(data));
    });
    </script>
</body>

</html>