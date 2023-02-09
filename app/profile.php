<?php
include_once "inc/header.php";
include_once "inc/navbar.php";


if(isset($_POST['profile_update'])){
    $name=$_POST['name'];
    $name = $_POST['email_id'];    
    $phone_no = $_POST['phone_no'];
    $country = $_POST['country'];

    $update = "UPDATE users SET `name`='$name', `email_id`='$email_id',`phone_no`='$phone_no',`country`='$country' WHERE id='$userid'";
    if($conn->query($update)==TRUE){
        Reconect('profile.php');
    }else{
        $mess = "SORRY! Please try again ";
    }

}





?>









<div id="content" class="app-content">
    <div class="row">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto ">
            <h1 class="display-4">Profile!</h1>
            <?php if(isset($mess)){echo  $mess;}?>
        </div>
        <div class="col-md-3">
            <img src="assets/img/user/profile.jpg" alt="" width="100%">
        </div>
        <div class="col-md-6 pt-4 pt-md-0">
            <form action="" method="POST">
                <table class="" style="border:none;">
                    <tr>
                        <td>
                            <p class="p-0 m-0 fs-3">User Name:</p>
                        </td>
                        <td><input type="text" disabled class="form-control border-0 fs-3 p-0 m-0" value="<?= UserData('user_name') ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="p-0 m-0 fs-3">Name:</p>
                        </td>
                        <td><input type="text" name="name" class="form-control  fs-3 p-0 px-2 m-0" value="<?= UserData('name') ?>"></td>
                    </tr>
                    <tr>
                        <td>
                            <p class="p-0 m-0 fs-3">Email:</p>
                        </td>
                        <td><input type="text" name="eamil" class="form-control border-0 fs-3 p-0 m-0" value="<?= UserData('email_id') ?>"></td>
                    </tr>

                    <tr>
                        <td>
                            <p class="p-0 m-0 fs-3">Phone No:</p>
                        </td>
                        <td><input type="text" name="phone_no" class="form-control fs-3 px-2 p-0 m-0" value="<?= UserData('phone_no') ?>"></td>
                    </tr>

                    <tr>
                        <td>
                            <p class="p-0 m-0 fs-3">Country:</p>
                        </td>
                        <td><input type="text" name="country" class="form-control px-2 fs-3 px-2 p-0 mt-2" value="<?= UserData('country') ?>"></td>
                    </tr>

                    <tr>
                        <td>
                            <p class="p-0 m-0 fs-3">Refer by:</p>
                        </td>
                        <td><input type="text" disabled class="form-control border-0 fs-3" value="<?= UserData('refer_id') ?>"></td>
                    </tr>

                    <tr>
                        <td> <input type="submit" value="Update" name="profile_update" class="form-control btn-outline-theme"> </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>