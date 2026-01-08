<?php
require 'config.php';

$sql="SELECT claim_iD,fullName,Email,HospitalName,DateOfAdmission, ClaimAmount, Description FROM claimrequest";

$result=$con->query($sql);

if($result->num_rows){
 
    echo "<table  border='1'>";
    while($row=$result->fetch_assoc()){
      echo "<tr>";
      echo "<td>".$row["claim_iD"]."</td>"."<td>".$row["fullName"]."</td> "."<td>".$row["Email"]."</td> "."<td>".$row["HospitalName"]."</td>"."<td>".$row["DateOfAdmission"]." </td>"."<td>"."<td>".$row["ClaimAmount"]."</td> "."<td>".$row["Description"]."</td>";
      echo "<td>";
      echo "<button><a href='update.php?updateid=" . $row['claim_iD'] . "'>Update</a></button>";
        echo "<button><a href='delete.php?deleteid=" . $row['claim_iD'] . "'>Delete</a></button>";
        echo "</td>";
      echo "</tr>";
    }
    echo "</table>"; 

}
else
{
    echo "no result";
}

$con->close();

?>