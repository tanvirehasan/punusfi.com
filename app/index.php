<?php
include "inc/header.php";
include "inc/navbar.php";
?>

<div id="content" class="app-content">

    <div class="row">

        <!-- wallet 1 -->
        <div class="col-xl-3 col-lg-6 ">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1 fs-3">Current </span>
                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div class="col-7">
                            <h3 class="mb-0">$ <?= Current_balance() ?></h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
                        </div>
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

        <div class="col-xl-3 col-lg-6 ">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1 fs-3">Refer </span>
                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div class="col-7">
                            <h3 class="mb-0">$ <?= refericom() ?></h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
                        </div>
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

        <div class="col-xl-3 col-lg-6 ">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1 fs-3">ROI </span>
                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div class="col-7">
                            <h3 class="mb-0">$<?= ROI()[0] ?></h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
                        </div>
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

        <div class="col-xl-3 col-lg-6 ">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1 fs-3">Withdrawal </span>
                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>
                    <div class="row align-items-center mb-2">
                        <div class="col-7">
                            <h3 class="mb-0">$ <?php echo $gen = Genicom() + ROI()[0] + refericom(); ?></h3>
                        </div>
                        <div class="col-5">
                            <div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
                        </div>
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









        <div class="col-xl-6">

            <div class="card mb-3">

                <div class="card-body">

                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1 ">BUSINESS STATS</span>
                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>


                    <div class="ratio ratio-21x9 mb-3">
                        <div id="chart-server"></div>
                    </div>


                    <div class="row">

                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <div class="d-flex align-items-center">

                                <div class="w-50px h-50px">
                                    <div data-render="apexchart" data-type="donut" data-title="Visitors" data-height="50"></div>
                                </div>


                                <div class="ps-3 flex-1">
                                    <div class="fs-10px fw-bold text-white text-opacity-50 mb-1">DISK USAGE
                                    </div>
                                    <div class="mb-2 fs-5 text-truncate">20.04 / 256 GB</div>
                                    <div class="progress h-3px bg-white-transparent-2 mb-1">
                                        <div class="progress-bar bg-theme" style="width: 20%"></div>
                                    </div>
                                    <div class="fs-11px text-white text-opacity-50 mb-2 text-truncate">
                                        Last updated 1 min ago
                                    </div>
                                    <div class="d-flex align-items-center small">
                                        <i class="bi bi-circle-fill fs-6px me-2 text-theme"></i>
                                        <div class="flex-1">DISK C</div>
                                        <div>19.56GB</div>
                                    </div>
                                    <div class="d-flex align-items-center small">
                                        <i class="bi bi-circle-fill fs-6px me-2 text-theme text-opacity-50"></i>
                                        <div class="flex-1">DISK D</div>
                                        <div>0.50GB</div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="d-flex">

                                <div class="w-50px pt-3">
                                    <div data-render="apexchart" data-type="donut" data-title="Visitors" data-height="50"></div>
                                </div>


                                <div class="ps-3 flex-1">
                                    <div class="fs-10px fw-bold text-white text-opacity-50 mb-1">BANDWIDTH</div>
                                    <div class="mb-2 fs-5 text-truncate">83.76GB / 10TB</div>
                                    <div class="progress h-3px bg-white-transparent-2 mb-1">
                                        <div class="progress-bar bg-theme" style="width: 10%"></div>
                                    </div>
                                    <div class="fs-11px text-white text-opacity-50 mb-2 text-truncate">
                                        Last updated 1 min ago
                                    </div>
                                    <div class="d-flex align-items-center small">
                                        <i class="bi bi-circle-fill fs-6px me-2 text-theme"></i>
                                        <div class="flex-1">HTTP</div>
                                        <div>35.47GB</div>
                                    </div>
                                    <div class="d-flex align-items-center small">
                                        <i class="bi bi-circle-fill fs-6px me-2 text-theme text-opacity-50"></i>
                                        <div class="flex-1">FTP</div>
                                        <div>1.25GB</div>
                                    </div>
                                </div>

                            </div>
                        </div>

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


        <div class="col-xl-6">

            <div class="card mb-3">

                <div class="card-body">

                    <div class="d-flex fw-bold small mb-3">
                        <span class="flex-grow-1">USER ANALYTICS</span>
                        <a href="#" data-toggle="card-expand" class="text-white text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
                    </div>


                    <div class="ratio ratio-21x9 mb-3">
                        <div id="world-map" class="jvectormap-without-padding"></div>
                    </div>


                    <div class="row gx-4">

                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <table class="w-100 small mb-0 text-truncate text-white text-opacity-60">
                                <thead>
                                    <tr class="text-white text-opacity-75">
                                        <th class="w-50">COUNTRY</th>
                                        <th class="w-25 text-end">VISITS</th>
                                        <th class="w-25 text-end">PCT%</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>FRANCE</td>
                                        <td class="text-end">13,849</td>
                                        <td class="text-end">40.79%</td>
                                    </tr>
                                    <tr>
                                        <td>SPAIN</td>
                                        <td class="text-end">3,216</td>
                                        <td class="text-end">9.79%</td>
                                    </tr>
                                    <tr class="text-theme fw-bold">
                                        <td>MEXICO</td>
                                        <td class="text-end">1,398</td>
                                        <td class="text-end">4.26%</td>
                                    </tr>
                                    <tr>
                                        <td>UNITED STATES</td>
                                        <td class="text-end">1,090</td>
                                        <td class="text-end">3.32%</td>
                                    </tr>
                                    <tr>
                                        <td>BELGIUM</td>
                                        <td class="text-end">1,045</td>
                                        <td class="text-end">3.18%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="col-lg-6">

                            <div class="card">

                                <div class="card-body py-2">
                                    <div class="d-flex align-items-center">
                                        <div class="w-70px">
                                            <div data-render="apexchart" data-type="donut" data-height="70">
                                            </div>
                                        </div>
                                        <div class="flex-1 ps-2">
                                            <table class="w-100 small mb-0 text-white text-opacity-60">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-95">
                                                                </div> FEED
                                                            </div>
                                                        </td>
                                                        <td class="text-end">25.70%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-75">
                                                                </div> ORGANIC
                                                            </div>
                                                        </td>
                                                        <td class="text-end">24.30%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-55">
                                                                </div> REFERRAL
                                                            </div>
                                                        </td>
                                                        <td class="text-end">23.05%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-35">
                                                                </div> DIRECT
                                                            </div>
                                                        </td>
                                                        <td class="text-end">14.85%</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-15">
                                                                </div> EMAIL
                                                            </div>
                                                        </td>
                                                        <td class="text-end">7.35%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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