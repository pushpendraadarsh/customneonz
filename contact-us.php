<?php 
session_start();
include 'config/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cart.v2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.v2.css?v=1">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/app.main.js?v=10."></script>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <title>Contact Us | Custom NeonZ</title>
</head>

<body>
    <main>
        <?php include 'tricks/header.php'; ?>
        <section style="height:31vh;" class="tabs page1 mt-5">
            <div class="d-sm-flex w-100 h-100 align-items-center" style="padding: 1rem 8rem;">
                <div class="name d-flex justify-content-start flex-column w-100 h-100">
                    <div><span class="maxine-title" style="font-size: 82px !important;">Custom NeonZ</span></div>
                    <div style="font-size: 50px !important;margin-top: 0 !important;
                    font-weight: 600;height: max-content;" class="m-auto sm sub-title">Contact-Us</div>
                </div>
            </div>
        </section>

        <section class="tabs horizontal-line ml-auto mr-auto mt-5" style="width: 90% !important;"></section>
        <?php include 'tricks/footer-home.php'; ?>

    </main>
</body>

</html>