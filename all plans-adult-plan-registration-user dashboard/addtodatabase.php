<?php

   require 'config.php';
   session_start();

   $id1 = $_GET['updateid'];
$userid = $_SESSION['policyholder_id'];

$fname = htmlspecialchars($_POST["f_name"]);
$name = htmlspecialchars($_POST["NameWithIntials"]);
$gender = htmlspecialchars($_POST["gender"]);
$date = htmlspecialchars($_POST["dob"]);
$status = htmlspecialchars($_POST["status"]);
$nic = htmlspecialchars($_POST["national_id"]);
$address = htmlspecialchars($_POST["address"]);
$phn = htmlspecialchars($_POST["phone"]);
$Semail = htmlspecialchars($_POST["email"]);
$occu = htmlspecialchars($_POST["occupation"]);
$plan = htmlspecialchars($_POST["plan"]);

   $sql="UPDATE policyholder SET Full_name=? ,nameWithInitial=?,gender=? ,DOB=? ,maritalStatus=? ,nic=? ,address=? ,phoneNumber=? ,email=? ,occupation=? ,plan=? WHERE userid=?";

   
      
   $stmt = mysqli_prepare($con, $sql);


if ($stmt) {
    
    mysqli_stmt_bind_param($stmt, "sssssssssssi", $fname, $name,$gender,$date,$status,$nic,$address,$phn,$Semail,$occu,$plan);
    
    $result = mysqli_stmt_execute($stmt);
    
    if ($result) {
        echo "Updated successfully!";
    } else {
        echo "Update error: " . mysqli_error($con);
    }
    
    
    mysqli_stmt_close($stmt);
} else {
    echo "SQL error: " . mysqli_error($con);
}


mysqli_close($con);

   
?>
