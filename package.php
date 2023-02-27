<?php
include_once "app/config/conn.php";
include_once "app/config/function.php";
include_once "inc/header.php";
?>
<main>



    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class=""><span class="in-highlight">Package</span> List</h1>
    </div>

    <div class="container">
        <div class="row">

            <?php
            $packdata = SelectData('packages', '');
            while ($row = $packdata->fetch_object()) { ?>

                <div class="col-xl-3 col-lg-6 text-center">
                    <div class="card mb-4 box-shadow">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"><?= $row->package_name ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="page-price">
                                <h1 class="card-title pricing-card-title in-highlight">$<?= $row->package_price ?></h1>
                                <small class="text-muted">365 Dyes</small>
                                <p class="p-0 m-0">Monthly <?= $row->package_roi ?>% Minimum</p>
                            </div>
                            <ul class="list-unstyled mt-3 mb-4">
                                <?= $row->package_info ?>
                            </ul>
                            <a href="app" name='buy_pack' class='uk-button  uk-button-primary '>Purchase</a>

                        </div>
                    </div>
                    </form>
                </div>
            <?php } ?>


        </div>
    </div>













</main>
<?php include_once "inc/footer.php" ?>