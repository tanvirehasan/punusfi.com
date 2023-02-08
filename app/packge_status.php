<?php
include_once "inc/header.php";
include_once "inc/navbar.php";
include_once "controller/package/package_sql.php";
$pack = UserData('id');
$packageid = UserData('packageid');
$btn = ($packageid != 0) ? "disabled" : "";

?>

<div id="content" class="app-content">
    <div class="row">

        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto">
            <h3 class="display-6">Your Package</h3>
            <p class="lead"></p>
        </div>

        <?php
        $packdata = SelectData('packages', "where package_id='$packageid' ");
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
                                <h4 class="">365 Dyes</h4>
                                <h4 class="">Monthly ROI: <?= $row->package_roi ?>%</h4>
                                <h4 class="">Total Income: $<?= ROI()[0] ?></h4>
                                <h4 class="">Remaining Days: <?= 365 - ROI()[1] ?></h4>
                            </div>
                            <ul class="list-unstyled mt-3 mb-4">
                                <?= $row->package_info ?>
                            </ul>
                            <input type="hidden" name="price" value="<?= $row->package_price ?>">
                            <input type="hidden" name="package_id" value="<?= $row->package_id ?>">


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