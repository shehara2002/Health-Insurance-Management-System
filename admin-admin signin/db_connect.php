<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "healthinsurance";

    $connection = new mysqli($servername, $username, $password, $db_name);

    if($connection->connect_error){
        die("Connection error" . $connection->connect_error);
    }
?>