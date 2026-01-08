<?php
require 'config.php';

session_start();

$sql="SELECT policyholder_id,Full_name,nameWithInitial,gender,DOB,maritalStatus,nic,address,phoneNumber,email,occupation,plan FROM policyholder";

$result=$con->query($sql);

$userid = $_SESSION['userid'];

if($result->num_rows>0)
{
    echo "<table border='1'>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row["policyholder_id"]."</td>"."<td>".$row["Full_name"]."</td>"."<td>".$row["nameWithInitial"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["DOB"]."</td>"."<td>".$row["maritalStatus"]."</td>"."<td>".$row["nic"]."</td>"."<td>".$row["address"]."</td>"."<td>".$row["phoneNumber"]."</td>"."<td>".$row["email"]."</td>"."<td>".$row["occupation"]."</td>"."<td>".$row["plan"]."</td>";
        echo "<td>";
        echo "<button><a href='update.php?updateid=" . $row['policyholder_id'] . "'>Update</a></button>";

        echo "<button><a href='delete.php?deleteid=" . $row['policyholder_id'] . "'>Delete</a></button>";
        
        echo "</td>";
        echo "</tr>";
       
    }
    echo "</table>";
}
else
{
    echo "No result";
}




$con->close();

?>