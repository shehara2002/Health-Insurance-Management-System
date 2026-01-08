<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>claim request</title>
    <link rel="stylesheet" href=".\style.css">
</head>
<div class="header-container">
    <header>
        <img src="images/logo.jpg" alt="site logo" class="logo">
        <ul class="navbar">
            <li><a href="home.html">Home</a></li>
            <li><a href="home.html">About us</a></li>
            <li><a href="home.html">Plans</a></li>
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
<body>
    <div class="image">
    <img src="img/image 2.jpg">
   </div>
    <div class="container">
        <h1>Health Insurance Claim Request</h1>
         <form action="insert.php" method="post">
        <form id="claim-form">
          <label for="claim_ID">Policy Number:</label>
          <input type="text" id="claim_ID" name="claim_ID" disabled>
    
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" required>
    
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
    
          <label for="hospitalName">Hospital Name:</label>
          <input type="text" id="hospitalName" name="hospitalName" required>
    
          <label for="dateOfAdmission">Date of Admission:</label>
          <input type="date" id="dateOfAdmission" name="dateOfAdmission" required>
    
          <label for="claimAmount">Claim Amount:</label>
          <input type="number" id="claimAmount" name="claimAmount" required>
    
          <label for="description">Description of Treatment:</label>
          <textarea id="description" name="description" rows="4" required></textarea>
    
          <button type="submit" class="btn" onclick="openPopup()">Submit Claim</button>
          <div class="popup" id="popup">
             <img src="img/correct.jpg">
             <h2>Thank You!</h2>
             <p>Your details has been successfully submitted.</p>
             <button type="button" onclick="closePopup()">OK</button>

          </div>
        </form>
        
      </div>
 
</body>
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
                    <a href=""><img src="img/.jpg" alt="X"></a>
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
</html>