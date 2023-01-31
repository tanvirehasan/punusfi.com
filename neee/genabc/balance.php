<?php 
	
	$c2pwalletsql = "SELECT SUM(Amount) FROM cashincashout WHERE MoneySentId='$Usernameid' AND WalletType='c2p' ";
	$c2pwalletquery = mysqli_query($conn, $c2pwalletsql);
	$c2pwalletbalance = mysqli_fetch_array($c2pwalletquery);
	$sentMoneyc2p=$c2pwalletbalance['SUM(Amount)'];



	$Pending = zugkor('Amount','adincome', "WHERE Usernameid='$Usernameid' AND paidstatus='Pending' ");
	$AdsEarn = zugkor('Amount','adincome', "WHERE Usernameid='$Usernameid' AND paidstatus='Confirmed' ");
	
	//balance----------------
    $spogensql = "SELECT * FROM package WHERE PackageReferId='$Usernameid'";
    $spogenquery = mysqli_query($conn, $spogensql);
    $spogeninRuselt = mysqli_num_rows($spogenquery);
    $sposorin=$spogeninRuselt*4.5;

    $withdrawalsql = "SELECT SUM(USDamount), SUM(s_amount) FROM withdrawal WHERE UserName='$Usernameid'";
    $withdrawalquery = mysqli_query($conn, $withdrawalsql);
    $withdrawalRuselt = mysqli_fetch_array($withdrawalquery);
    $Totalwithdrawal=$withdrawalRuselt['SUM(USDamount)']+$withdrawalRuselt['SUM(s_amount)'];

	$Totalb = ($sposorin+$gen_income+$AdsEarn)-($Totalwithdrawal+$sentMoneyc2p);
	
	$balance=number_format((float)$Totalb, 3, '.', '');

	//waller----------------
	
	$walletsql = "SELECT SUM(Amount) FROM cashincashout WHERE MoneyRecivedId='$Usernameid' AND WalletType='p2p' ";
	$walletquery = mysqli_query($conn, $walletsql);
	$walletbalance = mysqli_fetch_array($walletquery);
	$MoneyRecivedp2p=$walletbalance['SUM(Amount)'];

	$walletsql = "SELECT SUM(Amount) FROM cashincashout WHERE MoneyRecivedId='$Usernameid' AND WalletType='c2p' ";
	$walletquery = mysqli_query($conn, $walletsql);
	$walletbalance = mysqli_fetch_array($walletquery);
	$MoneyRecivedc2p=$walletbalance['SUM(Amount)'];

	$walletsql = "SELECT SUM(Amount) FROM cashincashout WHERE MoneyRecivedId='$Usernameid' AND WalletType='roya2p' ";
	$walletquery = mysqli_query($conn, $walletsql);
	$walletbalance = mysqli_fetch_array($walletquery);
	$MoneyRecivedroya2p=$walletbalance['SUM(Amount)'];
	
	$MoneyRecived=$MoneyRecivedp2p+$MoneyRecivedc2p+$MoneyRecivedroya2p;
	//Money Recived end-------------------------


	$walletsql = "SELECT SUM(Amount) FROM cashincashout WHERE MoneySentId='$Usernameid' AND WalletType='p2p'";
	$walletquery = mysqli_query($conn, $walletsql);
	$walletbalance = mysqli_fetch_array($walletquery);
	$MoneySent=$walletbalance['SUM(Amount)'];

	$walletsql = "SELECT SUM(PackagePrice) FROM package WHERE PackageUserId='$Usernameid'";
	$walletquery = mysqli_query($conn, $walletsql);
	$walletbalance = mysqli_fetch_array($walletquery);
	$PackagePricesum=$walletbalance['SUM(PackagePrice)'];

	$ACactive=$Ruselt['UserActivation'];
	$PurchaseWalletall=$MoneyRecived-($MoneySent+$PackagePricesum+$ACactive);

	//purchaseWallet final blance
	$PurchaseWallet=number_format((float)$PurchaseWalletall, 3, '.', '');


	$RewardWallet 	= '0';


	//RoyalWallet 
	$RoyalWalletsql = "SELECT SUM(Amount) FROM cashincashout WHERE MoneySentId='$Usernameid' AND WalletType='roya2p'";
	$RoyalWalletquery = mysqli_query($conn, $RoyalWalletsql);
	$RoyalWalletbalance = mysqli_fetch_array($RoyalWalletquery);
	$RoyalWalletMoneySent=$RoyalWalletbalance['SUM(Amount)'];
	$RoyalWalletfloatforment = $RoyalIncome-$RoyalWalletMoneySent; 
	$RoyalWallet= number_format((float)$RoyalWalletfloatforment, 3, '.', '');
	


	$RankWallet 	= '0';








?>