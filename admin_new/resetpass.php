<?php
	include 'config/db.php';	
	include 'inc/header.php'; 



  if (isset($_POST['resetpassword'])) {
    
    $UserName    = $_POST['UserName'];
    $NewPassword = $_POST['new_password'];

    $sql = "SELECT * FROM users WHERE user_name='$UserName'";
    $query = mysqli_query($conn, $sql);
    $User_name_check = mysqli_num_rows($query);

    if ($User_name_check>0) {

        $SqlUpdate = "UPDATE users SET `password` ='$NewPassword' WHERE user_name='$UserName'";
        $query = mysqli_query($conn, $SqlUpdate);
          if ($query) {
            $mess="<div class='alert alert-success' role='alert'>Success! password has been changed</div>";

          }else{

            $mess="<div class='alert alert-danger' role='alert'>SORRY Please Try agine</div>";

          }
    }else{

      $mess="<div class='alert alert-danger' role='alert'>SORRY User Name Not Matched</div>";

    }
  }


 ?>


<div class="row mx-2 pt-2 d-flx justify-content-center ">
	<div class="col-lg-8"> <!-- col second start -->
  <div class="card border-0 p-5">
    <div class="card-header py-3">
      <span class="h4">Password Reset</span> 
    </div>

    <div class="card-body">

      <?php 
        if (isset($mess)) {              
           echo $mess;
        }
       ?>


      <form action="" method="post">
          <div class="form-group">
            <label class="form-control-label">User Name</label>
            <input class="form-control" type="text" name="UserName">
          </div>
          <div class="form-group">
            <label class="form-control-label" >New Password</label>
            <input class="form-control" type="password" name="new_password">
          </div>
          <input class="btn btn-primary px-5 mt-2" type="submit" name="resetpassword" value="Reset">
      </form>
    </div>
  </div>
</div><!--  col second end -->
</div>


<?php	include 'inc/footer.php'; ?>