<?php
include "inc/header.php";
include "inc/navbar.php";
?>

<div id="content" class="app-content">
    <div class="row">

        <div class="col-xl-3 col-lg-6">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1">START UP</span>
                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>

                    <div class="row align-items-center mb-2">
                        <div class="col-7">
                            <h3 class="mb-0">$20</h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
                        </div>
                    </div>

                    <div class="small text-white text-opacity-50 text-truncate">
                        <i class="fa fa-chevron-up fa-fw me-1"></i> 33.3% more than last week<br />
                        <i class="far fa-user fa-fw me-1"></i> 45.5% new visitors<br />
                        <i class="far fa-times-circle fa-fw me-1"></i> 3.25% bounce rate
                    </div>
                </div>

                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>

            </div>

        </div>

    </div>
</div>

<?php include "inc/footer.php"; ?>