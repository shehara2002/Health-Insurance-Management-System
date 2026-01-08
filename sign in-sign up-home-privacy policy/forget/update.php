<?php

require 'connect.php';

// Check POST array
if (isset($_POST["updt"])) {
    $pwd = $_POST["updt"];
    
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT MAX(policyholder_id) AS max_id FROM policyholder");
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $max_id = $row['max_id'];

        // Update password using prepared statements
        $updateStmt = $conn->prepare("UPDATE policyholder SET password=? WHERE policyholder_id=?");//userId
        $updateStmt->bind_param("si", $pwd, $max_id);

        if ($updateStmt->execute()) {
            echo "<script>alert('Record updated successfully')</script>";
            // Optionally redirect to another page
            // echo "<script>window.location.href = 'update.php';</script>";
        } else {
            echo "<script>alert('Error updating record: " . $conn->error . "')</script>";
        }
    } else {
        echo "<script>alert('No records found')</script>";
    }
 
    $stmt->close();
    $updateStmt->close();
} else {
    echo "<script>alert('No data submitted.')</script>";
}

$conn->close();
?>
