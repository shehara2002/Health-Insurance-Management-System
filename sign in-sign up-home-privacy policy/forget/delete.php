<?php

require_once 'connect.php';

if(isset($_GET['delete_email'])){
    $deleteEmail = $_GET['delete_email'];

    $sql = "DELETE FROM policyholder WHERE email = '$deleteEmail'";
    if($conn->query($sql) == 1){
        echo "<script>alert ('User account deleted');</script>";
        echo "<script> window.loction.href = '..\signup\signup.html';</script>";
    }
    else{
        echo "<script>alertAccount delete faild</script>";
    }
}

else{
    echo "<script>alertdelete email not found</script>";
}
$conn->close();
?>