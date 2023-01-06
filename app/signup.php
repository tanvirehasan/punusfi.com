<?php include_once "config/conn.php"; ?>
<?php include_once "controller/signup_login/sign_login.php"; ?>
<?php include_once "config/function.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<title>Signup</title>

	<!-- Google font file. If you want you can change. -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900" rel="stylesheet">

	<!-- Fontawesome font file css -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">

	<!-- Template global css file. Requared all pages -->
	<link rel="stylesheet" type="text/css" href="assets/css/global.style.css">
</head>

<body>
	<div class="wrapper">
		<div class="wrapper-inline">
			<!-- Page content start -->
			<main>
				<div class="container">					
				<div class="form-row-group with-icons">
					<h1 class="text-success text-center" >Registration</h1>
					<?php if (isset($mess)) {echo "<h3 class='text-center'>".$mess."</h3>";} ?>
					<form action="" method="POST">
						<div class="form-row no-padding">
							<i class="fa fa-user"></i>
							<input type="text" name="frist_name" class="form-element" placeholder="Frist Name" >
						</div>

						<div class="form-row no-padding">
							<i class="fa fa-user"></i>
							<input type="text" name="last_name" class="form-element" placeholder="Last Name" >
						</div>

						<div class="form-row no-padding">
							<i class="fa fa-user"></i>
							<input type="text" name="phone_no" class="form-element" placeholder="Phone No." >
						</div>

						<div class="form-row no-padding">
							<i class="fa fa-envelope"></i>
							<input type="email" name="email" class="form-element" placeholder="Email">
						</div>

						<div class="form-row-group">
							<div class="form-row no-padding">
							<i class="fa fa-envelope"></i>
								<select class="form-element" name="country">
									<?php echo cunty_list(); ?>
								</select>
							</div>
						</div>

						<div class="form-row no-padding">
							<i class="fa fa-envelope"></i>
							<input type="text" name="refer_id" class="form-element" placeholder="Refer ID">
						</div>

						<div class="form-row no-padding">
							<i class="fa fa-envelope"></i>
							<input type="text" name="placemnet_id" class="form-element" placeholder="Placement ID">
						</div>

						<div class="form-row-group">
							<div class="form-row no-padding">
								<i class="fa fa-envelope"></i>
								<select class="form-element" name="placement">
									<option value="0" selected="">Placement</option>
									<option value="0">Left</option>
									<option value="1">Right</option>
								</select>
							</div>
						</div>

						
						<div class="form-row no-padding">
							<i class="fa fa-envelope"></i>
							<input type="text" name="user_name" class="form-element" placeholder="User Name">
						</div>
						<div class="form-row no-padding">
							<i class="fa fa-lock"></i>
							<input type="text" name="password" class="form-element" placeholder="Password" >
						</div>

						<div class="form-row no-padding">
							<i class="fa fa-lock"></i>
							<input type="text" name="trans_pin" class="form-element" placeholder="Transection PIN">
						</div>						

					</div>

					<div class="form-divider"></div>

					<div class="form-row">
						<button type="submit" name="signup_btn" class="button circle block orange">Sign Up</button>
					</div>

					</form>

					<div class="form-row txt-center mt-15">
						Already have an account? <a href="login.php" data-loader="show">Login</a>
					</div>
							
				</div>
			</main>
			<!-- Page content end -->
		</div>
	</div>

	

	<!--Page loader DOM Elements. Requared all pages-->
	<div class="sweet-loader">
		<div class="box">
		  	<div class="circle1"></div>
		  	<div class="circle2"></div>
		  	<div class="circle3"></div>
		</div>
	</div>

	<!-- JQuery library file. requared all pages -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Template global script file. requared all pages -->
	<script src="assets/js/global.script.js"></script>

</body>
</html>