<?php include 'inc/header.php';
	  include 'config/db.php';   
      include 'config/select.php';
?>

	<div class="container">		
		<div class="row mx-3 mt-5">
			<div class="col-lg-4">
				<div class="card">
	  				<h5 class="card-header bg-info">All Users</h5>
	  				<div class="card-body">
		   				 <h2 class="text-center h1">
		   				 	 
        					<?php
        					  $sql= "SELECT * FROM users";
          					  $query = mysqli_query($conn,$sql);
          					  echo mysqli_num_rows($query);        
        					?>       						
		   				 </h2>
	  				</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
	  				<h5 class="card-header bg-danger">Active Users </h5>
	  				<div class="card-body">
		   				<h2 class="text-center h1">
		   				 	 
        					<?php
        					  $sql= "SELECT * FROM users WHERE stutas='1' ";
          					  $query = mysqli_query($conn,$sql);
          					  echo mysqli_num_rows($query);        
        					?> 
		   				 </h2>
	  				</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="card">
	  				<h5 class="card-header bg-warning">Sells
	  				</h5>
	  				<div class="card-body">
	  					<h1 class="text-center">
        					<?php
        					  $sql= "SELECT * FROM investments";
          					  $query = mysqli_query($conn,$sql);
          					  echo mysqli_num_rows($query);        
        					?>
		   				</h1>
	  				</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card">
	  				<h5 class="card-header bg-warning">Withdrawal Requests</h5>
	  				<div class="card-body">
	  					<h1 class="text-center">
        					<?php
        					  $sql= "SELECT * FROM withdraw WHERE stutas='0'";
          					  $query = mysqli_query($conn,$sql);
          					  echo mysqli_num_rows($query);        
        					?>
		   				</h1>
	  				</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card">
	  				<h5 class="card-header bg-info">Add Fund</h5>
	  				<div class="card-body">
	  					<h1 class="text-center">
        					<?php
        					  $sql= "SELECT * FROM addfund WHERE stutas='0'";
          					  $query = mysqli_query($conn,$sql);
          					  echo mysqli_num_rows($query);        
        					?>
		   				</h1>
	  				</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card">
	  				<h5 class="card-header bg-primary">Total Sent Money</h5>
	  				<div class="card-body">
	  					<h2 class="text-center">
        					<?php
        					  $sql= "SELECT SUM(trnx_amount) FROM cash_in_out WHERE sent_id='1'";
          					  $query = mysqli_query($conn,$sql);
          					  $totalwithdowal = mysqli_fetch_array($query);
          					    echo "$ ".$totalsent=number_format((float)$totalwithdowal['SUM(trnx_amount)'], 2, '.', '');?>
		   				</h2>
	  				</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card">
	  				<h5 class="card-header bg-primary">Total Sent Money Taka</h5>
	  				<div class="card-body">
	  					<h2 class="text-center">
        					<?php
        					  $sql= "SELECT SUM(trnx_amount) FROM cash_in_out WHERE sent_id='1'";
          					  $query = mysqli_query($conn,$sql);
          					  $totalwithdowal = mysqli_fetch_array($query);
          					      echo "৳ ". $totalsent*'110';        					    
       					?>
		   				</h2>

	  				</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="card">
	  				<h5 class="card-header bg-success">Total Withdrawal</h5>
	  				<div class="card-body">
	  					<h1 class="text-center">
        					<?php
        					  $sql= "SELECT SUM(amount) FROM withdraw WHERE stutas='1'";
          					  $query = mysqli_query($conn,$sql);
          					  $totalwithdowal = mysqli_fetch_array($query);
          					    echo "৳ ".number_format((float)$totalwithdowal['SUM(amount)'], 2, '.', '');
        					?>
		   				</h1>
	  				</div>
				</div>
			</div>


		</div>
	</div>



<?php include 'inc/footer.php';?>