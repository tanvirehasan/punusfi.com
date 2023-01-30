<?php
include "inc/header.php";
include "inc/navbar.php";
include_once "controller/package/package_sql.php";
?>

<div id="content" class="app-content">
    <div class="row">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Add Funds</h1>
            <p class="lead"></p>
        </div>

        <div class="col-md-6">
            <div class="card p-5">
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label"> User Name</label>
                        <input type="text" class="form-control form-control-lg bg-white bg-opacity-5" name="username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Amount </label>
                        <input type="number" class="form-control form-control-lg bg-white bg-opacity-5" name="amount">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Select Payment type </label>
                        <select name="payment_type" id="" class="form-control form-control-lg bg-white bg-opacity-5">
                            <option value="usdt">USDT</option>
                            <option value="btc">BTC</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Tanx ID/Payment Profv </label>
                        <input type="text" class="form-control form-control-lg bg-white bg-opacity-5" name="tanxid">
                    </div>
                    <input type="submit" value="Submit" name="addmoney" class="btn btn-outline-theme btn-lg d-block mt-5 ">
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



<?php 

    if(isset($_POST['addmoney'])){

    $username = $_POST['username'];
    $amount = $_POST['amount'];
    $payment_type = $_POST['payment_type'];
    $tanxid = $_POST['tanxid'];

    $insert  = "INSERT INTO addfund (userid, amount,payment_type,tanxid,datetimeaddmone) VALUES ('$username','$amount','$payment_type','$tanxid',NOW() )";
        mysqli_query($conn, $insert);
    }



?>





    <?php include "inc/footer.php"; ?>