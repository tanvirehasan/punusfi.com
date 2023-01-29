<?php
    if (isset($_POST['buy_pack'])) {
        
        $user_id  = UserData('id');
        $pack_id  = $_POST['package_id'];
        $price  = $_POST['price'];
        $refer_id = referidData('id');

        if (CashIn($userid) >= $_POST['price']) {
            $insert = "INSERT INTO investments (user_id,pack_id,investmnet,refer_id,pack_buy_date) VALUES ('$user_id','$pack_id','$price','$refer_id', NOW())";
            mysqli_query($conn, $insert);

            $insertw = "INSERT INTO cash_in_out (sent_id,recvied_id,trnx_amount,trnx_datetime) VALUES ('$user_id','Investment','$price', NOW())";
            mysqli_query($conn, $insertw);
            
            $update = " UPDATE  users SET stutas='1', packageid='$pack_id' Where id='$user_id'";  
            if (mysqli_query($conn, $update)==TRUE) {
                Reconect('location:success.php');
            }


        }else{
            echo "sorry";
        }


    }