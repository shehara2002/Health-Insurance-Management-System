<!DOCTYPE html>

<html>

<head> 
    <title>Lifecare Insurance</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="full-page">
        <div class="page-left">
            <img src="../image/login.jpg" alt="Happy Family" class="image">
        </div>
        <div class="right-panel">

            <h1>Welcome Back!</h1>

            <p></p>

            <form action="./log.php" method="post">

                <label>Username</label>
                <input type="text"  name="username" placeholder="abcd" required>
                
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
                
                <div class="remender-forgot">
                    <div class="remember">
                        <input type="checkbox">
                        <label>Remember Me</label>
                    </div>    
                    <a href="../forget/forgotpassword.php" class="forgot-password">Forgot Password?</a>    
                </div>
                
                <button type="submit" class="login-button" name="submit">Login</button>
                
                <div class="or">OR</div>
                
                <button type="button" class="google-button">
                    <img src="../image/google-logo.jpg" alt="Google Logo"> Sign in with Google
                </button>
            </form>

            <p class="signup">Don't have an account? <a href="../signup/signup.php">signup</a></p>

        </div>
    </div>
</body>
</html>
