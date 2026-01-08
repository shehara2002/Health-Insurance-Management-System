<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-styles.css">
    <title>admin</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="admin.js"></script>
</head>
<body>
    <?php
        session_start();
        include "db_connect.php";

        if (!isset($_SESSION['loggedin'])) {
            header("Location: adminlogin.php");
            exit(); 
        }

        $userid = $_SESSION['userid'];

        $username = $connection->query("select * from employee where employee_id = $userid;")->fetch_all(MYSQLI_ASSOC)[0]['employee_firstname'];

        $total_policies = $connection->query("select count(policyholder_id) as noofusers from policyholder;")->fetch_all(MYSQLI_ASSOC)[0]['noofusers'];
        $total_claims = $connection->query("select count(claim_id) as noofclaims from claimrequest;")->fetch_all(MYSQLI_ASSOC)[0]["noofclaims"];
        $claims_processed = $connection->query("select count(claim_id) as noofprocessedclaims from claimrequest where status = 'processed'")->fetch_all(MYSQLI_ASSOC)[0]["noofprocessedclaims"];
        $claim_density = $connection->query("select count(claim_id) as density from claimrequest where MONTH(DateOfAdmission) = MONTH(curdate());")->fetch_all(MYSQLI_ASSOC)[0]["density"];
        $policy_analytics = $connection->query("select type, count(policyholder_id) as noofpolicies from policy group by type;");
        $claims = $connection->query("select policyholder_id, type, description from claimrequest");
        $employee_details = $connection->query("select employee_id, employee_firstname, role from employee");
        
    ?>
    <div class="header-container">
        <header>
            <img src="images/logo.jpg" alt="site logo" class="logo">
            <ul class="navbar">
                <li><a href="home.html">Home</a></li>
                <li><a href="home.html">About us</a></li>
                <li><a href="home.html">Plans</a></li>
                <li><a href="home.html">Contact us</a></li>
            </ul>
            <div class="profile" style="display: flex; justify-content: center; flex-wrap: no-wrap">
                <img src="images/admin.png" alt="admin dp" class="admin-dp">
                <div>
                    <p style="margin: 0;">Hey, <?php echo "$username" ?></p>
                    <!--<p style="margin: 0;">Administrator</p> -->
                    <a href="sign out" class="sign-out">sign out</a>
                </div>
            </div>
        </header>
    </div>
    <div class="dashboard-container">
        <div class="overview tab">
            <h3>Overview</h3>
            <div class="item-container">
                <div class="item">
                    <p>Active policies</p>
                    <p class="color-teal"><b><?php echo "$total_policies" ?></b></p>
                </div>
                <div class="item">
                    <p>Total claims</p>
                    <p class="color-teal"><b><?php echo "$total_claims" ?></b></p>
                </div>
                <div class="item">
                    <p>claims processed</p>
                    <p class="color-teal"><b><?php echo "$claims_processed" ?></b></p>
                </div>
                <div class="item">
                    <p>claim density</p>
                    <p class="color-teal"><b><?php echo "$claim_density" ?></b></p>
                </div>
            </div>
        </div>
        <?php

            $policytypes = [];
            $policyamounts = [];

            while($row = $policy_analytics->fetch_assoc()){
                $policytypes[] = $row['type'];
                $policyamounts[] = $row['noofpolicies'];
            }

            $policytypes_json = json_encode($policytypes);
            $policyamounts_json = json_encode($policyamounts);

        ?>
        <div class="policy-claim-container">
            <div class="policy-analytics tab1 ">
                <h3 class="color-grey">policy analytics</h3>
                <div class="chart-container">
                    <canvas id="policy-piechart" style="width: 300px; height: 150px;"></canvas>
                </div>
            </div>
        </div>
        <script>
            displayChart(<?php echo $policytypes_json; ?>, <?php echo $policyamounts_json; ?>);
        </script>

        

        <!-- <div class="financial-performance tab">
            <h3>Financial performance</h3>
            <div style="display: flex; gap: 15px; width: 100%;" class="color-grey">
                <div class="profit ptab color-grey">
                    <p>profit</p>
                    <div class="ptab-first-child">
                        <div class="ptab-tab">
                            <p><b>Net profit</b></p>
                            <p class="color-teal">php</p>
                        </div>
                        <div class="ptab-tab" >
                            <p><b>Monthly revenue</b></p>
                            <p class="color-teal">php</p>
                        </div>
                        <div class="ptab-tab">
                            <p><b>profit margin</b></p>
                            <p class="color-teal">php</p>
                        </div>
                    </div>
                </div>
                <div class="expenses ptab">
                    <p>Expenses</p>
                    <div class="ptab-first-child">
                        <div class="ptab-tab" >
                            <p><b>Monthly claim cost</b></p>
                            <p class="color-teal">php</p>
                        </div>
                        <div class="ptab-tab">
                            <p><b>Other</b></p>
                            <p class="color-teal">php</p>
                        </div>
                        <div class="ptab-tab" >
                            <p><b>Admininstrative expenses</b></p>
                            <p class="color-teal">php</p>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="color-teal" style="font-family: poppins;">weekly revenue variation</h4>
            <p>Javascript chart</p>
        </div> -->
        <div class="employees tab">
            <h3>Employees</h3>
            <?php

                while($row = $employee_details->fetch_assoc()){

                    echo "<div class='employee' style='border: 1px solid black; border-radius: 8px; box-sizing: border-box;padding: 10px;'>
                    <div class='description' style='display: flex;flex-direction: column;font-size: 14px;'>
                    <p><b>".$row['employee_firstname']."</b></p>
                    <p>".$row['role']."</p>
                    </div>                            
                    <div class='edit-delete-btn'>
                    <a href='add-edit-employee.php?employeeid=".$row['employee_id']."&btntype=edit'><button>edit</button></a>
                    <a href='delete.php?employeeid=".$row['employee_id']."'><button>delete</button></a>
                    </div>
                    </div>";

                }

            ?>
            <a href="add-edit-employee.php?btntype=create"><button class="add-employee">Add Employee</button></a>
        </div>
        <div class="claim-requests tab">
            <h3>claim requests</h3>
            <table>
                <tr class="color-teal"><th>user id</th><th>policy type</th><th>request summary</th></tr>
                <?php 

                while($row = $claims->fetch_assoc()){
                    echo"<tr><td>".$row['policyholder_id']."</td><td>".$row['type']."</td><td>".$row['description']."</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
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
                        <a href=""><img src="" alt="facebook"></a>
                        <a href=""><img src="" alt="X"></a>
                        <a href=""><img src="" alt="linked in"></a>
                        <a href=""><img src="" alt="whatsapp"></a>
                    </div>
                </div>
            </div>
            <div class="rights">
                <p>LifeCare 2024 © All rights resserved</p>
            </div>
        </div>
    </footer>
</body>
</html>