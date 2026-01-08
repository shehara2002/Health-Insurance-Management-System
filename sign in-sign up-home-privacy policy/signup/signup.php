<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="signup.css">
        <title>lifecare Insurance</title>
    </head>

    <body>
        <body>
            
    
    <br>

    <div class="fpage">
    <form class="signup-form" onsubmit="return validateForm()" method="POST" action="sign.php">
        <h1>Sign Up</h1>
        <input type="text" name="fullname" placeholder="Full Name" required> <br><br>
        <!--<input type="text" name="lastname" placeholder="Last Name" required> <br><br>-->
        <input type="text" name="username" placeholder="Usernmame" required><br><br>
         <input type="email" name="email" placeholder="abc@gmail.com" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br><br>
         <input type="password"name="password" placeholder="Enter password" id="pwd" required><br><br>
         <input type="password" placeholder="Confirm password" id="cpwd" required><br><br>

         <div class="checkbox">
            <input type="checkbox" id="terms" required>
            <label for="terms">I accept the <a href="#">Terms & Condition</a></label>
         </div>

         <button type="submit" id="submitbtn" value="submit">Sign Up for Lifecare</button>

         <p>Already have an account? <a href="#" >Login here</a></p>
     </form>
     </div>
     
     <br>
     
    <script src="signup.js"></script>

    
     </body>
    </html>