<?php 

require_once 'config/db.php';

if (isset($_GET['statusid'])) {
	
	$change =$_GET['changeid'];
	$id = $_GET['statusid'];
	$update = "UPDATE withdraw  SET stutas='$change ' WHERE wid='$id' limit 1" ;
	$done = mysqli_query($conn,$update);
	header('location:withdrowal.php?All_Withdrawal_Request');
	exit();
}



if (isset($_GET['delete'])) {	

	$id = $_GET['delete'];
	$update = "DELETE FROM  withdraw WHERE wid='$id' limit 1";
	$done = mysqli_query($conn,$update);
	header('location:withdrowal.php?All_Withdrawal_Request');
	exit();
}








?>