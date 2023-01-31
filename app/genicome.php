<?php 
session_start();
include_once "config/conn.php";
include_once "config/function.php";


$userid = UserData('id');
global $genicom;

$datag1 = SelectData('investments', "WHERE refer_id='$userid'");
while($rowg1= $datag1->fetch_object()){
$genicom += (1.5 / 100) * $rowg1->investmnet;
// echo '<br>'.$row->user_id;

$datg2 = SelectData('investments', "WHERE refer_id='$rowg1->user_id'");
while ($rowg2 = $datg2->fetch_object()) {
$genicom += (1.25 / 100) * $rowg2->investmnet;

$datag3 = SelectData('investments', "WHERE refer_id='$rowg2->user_id'");
while ($rowg3 = $datag3->fetch_object()) {
$genicom += (1 / 100) * $rowg3->investmnet;

$datag4 = SelectData('investments', "WHERE refer_id='$rowg3->user_id'");
while ($rowg4 = $datag4->fetch_object()) {
$genicom += (0.75 / 100) * $rowg4->investmnet;

$datag5 = SelectData('investments', "WHERE refer_id='$rowg4->user_id'");
while ($rowg5 = $datag5->fetch_object()) {
$genicom += (0.50 / 100) * $rowg5->investmnet;

$datag6 = SelectData('investments', "WHERE refer_id='$rowg5->user_id'");
while ($rowg6 = $datag6->fetch_object()) {
$genicom += (0.50 / 100) * $rowg6->investmnet;

$datag7 = SelectData('investments', "WHERE refer_id='$rowg6->user_id'");
while ($rowg7 = $datag7->fetch_object()) {
$genicom += (0.50 / 100) * $rowg7->investmnet;

$datag8 = SelectData('investments', "WHERE refer_id='$rowg7->user_id'");
while ($rowg8 = $datag8->fetch_object()) {
$genicom += (0.50 / 100) * $rowg8->investmnet;


$datag9 = SelectData('investments', "WHERE refer_id='$rowg8->user_id'");
while ($rowg9 = $datag9->fetch_object()) {
$genicom += (0.50 / 100) * $rowg9->investmnet;


$datag10 = SelectData('investments', "WHERE refer_id='$rowg9->user_id'");
while ($rowg10 = $datag10->fetch_object()) {
$genicom += (0.50/ 100) * $rowg10->investmnet;

$datag11 = SelectData('investments', "WHERE refer_id='$rowg10->user_id'");
while ($rowg11 = $datag11->fetch_object()) {
$genicom += (0.50 / 100) * $rowg11->investmnet;


$datag12 = SelectData('investments', "WHERE refer_id='$rowg11->user_id'");
while ($rowg12 = $datag12->fetch_object()) {
$genicom += (0.50 / 100) * $rowg12->investmnet;

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

echo $genicom;

?>