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

    $Bank_Name = $_POST['Bank_Name'];
    $Bank_City_Country = $_POST['Bank_City_Country'];
    $Swift_Code = $_POST['Swift_Code'];
    $account_holder_name = $_POST['account_holder_name'];
    $Bank_Account_Number = $_POST['Bank_Account_Number'];

    $pin = $_POST['pin'];

    if ($pin == UserData('pin')) {
        $insert  = "INSERT INTO withdraw (

            username,
            amount,
            withdrow_type,
            wallet_bank,
            pin,
            Bank_Name,
            Bank_City_Country,
            Swift_Code,
            account_holder_name,
            Bank_Account_Number,
            date_time

        ) VALUES (

            '$username',
            '$amount',
            '$withdrow_type',
            '$wallet_bank',
            '$pin',
            '$Bank_Name',
            '$Bank_City_Country',
            '$Swift_Code',
            '$account_holder_name',
            '$Bank_Account_Number',
            NOW() 
        )";


        if (mysqli_query($conn, $insert) == TRUE) {
            Reconect('withdrawal_list.php');
        } else {
            $mess = "SORRY! Something Wrong";
        }
    } else {
        $mess = "Your PIN not Match";
    }
}

$disabled = (date('l') != 'Saturday') ? 'disabled' : '';

?>

<style>
    .bank_info {
        display: none;
    }
</style>




<div id="content" class="app-content">
    <div class="row">
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Withdrawal</h1>
            <p class="text-warning h3">Attention all users: Please note that the withdraw function is only available on Saturdays. We apologize for any inconvenience this may cause and appreciate your understanding. Thank you for your continued support.</p>
            <?php if (isset($mess)) {
                echo " <h4 class='text-danger'>" . $mess . "</h4> ";
            } ?>
        </div>

        <div class="col-md-6 col-12">
            <div class="card p-5">
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label"> User Name</label>
                        <input type="text" class="form-control form-control-lg bg-white bg-opacity-5" value="<?= UserData('user_name'); ?>" name="username" disabled>
                        <input type="hidden" class="form-control form-control-lg bg-white bg-opacity-5" value="<?= UserData('user_name'); ?>" name="username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Amount </label>
                        <input type="number" min="10" class="form-control form-control-lg bg-white bg-opacity-5" name="amount" id="amount">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Net Amount (With -5% withdrawal Cost) </label>
                        <input type="number" readonly class="form-control form-control-lg bg-white bg-opacity-5" name="netamount" id="netamount">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Payment Method </label>
                        <select name="withdrow_type" id="" class="form-control form-control-lg bg-white bg-opacity-5" onchange="wallet_info(this.value)">
                            <option value="" class="text-dark">Select</option>
                            <option value="bank" class="text-dark" id="bank_open">BANK</option>
                            <option value="usdt" class="text-dark" id="wallet_open">USDT</option>
                        </select>
                    </div>

                    <div class="mb-3 wallet" style="display: none;">
                        <label class="form-label"> Your Wallet/Bank Details </label>
                        <input type="text" name="wallet_bank" class="form-control form-control-lg bg-white bg-opacity-5">
                    </div>

                    <div class="bank_info">
                        <div class="mb-3">
                            <label class="form-label">Bank Name </label>
                            <input type="text" name="Bank_Name" class="form-control form-control-lg bg-white bg-opacity-5">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Bank City & Country</label>
                            <input type="text" name="Bank_City_Country" class="form-control form-control-lg bg-white bg-opacity-5">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Swift Code</label>
                            <input type="text" name="Swift_Code" class="form-control form-control-lg bg-white bg-opacity-5">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Account Holder Name</label>
                            <input type="text" name="account_holder_name" class="form-control form-control-lg bg-white bg-opacity-5">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Bank Account Number</label>
                            <input type="text" name="Bank_Account_Number" class="form-control form-control-lg bg-white bg-opacity-5">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"> Your PIN </label>
                        <input type="text" class="form-control form-control-lg bg-white bg-opacity-5" name="pin">
                    </div>
                    <input type="submit" <?php //$disabled 
                                            ?> value="Submit" name="withdraw" class="btn btn-outline-theme btn-lg d-block mt-5 ">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        function wallet_info(val) {
            if (val == "bank") {
                $(".bank_info").show();
                $(".wallet").hide();
            }

            if (val == "") {
                $(".bank_info").hide();
                $(".wallet").hide();
            }

            if (val == "usdt") {
                $(".wallet").show();
                $(".bank_info").hide();
            }

        }

        $(document).ready(function() {
            $("#amount").keyup(function() {
                var amunt = $("#amount").val();
                var amunt = amunt - amunt / 100 * 5;
                $("#netamount").val(amunt);
            });
        });
    </script>