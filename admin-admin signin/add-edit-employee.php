<html lang="en">
    <?php

        require "db_connect.php";
        

        if (isset($_POST['firstname'])){

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $role = $_POST['role'];
            $gender = $_POST['gender'];
            $contact = $_POST['contact'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            if($_GET['btntype'] == 'edit'){
                $employeeid = $_GET['employeeid'];
                $connection->query("update employee set employee_firstname='$firstname', employee_lastname='$lastname', email='$email', role='$role', gender='$gender', contact='$contact', username='$username', password='$password' where employeeid = $employeeid;");
                echo "updating successfully!";

            }elseif($_GET['btntype'] == 'create'){
                $connection->query("insert into employee values('$firstname', '$lastname', '$email', '$role', '$gender', '$contact', '$username', '$password');");
                echo "Added successfully!";
            }

        }


    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="dashboardjs.js"></script>
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
            width: 50%;
            min-width: 300px;
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
    <?php  
        
        if(isset($_GET['employeeid'])){
            $employeeid = $_GET['employeeid'];
        }else{
            $employeeid = 0;
        }
        
        $btntype = 'type';
        if($_GET['btntype'] == 'edit'){
            $btntype = 'edit';
        }elseif($_GET['btntype'] == 'create'){
            $btntype = 'create';
        }
    ?>
    <div class="form-container">
        <p><b>Employee</b></p>
        <form action="add-edit-employee.php?employeeid=<?php echo "$employeeid" ?>&btntype='<?php echo "$btntype" ?>' name="add-edit-employee" onsubmit="return validation()">
            First name: <br><input type="text" name="firstname" required><br>
            Last name:  <br><input type="text" name="lastname" required><br>
            email:      <br><input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>
            role:       <br><input type="text" name="role" required><br>
            gender:     <br><input type="text" name="gender" required><br>
            Contact number: <br><input type="tel" name="contact" required><br>
            username:   <br><input type="text" name="username" required><br>
            password:   <br><input type="password" name="password" required><br>
            confirm password:   <br><input type="password" required><br>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html> 