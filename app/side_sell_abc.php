<?php
include_once "config/conn.php";
include_once "config/function.php";
function Packageinfo($packid)
{
    $row = mysqli_fetch_array(SelectData('packages', "WHERE package_id ='$packid'"));
    return $row['package_price'];
}


global $totalsellA;
global $totalsellB;
global $totalsellC;

$totalsellA = 0;
$totalsellB = 0;
$totalsellC = 0;

$userid = $_GET['user'];


$data = $conn->query("SELECT * FROM users where placemnet_id='$userid' and placement='A' and stutas='1' ");
if ($data->num_rows > 0) {
    $row = $data->fetch_object();

    $data2 = $conn->query("SELECT * FROM users where placemnet_id='$row->user_name' and stutas='1'");
    while ($row2 = $data2->fetch_object()) {
        $price = Packageinfo($row2->packageid);
        $totalsellA += $price;

        $data3 = $conn->query("SELECT * FROM users where placemnet_id='$row2->user_name' and stutas='1'");
        while ($row3 = $data3->fetch_object()) {
            $price3 = Packageinfo($row3->packageid);
            $totalsellA += $price3;

            $data4 = $conn->query("SELECT * FROM users where placemnet_id='$row3->user_name' and stutas='1'");
            while ($row4 = $data4->fetch_object()) {
                $price4 = Packageinfo($row4->packageid);
                $totalsellA += $price4;

                $data5 = $conn->query("SELECT * FROM users where placemnet_id='$row4->user_name' and stutas='1'");
                while ($row5 = $data5->fetch_object()) {
                    $price5 = Packageinfo($row5->packageid);
                    $totalsellA += $price5;
                }
            }
        }
    }
} //Num Rows


$totalsellA;


// B =====================



$dataB = $conn->query("SELECT * FROM users where placemnet_id='$userid' and placement='B' and stutas='1'");
if ($dataB->num_rows > 0) {
    $row = $dataB->fetch_object();

    $data2 = $conn->query("SELECT * FROM users where placemnet_id='$row->user_name' and stutas='1'");
    while ($row2 = $data2->fetch_object()) {
        $price = Packageinfo($row2->packageid);
        $totalsellB += $price;

        $data3 = $conn->query("SELECT * FROM users where placemnet_id='$row2->user_name' and stutas='1'");
        while ($row3 = $data3->fetch_object()) {
            $price3 = Packageinfo($row3->packageid);
            $totalsellB += $price3;

            $data4 = $conn->query("SELECT * FROM users where placemnet_id='$row3->user_name' and stutas='1'");
            while ($row4 = $data4->fetch_object()) {
                $price4 = Packageinfo($row4->packageid);
                $totalsellB += $price4;

                $data5 = $conn->query("SELECT * FROM users where placemnet_id='$row4->user_name' and stutas='1'");
                while ($row5 = $data5->fetch_object()) {
                    $price5 = Packageinfo($row5->packageid);
                    $totalsellB += $price5;
                }
            }
        }
    }
} //Num row

$totalsellB;




// C =====================

$dataC = $conn->query("SELECT * FROM users where placemnet_id='$userid' and placement='C' and stutas='1'");
if ($dataC->num_rows > 0) {
    $row = $dataB->fetch_object();

    $data2 = $conn->query("SELECT * FROM users where placemnet_id='$row->user_name' and stutas='1'");
    while ($row2 = $data2->fetch_object()) {
        $price = Packageinfo($row2->packageid);
        $totalsellB += $price;

        $data3 = $conn->query("SELECT * FROM users where placemnet_id='$row2->user_name' and stutas='1'");
        while ($row3 = $data3->fetch_object()) {
            $price3 = Packageinfo($row3->packageid);
            $totalsellB += $price3;

            $data4 = $conn->query("SELECT * FROM users where placemnet_id='$row3->user_name' and stutas='1'");
            while ($row4 = $data4->fetch_object()) {
                $price4 = Packageinfo($row4->packageid);
                $totalsellB += $price4;

                $data5 = $conn->query("SELECT * FROM users where placemnet_id='$row4->user_name' and stutas='1'");
                while ($row5 = $data5->fetch_object()) {
                    $price5 = Packageinfo($row5->packageid);
                    $totalsellB += $price5;
                }
            }
        }
    }
} //Num row

$totalsellC;



?>


<div class="modal-header">
    <img src="https://punusfi.com/img/logo.png" width="100">
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body bg-dark p-0 m-0">
    <table class="table">
        <tr>
            <th>Team A</th>
            <th>Team B</th>
            <th>Team C</th>
        </tr>

        <tr>
            <td><?= $totalsellA; ?></td>
            <td><?= $totalsellB; ?></td>
            <td><?= $totalsellC; ?></td>
        </tr>

    </table>
</div>