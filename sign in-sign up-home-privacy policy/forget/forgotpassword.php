<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link rel="stylesheet" href="forgotpasseord.css">
</head>
<body>
    <div class="container">
        <div class="form-box">

            <h1>Forgot Password</h1>
            <p>Enter the email address for update your password or delete your account.</p>

            <form action="./forgotpass.php" method="post">

                <label for="email">Email</label>
                <input type="email" id="email" name="mail" required>
                <button type="submit">Continue</button>
                
            </form>
        </div>
    </div>
</body>
</html>
