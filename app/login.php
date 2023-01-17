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
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="assets/css/vendor.min.css" rel="stylesheet" />
    <link href="assets/css/app.min.css" rel="stylesheet" />
</head>

<body class='pace-top'>
    <div id="app" class="app app-full-height app-without-header">

        <div class="login">
            <div class="login-content">
                <form action="" method="POST" name="login_form">
                    <h1 class="text-center">Sign In</h1>
                    <div class="text-white text-opacity-50 text-center mb-4">
                        For your protection, please verify your identity.
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address <span class="text-danger">*</span></label>
                        <input type="text" name="userid_email" class="form-control form-control-lg bg-white bg-opacity-5" value="" placeholder="" />
                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <label class="form-label">Password <span class="text-danger">*</span></label>
                            <a href="#" class="ms-auto text-white text-decoration-none text-opacity-50">Forgot
                                password?</a>
                        </div>
                        <input type="password" name="password" class="form-control form-control-lg bg-white bg-opacity-5" value="" placeholder="" />
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="customCheck1" />
                            <label class="form-check-label" for="customCheck1">Remember me</label>
                        </div>
                    </div>
                    <button type="submit" name="login_btn" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign
                        In</button>
                    <div class="text-center text-white text-opacity-50">
                        Don't have an account yet? <a href="singup.php">Sign up</a>.
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor.min.js" type="21df2622481492e671e5bc02-text/javascript"></script>
    <script src="assets/js/app.min.js" type="21df2622481492e671e5bc02-text/javascript"></script>
    <script src="assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="21df2622481492e671e5bc02-|49" defer=""></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"78a945484ac6bc2d","version":"2022.11.3","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous">
    </script>
</body>

</html>