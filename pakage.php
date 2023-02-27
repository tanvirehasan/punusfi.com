<?php
include_once "app/config/conn.php";
include_once "app/config/function.php";
include_once "inc/header.php";
?>
<main>



    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Pricing</h1>
        <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
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
                                    <h1 class="card-title pricing-card-title">$<?= $row->package_price ?></h1>
                                    <small class="text-muted">365 Dyes</small>
                                </div>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <?= $row->package_info ?>
                                </ul>

                                <a type='submit' name='buy_pack' class='btn btn-lg btn-block btn-outline-theme'>Purchase</a>



                            </div>
                        </div>
                    </form>
                </div>
            <?php } ?>


        </div>
    </div>













</main>
<?php include_once "inc/footer.php" ?>