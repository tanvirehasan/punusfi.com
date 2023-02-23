<?php 
	
	session_start();
	include 'config/db.php'; 

	if (isset($_POST['login'])) {
		
		$username=$_POST['Username'];
		$Password=$_POST['Password'];
		$login = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE user_name='$username' AND `password`='$Password'"));

		if ($login>0 && $username=='adminx') {
			$_SESSION['admin']=$username;
			header('location:index.php');
		}else{
			$mess = "Password not match!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/jquery.dataTables.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="dist/css/default.css">
  <link rel="stylesheet" href="dist/css/default.date.css">
</head>


<body>
	<div class="row d-flex justify-content-center mx-0" style="margin-top:150px;">
		<div class="col-md-4">
			<div class="card">
				<div class="card-header bg-info">
					<span class="h3">Admin Login</span>
				</div>
				<div class="card-body">
					<p class="text-center py-1 text-danger"><?php if(isset($mess)){echo $mess;} ?></p>
					<form action="" method="POST" class="form">
						<div class="form-group">
							<input type="text" name="Username"  class="form-control" style="background:none">
						</div>
						<div class="form-group">
							<input type="password" name="Password" placeholder="password" class="form-control">
						</div>
						<div class="form-group text-right">
							<input type="submit" name="login" value="Login" class="bg-info border-0 p-2 px-5">
						</div>					
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>