<?php
include 'connect.php';

if(isset($_GET['sideid'])) {
    echo $sideid = $_GET['sideid'];
    $delete_query = "DELETE FROM matir_side WHERE SiderId='$sideid'";
    mysqli_query($connect, $delete_query);
    header("location:../matikroi.php");
}

?>