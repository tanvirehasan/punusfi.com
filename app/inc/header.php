<?php
session_start();
date_default_timezone_set('Asia/Dubai');

if (!isset($_SESSION['user'])) {
	header('Location:login.php');
}
include_once "config/conn.php";
include_once "config/function.php";
$userid = UserData('id');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Punus FI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/app.min.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
	<link rel="apple-touch-icon-precomposed" href="https://punusfi.com/logo.png">
	<link rel="shortcut icon" href="https://punusfi.com/logo.png" type="image/x-icon">
</head>


<body>
	<div id="app" class="app ">
		<div id="header" class="app-header">
			<div class="desktop-toggler">
				<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
					<span class="bar" width='100%'></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>
			<div class="mobile-toggler">
				<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
					<span class="bar"></span>
					<span class="bar"></span>
					<span class="bar"></span>
				</button>
			</div>


			<div class="brand">
				<a href="index.php" class="brand-logo">
					<span class="brand-img">
						<span class="brand-img-text text-theme px-1">P</span>
					</span>
					<span class="brand-text">PUNUS</span>
				</a>
			</div>


			<div class="menu">


				<div class="menu-item dropdown dropdown-mobile-full">
					<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
						<div class="menu-img online">
							<img src="assets/img/user/profile.jpg" alt="Profile" height="60" />
						</div>
						<div class="menu-text d-sm-block d-none"><span>$ <?= Current_balance() ?></span>
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">

						<a class="dropdown-item d-flex align-items-center" href="profile.php"><?= UserData('user_name') ?> <i class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>
						<!-- <a class="dropdown-item d-flex align-items-center" href="email_inbox.html">INBOX <i class="bi bi-envelope ms-auto text-theme fs-16px my-n1"></i></a> -->
						<!-- <a class="dropdown-item d-flex align-items-center" href="calendar.html">CALENDAR <i class="bi bi-calendar ms-auto text-theme fs-16px my-n1"></i></a> -->
						<a class="dropdown-item d-flex align-items-center" href="settings.php">SETTINGS <i class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i></a>

						<div class="dropdown-divider"></div>
						<a class="dropdown-item d-flex align-items-center" href="logout.php">LOGOUT <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
					</div>
				</div>
			</div>


			<form class="menu-search" method="POST" name="header_search_form">
				<div class="menu-search-container">
					<div class="menu-search-icon"><i class="bi bi-search"></i></div>
					<div class="menu-search-input">
						<input type="text" class="form-control form-control-lg" placeholder="Search menu..." />
					</div>
					<div class="menu-search-icon">
						<a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i class="bi bi-x-lg"></i></a>
					</div>
				</div>
			</form>

		</div>