<?php
include_once "config/conn.php";
include_once "config/function.php";
function Packageinfo($packid)
{
    $selet = SelectData('packages', "WHERE package_id ='$packid'");
    if (mysqli_num_rows($selet) > 0) {
        $row = mysqli_fetch_array($selet);
        return $row['package_price'];
    }
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
    $price = Packageinfo($row->packageid);
    $totalsellA += $price;
    


    $dataA = $conn->query("SELECT * FROM users where placemnet_id='$row->user_name' ");
    while ($rowA = $dataA->fetch_object()) {
        $priceA = Packageinfo($rowA->packageid);
        $totalsellA += $priceA;

        $dataA2 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
        while ($rowA = $dataA2->fetch_object()) {
            $priceA = Packageinfo($rowA->packageid);
            $totalsellA += $priceA;


            $dataA3 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
            while ($rowA = $dataA3->fetch_object()) {
                $priceA = Packageinfo($rowA->packageid);
                $totalsellA += $priceA;


                $dataA4 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                while ($rowA = $dataA4->fetch_object()) {
                    $priceA = Packageinfo($rowA->packageid);
                    $totalsellA += $priceA;


                    $dataA5 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                    while ($rowA = $dataA5->fetch_object()) {
                        $priceA = Packageinfo($rowA->packageid);
                        $totalsellA += $priceA;


                        $dataA6 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                        while ($rowA = $dataA6->fetch_object()) {
                            $priceA = Packageinfo($rowA->packageid);
                            $totalsellA += $priceA;


                            $dataA7 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                            while ($rowA = $dataA7->fetch_object()) {
                                $priceA = Packageinfo($rowA->packageid);
                                $totalsellA += $priceA;


                                $dataA7 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                while ($rowA = $dataA7->fetch_object()) {
                                    $priceA = Packageinfo($rowA->packageid);
                                    $totalsellA += $priceA;


                                    $dataA8 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                    while ($rowA = $dataA8->fetch_object()) {
                                        $priceA = Packageinfo($rowA->packageid);
                                        $totalsellA += $priceA;


                                        $dataA9 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                        while ($rowA = $dataA9->fetch_object()) {
                                            $priceA = Packageinfo($rowA->packageid);
                                            $totalsellA += $priceA;


                                            $dataA10 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                            while ($rowA = $dataA10->fetch_object()) {
                                                $priceA = Packageinfo($rowA->packageid);
                                                $totalsellA += $priceA;


                                                $dataA11 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                while ($rowA = $dataA11->fetch_object()) {
                                                    $priceA = Packageinfo($rowA->packageid);
                                                    $totalsellA += $priceA;


                                                    $dataA12 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                    while ($rowA = $dataA12->fetch_object()) {
                                                        $priceA = Packageinfo($rowA->packageid);
                                                        $totalsellA += $priceA;


                                                        $dataA13 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                        while ($rowA = $dataA13->fetch_object()) {
                                                            $priceA = Packageinfo($rowA->packageid);
                                                            $totalsellA += $priceA;


                                                            $dataA14 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                            while ($rowA = $dataA14->fetch_object()) {
                                                                $priceA = Packageinfo($rowA->packageid);
                                                                $totalsellA += $priceA;


                                                                $dataA15 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                while ($rowA = $dataA15->fetch_object()) {
                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                    $totalsellA += $priceA;



                                                                    $dataA16 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                    while ($rowA = $dataA16->fetch_object()) {
                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                        $totalsellA += $priceA;


                                                                        $dataA17 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                        while ($rowA = $dataA17->fetch_object()) {
                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                            $totalsellA += $priceA;


                                                                            $dataA18 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                            while ($rowA = $dataA18->fetch_object()) {
                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                $totalsellA += $priceA;


                                                                                $dataA19 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                while ($rowA = $dataA19->fetch_object()) {
                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                    $totalsellA += $priceA;


                                                                                    $dataA20 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                    while ($rowA = $dataA20->fetch_object()) {
                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                        $totalsellA += $priceA;


                                                                                        $dataA21 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                        while ($rowA = $dataA21->fetch_object()) {
                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                            $totalsellA += $priceA;


                                                                                            $dataA22 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                            while ($rowA = $dataA22->fetch_object()) {
                                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                                $totalsellA += $priceA;


                                                                                                $dataA23 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                while ($rowA = $dataA23->fetch_object()) {
                                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                                    $totalsellA += $priceA;


                                                                                                    $dataA24 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                    while ($rowA = $dataA24->fetch_object()) {
                                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                                        $totalsellA += $priceA;


                                                                                                        $dataA25 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                        while ($rowA = $dataA25->fetch_object()) {
                                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                                            $totalsellA += $priceA;
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


                $data = $conn->query("SELECT * FROM users where placemnet_id='$userid' and placement='B' and stutas='1' ");
                if ($data->num_rows > 0) {
                    $row = $data->fetch_object();
                    $price = Packageinfo($row->packageid);
                    $totalsellB += $price;


                    $dataA = $conn->query("SELECT * FROM users where placemnet_id='$row->user_name' ");
                    while ($rowA = $dataA->fetch_object()) {
                        $priceA = Packageinfo($rowA->packageid);
                        $totalsellB += $priceA;

                        $dataA2 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                        while ($rowA = $dataA2->fetch_object()) {
                            $priceA = Packageinfo($rowA->packageid);
                            $totalsellB += $priceA;


                            $dataA3 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                            while ($rowA = $dataA3->fetch_object()) {
                                $priceA = Packageinfo($rowA->packageid);
                                $totalsellB += $priceA;


                                $dataA4 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                while ($rowA = $dataA4->fetch_object()) {
                                    $priceA = Packageinfo($rowA->packageid);
                                    $totalsellB += $priceA;


                                    $dataA5 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                    while ($rowA = $dataA5->fetch_object()) {
                                        $priceA = Packageinfo($rowA->packageid);
                                        $totalsellB += $priceA;


                                        $dataA6 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                        while ($rowA = $dataA6->fetch_object()) {
                                            $priceA = Packageinfo($rowA->packageid);
                                            $totalsellB += $priceA;


                                            $dataA7 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                            while ($rowA = $dataA7->fetch_object()) {
                                                $priceA = Packageinfo($rowA->packageid);
                                                $totalsellB += $priceA;


                                                $dataA7 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                while ($rowA = $dataA7->fetch_object()) {
                                                    $priceA = Packageinfo($rowA->packageid);
                                                    $totalsellB += $priceA;


                                                    $dataA8 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                    while ($rowA = $dataA8->fetch_object()) {
                                                        $priceA = Packageinfo($rowA->packageid);
                                                        $totalsellB += $priceA;


                                                        $dataA9 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                        while ($rowA = $dataA9->fetch_object()) {
                                                            $priceA = Packageinfo($rowA->packageid);
                                                            $totalsellB += $priceA;


                                                            $dataA10 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                            while ($rowA = $dataA10->fetch_object()) {
                                                                $priceA = Packageinfo($rowA->packageid);
                                                                $totalsellB += $priceA;


                                                                $dataA11 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                while ($rowA = $dataA11->fetch_object()) {
                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                    $totalsellB += $priceA;


                                                                    $dataA12 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                    while ($rowA = $dataA12->fetch_object()) {
                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                        $totalsellB += $priceA;


                                                                        $dataA13 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                        while ($rowA = $dataA13->fetch_object()) {
                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                            $totalsellB += $priceA;


                                                                            $dataA14 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                            while ($rowA = $dataA14->fetch_object()) {
                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                $totalsellB += $priceA;


                                                                                $dataA15 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                while ($rowA = $dataA15->fetch_object()) {
                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                    $totalsellB += $priceA;



                                                                                    $dataA16 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                    while ($rowA = $dataA16->fetch_object()) {
                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                        $totalsellB += $priceA;


                                                                                        $dataA17 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                        while ($rowA = $dataA17->fetch_object()) {
                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                            $totalsellB += $priceA;


                                                                                            $dataA18 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                            while ($rowA = $dataA18->fetch_object()) {
                                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                                $totalsellB += $priceA;


                                                                                                $dataA19 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                while ($rowA = $dataA19->fetch_object()) {
                                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                                    $totalsellB += $priceA;


                                                                                                    $dataA20 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                    while ($rowA = $dataA20->fetch_object()) {
                                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                                        $totalsellB += $priceA;


                                                                                                        $dataA21 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                        while ($rowA = $dataA21->fetch_object()) {
                                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                                            $totalsellB += $priceA;


                                                                                                            $dataA22 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                            while ($rowA = $dataA22->fetch_object()) {
                                                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                                                $totalsellB += $priceA;


                                                                                                                $dataA23 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                                while ($rowA = $dataA23->fetch_object()) {
                                                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                                                    $totalsellB += $priceA;


                                                                                                                    $dataA24 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                                    while ($rowA = $dataA24->fetch_object()) {
                                                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                                                        $totalsellB += $priceA;


                                                                                                                        $dataA25 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                                        while ($rowA = $dataA25->fetch_object()) {
                                                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                                                            $totalsellB += $priceA;
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



                $data = $conn->query("SELECT * FROM users where placemnet_id='$userid' and placement='C' and stutas='1' ");
                if ($data->num_rows > 0) {
                    $row = $data->fetch_object();
                    $price = Packageinfo($row->packageid);
                    $totalsellC += $price;


                    $dataA = $conn->query("SELECT * FROM users where placemnet_id='$row->user_name' ");
                    while ($rowA = $dataA->fetch_object()) {
                        $priceA = Packageinfo($rowA->packageid);
                        $totalsellC += $priceA;

                        $dataA2 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                        while ($rowA = $dataA2->fetch_object()) {
                            $priceA = Packageinfo($rowA->packageid);
                            $totalsellC += $priceA;


                            $dataA3 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                            while ($rowA = $dataA3->fetch_object()) {
                                $priceA = Packageinfo($rowA->packageid);
                                $totalsellC += $priceA;


                                $dataA4 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                while ($rowA = $dataA4->fetch_object()) {
                                    $priceA = Packageinfo($rowA->packageid);
                                    $totalsellC += $priceA;


                                    $dataA5 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                    while ($rowA = $dataA5->fetch_object()) {
                                        $priceA = Packageinfo($rowA->packageid);
                                        $totalsellC += $priceA;


                                        $dataA6 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                        while ($rowA = $dataA6->fetch_object()) {
                                            $priceA = Packageinfo($rowA->packageid);
                                            $totalsellC += $priceA;


                                            $dataA7 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                            while ($rowA = $dataA7->fetch_object()) {
                                                $priceA = Packageinfo($rowA->packageid);
                                                $totalsellC += $priceA;


                                                $dataA7 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                while ($rowA = $dataA7->fetch_object()) {
                                                    $priceA = Packageinfo($rowA->packageid);
                                                    $totalsellC += $priceA;


                                                    $dataA8 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                    while ($rowA = $dataA8->fetch_object()) {
                                                        $priceA = Packageinfo($rowA->packageid);
                                                        $totalsellC += $priceA;


                                                        $dataA9 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                        while ($rowA = $dataA9->fetch_object()) {
                                                            $priceA = Packageinfo($rowA->packageid);
                                                            $totalsellC += $priceA;


                                                            $dataA10 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                            while ($rowA = $dataA10->fetch_object()) {
                                                                $priceA = Packageinfo($rowA->packageid);
                                                                $totalsellC += $priceA;


                                                                $dataA11 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                while ($rowA = $dataA11->fetch_object()) {
                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                    $totalsellC += $priceA;


                                                                    $dataA12 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                    while ($rowA = $dataA12->fetch_object()) {
                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                        $totalsellC += $priceA;


                                                                        $dataA13 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                        while ($rowA = $dataA13->fetch_object()) {
                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                            $totalsellC += $priceA;


                                                                            $dataA14 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                            while ($rowA = $dataA14->fetch_object()) {
                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                $totalsellC += $priceA;


                                                                                $dataA15 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                while ($rowA = $dataA15->fetch_object()) {
                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                    $totalsellC += $priceA;



                                                                                    $dataA16 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                    while ($rowA = $dataA16->fetch_object()) {
                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                        $totalsellC += $priceA;


                                                                                        $dataA17 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                        while ($rowA = $dataA17->fetch_object()) {
                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                            $totalsellC += $priceA;


                                                                                            $dataA18 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                            while ($rowA = $dataA18->fetch_object()) {
                                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                                $totalsellC += $priceA;


                                                                                                $dataA19 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                while ($rowA = $dataA19->fetch_object()) {
                                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                                    $totalsellC += $priceA;


                                                                                                    $dataA20 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                    while ($rowA = $dataA20->fetch_object()) {
                                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                                        $totalsellC += $priceA;


                                                                                                        $dataA21 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                        while ($rowA = $dataA21->fetch_object()) {
                                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                                            $totalsellC += $priceA;


                                                                                                            $dataA22 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                            while ($rowA = $dataA22->fetch_object()) {
                                                                                                                $priceA = Packageinfo($rowA->packageid);
                                                                                                                $totalsellC += $priceA;


                                                                                                                $dataA23 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                                while ($rowA = $dataA23->fetch_object()) {
                                                                                                                    $priceA = Packageinfo($rowA->packageid);
                                                                                                                    $totalsellC += $priceA;


                                                                                                                    $dataA24 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                                    while ($rowA = $dataA24->fetch_object()) {
                                                                                                                        $priceA = Packageinfo($rowA->packageid);
                                                                                                                        $totalsellC += $priceA;


                                                                                                                        $dataA25 = $conn->query("SELECT * FROM users where placemnet_id='$rowA->user_name' ");
                                                                                                                        while ($rowA = $dataA25->fetch_object()) {
                                                                                                                            $priceA = Packageinfo($rowA->packageid);
                                                                                                                            $totalsellC += $priceA;
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