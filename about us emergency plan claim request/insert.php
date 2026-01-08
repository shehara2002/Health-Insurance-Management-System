<?php

require 'config.php';


$fName = $_POST["fullName"];
$email = $_POST["Email"];
$hosName = $_POST["HospitalName"];
$addDate = $_POST["DateOfAdmission"];
$amount = $_POST["ClaimAmount"];
$decri = $_POST["Description"];

$sql = "INSERT INTO claimrequest VALUES ('', '$fName', '$email', '$hosName', '$addDate', '$amount', '$decri')";


 if($con->query($sql))
 {
    echo "successfull";
 }
 else
 {
    echo "error".$con->error; 
 }

 $con->close();
?>