<?php
	include 'config/db.php';	
	include 'inc/header.php'; 
 ?>


<div class="row mx-2 pt-2">
	<div class="col-lg-12"> <!-- col second start -->
  <div class="card border-0">
    <div class="card-header py-3">
      <span class="h4">Users List</span>
      <span class="h5 text-info" style="float: right;">
        Total User:
              <?php
                $sql= "SELECT * FROM users";
                  $query = mysqli_query($conn,$sql);
                  echo mysqli_num_rows($query);        
              ?>
      </span> 
    </div>
    <div class="card-body">
      <table id="ppc_table" class="table table-striped table-bordered">
      <thead>
        <tr class="bg-success">
          <td>N0</td> 
          <td>User ID</td>
          <td>Name</td>
          <td>Phone No</td>  
          <td>Packages</td>
          <td>Action</td>
        </tr>
      </thead>
        <tbody>
          <?php $Users = mysqli_query($conn,"SELECT * FROM users");
          $i=1;
          foreach ($Users as $UserData) {
          $userid=$UserData['id'];
          $pakeglist =mysqli_num_rows(mysqli_query($conn,"SELECT * FROM investments WHERE user_id='$userid'"));?>
        
          <tr>
            <td><?php echo $i; ?></td> 
            <td><?php echo $UserData['user_name']; ?></td> 
            <td><?php echo $UserData['phone_no']; ?></td>
            <td><?php echo $UserData['name']; ?></td>
            <td><?php echo $pakeglist; ?></td>
            <td><i class="fas fa-edit"></i> <i class="fas fa-trash-alt"></i></td>
          </tr>          
        <?php $i++; } ?>
       </tbody>
      </table>
    </div>
  </div>
</div><!--  col second end -->
</div>


<?php	include 'inc/footer.php'; ?>