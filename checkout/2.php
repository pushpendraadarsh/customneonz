<?php 
session_start();
include '../config/connection.php';
$a = rand(0,100);
if (isset($_COOKIE['userId']) && isset($_SESSION['status']) && $_SESSION['status'] == "in_shipping") {
    $userId = $_COOKIE['userId'];
    $sql = "SELECT * FROM userdetail WHERE userId = '$userId'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $address = $row['address'];
        $country = $row['country'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/checkout.css?v=<?php echo $a; ?>">
    <script src="../assets/js/app.main.js?v=<?php echo $a; ?>"></script>
    <link rel="stylesheet" href="assets/css/checkout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Shipping | Custom NeonZ</title>
</head>

<body>
    <main>
        <div class="d-flex justify-content-center w-100 h-100 align-items-start">
            <section class="tabs w-100">
                <div class="userInformation">
                    <header class="w-100 h-100">
                        <div><span class="maxine-title">Custom NeonZ</span></div>
                        <div class="text-left mt-5 page-name">
                            <span><a href="../cart.php">cart</a></span>
                            <i class="ml-2 mr-2 fa-solid fa-arrow-right"></i>
                            <span><a href="1.php">information</a></span>
                            <i class="ml-2 mr-2 fa-solid fa-arrow-right"></i>
                            <span class="active">shipping</span>
                            <i class="ml-2 mr-2 fa-solid fa-arrow-right"></i>
                            <span>Payments</span>
                        </div>
                    </header>
                    <section class="login-form mt-5">
                        <div class=" container p-0">
                            <div class="row heading-sm align-items-start">
                                <p class="col heading text-left">Contact Information</p>
                                <p class="col">Already have an account? <a href="../sign-in.php">Log in</a></p>
                            </div>
                        </div>
                        <label class="ml-1">Contact</label>
                        <input class="form-control" type="email" name="email" placeholder="Email"
                            value="<?php echo $email; ?>" aria-label=".form-control-lg" readonly>
                        <label class="ml-1">Ship to</label>
                        <input class="form-control" type="text" placeholder="Address" value="<?php echo $address; ?>"
                            aria-label=".form-control-lg" readonly>
                        <div class="container p-0">
                            <div class="row heading-sm align-items-start mt-5">
                                <p class="col heading text-left">Shipping Method</p>
                            </div>
                        </div>
                        <form class="row w-100" id="contactForm">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label class="ml-1" for="method1">GOLD</label>
                                    <input type="radio" value="Gold-Free" name="method" id="method1"
                                        aria-label="Checkbox for following text input">
                                    <label class="ml-1" for="method1">Free</label>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="ml-1" for="method2">PLATINUM</label>
                                    <input type="radio" value="Platinum-$25" name="method" id="method2"
                                        aria-label="Checkbox for following text input">
                                    <label class="ml-1" for="method2">$25</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg buttons">Continue to
                                    Payment</button>
                            </div>
                        </form>
                        <section class="footer row justify-content-around w-100">
                            <!-- <div class="d-flex justify-content-center w-100 h-100 align-items-start"> -->
                            <p>Returns Policy</p>
                            <p>Shipping Policy</p>
                            <p>Refund Policy</p>
                            <p>Terms of Service</p>
                            <!-- </div> -->
                        </section>
                    </section>
                </div>
            </section>
            <section class="tabs order-preview w-100 h-100">
                <?php include '../tricks/checkout-product.php'; ?>
            </section>
        </div>
    </main>
    <script>
    $(document).ready(function() {
        let form = $("#contactForm");
        form.on('submit', function(e) {
            e.preventDefault();
            let userShippings = new FormData(this);
            userShipping(userShippings);
        });
    });
    </script>
</body>

</html>

<?php }else { ?>
Redirect To Home Something Went Wrong

<?php } ?>