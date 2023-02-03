<?php
include "inc/header.php";
include "inc/navbar.php";
include_once "controller/package/package_sql.php";
?>


<?php
if (isset($_POST['sentmoney'])) {

    $sent_id = $userid;
    $recvied_id = siteUserData('id', $_POST['recvied_id']);
    $trnx_amount = $_POST['trnx_amount'];

    if (rowcount('users', "where id ='$recvied_id'") > 0) {
        if (Current_balance() >= $trnx_amount) {
            $insert  = "INSERT INTO cash_in_out (sent_id, recvied_id,trnx_amount, trnx_datetime) VALUES ('$sent_id','$recvied_id','$trnx_amount',NOW() )";
            if (mysqli_query($conn, $insert) == TRUE) {
                Reconect('success.php');
            } else {
                $erro = "SORRY! Please Try Again";
            }
        } else {
            $erro = "SORRY! Insufficient Balance";
        }
    } else {
        $erro = "SORRY! Wrong Recvied ID";
    }
}
?>



<div id="content" class="app-content">
    <div class="row ">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-5"> <i class="fa fa-dollar" aria-hidden="true"></i> Funds Transfer</h1>
            <p class="lead">P to P Funds Transfer</p>
        </div>

        <div class="col-md-12">
            <div class="card p-5">
                <?php if (isset($erro)) {
                    echo "<p class='text-danger fs-5'>$erro</p>";
                } ?>
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label"> User Name</label>
                        <input type="text" class="form-control form-control-lg bg-white bg-opacity-5" name="recvied_id" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Amount </label>
                        <input type="number" class="form-control form-control-lg bg-white bg-opacity-5" name="trnx_amount" required>
                    </div>

                    <input type="submit" value="Submit" name="sentmoney" class="btn btn-outline-theme btn-lg d-block mt-5 ">
                </form>
                <div class="card-arrow">
                    <div class="card-arrow-top-left"></div>
                    <div class="card-arrow-top-right"></div>
                    <div class="card-arrow-bottom-left"></div>
                    <div class="card-arrow-bottom-right"></div>
                </div>
            </div>
        </div>
    </div>


    <?php include "inc/footer.php"; ?>