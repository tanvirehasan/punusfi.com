<?php
include "inc/header.php";
include "inc/navbar.php";
include_once "controller/package/package_sql.php";
?>

<div id="content" class="app-content">
    <div class="row">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto ">
            <h1 class="display-4">Profile!</h1>
        </div>
        <div class="col-md-3">
            <img src="assets/img/user/profile.jpg" alt="" width="100%">
        </div>
        <div class="col-md-6 pt-4 pt-md-0">
            <p class="p-0 m-0 fs-3">@ <?= UserData('user_name') ?></p>
            <p class="p-0 m-0 fs-3">Name: <?= UserData('name') ?></p>
            <p class="p-0 m-0 fs-3">Email: <?= UserData('email_id') ?></p>
            <p class="p-0 m-0 fs-3">Phone No: <?= UserData('phone_no') ?></p>
            <p class="p-0 m-0 fs-3">Country: <?= UserData('country') ?></p>
            <p class="p-0 m-0 fs-3">Refer by: <?= UserData('refer_id') ?></p>
        </div>
    </div>
</div>
<?php include "inc/footer.php"; ?>