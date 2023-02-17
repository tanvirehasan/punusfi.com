<?php
include_once 'inc/header.php';
include_once "inc/navbar.php";

$leader = $_GET['tree'];

$A = Team_Tree('A', $leader);
$B = Team_Tree('B', $leader);
$C = Team_Tree('C', $leader);

?>


<div id="content" class="app-content">


  <div class="row text-center">
    <div class="col-12 text-center py-5">
      <img class='p-1' src='assets/img/businessman.png' width='20%'>
      <p class="h3"><a class="nav-link" href="team.php?tree=<?= $leader ?>"><?= $leader ?></a></p>
      <button class="btn btn-outline-theme btn-lg" onclick="abcsell('side_sell_abc.php?user=<?= $leader ?>')">info</button>
    </div>
    <!-- Team A  -->
    <div class="col-4  ">
      <?= ($A != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
      <p class="h3"> <a class="nav-link" href="team.php?tree=<?= $A ?>"><?= $A ?></a></p>

      <div class="row py-5">
        <!-- A>A  -->
        <div class="col-4 ">
          <?php
          $AA = Team_Tree('A', $A);
          echo ($AA != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><a class="nav-link" href="team.php?tree=<?= $AA ?>"><?= $AA ?> </a> </p>

        </div>

        <!-- A>B  -->
        <div class="col-4 ">
          <?php
          $AB = Team_Tree('B', $A);
          echo ($AB != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><a class="nav-link" href="team.php?tree=<?= $AB ?>"><?= $AB ?></a></p>

        </div>

        <!-- A>C  -->
        <div class="col-4 border-end">
          <?php
          $AC = Team_Tree('C', $A);
          echo ($AC != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><a class="nav-link" href="team.php?tree=<?= $AC ?>"><?= $AC ?></a></p>


        </div>
      </div>
    </div>

    <!--======== Team B =========================== -->
    <div class="col-4  ">
      <?= ($B != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
      <p class="h3"><a class="nav-link" href="team.php?tree=<?= $B ?>"><?= $B ?></a></p>
      <div class="row pt-5 ">
        <!-- A>A  -->
        <div class="col-4 ">
          <?php
          $BA = Team_Tree('A', $B);
          echo ($BA != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><a class="nav-link" href="team.php?tree=<?= $BA ?>"><?= $BA ?></a></p>

        </div>

        <!-- A>B  -->
        <div class="col-4 ">
          <?php
          $BB = Team_Tree('B', $B);
          echo ($BB != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><a class="nav-link" href="team.php?tree=<?= $BB ?>"><?= $BB ?> </a> </p>

        </div>

        <!-- A>C  -->
        <div class="col-4 border-end">
          <?php
          $BC = Team_Tree('C', $B);
          echo ($BC != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><a class="nav-link" href="team.php?tree=<?= $BC ?>"><?= $BC ?> </a> </p>

        </div>
      </div>
    </div>


    <!--============ Team C ================= -->
    <div class="col-4  ">
      <?= ($C != "0") ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
      <p class="h3"><a class="nav-link" href="team.php?tree=<?= $C ?>"><?= $C ?></a></p>
      <div class="row pt-5">
        <!-- A>A  -->
        <div class="col-4 ">
          <?php
          $CA = Team_Tree('A', $C);
          echo ($CA != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><a class="nav-link" href="team.php?tree=<?= $CA ?>"><?= $CA ?> </a> </p>

        </div>

        <!-- A>B  -->
        <div class="col-4 ">
          <?php
          $CB = Team_Tree('B', $C);
          echo ($CB != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><a class="nav-link" href="team.php?tree=<?= $CA ?>"> <?= $CB ?> </a> </p>

        </div>

        <!-- A>C  -->
        <div class="col-4 ">
          <?php
          $CC = Team_Tree('C', $C);
          echo ($CC != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><a class="nav-link" href="team.php?tree=<?= $CC ?>"><?= $CC ?> </a> </p>

        </div>
      </div>
    </div>


  </div>
</div>


<!-- video -->
<script>
  function abcsell(url) {
    $.ajax({
      url: url,
      method: "POST",
      success: function(data) {
        $("#video").html(data);
        $("#dataModal").modal("show");
      },
    });
  }
</script>

<!-- Modal for Video -->
<div class="modal fade" id="dataModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content" id="video">

    </div>
  </div>
</div>




<?php include_once 'inc/footer.php'; ?>