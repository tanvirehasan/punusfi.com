<?php
include_once 'inc/header.php';
include_once "inc/navbar.php";
?>


<div id="content" class="app-content">
  <?php $teamleaderid = $_GET['tree'];
  $teamsqlg1 = "SELECT * FROM users WHERE placemnet_id='$teamleaderid'  ";
  $teamqueryg1 = mysqli_query($conn, $teamsqlg1); ?>
  <div class="row">
    <?php while ($rowg1 = $teamqueryg1->fetch_object()) { ?>
      <div class="col-4 text-center">
        <a href="team.php?tree=<?= $rowg1->user_name ?>"><?= $rowg1->user_name ?>-<?= $rowg1->placement ?></a>


        <?php $teamleaderidg2 = $rowg1->user_name;
        $teamsqlg2 = "SELECT * FROM users WHERE placemnet_id='$teamleaderidg2' ";
        $teamqueryg2 = mysqli_query($conn, $teamsqlg2); ?>
        <div class="row border">
          <?php while ($rowg2 = $teamqueryg2->fetch_object()) { ?>
            <div class="col-md-4 text-center">
              <a href="team.php?tree=<?= $rowg2->user_name ?>"><?= $rowg2->user_name ?>-<?= $rowg2->placement ?></a>
              <?php
              if ($rowg2->placement == 'A' OR $rowg2->placement == 'B'or $rowg2->placement == 'C') {
                echo "<a href='team.php?tree=$rowg2->user_name'>$rowg2->user_name $rowg2->placement</a>";
              } else {
                echo "Emtey";
              }?>


            </div>
          <?php } ?>
        </div>







        <!-- G1 -->
      </div>
    <?php } ?>
  </div>




</div>



<?php include_once 'inc/footer.php'; ?>