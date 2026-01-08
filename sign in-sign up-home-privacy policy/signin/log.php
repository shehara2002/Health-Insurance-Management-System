<?php

require_once "connect.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["username"];
    $pwd = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM policyholder WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $email, $pwd);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        echo "<script>alert('User login successful')</script>";
        $_SESSION['userid'] = $result->fetch_assoc()['policyholder_id'];
        header("Location: ../../all plans-adult-plan-registration-user dashboard/user-dashboard.php");
    } else {
        echo "<script>alert('Invalid Email or Password')</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>    