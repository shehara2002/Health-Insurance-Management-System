<?php

require 'config.php';

if(isset($_GET['deleteid']))
{
    $id=intval($_GET['deleteid']);
    $sql="DELETE FROM claimrequest WHERE claimID=$id";

    $result= mysqli_query($con,$sql);

    if($result)
    {
        header('location:read1.php');
        //header ('location:read.php');
    }
    else
    {
        die("error:".mysqli_error($con));
    }

}


?>