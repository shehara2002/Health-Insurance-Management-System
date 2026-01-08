<?php
 require 'confign.php';

$sql= "SELECT inquiry_id,username,email,message FROM inquiry";

$result=$con->query($sql);

if($result->num_rows>0)
{

    echo "<table border='1'>";

    while($row= $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>". $row["inquiry_id"]." </td>"."<td>".$row["username"]." </td>"."<td>".$row["email"]." </td>"."<td>".$row["message"]."</td> ";
        echo "<td>";
        echo "<button><a href='cupdate.php?updateid=" . $row['inquiry_id'] . "'>Update</a></button>";
        echo "<button><a href='cdelete.php?deleteid=" . $row['inquiry_id'] . "'>Delete</a></button>";
        echo "</td>";
        echo "</tr>";


    }

echo"</table>";


}

else
{
    echo "No results";
}

$con->close();


?>