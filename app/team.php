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
          <div class="row pt-5">
            <div class="col-4 "><?php echo $AAA = Team_Tree('A', $AA); ?></div>
            <div class="col-4 "><?php echo $AAB = Team_Tree('B', $AA); ?></div>
            <div class="col-4 border-end"><?php echo $AAC = Team_Tree('C', $AA); ?></div>
          </div>
        </div>

        <!-- A>B  -->
        <div class="col-4 ">
          <?php
          $AB = Team_Tree('B', $A);
          echo ($AB != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><a class="nav-link" href="team.php?tree=<?= $AB ?>"><?= $AB ?></a></p>
          <div class="row py-5">
            <div class="col-4 "><?php echo $ABA = Team_Tree('A', $AB); ?></div>
            <div class="col-4 "><?php echo $ABB = Team_Tree('B', $AB); ?></div>
            <div class="col-4 border-end"><?php echo $ABC = Team_Tree('C', $AB); ?></div>
          </div>
        </div>

        <!-- A>C  -->
        <div class="col-4 border-end">
          <?php
          $AC = Team_Tree('C', $A);
          echo ($AC != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><a class="nav-link" href="team.php?tree=<?= $AC ?>"><?= $AC ?></a></p>
          <div class="row py-5">
            <div class="col-4 "><?php echo $ABA = Team_Tree('A', $AC); ?></div>
            <div class="col-4 "><?php echo $ABB = Team_Tree('B', $AC); ?></div>
            <div class="col-4 border-end"><?php echo $ABC = Team_Tree('C', $AC); ?></div>
          </div>
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
          <div class="row py-5">
            <div class="col-4 "><?php echo $BAA = Team_Tree('A', $BA); ?></div>
            <div class="col-4 "><?php echo $BAB = Team_Tree('B', $BA); ?></div>
            <div class="col-4 border-end"><?php echo $BAC = Team_Tree('C', $BA); ?></div>
          </div>
        </div>

        <!-- A>B  -->
        <div class="col-4 ">
          <?php
          $BB = Team_Tree('B', $B);
          echo ($BB != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><?= $BB ?></p>
          <div class="row py-5">
            <div class="col-4 "><?php echo $BBA = Team_Tree('A', $BB); ?></div>
            <div class="col-4 "><?php echo $BBB = Team_Tree('B', $BB); ?></div>
            <div class="col-4 border-end"><?php echo $BBC = Team_Tree('C', $BB); ?></div>
          </div>
        </div>

        <!-- A>C  -->
        <div class="col-4 border-end">
          <?php
          $AC = Team_Tree('C', $B);
          echo ($BB != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><?= $BB ?></p>
          <div class="row py-5">
            <div class="col-4 "><?php echo $CBA = Team_Tree('A', $AC); ?></div>
            <div class="col-4 "><?php echo $CBB = Team_Tree('B', $AC); ?></div>
            <div class="col-4 border-end"><?php echo $CBC = Team_Tree('C', $AC); ?></div>
          </div>
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
          <p class="h5"><?= $CA ?></p>
          <div class="row py-5">
            <div class="col-4 "><?php echo $CAA = Team_Tree('A', $CA); ?></div>
            <div class="col-4 "><?php echo $CAB = Team_Tree('B', $CA); ?></div>
            <div class="col-4 border-end"><?php echo $CAC = Team_Tree('C', $CA); ?></div>
          </div>
        </div>

        <!-- A>B  -->
        <div class="col-4 ">
          <?php
          $CB = Team_Tree('B', $C);
          echo ($CB != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><?= $CB ?></p>
          <div class="row py-5">
            <div class="col-4 "><?php echo $CBA = Team_Tree('A', $CB); ?></div>
            <div class="col-4 "><?php echo $CBB = Team_Tree('B', $CB); ?></div>
            <div class="col-4 border-end"><?php echo $CBC = Team_Tree('C', $CB); ?></div>
          </div>
        </div>

        <!-- A>C  -->
        <div class="col-4 ">
          <?php
          $CC = Team_Tree('C', $C);
          echo ($CC != '0') ? "<img class='p-1' src='assets/img/businessman.png' width='50%'>" : "<img class='p-1' src='assets/img/add-user.png' width='100%'>";  ?>
          <p class="h5"><?= $CC ?></p>
          <div class="row py-5">
            <div class="col-4 "><?php echo $CCA = Team_Tree('A', $CC); ?></div>
            <div class="col-4 "><?php echo $CCB = Team_Tree('B', $CC); ?></div>
            <div class="col-4 "><?php echo $CCC = Team_Tree('C', $CC); ?></div>
          </div>
        </div>
      </div>
    </div>









  </div>
</div>



<?php include_once 'inc/footer.php'; ?>