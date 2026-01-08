<?php

require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$email = $_POST["mail"];

$sql = "SELECT * FROM policyholder WHERE email='$email'";
$result = $conn->query($sql);

if($result->num_rows > 0){ 
    echo "<table border='1'>";

    echo"<tr>
       <th>User Id</th>
       <th>User Name</th>
       <th>User Email</th>
       <th>User Message</th>
       <th>Action</th>

       </tr>";

    while ($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . $row["policyholder_id"] . "</td>";
        echo "<td>" . $row["userid"] . "</td>";
        echo "<td>" . $row["Full_name"] . "</td>";
        echo "<td>" . $row["nameWithInitial"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["DOB"] . "</td>";
        echo "<td>" . $row["maritalStatus"] . "</td>";
        echo "<td>" . $row["nic"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["phoneNumber"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["occupation"] . "</td>";
        echo "<td>" . $row["plan"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";

        echo "<td>";
        echo "<a href='updatebox.php?update_password=" . $row["password"] . "'><button>Update</button></a>";
        // echo "<button onClick=\"update.php(". $row["email"] .")\"> Updatedata </button>";
        echo "<a href='delete.php?delete_email=" . $row["email"] . "'><button>Delete</button></a>";
        echo "</td>";
        echo "</tr>";

    }
} else {
    echo "<script>alert('no data')</script>";
}
$conn->close();
}
?>


