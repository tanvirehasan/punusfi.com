<?php

    // $servername = "localhost";
    // $username = "yesmart247_punusfi";
    // $password = "TaNVIR@@114";
    // $db = "yesmart247_punusfi";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "punasif";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
