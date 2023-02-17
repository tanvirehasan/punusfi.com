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

                    $data6 = $conn->query("SELECT * FROM users where placemnet_id='$row5->user_name' and stutas='1'");
                    while ($row6 = $data6->fetch_object()) {
                        $price6 = Packageinfo($row6->packageid);
                        $totalsellA += $price6;

                        $data7 = $conn->query("SELECT * FROM users where placemnet_id='$row6->user_name' and stutas='1'");
                        while ($row7 = $data7->fetch_object()) {
                            $price7 = Packageinfo($row7->packageid);
                            $totalsellA += $price7;

                            $data8 = $conn->query("SELECT * FROM users where placemnet_id='$row7->user_name' and stutas='1'");
                            while ($row8 = $data8->fetch_object()) {
                                $price8 = Packageinfo($row8->packageid);
                                $totalsellA += $price8;

                                $data9 = $conn->query("SELECT * FROM users where placemnet_id='$row8->user_name' and stutas='1'");
                                while ($row9 = $data9->fetch_object()) {
                                    $price9 = Packageinfo($row9->packageid);
                                    $totalsellA += $price9;

                                    $data10 = $conn->query("SELECT * FROM users where placemnet_id='$row9->user_name' and stutas='1'");
                                    while ($row10 = $data10->fetch_object()) {
                                        $price10 = Packageinfo($row10->packageid);
                                        $totalsellA += $price10;

                                        $data11 = $conn->query("SELECT * FROM users where placemnet_id='$row10->user_name' and stutas='1'");
                                        while ($row11 = $data11->fetch_object()) {
                                            $price11 = Packageinfo($row11->packageid);
                                            $totalsellA += $price11;

                                            $data12 = $conn->query("SELECT * FROM users where placemnet_id='$row11->user_name' and stutas='1'");
                                            while ($row12 = $data12->fetch_object()) {
                                                $price12 = Packageinfo($row12->packageid);
                                                $totalsellA += $price12;

                                                $data13 = $conn->query("SELECT * FROM users where placemnet_id='$row12->user_name' and stutas='1'");
                                                while ($row13 = $data13->fetch_object()) {
                                                    $price13 = Packageinfo($row13->packageid);
                                                    $totalsellA += $price13;

                                                    $data14 = $conn->query("SELECT * FROM users where placemnet_id='$row13->user_name' and stutas='1'");
                                                    while ($row14 = $data14->fetch_object()) {
                                                        $price14 = Packageinfo($row14->packageid);
                                                        $totalsellA += $price14;

                                                        $data15 = $conn->query("SELECT * FROM users where placemnet_id='$row14->user_name' and stutas='1'");
                                                        while ($row15 = $data15->fetch_object()) {
                                                            $price15 = Packageinfo($row15->packageid);
                                                            $totalsellA += $price15;

                                                            $data16 = $conn->query("SELECT * FROM users where placemnet_id='$row15->user_name' and stutas='1'");
                                                            while ($row16 = $data16->fetch_object()) {
                                                                $price16 = Packageinfo($row16->packageid);
                                                                $totalsellA += $price16;

                                                                $data17 = $conn->query("SELECT * FROM users where placemnet_id='$row16->user_name' and stutas='1'");
                                                                while ($row17 = $data17->fetch_object()) {
                                                                    $price17 = Packageinfo($row17->packageid);
                                                                    $totalsellA += $price17;
                                                                }

                                                                $data18 = $conn->query("SELECT * FROM users where placemnet_id='$row17->user_name' and stutas='1'");
                                                                while ($row18 = $data18->fetch_object()) {
                                                                    $price18 = Packageinfo($row18->packageid);
                                                                    $totalsellA += $price18;

                                                                    $data19 = $conn->query("SELECT * FROM users where placemnet_id='$row18->user_name' and stutas='1'");
                                                                    while ($row19 = $data19->fetch_object()) {
                                                                        $price19 = Packageinfo($row19->packageid);
                                                                        $totalsellA += $price19;
                                                                    }

                                                                    $data20 = $conn->query("SELECT * FROM users where placemnet_id='$row19->user_name' and stutas='1'");
                                                                    while ($row20 = $data20->fetch_object()) {
                                                                        $price20 = Packageinfo($row20->packageid);
                                                                        $totalsellA += $price20;

                                                                        $data21 = $conn->query("SELECT * FROM users where placemnet_id='$row20->user_name' and stutas='1'");
                                                                        while ($row21 = $data21->fetch_object()) {
                                                                            $price21 = Packageinfo($row21->packageid);
                                                                            $totalsellA += $price21;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
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

                    $data6 = $conn->query("SELECT * FROM users where placemnet_id='$row5->user_name' and stutas='1'");
                    while ($row6 = $data6->fetch_object()) {
                        $price6 = Packageinfo($row6->packageid);
                        $totalsellB += $price6;

                        $data7 = $conn->query("SELECT * FROM users where placemnet_id='$row6->user_name' and stutas='1'");
                        while ($row7 = $data7->fetch_object()) {
                            $price7 = Packageinfo($row7->packageid);
                            $totalsellB += $price7;

                            $data8 = $conn->query("SELECT * FROM users where placemnet_id='$row7->user_name' and stutas='1'");
                            while ($row8 = $data8->fetch_object()) {
                                $price8 = Packageinfo($row8->packageid);
                                $totalsellB += $price8;

                                $data9 = $conn->query("SELECT * FROM users where placemnet_id='$row8->user_name' and stutas='1'");
                                while ($row9 = $data9->fetch_object()) {
                                    $price9 = Packageinfo($row9->packageid);
                                    $totalsellB += $price9;

                                    $data10 = $conn->query("SELECT * FROM users where placemnet_id='$row9->user_name' and stutas='1'");
                                    while ($row10 = $data10->fetch_object()) {
                                        $price10 = Packageinfo($row10->packageid);
                                        $totalsellB += $price10;

                                        $data11 = $conn->query("SELECT * FROM users where placemnet_id='$row10->user_name' and stutas='1'");
                                        while ($row11 = $data11->fetch_object()) {
                                            $price11 = Packageinfo($row11->packageid);
                                            $totalsellB += $price11;

                                            $data12 = $conn->query("SELECT * FROM users where placemnet_id='$row11->user_name' and stutas='1'");
                                            while ($row12 = $data12->fetch_object()) {
                                                $price12 = Packageinfo($row12->packageid);
                                                $totalsellB += $price12;

                                                $data13 = $conn->query("SELECT * FROM users where placemnet_id='$row12->user_name' and stutas='1'");
                                                while ($row13 = $data13->fetch_object()) {
                                                    $price13 = Packageinfo($row13->packageid);
                                                    $totalsellB += $price13;

                                                    $data14 = $conn->query("SELECT * FROM users where placemnet_id='$row13->user_name' and stutas='1'");
                                                    while ($row14 = $data14->fetch_object()) {
                                                        $price14 = Packageinfo($row14->packageid);
                                                        $totalsellB += $price14;

                                                        $data15 = $conn->query("SELECT * FROM users where placemnet_id='$row14->user_name' and stutas='1'");
                                                        while ($row15 = $data15->fetch_object()) {
                                                            $price15 = Packageinfo($row15->packageid);
                                                            $totalsellB += $price15;

                                                            $data16 = $conn->query("SELECT * FROM users where placemnet_id='$row15->user_name' and stutas='1'");
                                                            while ($row16 = $data16->fetch_object()) {
                                                                $price16 = Packageinfo($row16->packageid);
                                                                $totalsellB += $price16;

                                                                $data17 = $conn->query("SELECT * FROM users where placemnet_id='$row16->user_name' and stutas='1'");
                                                                while ($row17 = $data17->fetch_object()) {
                                                                    $price17 = Packageinfo($row17->packageid);
                                                                    $totalsellB += $price17;
                                                                }

                                                                $data18 = $conn->query("SELECT * FROM users where placemnet_id='$row17->user_name' and stutas='1'");
                                                                while ($row18 = $data18->fetch_object()) {
                                                                    $price18 = Packageinfo($row18->packageid);
                                                                    $totalsellB += $price18;

                                                                    $data19 = $conn->query("SELECT * FROM users where placemnet_id='$row18->user_name' and stutas='1'");
                                                                    while ($row19 = $data19->fetch_object()) {
                                                                        $price19 = Packageinfo($row19->packageid);
                                                                        $totalsellB += $price19;
                                                                    }

                                                                    $data20 = $conn->query("SELECT * FROM users where placemnet_id='$row19->user_name' and stutas='1'");
                                                                    while ($row20 = $data20->fetch_object()) {
                                                                        $price20 = Packageinfo($row20->packageid);
                                                                        $totalsellB += $price20;

                                                                        $data21 = $conn->query("SELECT * FROM users where placemnet_id='$row20->user_name' and stutas='1'");
                                                                        while ($row21 = $data21->fetch_object()) {
                                                                            $price21 = Packageinfo($row21->packageid);
                                                                            $totalsellB += $price21;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
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
        $totalsellC += $price;

        $data3 = $conn->query("SELECT * FROM users where placemnet_id='$row2->user_name' and stutas='1'");
        while ($row3 = $data3->fetch_object()) {
            $price3 = Packageinfo($row3->packageid);
            $totalsellC += $price3;

            $data4 = $conn->query("SELECT * FROM users where placemnet_id='$row3->user_name' and stutas='1'");
            while ($row4 = $data4->fetch_object()) {
                $price4 = Packageinfo($row4->packageid);
                $totalsellC += $price4;

                $data5 = $conn->query("SELECT * FROM users where placemnet_id='$row4->user_name' and stutas='1'");
                while ($row5 = $data5->fetch_object()) {
                    $price5 = Packageinfo($row5->packageid);
                    $totalsellC += $price5;

                    $data6 = $conn->query("SELECT * FROM users where placemnet_id='$row5->user_name' and stutas='1'");
                    while ($row6 = $data6->fetch_object()) {
                        $price6 = Packageinfo($row6->packageid);
                        $totalsellC += $price6;

                        $data7 = $conn->query("SELECT * FROM users where placemnet_id='$row6->user_name' and stutas='1'");
                        while ($row7 = $data7->fetch_object()) {
                            $price7 = Packageinfo($row7->packageid);
                            $totalsellC += $price7;

                            $data8 = $conn->query("SELECT * FROM users where placemnet_id='$row7->user_name' and stutas='1'");
                            while ($row8 = $data8->fetch_object()) {
                                $price8 = Packageinfo($row8->packageid);
                                $totalsellC += $price8;

                                $data9 = $conn->query("SELECT * FROM users where placemnet_id='$row8->user_name' and stutas='1'");
                                while ($row9 = $data9->fetch_object()) {
                                    $price9 = Packageinfo($row9->packageid);
                                    $totalsellC += $price9;

                                    $data10 = $conn->query("SELECT * FROM users where placemnet_id='$row9->user_name' and stutas='1'");
                                    while ($row10 = $data10->fetch_object()) {
                                        $price10 = Packageinfo($row10->packageid);
                                        $totalsellC += $price10;

                                        $data11 = $conn->query("SELECT * FROM users where placemnet_id='$row10->user_name' and stutas='1'");
                                        while ($row11 = $data11->fetch_object()) {
                                            $price11 = Packageinfo($row11->packageid);
                                            $totalsellC += $price11;

                                            $data12 = $conn->query("SELECT * FROM users where placemnet_id='$row11->user_name' and stutas='1'");
                                            while ($row12 = $data12->fetch_object()) {
                                                $price12 = Packageinfo($row12->packageid);
                                                $totalsellC += $price12;

                                                $data13 = $conn->query("SELECT * FROM users where placemnet_id='$row12->user_name' and stutas='1'");
                                                while ($row13 = $data13->fetch_object()) {
                                                    $price13 = Packageinfo($row13->packageid);
                                                    $totalsellC += $price13;

                                                    $data14 = $conn->query("SELECT * FROM users where placemnet_id='$row13->user_name' and stutas='1'");
                                                    while ($row14 = $data14->fetch_object()) {
                                                        $price14 = Packageinfo($row14->packageid);
                                                        $totalsellC += $price14;

                                                        $data15 = $conn->query("SELECT * FROM users where placemnet_id='$row14->user_name' and stutas='1'");
                                                        while ($row15 = $data15->fetch_object()) {
                                                            $price15 = Packageinfo($row15->packageid);
                                                            $totalsellC += $price15;

                                                            $data16 = $conn->query("SELECT * FROM users where placemnet_id='$row15->user_name' and stutas='1'");
                                                            while ($row16 = $data16->fetch_object()) {
                                                                $price16 = Packageinfo($row16->packageid);
                                                                $totalsellC += $price16;

                                                                $data17 = $conn->query("SELECT * FROM users where placemnet_id='$row16->user_name' and stutas='1'");
                                                                while ($row17 = $data17->fetch_object()) {
                                                                    $price17 = Packageinfo($row17->packageid);
                                                                    $totalsellC += $price17;
                                                                }

                                                                $data18 = $conn->query("SELECT * FROM users where placemnet_id='$row17->user_name' and stutas='1'");
                                                                while ($row18 = $data18->fetch_object()) {
                                                                    $price18 = Packageinfo($row18->packageid);
                                                                    $totalsellC += $price18;

                                                                    $data19 = $conn->query("SELECT * FROM users where placemnet_id='$row18->user_name' and stutas='1'");
                                                                    while ($row19 = $data19->fetch_object()) {
                                                                        $price19 = Packageinfo($row19->packageid);
                                                                        $totalsellC += $price19;
                                                                    }

                                                                    $data20 = $conn->query("SELECT * FROM users where placemnet_id='$row19->user_name' and stutas='1'");
                                                                    while ($row20 = $data20->fetch_object()) {
                                                                        $price20 = Packageinfo($row20->packageid);
                                                                        $totalsellC += $price20;

                                                                        $data21 = $conn->query("SELECT * FROM users where placemnet_id='$row20->user_name' and stutas='1'");
                                                                        while ($row21 = $data21->fetch_object()) {
                                                                            $price21 = Packageinfo($row21->packageid);
                                                                            $totalsellC += $price21;
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
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