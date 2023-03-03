<?php

include_once "config/conn.php";
include_once "config/function.php";

$puser_name = $_GET['user'];
include_once "rank.php";
?>

<div class="modal-header">
    <img src="https://punusfi.com/img/logo.png" width="100">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body bg-dark p-0 m-0">
    <table class="table">
        <tr>
            <th>Team A (<?= $total_acA; ?>/<?= $toactive_acA; ?>)</th>
            <th>Team B (<?= $total_acB; ?>/<?= $toactive_acB; ?>)</th>
            <th>Team C (<?= $total_acC; ?>/<?= $toactive_acC; ?>)</th>
        </tr>
        <tr>
            <td><?= $totalsellA ?></td>
            <td><?= $totalsellB; ?></td>
            <td><?= $totalsellC; ?></td>
        </tr>

    </table>
</div>