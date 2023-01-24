<?php
    if (isset($_POST['buy_pack'])) {
        
        $user_id  = UserData('id');
        $pack_id  = $_POST['package_id'];
        $refer_id =UserData('refer_id');

        if (CashIn($userid) >= $_POST['price']) {
            $insert = "INSERT INTO investments (user_id,pack_id,refer_id,pack_buy_date) VALUES ('$user_id','$pack_id','$refer_id', NOW())";
            mysqli_query($conn, $insert);
            
            $update = " UPDATE  users SET stutas='1', packageid='$pack_id' Where id='$user_id'";  
            mysqli_query($conn, $update);
        }else{

            echo "sorry";
        }


    }