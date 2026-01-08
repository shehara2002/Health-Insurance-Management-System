<?php

require 'config.php';

session start();

$userid = $_SESSION['userid'];

$fname = $_POST["f_name"];
$name = $_POST["NameWithIntials"];
$gender = $_POST["gender"];
$date = $_POST["dob"];
$status = $_POST["status"];
$nic = $_POST["national_id"];
$address = $_POST["address"];
$phn = $_POST["phone"];
$Semail = $_POST["email"];
$occu = $_POST["occupation"];
$plan = $_POST["plan"];


$sql="INSERT INTO policyholder VALUES ('','$fname','$name','$gender','$date','$status','$nic','$address','$phn','$Semail','$occu','$plan')";

if($con->query($sql))
{
    echo "Insert successful";
}
else
{
    echo "Error".$con->error;
}

$con->close();


?>