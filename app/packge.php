<?php
include_once "inc/header.php";
include_once "inc/navbar.php";
include_once "controller/package/package_sql.php";
$pack = UserData('id');
$btn = (UserData('packageid') != 0) ? "disabled" : "";

?>


<div id="content" class="app-content">
    <div class="row">

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Choose Your Package</h1>
            <p class="lead"></p>
        </div>

        <?php
        $packdata = SelectData('packages', '');
        while ($row = $packdata->fetch_object()) { ?>

            <div class="col-xl-3 col-lg-6 text-center">
                <form action="" method="POST">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"><?= $row->package_name ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="page-price">
                                <h1 class="card-title pricing-card-title">$<?= $row->package_price ?></h1>
                                <p class="text-white  fs-4 p-0 m-0">365 Days</p>
                                <p class="text-white fs-4 p-0 m-0">Monthly <?= $row->package_roi ?>% Minimum</p>
                            </div>
                            <ul class="list-unstyled mt-3 mb-4 ">
                                <?= $row->package_info ?>
                            </ul>
                            <input type="hidden" name="price" value="<?= $row->package_price ?>">
                            <input type="hidden" name="package_id" value="<?= $row->package_id ?>">

                            <?php
                            if (CashIn($userid) >= $row->package_price) {
                                echo "<button type='submit' name='buy_pack' class='btn btn-lg btn-block btn-outline-theme' " . $btn . " >Purchase</button>";
                            } else {
                                echo "<a href='deposit.php' class='btn btn-lg btn-block btn-outline-theme'>Purchase</a>";
                            }
                            ?>

                        </div>
                        <div class="card-arrow">
                            <div class="card-arrow-top-left"></div>
                            <div class="card-arrow-top-right"></div>
                            <div class="card-arrow-bottom-left"></div>
                            <div class="card-arrow-bottom-right"></div>
                        </div>
                    </div>
                </form>
            </div>
        <?php } ?>

    </div>
</div>
<?php include "inc/footer.php"; ?>