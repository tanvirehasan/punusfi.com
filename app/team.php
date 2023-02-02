<?php
include_once 'inc/header.php';
include_once "inc/navbar.php";
?>


<div id="content" class="app-content">
  <?php $teamleaderid = $_GET['tree'];
  $teamsql = "SELECT * FROM users WHERE placemnet_id='$teamleaderid' AND stutas='1' ";
  $teamquery = mysqli_query($conn, $teamsql); ?>
  <table class="table table-bordered">
    <tr>
      <?php while ($row = $teamquery->fetch_object()) { ?>
        <td class="text-center">
          <a href="team.php?tree=<?= $row->user_name ?>"><?= $row->user_name ?>-<?= $row->placement ?></a>





          <?php $tid = $row->user_name;
          $abcsql = "SELECT * FROM users WHERE placemnet_id='$tid' AND stutas='1' ";
          $abc = mysqli_query($conn, $abcsql); ?>
          <table class="table table-bordered">
            <tr>
              <?php while ($rowabc = $abc->fetch_object()) { ?>
                <td class="text-center">
                  <a href="team.php?tree=<?= $rowabc->user_name ?>"><?= $rowabc->user_name ?>-<?= $rowabc->placement ?></a>

                  <?php $t2id = $rowabc->user_name;
                  $abcsql2 = "SELECT * FROM users WHERE placemnet_id='$t2id' AND stutas='1' ";
                  $abc2 = mysqli_query($conn, $abcsql2); ?>
                  <table class="table table-bordered">
                    <tr>
                      <?php while ($rowabc2 = $abc2->fetch_object()) { ?>
                        <td class="text-center">

                          <a href="team.php?tree=<?= $rowabc2->user_name ?>"><?= $rowabc2->user_name ?>-<?= $rowabc2->placement ?></a>



                          <?php $t3id = $rowabc2->user_name;
                          $abcsql3 = "SELECT * FROM users WHERE placemnet_id='$t3id' AND stutas='1' ";
                          $abc3 = mysqli_query($conn, $abcsql3); ?>
                          <table class="table table-bordered">
                            <tr>
                              <?php while ($rowabc3 = $abc3->fetch_object()) { ?>
                                <td class="text-center">
                                  <a href="team.php?tree=<?= $rowabc2->user_name ?>"><?= $rowabc2->user_name ?>-<?= $rowabc3->placement ?></a>
                                </td>
                              <?php } ?>
                            </tr>
                          </table>

                        </td>
                      <?php } ?>
                    </tr>
                  </table>

                </td>
              <?php } ?>
            </tr>
          </table>



        </td>
      <?php } ?>
    </tr>
  </table>

</div>



<?php include_once 'inc/footer.php'; ?>