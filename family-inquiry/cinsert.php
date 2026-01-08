<?php

require 'confign.php';

session_start();

$userid = $_SESSION['policyholder_id'];

$pcname=$_POST["cname"];
$pcemail=$_POST["cemail"];
$pcmessage=$_POST["cmessage"];




$sql = "INSERT INTO ninquiry VALUES ('','$pcname','$pcemail','$pcmessage')";


if($con->query($sql))
{
    echo "insert successfull";
}

else
{
    echo "Error".$con->error;
}

$con->close();

?>
