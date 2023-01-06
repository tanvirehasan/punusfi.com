<?php
	session_start();
	include_once "config/conn.php";
?>
<?php include_once "config/function.php"; ?>
<?php include_once "controller/signup_login/sign_login.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<title>Login</title>

	<!-- Google font file. If you want you can change. -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900" rel="stylesheet">

	<!-- Fontawesome font file css -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

	<!-- Template global css file. Requared all pages -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/global.style.css">
</head>

<body>
	

	<div class="wrapper">

			<!-- Page content start -->
			<main style="margin-top: 80%;">
			
				<div class="container m-0 p-3">
					<form action="" method="POST">
						<div class="form-row-group with-icons">
							<h1 class="text-success text-center">Login</h1>
							<?php if (isset($mess)) {echo "<h3 class='text-center'>".$mess."</h3>";} ?>
							<div class="form-row no-padding">
								<i class="fa fa-envelope"></i>
								<input type="text" name="userid_email" class="form-element" placeholder="Username or Email">
							</div>
							<div class="form-row no-padding">
								<i class="fa fa-lock"></i>
								<input type="password" name="password" class="form-element" placeholder="Password">
							</div>
						</div>
					
					<div class="form-row txt-center mt-15">
						<a href="forgot-password.php" data-loader="show">Forgot password?</a>
					</div>

					<div class="form-divider"></div>

					<div class="form-row">
						<button type="submit" name="login_btn" class="button circle block orange">Login</button>
					</div>

					</form>

					<div class="form-row txt-center mt-15">
						Don't you have an account yet? <a href="signup.php" data-loader="show">Sign Up</a>
					</div>

				</div>
			</main>
			<!-- Page content end -->
		</div>
	</div>


	<!-- JQuery library file. requared all pages -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Template global script file. requared all pages -->
	<script src="assets/js/global.script.js"></script>

	
</body>
</html>