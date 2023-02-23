<?php
include 'config/db.php';
include 'inc/header.php';
?>


<div class="row mx-2 pt-2">
  <div class="col-md-12"> <!-- col second start -->
    <div class="card border-0">
      <?php if (isset($_GET['All_Withdrawal_Request'])) { ?>
        <div class="card-header py-3">
          <span class="h4">All Withdrawal Request</span>
          <span class="h5 text-info" style="float: right;">
            Total User:
            <?php
            $sql = "SELECT * FROM withdraw";
            $query = mysqli_query($conn, $sql);
            echo mysqli_num_rows($query);
            ?>
          </span>
        </div>
        <div class="card-body">
          <table id="ppc_table" class="table table-striped table-bordered">
            <thead class="bg-info text-bold">
              <tr>
                <td>N0</td>
                <td>User ID</td>
                <td>Pay Method</td>
                <td>wallet/bank</td>
                <td>USD</td>
                <td>Payamunt</td>
                <td>Stetus</td>
              </tr>
            </thead>
            <tbody>
              <?php $Users = mysqli_query($conn, "SELECT * FROM withdraw");
              $i = 1;
              foreach ($Users as $UserData) { ?>

                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $UserData['username']; ?></td>
                  <td><?php echo $UserData['withdrow_type']; ?></td>
                  <td>
                    <?php
                    if ($UserData['withdrow_type'] == 'bank') {
                      echo  $UserData['Bank_Name'] . ", " . $UserData['account_holder_name'] . ", " . $UserData['Bank_Account_Number'] . ", " .
                        $UserData['Swift_Code'] . ", " . $UserData['Bank_City_Country'];
                    } else {
                      echo $UserData['wallet_bank'];
                    } ?>
                  </td>
                  <td><?php echo $netamunt= $UserData['amount']; ?></td>
                  <td><?php echo $pay_amunt = $netamunt - $netamunt / 100 * 5; ?></td>

                  <?php
                  if ($UserData['stutas'] == 0) { ?>
                    <td class="text-danger text-center h5"><strong><i class="fas fa-clock"></i></strong></td>
                  <?php } else { ?>
                    <td class="text-success text-center h5"><strong><i class="fas fa-badge-check"></i></strong></td>
                  <?php } ?>
                </tr>
              <?php $i++;
              } ?>
            </tbody>
          </table>
        <?php } ?>



        <?php if (isset($_GET['pending'])) { ?>
          <div class="card-header py-3">
            <span class="h4">Withdrawal Pending Request</span>
            <span class="h5 text-info" style="float: right;">
              Total User:
              <?php
              $sql = "SELECT * FROM users";
              $query = mysqli_query($conn, $sql);
              echo mysqli_num_rows($query);
              ?>
            </span>
          </div>
          <div class="card-body">
            <table id="ppc_table" class="table table-striped table-bordered">
              <thead class="bg-info text-bold">
                <tr>
                  <td>N0</td>
                  <td>User ID</td>
                  <td>Pay Method</td>
                  <td>wallet/bank</td>
                  <td>USD</td>
                  <td>Pay Amunt</td>
                  <td>Stetus</td>
                  <td>Action</td>
                </tr>
              </thead>
              <tbody>
                <?php $Users = mysqli_query($conn, "SELECT * FROM withdraw WHERE stutas='0' ");
                $i = 1;
                foreach ($Users as $UserData) { ?>

                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $UserData['username']; ?></td>
                    <td><?php echo $UserData['withdrow_type']; ?></td>
                    <td>
                      <?php
                      if ($UserData['withdrow_type'] == 'bank') {
                        echo  $UserData['Bank_Name'] . ", " . $UserData['account_holder_name'] . ", " . $UserData['Bank_Account_Number'] . ", " .
                          $UserData['Swift_Code'] . ", " . $UserData['Bank_City_Country'];
                      } else {
                        echo $UserData['wallet_bank'];
                      } ?>
                    </td>
                    <td><?php echo $netamunt = $UserData['amount']; ?></td>
                    <td><?php echo $pay_amunt = $netamunt - $netamunt / 100 * 5; ?></td>

                    <?php
                    if ($UserData['stutas'] == 0) { ?>
                      <td class="text-danger text-center h5"><strong><i class="fas fa-clock"></i></strong></td>
                    <?php } else { ?>
                      <td class="text-success text-center h5"><strong><i class="fas fa-badge-check"></i></strong></td>
                    <?php } ?>

                    <td>
                      <a href="statusupdate.php?statusid=<?php echo $UserData['wid'] ?>&changeid=1" class="btn btn-sm btn-success">Approved</a>
                      <a href="statusupdate.php?delete=<?php echo $UserData['wid'] ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>

                  </tr>
                <?php $i++;
                } ?>
              </tbody>
            </table>
          <?php } ?>



          <?php if (isset($_GET['Approved'])) { ?>

            <div class="card-header py-3">
              <span class="h4">Withdrawal Pending Request</span>
              <span class="h5 text-info" style="float: right;">
                Total User:
                <?php
                $sql = "SELECT * FROM users";
                $query = mysqli_query($conn, $sql);
                echo mysqli_num_rows($query);
                ?>
              </span>
            </div>
            <div class="card-body">
              <table id="ppc_table" class="table table-striped table-bordered">
                <thead class="bg-info text-bold">
                  <tr>
                    <td>N0</td>
                    <td>User ID</td>
                    <td>Pay Method</td>
                    <td>Phone No</td>
                    <td>USD</td>
                    <td>TAKA</td>
                    <td>Stetus</td>
                    <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                  <?php $Users = mysqli_query($conn, "SELECT * FROM withdrawal WHERE PaymentStetus='1' ");
                  $i = 1;
                  foreach ($Users as $UserData) { ?>

                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $UserData['UserName']; ?></td>
                      <td><?php echo $UserData['p_mathod']; ?></td>
                      <td><?php echo $UserData['p_number']; ?></td>
                      <td><?php echo $UserData['USDamount']; ?></td>
                      <td><?php echo $UserData['f_total']; ?></td>
                      <?php

                      if ($UserData['PaymentStetus'] == 0) { ?>
                        <td class="text-danger text-center h5"><strong><i class="fas fa-clock"></i></strong></td>
                      <?php } else { ?>
                        <td class="text-success text-center h5"><strong><i class="fas fa-badge-check"></i></strong></td>
                      <?php } ?>

                      <td>
                        <a href="statusupdate.php?statusid=<?php echo $UserData['Withdrawalid'] ?>&changeid=0" class="btn btn-sm btn-warning">Cencel</a>
                        <a href="statusupdate.php?delete=<?php echo $UserData['Withdrawalid'] ?>" class="btn btn-sm btn-danger">Delete</a>
                      </td>

                    </tr>
                  <?php $i++;
                  } ?>
                </tbody>
              </table>
            <?php } ?>

            </div>
          </div>
        </div><!--  col second end -->
    </div>


    <?php include 'inc/footer.php'; ?>