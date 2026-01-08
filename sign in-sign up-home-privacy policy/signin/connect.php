<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthinsurance";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_errno){
    die("connection Faild:".$conn->connect_error);
}
else{
    echo "connection succeeded";
}

?>