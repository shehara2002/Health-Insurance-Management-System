<?php
require 'config.php';

$sql = "SELECT claimID, fullName, Email, HospitalName, DateOfAdmission, ClaimAmount, Description FROM claimrequest";
$result = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>claim request</title>
    <link rel="stylesheet" href="./style.css">
    
  
</head>
<body>
    <div class="header-container"></div>
        <header>
            <img src="img/logo.png" alt="site logo" class="logo">
            <ul class="navbar">
                <li><a href="home.html">Home</a></li>
                <li><a href="home.html">About us</a></li>
                <li><a href="home.html">Plans</a></li>
                
            </ul>
            <div class="profile" style="display: flex; justify-content: center; flex-wrap: no-wrap">
                <img src="img/profile.jpg" alt="admin dp" class="admin-dp">
                <div>
                    <p style="margin: 0;">Hey, phpname</p>
                    <!--<p style="margin: 0;">Administrator</p> -->
                    <a href="sign out" class="sign-out">sign out</a>
                </div>
            </div>
        </header>
    </div>
        <div>
    <style>
        /* Initially hide the claims table */
        #claimsTable {
            display: none;
            width: 80%;
            margin-left: 10%;
            text-align: center;
        }

        /* Button styling */
        .btn {
            background-color: #40C4FF;
            font-size: 20px;
            margin-top: 30px;
            margin-bottom:25%;
            margin-left :40px;
            color: white;
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
            margin-bottom:10%;
        }

        table {
            border-collapse: collapse;
            
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Initially hide the claim request form */
        #claimForm {
            display: none;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <!-- Show Claims Button -->
    <button class="btn" onclick="showClaims()">Show Claims</button>

    <!-- Claim Request Button -->
    <button class="btn" onclick="showClaimForm()">Claim Request</button>

    <!-- Table for displaying claims, initially hidden -->
    <div id="claimsTable">
        <?php
        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr>
                    <th>Claim ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Hospital Name</th>
                    <th>Date of Admission</th>
                    <th>Claim Amount</th>
                    <th>Description</th>
                    <th>Actions</th>
                  </tr>";

            // Loop through the rows from the database
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["claimID"] . "</td>";
                echo "<td>" . $row["fullName"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["HospitalName"] . "</td>";
                echo "<td>" . $row["DateOfAdmission"] . "</td>";
                echo "<td>" . $row["ClaimAmount"] . "</td>";
                echo "<td>" . $row["Description"] . "</td>";
                echo "<td><button><a href='update.php?updateid=" . $row['claimID'] . "'>Update</a></button>
                        <button><a href='delete.php?deleteid=" . $row['claimID'] . "'>Delete</a></button>
                      </td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "No results found.";
        }

        // Close the database connection
        $con->close();
        ?>
    </div>

    <!-- Form for submitting a new claim request, initially hidden -->
    <div id="claimForm">
        <h2>Submit a Claim Request</h2>
        <form action="insert.php" method="post">
            <label for="claimID">Policy Number:</label>
            <input type="text" id="claimID" name="claimID" disabled><br><br>

            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required><br><br>

            <label for="Email">Email:</label>
            <input type="email" id="Email" name="Email" required><br><br>

            <label for="HospitalName">Hospital Name:</label>
            <input type="text" id="HospitalName" name="HospitalName" required><br><br>

            <label for="DateOfAdmission">Date of Admission:</label>
            <input type="date" id="DateOfAdmission" name="DateOfAdmission" required><br><br>

            <label for="ClaimAmount">Claim Amount:</label>
            <input type="number" id="ClaimAmount" name="ClaimAmount" required><br><br>

            <label for="Description">Description:</label>
            <textarea id="Description" name="Description" required></textarea><br><br>

            <button type="submit" class="btn">Submit Claim</button>
        </form>
    </div>
    <script src=".\script.js"></script>
    <footer>
        <div class="footer-container">
            <div class="site-details">
                <div class="description">
                    <p><b>LifeCare</b></p>
                    <p style="font-size: 14px;">dvfvf fbgfnh gnhm bgfdbfdbfb dvfvf fbgfnh gnhm bgfdbfdbfb dvfvf fbgfnh bgfdbfdbfb</p>
                </div>
                <div class="plans-company">
                    <div>
                        <p><b>Plans</b></p>
                        <ul>
                            <li><a href="">Adult plan</a></li>
                            <li><a href="">Emergency plan</a></li>
                            <li><a href="">Complete plan</a></li>
                            <li><a href="">Family plan</a></li>
                        </ul>
                    </div>
                    <div>
                        <p><b>Company</b></p>
                        <ul>
                            <li><a href="">Privacy policy</a></li>
                            <li><a href="">Contact us</a></li>
                            <li><a href="">About us</a></li>
                            <li><a href="">Terms and conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="social">
                    <p><b>Social</b></p>
                    <div>
                        <a href=""><img src="img/facebook.png" alt="facebook"></a>
                        <a href=""><img src="img/linkedin.png" alt="linked in"></a>
                        <a href=""><img src="img/instagram.png" alt="whatsapp"></a>
                    </div>
                </div>
            </div>
            <div class="rights">
                <p>LifeCare 2024 © All rights resserved</p>
            </div>
        </div>
    </footer>

    <script>
        // Function to display the claims table
        function showClaims() {
            document.getElementById("claimsTable").style.display = "block";
        }

        // Function to display the claim request form
        function showClaimForm() {
            document.getElementById("claimForm").style.display = "block";
        }
    </script>

</body>
</html>
