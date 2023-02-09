<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location:index.php');
}
include "config/conn.php";
include "controller/user/sign_login.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>HUD | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="assets/css/vendor.min.css" rel="stylesheet" />
    <link href="assets/css/app.min.css" rel="stylesheet" />
</head>

<body class='pace-top'>

    <div id="app" class="app app-full-height app-without-header">
        <div class="register">

            <?php if (!isset($sing)) { ?>

                <div class="register-content">
                    <form action="" method="POST">
                        <h1 class="text-center">Sign Up</h1>
                        <p class="text-danger text-center">
                            <?php if (isset($erro)) {
                                echo "<h6 class='danger'>$erro</h6>";
                            } ?></p>

                        <div class="mb-3">
                            <label class="form-label">User Name <span class="text-danger">*</span></label>
                            <input type="text" name="user_name" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="e.g name34" required />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Refer Username <span class="text-danger">*</span></label>
                            <input type="text" name="refer_id" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="e.g exshd2d" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="e.g John Smith" required />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" name="email_id" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="username@address.com" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone No.<span class="text-danger">*</span></label>
                            <input type="text" name="phone_no" class="form-control form-control-lg bg-white bg-opacity-5" placeholder="12345678" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control form-control-lg bg-white bg-opacity-5" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control form-control-lg bg-white bg-opacity-5" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Your PIN<span class="text-danger">*</span></label>
                            <input type="password" name="pin" class="form-control form-control-lg bg-white bg-opacity-5" required />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Country <span class="text-danger">*</span></label>
                            <select class="form-select form-select-lg bg-white bg-opacity-5" name="country" required>
                                <?= cunty_list() ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender <span class="text-danger">*</span></label>
                            <select class="form-select form-select-lg bg-white bg-opacity-5" name="gender" required>
                                <option>Female</option>
                                <option>Male</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Placement ID <span class="text-danger">*</span></label>
                            <div class="row gx-2">
                                <div class="col-8">
                                    <input class="form-select form-select-lg bg-white bg-opacity-5" name="placemnet_id" required></input>
                                </div>
                                <div class="col-4">
                                    <select class="form-select form-select-lg bg-white bg-opacity-5" name="placement" required>
                                        <option>Placement</option>
                                        <option value="A">Side A</option>
                                        <option value="B">Side B</option>
                                        <option value="C">Side C</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="customCheck1" required />
                                <label class="form-check-label" for="customCheck1">I have read and agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="signup_btn" class="btn btn-outline-theme btn-lg d-block w-100">Sign Up</button>
                        </div>
                        <div class="text-white text-opacity-50 text-center">
                            Already have an ID? <a href="login.php">Sign In</a>
                        </div>
                    </form>
                </div>
            <?php } else { ?>


                <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4">Success!</h1>
                    <p class="lead">Your Registration Successfully Done!</p>
                    <a href="login.php">Login</a>
                </div>


            <?php } ?>



        </div>
    </div>


    <script src="assets/js/vendor.min.js" type="21df2622481492e671e5bc02-text/javascript"></script>
    <script src="assets/js/app.min.js" type="21df2622481492e671e5bc02-text/javascript"></script>
    <script src="assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="21df2622481492e671e5bc02-|49" defer=""></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"78a945484ac6bc2d","version":"2022.11.3","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous">
    </script>
</body>

</html>