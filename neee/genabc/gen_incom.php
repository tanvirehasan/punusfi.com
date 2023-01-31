<?php

    global $gen_income;

    $gen_sql = "SELECT * FROM users WHERE SponsorName='$Usernameid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '1.12';
            }

    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {              
                $gen_income += '0.56';
            }



    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];     

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '0.278';
            }

    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '0.2';
            }


    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '0.2';
            }



    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];      

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '0.2';
            }


    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];      

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '0.2';
            }


    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];      

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '0.2';
            }


    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];      

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '0.2';
            }




    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];      

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '0.2';
            }


    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];      

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '0.2';
            }



    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];      

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '0.2';
            }



    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];      

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '0.2';
            }


    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];      

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '0.2';
            }



    $gen_sql = "SELECT * FROM users WHERE SponsorName='$sellid' AND UserActivation='1' ";
    $gen_query = mysqli_query($conn, $gen_sql);
    foreach ($gen_query as  $value) {
       $sellid=$value['Username'];      

            $gensell_sql = "SELECT * FROM package WHERE PackageUserId='$sellid' ";
            $gensell_query = mysqli_query($conn, $gensell_sql);

                foreach ($gensell_query as  $selldata) {
                $gen_income += '0.2';
            }

                 }//15th
                }//14th
               }//13th
              }//12th
             }//11th
            }//10th
           }//9th
          }//8th
         }//7th
        }//6th
       }//5th
      }//4th
     }//3rd
    }//2nd
   }//1st




//Sponsor Income

    $sponsorsql = "SELECT *FROM package WHERE PackageReferId='$Usernameid'";
    $sponsorincom = mysqli_query($conn, $sponsorsql);
    $rowcount = mysqli_num_rows($sponsorincom);

    if($rowcount>=10){

        $RoyaldateTime = date('Y-m-d');   
        $Royalsql = "SELECT * FROM royalicome WHERE RoyalUser='$Usernameid' AND RoyalDateTime='$RoyaldateTime' ";
        $RoyalQuery = mysqli_query($conn, $Royalsql);
        $RoyalCount = mysqli_num_rows($RoyalQuery);

        if($RoyalCount<1){
            $InsertIcome = "INSERT INTO `royalicome`(`RoyalUser`, `RoyalAmount`, `RoyalDateTime`) VALUES ('$Usernameid','0.278', NOW() )";
            mysqli_query($conn, $InsertIcome);
        }
    }


    //total icome

    $Royalsql = "SELECT SUM(RoyalAmount) FROM royalicome WHERE RoyalUser='$Usernameid'";
    $RoyalQuery = mysqli_query($conn, $Royalsql);
    $Royalfetch = mysqli_fetch_array($RoyalQuery);
    $RoyalIncome=$Royalfetch['SUM(RoyalAmount)'];

?>








