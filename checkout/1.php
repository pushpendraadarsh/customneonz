<?php 
$a = rand(0,100);
session_start();
include '../config/connection.php';
if (isset($_COOKIE['userId'])) {
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Information Gateway | Custom NeonZ</title>
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
                            <span class="active">information</span>
                            <i class="ml-2 mr-2 fa-solid fa-arrow-right"></i>
                            <span>shipping</span>
                            <i class="ml-2 mr-2 fa-solid fa-arrow-right"></i>
                            <span>Payments</span>
                        </div>
                    </header>
                    <section class="login-form mt-5">
                        <form class="row w-100" id="contactForm">
                            <div class=" container p-0">
                                <div class="row heading-sm align-items-start">
                                    <p class="col heading text-left">Contact Information</p>
                                    <p class="col">Already have an account? <a href="../sign-in.php">Log in</a></p>
                                </div>
                            </div>
                            <input class="form-control" type="email" name="email" placeholder="Email"
                                value="<?php echo $email; ?>" aria-label=".form-control-lg">
                            <div class="container p-0">
                                <div class="row heading-sm align-items-start mt-5">
                                    <p class="col heading text-left">Shipping Information</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <select id="inputState" name="country" class="form-control">
                                        <option value="<?php echo $country; ?>" selected><?php echo $country; ?>
                                        </option>
                                        <option value="india">India</option>
                                        <option value="usa">USA</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="firstName"
                                        value="<?php echo $row['firstname']; ?>" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="lastName" value="<?php echo $row['lastname']; ?>"
                                        class="form-control" placeholder="Last Name">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="username" class="form-control" name="mobile"
                                        value="<?php echo $row['mobile']; ?>" placeholder="Mobile Number">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="address" value="<?php echo $row['address']; ?>"
                                        class="form-control" placeholder="Address">
                                </div>
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control" name="city" placeholder="City"
                                        id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <select id="inputState" name="state" class="form-control">
                                        <option selected>Select State</option>
                                        <option value="Uttar pradesh">Uttar pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" name="province" placeholder="Zip Code"
                                        id="inputZip">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="checkbox" value="notify-order" id="checkbox"
                                        aria-label="Checkbox for following text input">
                                    <label class="ml-1" for="checkbox">Notify me about my orders</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg buttons">Continue to
                                    shipping</button>
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
            let UserInformation = new FormData(this);
            UserInformationFun(UserInformation);
        });
    });
    </script>
</body>

</html>

<?php } ?>