<html>
    <head>
    <link rel="stylesheet" href="register_style.css">
    </head>
    <body>
    
        <?php
        require 'config.php';
        session_start();
        $userid = $_SESSION['userid'];
        ?>
        <div class="box">
            <p class="header1">Registration Form</p>
            
            <form method="post" action="insert.php" id="registrationForm" onsubmit="return validateForm();">
            
        <div class="grp">
        <label>Policyholder ID :</label><br>
        <input type="text" name="id" disabled><br><br>
        </div>

        <div class="grp">
        <label>Full name :</label><br>
        <input type="text" name="f_name" required><br><br>
        </div>

        <div class="grp">
        <label>Name with Intials :</label><br>
        <input type="text" name="NameWithIntials" placeholder="Name with intials" required><br><br>
        </div>

        <div class="grp">
        <label>Gender :</label><br>
        <select id="gender" name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="nonbinary">Prefer not to say</option>
        </select><br><br>
        </div>

        <div class="grp">
        <label >Date of Birth:</label><br>
        <input type="date" id="dob" name="dob" required><br><br>
        </div>

        <div class="grp">
        <label>Marital Status:</label><br>
        <select id="status" name="status" required>
            <option value="">Select</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Devorced">Devorced</option>
        </select><br><br>
        </div>

        <div class="grp">
        <label>NIC :</label><br>
        <input type="text" id="national_id" name="national_id" required><br><br>
        <span class="error" id="nicError"></span>
        </div>

        <div class="grp">
        <label for="address">Address :</label><br>
        <textarea id="address" name="address" rows="3" required></textarea><br><br>
        </div>

        <div class="grp">
        <label>Phone Number :</label><br>
        <input type="tel" id="phone" name="phone" required><br><br>
        <span class="error" id="phoneError"></span>
        </div>

        <div class="grp">
        <label>Email :</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <span class="error" id="emailError"></span>
        </div>

        <div class="grp">
        <label>Occupation :</label><br>
        <input type="text" id="occupation" name="occupation"><br><br>
        </div>

        <div class="grp">
        <label>Select Insurance Plan :</label><br>
        <select id="plan" name="plan" required>
            <option value="">Select</option>
            <option value="emergencyPlan">Emergency Plan</option>
            <option value="comCoverage">Complete Coverage</option>
            <option value="familyPlan">Family Plan</option>
            <option value="adultPlan">Adult Plan</option>
        </select><br><br>
        </div>

        <button class="btn" type="submit" onclick="validateForm()">
            Submit
        </button>
       
        </form>
        </div>
        
        
        <script src="register.js"></script> 
    </body>
</html>