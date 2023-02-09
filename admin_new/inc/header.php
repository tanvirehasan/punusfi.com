<?php

session_start();
if (!isset($_SESSION['admin'])) {

  header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PUNUS | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
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

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link" style="height: 60px;">
        <img src="https://punusfi.com/img/logo.png" class="brand-image ">
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fad fa-home"> </i>
                Home
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-money-check-edit-alt"> </i>
                Add Money
              </a>
              <ul class="nav nav-treeview pl-3">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fad fa-chevron-right nav-icon "></i>
                    <p>Project Reports</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">

                    <i class="fad fa-chevron-right nav-icon"></i>
                    <p>Income Reports</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a href="withdrowal.php?All_Withdrawal_Request" class="nav-link">
                <i class="nav-icon fas fa-sack-dollar"> </i>Withdraw</a>
              <ul class="nav nav-treeview pl-3">

                <li class="nav-item">
                  <a href="withdrowal.php?All_Withdrawal_Request" class="nav-link">
                    <i class="fad fa-chevron-right nav-icon"></i>
                    <p>All Withdrawal</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="withdrowal.php?pending" class="nav-link">
                    <i class="fad fa-chevron-right nav-icon"></i>
                    <p>Pending Withdrawal</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="withdrowal.php?Approved" class="nav-link">

                    <i class="nav-icon fad fa-chevron-right"></i>
                    <p>Completed Withdrawal</p>
                  </a>
                </li>

              </ul>
            </li>


            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fad fa-users"> </i>
                All User

              </a>
              <ul class="nav nav-treeview pl-3">

                <li class="nav-item">
                  <a href="allusers.php" class="nav-link">
                    <i class="fad fa-chevron-right nav-icon "></i>
                    <p>All User</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="allusers.php" class="nav-link">
                    <i class="fad fa-chevron-right nav-icon "></i>
                    <p>Active User</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">

                    <i class="fad fa-chevron-right nav-icon"></i>
                    <p>Inactive User</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="resetpass.php" class="nav-link">

                    <i class="fad fa-chevron-right nav-icon"></i>
                    <p>Reset Password</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a href="dbbackup.php" class="nav-link">
                <i class="nav-icon fas fa-hdd"> </i>
                Backup
              </a>
            </li>

            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="nav-icon fad fa-sign-out-alt"> </i>
                Logout
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    <div class="content-wrapper">