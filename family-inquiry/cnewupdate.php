<?php

require 'confign.php';

//session_start();

//$userid = $_SESSION['userid'];

$id1 = $_GET['updateid'];

$pcname = htmlspecialchars($_POST["cname"]);
$pcemail = htmlspecialchars($_POST["cemail"]);
$pcmessage = htmlspecialchars($_POST["cmessage"]);


$sql = "UPDATE inquiry SET username=?, email=?, message=? WHERE inquiry_id=?";


$stmt = mysqli_prepare($con, $sql);


if ($stmt) {
    
    mysqli_stmt_bind_param($stmt, "sssi", $pcname, $pcemail, $pcmessage, $id1);
    
    
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
