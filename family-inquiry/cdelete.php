<?php
 require 'confign.php';

 session_start();

$userid = $_SESSION['policyholder_id'];

 if(isset($_GET['deleteid']))
 {
    $id=intval($_GET['deleteid']);

    $sql= "DELETE FROM inquiry WHERE inquiry_id= $id";

    $result = mysqli_query($con, $sql);

    if($result)
    {
        //echo "Deleted successfully";
        header('location:cread1.php');
    }

    else{
        die("Error: " . mysqli_error($con)); 
    }
 }
 ?>