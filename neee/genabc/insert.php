<?php 

#User Signup

if (isset($_POST['Register'])) {

		$FullName    =$_POST['FullName'];
		$MobileNo    =$_POST['phoneNumber'];
		$Email       =$_POST['Email'];
		$Address     =$_POST['Address'];
		$SponsorName =$_POST['SponsorName'];
		$Username    =$_POST['Username'];
		$Password    =$_POST['Password'];
		$confirmpwd  =$_POST['confirmpwd'];

		$userChecksql="SELECT * FROM users WHERE Username='$Username'";
		$usercheckdata=mysqli_query($conn, $userChecksql);

		$Sponsot_Name=mysqli_query($conn, "SELECT * FROM users WHERE Username='$SponsorName'");


	if (mysqli_num_rows($Sponsot_Name)>0) {
		if ( mysqli_num_rows($usercheckdata)>0) {
			$mess = "<span class='text-denger'>Username not Available!</span>";
		}else{
			if ($Password==$confirmpwd) {
				$sql="INSERT INTO `users`(
				`FullName`,`MobileNo`,`Email`,`Address`,`SponsorName`,`Username`,`Password`,`joindate`)
				VALUES ( '$FullName', '$MobileNo','$Email','$Address','$SponsorName','$Username','$Password', NOW())";

				$team = "INSERT INTO team (teamleader) VALUES('$Username')";
				mysqli_query($conn, $team);

				if (mysqli_query($conn, $sql)) {
					header('location:registration.php?success');
				}else{$mess = "<span class='text-denger'>Error!</span>";}

			} else {$mess = "<span class='text-warning'>Password not mutch!</span>";}
		}
	}else{
		$mess = "<span class='text-denger'>Sponsor Name not exist</span>";
	}
}


#Add Funds

if (isset($_POST['AddFund'])) {
		
		$UserName 			=$_POST['UserName'];
		$ReferUserId 		=$_POST['ReferUserId'];
		$PaymentGateway		=$_POST['PaymentGateway'];
		$Country			=$_POST['Country'];
		$PaymentMethod		=$_POST['PaymentMethod'];
		$PaymentNumber		=$_POST['PaymentNumber'];
		$AmountUSD			=$_POST['sale'];
		$TotalExchangeTaka	=$_POST['f_total'];
		$TrxID				=$_POST['TrxID'];



		$sql="INSERT INTO `add_money`(

		    `UserName`,
		    `ReferUserId`,
		    `PaymentGateway`,
		    `Country`,
		    `PaymentMethod`,
		    `PaymentNumber`,
		    `AmountUSD`,
		    `TotalExchangeTaka`,
		    `TrxID`,
		    `datetime`

		)

		VALUES(

			'$UserName',
			'$ReferUserId',
			'$PaymentGateway',
			'$Country',
			'$PaymentMethod',
			'$PaymentNumber',
			'$AmountUSD',
			'$TotalExchangeTaka',
			'$TrxID',
			 NOW()

		)";

		if (mysqli_query($conn, $sql)) {
			header('location:addfund.php?addmoneysuccess');
		}else{$mess = "<span class='text-denger'>Error!</span>";}

}




if (isset($_POST['bwithdrow'])) {
	
		$balance1	=$_POST['balance'];


		$payments 	=$_POST['payments'];
		$country 	=$_POST['country'];
		$p_agent	=$_POST['p_agent'];
		$p_mathod	=$_POST['p_mathod'];
		$p_number	=$_POST['p_number'];
		$s_amount	=$_POST['s_amount'];
		$usd_amount	=$_POST['sale'];
		$f_total	=$_POST['f_total'];
		$UserName	=$_POST['UserName'];
		$Paytotal	=$usd_amount+$s_amount;



		$sql="INSERT INTO `withdrawal`(

		    `payments`,
		    `country`,
		    `p_agent`,
		    `p_mathod`,
		    `p_number`,
		    `s_amount`,
		    `USDamount`,
		    `f_total`,
		    `UserName`,
		    `paydatetime`
		    

		)

		VALUES(

			'$payments',
			'$country',
			'$p_agent',
			'$p_mathod',
			'$p_number',
			'$s_amount',
			'$usd_amount',
			'$f_total',
			'$UserName',
			 NOW()

		)";

	#dellylimit
	$today = date('Y-m-d');
	$wsql ="SELECT SUM(USDamount) FROM withdrawal WHERE UserName='$UserName' AND paydatetime='$today'"; 
	$wqyery= mysqli_query($conn,$wsql);
	$Row = mysqli_fetch_array($wqyery);
	$sum_amount = $Row ['SUM(USDamount)']+$usd_amount;

	if ($sum_amount<='100') {

		if ($usd_amount>='5' && $usd_amount<='100') {

			if ($balance1>=$Paytotal) {

					if (mysqli_query($conn, $sql)) {
					header('location:balance_withdrawal.php?WithdrawalSuccessful');
					}else{$mess = "<span class='text-denger'>Error!</span>";}
						
				}else{
					$mess = "<span class='text-denger'>Balance not Avelable</span>";
				}	

		}else{
			$mess = "Minimum Withdraw $5.55 and Maximum Withdraw $100";
		}

	}else{
    $mess =  "SORRY, you've reached your daily limit of withdraw";

  }



}




?>