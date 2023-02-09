<?php
include_once "inc/header.php";
include_once "inc/navbar.php";


if (isset($_POST['pass_Update'])) {
    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];

    if (UserData('password') == $old_pass) {
        $update = "UPDATE users SET `password`='$new_pass' WHERE id='$userid'";
        if ($conn->query($update) == TRUE) {
            $mess = "Success!";
            Reconect('logout.php');
        } else {
            $mess = "SORRY! Please try again ";
        }
    } else {
        $mess = "Old Password not match";
    }
}




if (isset($_POST['pin_Update'])) {

    $old_pin = $_POST['old_pin'];
    $new_pin = $_POST['new_pin'];

    if (UserData('pin') == $old_pin) {
        $update = "UPDATE users SET `pin`='$new_pin' WHERE id='$userid'";
        if ($conn->query($update) == TRUE) {
            $mess = "Success!";
            Reconect('settings.php');
        } else {
            $messpin = "SORRY! Please try again ";
        }
    } else {
        $messpin = "Old PIN not match";
    }
}






?>

<style>
    table tr td {
        border: 0;
    }
</style>




<div id="content" class="app-content">
    <div class="row">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto ">
            <h1 class="display-4">Change Password!</h1>
            <?php if (isset($mess)) {
                echo  $mess;
            } ?>
        </div>
        <div class="col-md-6 pt-4 pt-md-0">
            <form action="" method="POST">
                <span class="fs-4">Old Password</span>
                <input type="text" name="old_pass" class="form-control mb-4">

                <span class="fs-4">New Password</span>
                <input type="text" name="new_pass" class="form-control mb-4">

                <input type="submit" value="Update" name="pass_Update" class="form-control btn-outline-theme">
            </form>
        </div>
    </div>





    <div class="row mt-5">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto ">
            <h1 class="display-4">Change PIN</h1>
            <?php if (isset($messpin)) {
                echo  $messpin;
            } ?>
        </div>
        <div class="col-md-6 pt-4 pt-md-0">
            <form action="" method="POST">
                <span class="fs-4">Old PIN</span>
                <input type="text" name="old_pin" class="form-control mb-4">

                <span class="fs-4">New PIN</span>
                <input type="text" name="new_pin" class="form-control mb-4">

                <input type="submit" value="Update" name="pin_Update" class="form-control btn-outline-theme">
            </form>
        </div>
    </div>







</div>
<?php include "inc/footer.php"; ?>