
<?php
require 'confign.php';

session_start();

$sql= "SELECT inquiry_id,policyholder_id,username,email,message FROM inquiry";

$result = $con->query($sql);

$userid = $_SESSION['inquiry_id'];

?>

<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="styles/page1.css">
        <title>lifecare Insurance</title>
        <script src="page1.js"></script>

    <style>
        #inquiryTable {
            display: none;
            width: 80%;
            margin-left: 10%;
            text-align: center;
        }

        /* Button styling */
        .btn {
            background-color: #40C4FF;
            font-size: 20px;
            margin-top: 20px;
            margin-left:60px;
            color: black;
            width: 300px;
            height: 50px;
            border: solid 2px black;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
        }

        /* Form and table styling */
        table, form {
            width: 80%;
            margin-left: 10%;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Initially hide the claim request form */
        #myForm {
            display: none;
            margin-top: 20px;
        }
    </style>

</head>
<body>

<div class="header-container">
            <header>
                <img src="images/img6.jfif" alt="site logo" class="logo">
                <ul class="navbar">
                    <li><a href="home.html">Home</a></li>
                    <li><a href="about index.html">About us</a></li>
                    <li><a href="all_plans.html">Plans</a></li>
                    <li><a href="home.html">Contact us</a></li>
                </ul>
                <div class="profile" style="display: flex; justify-content: center; flex-wrap: no-wrap">
                    <img src="images/admin.png" alt="admin dp" class="admin-dp">
                    <div>
                        <p style="margin: 0;">Hey, phpname</p>
                        <!--<p style="margin: 0;">Administrator</p> -->
                        <a href="sign out" class="sign-out">sign out</a>
                    </div>
                </div>
            </header>
        </div>
    <br><br>

    <!-- Show Inquiry Button -->
    <button class="btn" onclick="showInquiry()">Show Inquiry</button>
  

    <!-- Table for displaying inquiry, initially hidden -->
    <div id="inquiryTable">

    <?php
 //require 'confign.php';
 

//$sql= "SELECT userid,nusername,nemail,nmessage FROM ninquiry";
//$sql ="SELECT * FROM ninquiry WHERE userid= ";

//$result=$con->query($sql);

if($result->num_rows>0)
{

    echo "<table border='1'>";

    echo"<tr>
       <th>Inquiry Id</th>
       <th>Policyholder Id</th>
       <th>User Name</th>
       <th>User Email</th>
       <th>User Message</th>
       <th>Action</th>

       </tr>";

    while($row= $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>". $row["inquiry_id"]." </td>"."<td>".$row["policyholder_id"]." </td>"."<td>".$row["username"]." </td>"."<td>".$row["email"]." </td>"."<td>".$row["message"]."</td> ";
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

    </div>

    <!-- Form for submitting a new inquiry, initially hidden -->
    <div class="container">
    <div class="contact-us-section">

       <div class="form-container">
        <h1>Inquiry</h1>
        <div id="error_message"></div>

            <form id="myform" method="post" action=" " onsubmit="return validation()">
                Inquiry Id:
                <input type="text" name="cid" placeholder="inquiry id" disabled> <br><br>
                User Name:
                <input type="text" name="cname" placeholder="User Name" required> <br><br>
                E-mail:<br>
                <input type="email" name="cemail" placeholder="abc@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  id="email"><br><br>
                Meesage:<br>
                <textarea id="message" name="cmessage" placeholder="Your massage here" id="message"></textarea><br><br>
                <button type="submit">Submit</button>
                
            </form>
       </div>
       </div>
</div>


   
   

    <script>
        // Function to display the inquiry table
        function showInquiry() {
            document.getElementById("inquiryTable").style.display = "block";
        }

        // Function to display the inquiry form
        /*function showInquiryForm() {
            document.getElementById("myForm").style.display = "block";
        }*/
    </script>

</body>
</html>