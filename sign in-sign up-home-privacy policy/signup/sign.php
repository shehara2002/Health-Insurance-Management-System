<?php

require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
   
    $fullname = $_POST["fullname"];
    //$lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $mail = $_POST["email"];
    $psw = $_POST["password"];

    $checkQuery = "SELECT * FROM policyholder WHERE email = '$mail'";
    $result = $conn->query($checkQuery);

    if($result->num_rows > 0){
        echo "<script>alert('This email address is already registered')</script>";
        echo "<script>window.location.href='signup.php'</script>";
    }
    else{

    $sql = "INSERT INTO policyholder(Full_Name, username, email, password)
    VALUES('$fullname','$username','$mail','$psw')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data Added Succcessfully')</script>";
        echo "<script>window.location.href='../signin/login.php'</script>";
    } else {
        echo "Error : " . $sql . "<br>" . $conn->error;
    }
}
}
$conn->close();
?>
