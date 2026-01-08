
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard-styles.css">
    <title>Dashboard</title>
</head>
<body>
    <?php
    
    include "config.php";
    session_start();
    
    $userid = $_SESSION['userid'];

    $details = $con->query("select policyholder_id, Full_name, nameWithInitial, gender, DOB, maritalStatus, nic, address, phoneNumber, email, occupation, plan, password, username from policyholder where policyholder_id = $userid")->fetch_all(MYSQLI_ASSOC);
     
    
    ?>
    <div class="header-container">
        <header>
            <img src="images/logo.jpg" alt="site logo" class="logo">
            <ul class="navbar">
                <li><a href="home.html">Home</a></li>
                <li><a href="about index.html">About us</a></li>
                <li><a href="all_plans.html">Plans</a></li>
                <li><a href="home.html">Contact us</a></li>
            </ul>
            <div class="profile" style="display: flex; justify-content: center; flex-wrap: no-wrap">
                <img src="images/admin.png" alt="admin dp" class="admin-dp">
                <div>
                    <p style="margin: 0;">Hey, <?php echo $details[0]['nameWithInitial'] ?></p>
                    <a href="sign out" class="sign-out">sign out</a>
                </div>
            </div>
        </header>
    </div>
    <main>
        <div class="sidebar">
            <div class="profile">
                <img src="images/admin.png" alt="profile-pic">
                <p><b><?php echo $details[0]['nameWithInitial'] ?></b></p>
                
            </div>
            <div class="button-area">
                <button class="sidebar-btn">
                    <i class=""></i>Overview
                </button>
                <button class="sidebar-btn">
                    <i class=""></i>Personal info
                </button>

                <a href="../about us emergency plan claim request/read1.php"><button class="sidebar-btn" style="width:100%">
                    <i class=""></i>Claims
                </button></a>

                <button class="sidebar-btn">
                    <i class=""></i>Payments
                </button>
                <a href="../family-inquiry/cread1.php"><button class="sidebar-btn" style="width:100%" onclick="window.location.href='contact.html';" >
                    <i class=""></i>inquiry
                </button></a>
            </div>
            <button class="sign-out">sign out</button>
        </div>
        <div class="main-bar">
            <div class="tab1 tab">
                <div class="menubar">
                    <i class=""></i>
                    <i class=""></i>
                    <i class=""></i>
                </div>
                <div class="personal-policy">
                    <div class="personal-info info-tab">
                        <h4>Personal infomation</h4>
                        <div class="details-container">
                            <div class="detail1">
                                <p>Name </p>
                                <p><b><?php echo $details[0]['Full_name'] ?></b></p>
                            </div>
                            <div class="detail2">
                                <p>Name with initials</p>
                                <p><b><?php echo $details[0]['nameWithInitial'] ?></b></p>
                            </div>
                            <div class="detail3">
                                <p>Gender</p>
                                <p><b><?php echo $details[0]['Full_name'] ?></b></p>
                            </div>
                            <div class="detail4">
                                <p>Date of Birth</p>
                                <p><b><?php echo $details[0]['DOB'] ?></b></p>
                            </div>
                            <div class="detail1">
                                <p>NIC</p>
                                <p><b><?php echo $details[0]['nic'] ?></b></p>
                            </div>
                            <div class="detail1">
                                <p>Address</p>
                                <p><b><?php echo $details[0]['address'] ?></b></p>
                            </div>
                            <div class="detail1">
                                <p>plan</p>
                                <p><b><?php echo $details[0]['plan'] ?></b></p>
                            </div>
                            <div class="detail1">
                                <p>Contact Number</p>
                                <p><b><?php echo $details[0]['phoneNumber'] ?></b></p>
                            </div>
                            <!-- <div class="detail">
                            </div>
                            <div class="detail">
                            </div> -->
                            <br>
                            <button class="btn" onclick="window.location.href='update.php?userid=<?php echo $details[0]['policyholder_id']; ?>';">Edit info</button>

                            <button class="btn" onclick="deleteRecord(<?php echo $details[0]['policyholder_id']; ?>)">Delete</button>
        
                            
                            <script>
                            function deleteRecord(userid) {
                                if (confirm("Are you sure you want to delete this record?")) {
                                window.location.href = "delete.php?id=" + userid;
                                }
                             }
                            </script>


                        </div>
                    </div>
                    
                </div>
                
                
            </div>
            
        </div>
    </main>
    <footer>
            <div class="footer-container">
                <div class="site-details">
                    <div class="description">
                        <p><b>LifeCare</b></p>
                        <p style="font-size: 14px;">Empowering Care , Simplifying Coverage</p>
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
                            <a href=""><img src="images/facebook.png" alt="facebook"></a>
                            
                            <a href=""><img src="images/linkedin.png" alt="linked in"></a>
                            <a href=""><img src="images/instagram.png" alt="instergram"></a>
                        </div>
                    </div>
                </div>
                <div class="rights">
                    <p>LifeCare 2024 © All rights resserved</p>
                </div>
            </div>
        </footer>
 <style>
footer{
    width: 100%;
    background-color: #90CAF9;
    display: flex;
    justify-content: center;
    margin-top: 50px;
    padding-left: 40px;
    padding-right: 40px;
    padding-top: 40px;
    box-sizing: border-box;
}
.footer-container{
    width: 100%;
    max-width: 1100px;
    height: 100%;
    gap: 30px;
}
.site-details{
    display: flex;
    gap: 50px;
    justify-content: space-between;
    min-height: 80%;
}
.descrption{
    min-width: 40%;
    display: flex;
    flex-direction: column;
}
.plans-company{
    display: flex;
    min-width: 30%;
    gap: 25px;
}
.plans-company div{
    display: flex;
    flex-direction: column;
}
.plans-company li{
    list-style-type: none;
    padding-top: 8px;
    padding-bottom: 8px;
}
.plans-company li a{
    text-decoration: none;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 14px;
}
.plans-company li a:hover{
    color: rgb(0, 0, 0);
}
.plans-company ul{
    align-items: left;
    margin: 0px;
    padding: 0px;
}
.social{
    min-width: 30%;
}
.social div{
    display: flex;
    flex: 1 1 100%;
    flex-wrap: wrap;
    gap: 10px;
}
.social a{
    text-decoration: none;
}
.rights{
    min-height: 20%;
    position: relative;
    margin-top: 30px;
}
.rights p{
    font-size: 12px;
    font-weight: bold;
}

 </style> 
   
</body>
</html>