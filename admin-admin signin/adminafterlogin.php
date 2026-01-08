<?php
        
        session_start();

        require "db_connect.php";

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $username = $_POST['username'];
            $password = $_POST['password'];

            $stmt = $connection->prepare("SELECT * FROM employee WHERE username=? AND password=?");
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            //$result = $connection->query("select * from employee WHERE username= '$username' AND password='$password'");
            
            if ($result->num_rows > 0) {
                $user = $result->fetch_all(MYSQLI_ASSOC);
                
                if ($user[0]['role'] == 'admin') {
                    $_SESSION['userid'] = $user[0]['employee_id'];
                    $_SESSION['loggedin'] = 1;
                    header("Location: admin.php");
                    exit(); // Always use exit after header redirect
                } else {
                    echo "You don't have admin access!";
                    header("Location: adminlogin.php");
                    exit(); // Always use exit after header redirect
                }
            } else {
                echo "Invalid username or password!<br>";
                echo "<a href='adminlogin.php'><button>Back to login</button></a>";
            }             

            //input type hidden value

        }

    ?>