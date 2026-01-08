<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body{
            background-color: rgb(0, 121, 121);
            display: flex;
            align-items: center;
        }
        .form-container{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
            justify-content: center;
            gap: 0;
            width: 60%;
            min-width: 300px;
            max-width: 500px;
            height: 350px;
            background-color:rgb(255, 255, 255);
            color:teal;
            padding-top: 35px;
            padding-bottom: 35px;
            border-radius: 10px;
            font-family: poppins;
        }
        .form-container p{
            font-weight: bold;
        }
        form{
            margin: 10px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 12px;
            display: flex;
            flex-direction: column;
            gap: 5px;
            color: grey;
        }
        input[type="text"],
        input[type="password"],
        input[type="tel"],
        input[type="email"]{
            padding: 5px;
            border-radius: 3px;
            border: 1px solid teal;
            width: 25vw;
        }
        input[type="submit"]{
            padding: 10px;
            margin-top: 5px;
            background-color: teal;
            color: gainsboro;
            border: none;
            border-radius: 5px;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        input[type="submit"]:hover{
            background-color:#446a91;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <p style="color: black; font-size: 20px;"><b>Admin Login</b></p>
        <form action="adminafterlogin.php" method="post">
            username:   <br><input type="text" name="username" placeholder="admin@mail.com" required><br>
            password:   <br><input type="password" name="password" placeholder="password" required><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>