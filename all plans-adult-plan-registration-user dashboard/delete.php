<?php
require 'config.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from policyholder where userid=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        //echo "Deleted successfull";
        header('location:read.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}


?>