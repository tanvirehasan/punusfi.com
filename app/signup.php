<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
	<title>Signup</title>

	<!-- Google font file. If you want you can change. -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900" rel="stylesheet">

	<!-- Fontawesome font file css -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!-- Template global css file. Requared all pages -->
	<link rel="stylesheet" type="text/css" href="css/global.style.css">
</head>

<body>
	<div class="wrapper">
		<div class="wrapper-inline">
			<!-- Page content start -->
			<main>
				<div class="container">
				<div class="form-row-group with-icons">
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
							<input type="text" name="last_name" class="form-element" placeholder="Phone No." >
						</div>

						<div class="form-row no-padding">
							<i class="fa fa-envelope"></i>
							<input type="email" name="aaa" class="form-element" placeholder="Email">
						</div>

						<div class="form-row no-padding">
							<i class="fa fa-envelope"></i>
							<input type="email" name="refer_id" class="form-element" placeholder="Refer ID">
						</div>

						<div class="form-row no-padding">
							<i class="fa fa-envelope"></i>
							<input type="email" name="placement_id" class="form-element" placeholder="Placement ID">
						</div>

						<div class="form-row-group">
						<div class="form-row no-padding">
							<select class="form-element">
								<option value="" selected="">Placement</option>
								<option value="1">Left</option>
								<option value="1">Right</option>
							</select>
						</div>
					</div>

						<div class="form-row no-padding">
							<i class="fa fa-envelope"></i>
							<input type="email" name="username" class="form-element" placeholder="User Name">
						</div>
						<div class="form-row no-padding">
							<i class="fa fa-lock"></i>
							<input type="password" name="aaa" class="form-element" placeholder="Password" value="123456">
						</div>

					</div>

					<div class="form-divider"></div>

					<div class="form-row">
						<a href="#" class="button circle block orange">Sign Up</a>
					</div>

					<div class="form-row txt-center mt-15">
						Already have an account? <a href="login.html" data-loader="show">Login</a>
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
	<script src="js/jquery-3.2.1.min.js"></script>

	<!-- Template global script file. requared all pages -->
	<script src="js/global.script.js"></script>

	
</body>


<!-- Mirrored from cryptooapp.netlify.app/temp/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2022 20:04:39 GMT -->
</html>