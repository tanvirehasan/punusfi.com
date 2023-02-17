<?php
include_once "config/conn.php";
$data = $conn->query("SELECT * FROM team_tree");

while ($row = $data->fetch_object()) {

    $conn->query("UPDATE users SET `placemnet_id`='$row->plecement_id', `placement`='C' WHERE user_name='$row->C' ");

}