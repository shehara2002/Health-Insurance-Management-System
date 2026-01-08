<?php

require 'config.php';

$id1 = $_GET['updateid'];

// Sanitize input
$fName = $_POST["name"];
$email = $_POST["email"];
$hosName = $_POST["hospitalName"];
$addDate = $_POST["dateOfAdmission"];
$amount = $_POST["claimAmount"];
$decri = $_POST["description"];

// // Update query with correct column names based on your inputs
// $sql = "UPDATE claimrequest SET  fullName=?, 	Email=?, HospitalName=?, 	DateOfAdmission=?, 	ClaimAmount=?,Description=? WHERE claimID=?";

// // Prepare an SQL statement
// $stmt = mysqli_prepare($con, $sql);

$con->query("UPDATE claimrequest SET fullName='$fName', Email='$email', HospitalName='$hosName', DateOfAdmission='$addDate', ClaimAmount=$amount, Description='$decri' WHERE claimID=$id1");

// // Check if the statement was prepared successfully
// if ($stmt) {
//     // Bind parameters to the SQL query
//     mysqli_stmt_bind_param($stmt, "ssssisi", $fName, $email, $hosName, $addDate, $amount, $decri, $id1);
    
//     // Execute the prepared statement
//     $result = mysqli_stmt_execute($stmt);
    
//     if ($result) {
//         echo "Updated successfully!";
//     } else {
//         echo "Update error: " . mysqli_error($con);
//     }
    
//     // Close the statement
//     mysqli_stmt_close($stmt);
// else {
//     echo "SQL error: " . mysqli_error($con);
// }

// Close the connection
// mysqli_close($con);

?>
