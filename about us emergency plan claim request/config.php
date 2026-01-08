<?php

$con=new mysqli("localhost","root","","healthinsurance");

if($con->connect_error)
{
    die("connection fail".$con->connect_error);
}



?>