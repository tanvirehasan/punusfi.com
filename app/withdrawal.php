<?php
include "inc/header.php";
include "inc/navbar.php";
?>

<?php
if (isset($_POST['withdraw'])) {

    $username = $_POST['username'];
    $amount = $_POST['amount'];
    $withdrow_type = $_POST['withdrow_type'];
    $wallet_bank = $_POST['wallet_bank'];
    $pin = $_POST['pin'];

    if ($pin == UserData('pin')) {
        $insert  = "INSERT INTO withdraw (username,amount,withdrow_type,wallet_bank,pin,date_time) VALUES ('$username','$amount','$withdrow_type','$wallet_bank','$pin',NOW() )";
        if(mysqli_query($conn, $insert)==TRUE){
            Reconect('withdrawal_list.php');
        }else{
            $mess = "SORRY! Something Wrong";
        }

    } else {
        $mess = "Your PIN not Match";
    }
}



echo 




?>






<div id="content" class="app-content">
    <div class="row">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Withdrawal</h1>
            <?php if (isset($mess)) {
                echo " <h4 class='text-danger'>" . $mess . "</h4> ";
            } ?>
        </div>

        <div class="col-md-6">
            <div class="card p-5">
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label"> User Name</label>
                        <input type="text" class="form-control form-control-lg bg-white bg-opacity-5" value="<?= UserData('user_name'); ?>" name="username" disabled>
                        <input type="hidden" class="form-control form-control-lg bg-white bg-opacity-5" value="<?= UserData('user_name'); ?>" name="username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Amount </label>
                        <input type="number" min="10" class="form-control form-control-lg bg-white bg-opacity-5" name="amount">
                    </div>

                    <label class="form-label"> Your Wallet/Bank Details </label>
                    <div class="mb-3 input-group">
                        <select name="withdrow_type" id="" class="form-control form-control-lg bg-white bg-opacity-5">
                            <option value="" class="text-dark">Select</option>
                            <option value="bank" class="text-dark">Bank</option>
                            <option value="usdt" class="text-dark">USDT</option>
                        </select>
                        <input type="text" name="wallet_bank" class="form-control form-control-lg bg-white bg-opacity-5 w-75">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Your PIN </label>
                        <input type="text" class="form-control form-control-lg bg-white bg-opacity-5" name="pin">
                    </div>
                    <input type="submit" value="Submit" name="withdraw" class="btn btn-outline-theme btn-lg d-block mt-5 ">
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