<?php

function Packageinfo($packid){
    $selet = SelectData('packages', "WHERE package_id ='$packid'");
    if (mysqli_num_rows($selet) > 0) {
        $row = mysqli_fetch_array($selet);
        return $row['package_price'];
    }
}


global $totalsellA;
global $totalsellB;
global $totalsellC;

global $total_acA;
global $toactive_acA;

global $total_acB;
global $toactive_acB;

global $total_acC;
global $toactive_acC;

$total_acA=0;
$toactive_acA = 0;

$total_acB = 0;
$toactive_acB = 0;

$total_acC = 0;
$toactive_acC= 0;




$totalsellA = 0;
$totalsellB = 0;
$totalsellC = 0;


$data = $conn->query("SELECT * FROM users where placemnet_id='$puser_name' and placement='A' and stutas='1' ");
if ($data->num_rows > 0) {
    $row = $data->fetch_object();
    $price = Packageinfo($row->packageid);
    $totalsellA += $price;
    $total_acA +=1;
    $toactive_acA += 1;
    
    $dataA = $conn->query("SELECT * FROM users where placemnet_id='$row->user_name' ");
    while ($rowA = $dataA->fetch_object()) {
        $priceA = Packageinfo($rowA->packageid);
        $totalsellA += $priceA;

        $total_acA += 1;
        ($rowA->stutas==1) ? $toactive_acA+=1 : '' ;

        $dataA2 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
        while ($rowA = $dataA2->fetch_object()) {
            $priceA = Packageinfo($rowA->packageid);
            $totalsellA += $priceA;
            $total_acA += 1;
            ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


            $dataA3 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
            while ($rowA = $dataA3->fetch_object()) {
                $priceA = Packageinfo($rowA->packageid);
                $totalsellA += $priceA;
                $total_acA += 1;
                ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                $dataA4 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                while ($rowA = $dataA4->fetch_object()) {
                    $priceA = Packageinfo($rowA->packageid);
                    $totalsellA += $priceA;
                    $total_acA += 1;
                    ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                    $dataA5 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                    while ($rowA = $dataA5->fetch_object()) {
                        $priceA = Packageinfo($rowA->packageid);
                        $totalsellA += $priceA;
                        $total_acA += 1;
                        ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                        $dataA6 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                        while ($rowA = $dataA6->fetch_object()) {
                            $priceA = Packageinfo($rowA->packageid);
                            $totalsellA += $priceA;
                            $total_acA += 1;
                            ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                            $dataA7 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                            while ($rowA = $dataA7->fetch_object()) {
                                $priceA = Packageinfo($rowA->packageid);
                                $totalsellA += $priceA;
                                $total_acA += 1;
                                ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                $dataA7 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                while ($rowA = $dataA7->fetch_object()) {
                                    $priceA = Packageinfo($rowA->packageid);
                                    $totalsellA += $priceA;
                                    $total_acA += 1;
                                    ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                    $dataA8 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                    while ($rowA = $dataA8->fetch_object()) {
                                        $priceA = Packageinfo($rowA->packageid);
                                        $totalsellA += $priceA;
                                        $total_acA += 1;
                                        ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                        $dataA9 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                        while ($rowA = $dataA9->fetch_object()) {
                                            $priceA = Packageinfo($rowA->packageid);
                                            $totalsellA += $priceA;
                                            $total_acA += 1;
                                            ($rowA->stutas == 1) ? $toactive_acA += 1 : '';



                                            $dataA10 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                            while ($rowA = $dataA10->fetch_object()) {
                                                $priceA = Packageinfo($rowA->packageid);
                                                $totalsellA += $priceA;
                                                $total_acA += 1;
                                                ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                $dataA11 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                while ($rowA = $dataA11->fetch_object()) {
                                                    $priceA = Packageinfo($rowA->packageid);
                                                    $totalsellA += $priceA;
                                                    $total_acA += 1;
                                                    ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                    $dataA12 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                    while ($rowA = $dataA12->fetch_object()) {
                                                        $priceA = Packageinfo($rowA->packageid);
                                                        $totalsellA += $priceA;
                                                        $total_acA += 1;
                                                        ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                        $dataA13 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                        while ($rowA = $dataA13->fetch_object()) {
                                                            $priceA = Packageinfo($rowA->packageid);
                                                            $totalsellA += $priceA;
                                                            $total_acA += 1;
                                                            ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                            $dataA14 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                            while ($rowA = $dataA14->fetch_object()) {
                                                                $priceA = Packageinfo($rowA->packageid);
                                                                $totalsellA += $priceA;
                                                                $total_acA += 1;
                                                                ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                                $dataA15 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                while ($rowA = $dataA15->fetch_object()) {
                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                    $totalsellA += $priceA;
                                                                    $total_acA += 1;
                                                                    ($rowA->stutas == 1) ? $toactive_acA += 1 : '';



                                                                    $dataA16 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                    while ($rowA = $dataA16->fetch_object()) {
                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                        $totalsellA += $priceA;
                                                                        $total_acA += 1;
                                                                        ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                                        $dataA17 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                        while ($rowA = $dataA17->fetch_object()) {
                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                            $totalsellA += $priceA;
                                                                            $total_acA += 1;
                                                                            ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                                            $dataA18 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                            while ($rowA = $dataA18->fetch_object()) {
                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                $totalsellA += $priceA;
                                                                                $total_acA += 1;
                                                                                ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                                                $dataA19 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                while ($rowA = $dataA19->fetch_object()) {
                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                    $totalsellA += $priceA;
                                                                                    $total_acA += 1;
                                                                                    ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                                                    $dataA20 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                    while ($rowA = $dataA20->fetch_object()) {
                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                        $totalsellA += $priceA;
                                                                                        $total_acA += 1;
                                                                                        ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                                                        $dataA21 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                        while ($rowA = $dataA21->fetch_object()) {
                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                            $totalsellA += $priceA;
                                                                                            $total_acA += 1;
                                                                                            ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                                                            $dataA22 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                            while ($rowA = $dataA22->fetch_object()) {
                                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                                $totalsellA += $priceA;
                                                                                                $total_acA += 1;
                                                                                                ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                                                                $dataA23 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                while ($rowA = $dataA23->fetch_object()) {
                                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                                    $totalsellA += $priceA;
                                                                                                    $total_acA += 1;
                                                                                                    ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                                                                    $dataA24 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                    while ($rowA = $dataA24->fetch_object()) {
                                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                                        $totalsellA += $priceA;
                                                                                                        $total_acA += 1;
                                                                                                        ($rowA->stutas == 1) ? $toactive_acA += 1 : '';


                                                                                                        $dataA25 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                        while ($rowA = $dataA25->fetch_object()) {
                                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                                            $totalsellA += $priceA;
                                                                                                            $total_acA += 1;
                                                                                                            ($rowA->stutas == 1) ? $toactive_acA += 1 : '';
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
                                }
                            }
                        }
                    }
                }
            }
        }
    }
} //Num row







                // B ======================================


                $data = $conn->query("SELECT * FROM users where placemnet_id='$puser_name' and placement='B' and stutas='1' ");
                if ($data->num_rows > 0) {
                    $row = $data->fetch_object();
                    $price = Packageinfo($row->packageid);
                    $totalsellB += $price;
                    $total_acB += 1;
                    ($row->stutas == 1) ? $toactive_acB += 1 : '';


                    $dataA = $conn->query("SELECT * FROM users where placemnet_id='$row->user_name' ");
                    while ($rowA = $dataA->fetch_object()) {
                        $priceA = Packageinfo($rowA->packageid);
                        $totalsellB += $priceA;
                        $total_acB += 1;
                        ($rowA->stutas == 1) ? $toactive_acB += 1 : '';

                        $dataA2 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                        while ($rowA = $dataA2->fetch_object()) {
                            $priceA = Packageinfo($rowA->packageid);
                            $totalsellB += $priceA;
                            $total_acB += 1;
                            ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                            $dataA3 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                            while ($rowA = $dataA3->fetch_object()) {
                                $priceA = Packageinfo($rowA->packageid);
                                $totalsellB += $priceA;
                                $total_acB += 1;
                                ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                $dataA4 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                while ($rowA = $dataA4->fetch_object()) {
                                    $priceA = Packageinfo($rowA->packageid);
                                    $totalsellB += $priceA;
                                    $total_acB += 1;
                                    ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                    $dataA5 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                    while ($rowA = $dataA5->fetch_object()) {
                                        $priceA = Packageinfo($rowA->packageid);
                                        $totalsellB += $priceA;
                                        $total_acB += 1;
                                        ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                        $dataA6 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                        while ($rowA = $dataA6->fetch_object()) {
                                            $priceA = Packageinfo($rowA->packageid);
                                            $totalsellB += $priceA;
                                            $total_acB += 1;
                                            ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                            $dataA7 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                            while ($rowA = $dataA7->fetch_object()) {
                                                $priceA = Packageinfo($rowA->packageid);
                                                $totalsellB += $priceA;
                                                $total_acB += 1;
                                                ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                $dataA7 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                while ($rowA = $dataA7->fetch_object()) {
                                                    $priceA = Packageinfo($rowA->packageid);
                                                    $totalsellB += $priceA;
                                    $total_acB += 1;
                                    ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                    $dataA8 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                    while ($rowA = $dataA8->fetch_object()) {
                                                        $priceA = Packageinfo($rowA->packageid);
                                                        $totalsellB += $priceA;
                                        $total_acB += 1;
                                        ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                        $dataA9 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                        while ($rowA = $dataA9->fetch_object()) {
                                                            $priceA = Packageinfo($rowA->packageid);
                                                            $totalsellB += $priceA;
                                            $total_acB += 1;
                                            ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                            $dataA10 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                            while ($rowA = $dataA10->fetch_object()) {
                                                                $priceA = Packageinfo($rowA->packageid);
                                                                $totalsellB += $priceA;
                                                $total_acB += 1;
                                                ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                $dataA11 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                while ($rowA = $dataA11->fetch_object()) {
                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                    $totalsellB += $priceA;
                                                    $total_acB += 1;
                                                    ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                    $dataA12 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                    while ($rowA = $dataA12->fetch_object()) {
                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                        $totalsellB += $priceA;
                                                        $total_acB += 1;
                                                        ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                        $dataA13 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                        while ($rowA = $dataA13->fetch_object()) {
                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                            $totalsellB += $priceA;
                                                            $total_acB += 1;
                                                            ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                            $dataA14 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                            while ($rowA = $dataA14->fetch_object()) {
                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                $totalsellB += $priceA;
                                                                $total_acB += 1;
                                                                ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                                $dataA15 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                while ($rowA = $dataA15->fetch_object()) {
                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                    $totalsellB += $priceA;
                                                                    $total_acB += 1;
                                                                    ($rowA->stutas == 1) ? $toactive_acB += 1 : '';



                                                                                    $dataA16 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                    while ($rowA = $dataA16->fetch_object()) {
                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                        $totalsellB += $priceA;
                                                                        $total_acB += 1;
                                                                        ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                                        $dataA17 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                        while ($rowA = $dataA17->fetch_object()) {
                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                            $totalsellB += $priceA;
                                                                            $total_acB += 1;
                                                                            ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                                            $dataA18 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                            while ($rowA = $dataA18->fetch_object()) {
                                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                                $totalsellB += $priceA;
                                                                                $total_acB += 1;
                                                                                ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                                                $dataA19 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                while ($rowA = $dataA19->fetch_object()) {
                                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                                    $totalsellB += $priceA;
                                                                                    $total_acB += 1;
                                                                                    ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                                                    $dataA20 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                    while ($rowA = $dataA20->fetch_object()) {
                                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                                        $totalsellB += $priceA;
                                                                                        $total_acB += 1;
                                                                                        ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                                                        $dataA21 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                        while ($rowA = $dataA21->fetch_object()) {
                                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                                            $totalsellB += $priceA;
                                                                                            $total_acB += 1;
                                                                                            ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                                                            $dataA22 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                            while ($rowA = $dataA22->fetch_object()) {
                                                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                                                $totalsellB += $priceA;
                                                                                                $total_acB += 1;
                                                                                                ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                                                                $dataA23 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                                while ($rowA = $dataA23->fetch_object()) {
                                                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                                                    $totalsellB += $priceA;
                                                                                                    $total_acB += 1;
                                                                                                    ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                                                                    $dataA24 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                                    while ($rowA = $dataA24->fetch_object()) {
                                                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                                                        $totalsellB += $priceA;
                                                                                                        $total_acB += 1;
                                                                                                        ($rowA->stutas == 1) ? $toactive_acB += 1 : '';


                                                                                                                        $dataA25 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                                        while ($rowA = $dataA25->fetch_object()) {
                                                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                                                            $totalsellB += $priceA;
                                                                                                            $total_acB += 1;
                                                                                                            ($rowA->stutas == 1) ? $toactive_acB += 1 : '';
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
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                } //Num row




                // C =============================



                $data = $conn->query("SELECT * FROM users where placemnet_id='$puser_name' and placement='C' and stutas='1' ");
                if ($data->num_rows > 0) {
                    $row = $data->fetch_object();
                    $price = Packageinfo($row->packageid);
                    $totalsellC += $price;
                    $total_acC += 1;    
                    ($row->stutas == 1) ? $toactive_acC += 1 : '';


                    $dataA = $conn->query("SELECT * FROM users where placemnet_id='$row->user_name' ");
                    while ($rowA = $dataA->fetch_object()) {
                        $priceA = Packageinfo($rowA->packageid);
                        $totalsellC += $priceA;
                        $total_acC += 1;
                        ($rowA->stutas == 1) ? $toactive_acC += 1 : '';

                        $dataA2 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                        while ($rowA = $dataA2->fetch_object()) {
                            $priceA = Packageinfo($rowA->packageid);
                            $totalsellC += $priceA;
            $total_acC += 1;
            ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                            $dataA3 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                            while ($rowA = $dataA3->fetch_object()) {
                                $priceA = Packageinfo($rowA->packageid);
                                $totalsellC += $priceA;
                $total_acC += 1;
                ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                $dataA4 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                while ($rowA = $dataA4->fetch_object()) {
                                    $priceA = Packageinfo($rowA->packageid);
                                    $totalsellC += $priceA;
                    $total_acC += 1;
                    ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                    $dataA5 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                    while ($rowA = $dataA5->fetch_object()) {
                                        $priceA = Packageinfo($rowA->packageid);
                                        $totalsellC += $priceA;
                        $total_acC += 1;
                        ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                        $dataA6 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                        while ($rowA = $dataA6->fetch_object()) {
                                            $priceA = Packageinfo($rowA->packageid);
                                            $totalsellC += $priceA;
                            $total_acC += 1;
                            ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                            $dataA7 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                            while ($rowA = $dataA7->fetch_object()) {
                                                $priceA = Packageinfo($rowA->packageid);
                                                $totalsellC += $priceA;
                                $total_acC += 1;
                                ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                $dataA7 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                while ($rowA = $dataA7->fetch_object()) {
                                                    $priceA = Packageinfo($rowA->packageid);
                                                    $totalsellC += $priceA;
                                    $total_acC += 1;
                                    ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                    $dataA8 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                    while ($rowA = $dataA8->fetch_object()) {
                                                        $priceA = Packageinfo($rowA->packageid);
                                                        $totalsellC += $priceA;
                                        $total_acC += 1;
                                        ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                        $dataA9 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                        while ($rowA = $dataA9->fetch_object()) {
                                                            $priceA = Packageinfo($rowA->packageid);
                                                            $totalsellC += $priceA;
                                            $total_acC += 1;
                                            ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                            $dataA10 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                            while ($rowA = $dataA10->fetch_object()) {
                                                                $priceA = Packageinfo($rowA->packageid);
                                                                $totalsellC += $priceA;
                                                $total_acC += 1;
                                                ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                $dataA11 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                while ($rowA = $dataA11->fetch_object()) {
                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                    $totalsellC += $priceA;
                                                    $total_acC += 1;
                                                    ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                    $dataA12 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                    while ($rowA = $dataA12->fetch_object()) {
                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                        $totalsellC += $priceA;
                                                        $total_acC += 1;
                                                        ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                        $dataA13 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                        while ($rowA = $dataA13->fetch_object()) {
                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                            $totalsellC += $priceA;
                                                            $total_acC += 1;
                                                            ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                            $dataA14 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                            while ($rowA = $dataA14->fetch_object()) {
                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                $totalsellC += $priceA;
                                                                $total_acC += 1;
                                                                ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                                $dataA15 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                while ($rowA = $dataA15->fetch_object()) {
                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                    $totalsellC += $priceA;
                                                                    $total_acC += 1;
                                                                    ($rowA->stutas == 1) ? $toactive_acC += 1 : '';



                                                                                    $dataA16 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                    while ($rowA = $dataA16->fetch_object()) {
                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                        $totalsellC += $priceA;
                                                                        $total_acC += 1;
                                                                        ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                                        $dataA17 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                        while ($rowA = $dataA17->fetch_object()) {
                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                            $totalsellC += $priceA;
                                                                            $total_acC += 1;
                                                                            ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                                            $dataA18 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                            while ($rowA = $dataA18->fetch_object()) {
                                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                                $totalsellC += $priceA;
                                                                                $total_acC += 1;
                                                                                ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                                                $dataA19 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                while ($rowA = $dataA19->fetch_object()) {
                                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                                    $totalsellC += $priceA;
                                                                                    $total_acC += 1;
                                                                                    ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                                                    $dataA20 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                    while ($rowA = $dataA20->fetch_object()) {
                                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                                        $totalsellC += $priceA;
                                                                                        $total_acC += 1;
                                                                                        ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                                                        $dataA21 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                        while ($rowA = $dataA21->fetch_object()) {
                                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                                            $totalsellC += $priceA;
                                                                                            $total_acC += 1;
                                                                                            ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                                                            $dataA22 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                            while ($rowA = $dataA22->fetch_object()) {
                                                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                                                $totalsellC += $priceA;
                                                                                                $total_acC += 1;
                                                                                                ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                                                                $dataA23 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                                while ($rowA = $dataA23->fetch_object()) {
                                                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                                                    $totalsellC += $priceA;
                                                                                                    $total_acC += 1;
                                                                                                    ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                                                                    $dataA24 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                                    while ($rowA = $dataA24->fetch_object()) {
                                                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                                                        $totalsellC += $priceA;
                                                                                                        $total_acC += 1;
                                                                                                        ($rowA->stutas == 1) ? $toactive_acC += 1 : '';


                                                                                                                        $dataA25 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                                        while ($rowA = $dataA25->fetch_object()) {
                                                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                                                            $totalsellC += $priceA;
                                                                                                            $total_acC += 1;
                                                                                                            ($rowA->stutas == 1) ? $toactive_acC += 1 : '';
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
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                } //Num row

?>