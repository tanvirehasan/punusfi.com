<?php

include_once "config/conn.php";
include_once "config/function.php";

$puser_name = $_GET['user'];
include_once "rank.php";
?>

<div class="modal-header bg-dark">
    <h5 class="nav-link">All User/Active User | Team's Sales ($) </h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body bg-dark p-0 m-0">
    <table class="table table-bordered">
        <tr>
            <th class="text-danger">Team A</th>
            <th class="text-danger">Team B</th>
            <th class="text-danger">Team C</th>
        </tr>
        <tr>
            <td>
                <?= $total_acA; ?>/<?= $toactive_acA; ?>
            </td>
            <td>
                <?= $total_acB; ?>/<?= $toactive_acB; ?>
            </td>
            <td>
                <?= $total_acC; ?>/<?= $toactive_acC; ?>
            </td>

        </tr>
        <tr>
            <td>$ <?= $totalsellA ?></td>
            <td>$ <?= $totalsellB; ?></td>
            <td>$ <?= $totalsellC; ?></td>
        </tr>

    </table>
</div>