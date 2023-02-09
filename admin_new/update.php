<!-- header -->
<?php 
  include 'inc/header.php';
  include 'config/insert.php';
  include 'config/select.php';
  $id = $_GET['id'];
  $select = "SELECT * FROM  add_project WHERE project_id=$id";

  $query = mysqli_query($conn,$select);
  $result = mysqli_fetch_array($query);


  // update
  if (isset($_POST['UpdateProject'])) {

  
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $project_name = $_POST['project_name'];
  $customer_name = $_POST['customer_name'];
  $customer_phone = $_POST['customer_phone'];
  $customer_address = $_POST['customer_address'];
  $project_amount = $_POST['project_amount'];
  $total_pay = $_POST['total_pay'];

    $updated= "UPDATE `add_project` SET `start_date`='$start_date',`end_date`='$end_date',`project_name`='$project_name',`customer_name`='$customer_name',`customer_phone`='$customer_phone',`customer_address`='$customer_address',`project_amount`='$project_amount',`total_pay`='$total_pay' WHERE project_id=$id";

      if (mysqli_query($conn,$updated)) {
        echo "<script>window.top.location='update.php?id=$id'</script>";
        exit;
        
      }

  
  }

?>


<style>
    table {
      border-collapse: separate;
      border-spacing: 0 0;
    }

    td {
      padding-right: 20px;
      padding-top: 10px;
    }
  </style>

<div class="row mx-2 pt-3"> <!-- row start -->
  <div class="col-lg-10"> <!-- col first start -->
  <div class="card border-0">
    <div class="card-header py-3">
      <span class="h4">Update Your Project Entry Form</span>

    </div>
    <div class="card-body mt-3">
      <form action="" method="POST">
        <table class="text-right">
          <?php 
          if (isset($mess)) {
            echo $mess;
          }

          ?>
           <tr>
            <td>Start Date</td> 
            <td><input type="date" name="start_date" value="<?php echo $result['start_date']; ?>" class="form-control"></td>
            <td>End Date</td> 
            <td><input type="date" value="<?php echo $result['end_date']; ?>" name="end_date" class="form-control"></td>
          </tr>
          <tr>
            <td>Project Name</td>
            <td>
              <input type="text" name="project_name" class="form-control" required="" value="<?php echo $result['project_name']; ?>">
            </td>
            <td>Customer Name</td> 
            <td>
              <input type="text" name="customer_name" class="form-control" required="" value="<?php echo $result['customer_name']; ?>">
            </td> 
          </tr>
          <tr>
            <td>Customer Phone</td>
            <td>
              <input type="text" name="customer_phone" class="form-control" required="" value="<?php echo $result['customer_phone']; ?>">
            </td>
            <td>Customer Address</td>
            <td>
              <input type="text" name="customer_address" class="form-control" required="" value="<?php echo $result['customer_address']; ?>">
            </td>
          </tr> 
          <tr>
            <td>Project Amount</td>
            <td>
              <input type="number" name="project_amount" class="form-control" value="<?php echo $result['project_amount']; ?>">
            </td>
            <td>Total pay</td>
            <td>
              <input type="number" name="total_pay" class="form-control" value="<?php echo $result['total_pay']; ?>">
            </td>
          </tr> 
          
      
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><div class="form-btn mt-4 ml-5">
          <input type="submit" value="Update" class="btn btn-success btn-lg mr-2" name="UpdateProject">
         
        </div></td>
          </tr>
        
          
        </table> 
      </form>
    </div>
  </div>
</div><!--  col first end -->
</div> <!-- row end -->

<!-- footer -->
<?php include 'inc/footer.php'; ?>
