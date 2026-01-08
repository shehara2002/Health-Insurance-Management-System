<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>claim request</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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



<div class="form-container">
    <form method="post" action="addtodatabase.php?updateid=<?php echo $_GET['updateid']; ?>">
        <label for="claimID">Policy Number:</label>
        <input type="text" id="claimID" name="claimID" disabled>
    
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

          <input type="submit" value="update Claim" class="btn">
          <input type="reset" value="cancel" class="btn">
    </form>
</div>







<!-- <div class="container">
        <h1>Health Insurance Claim Request</h1>
        <form id="claim-form" action="addtodatabase.php?updateid=<?php echo $_GET['updateid']; ?>" method="post">
          <label for="claimID">Policy Number:</label>
          <input type="text" id="claimID" name="claimID" disabled>
    
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
""
          <input type="submit" value="update Claim" class="btn" onclick="openPopup()">
          <input type="reset" value="cancel" class="btn">
    
          <button type="submit" class="btn" onclick="openPopup()">update Claim</button> 
          <button type="reset">
          <div class="popup" id="popup">
             <img src="img/correct.jpg">
             <h2>Thank You!</h2>
             <p>Your details has been successfully submitted.</p>
             <button type="button" onclick="closePopup()">OK</button>

          </div>
        </form> -->
        
      </div>
      <script src="./script.js"></script>
      
</body>

</html>