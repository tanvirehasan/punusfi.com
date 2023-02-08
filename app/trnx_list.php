<?php
include "inc/header.php";
include "inc/navbar.php";
include_once "controller/package/package_sql.php";
?>

<div id="content" class="app-content">
    <div class="row">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto ">
            <h1 class="display-4">Refer List</h1>
        </div>
        <div class="12">

            <table class="table table-bordered" id="datatable">
                <thead>
                    <tr class="bg-light text-dark">
                        <th>SL#</th>
                        <th>Sent</th>
                        <th>Recvied</th>
                        <th>Amount</th>
                        <th>Date Time</th>
                    </tr>
                </thead>

                <?php
                $i = 1;
                $data = SelectData('cash_in_out', "where sent_id='$userid' or recvied_id='$userid' ");
                while ($row = $data->fetch_object()) { ?>
                    <tbody>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= siteUserData('user_name', $row->sent_id); ?></td>
                            <td><?= siteUserData('user_name', $row->recvied_id); ?></td>
                            <td><?= $row->trnx_amount; ?></td>
                            <td><?= $row->trnx_datetime; ?></td>
                        </tr>
                    </tbody>

                <?php } ?>





            </table>


        </div>

    </div>
</div>
<?php include "inc/footer.php"; ?>