<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include "db_connect.php";

        $employeeuserid = $_GET['employeeid'];

        if($employeeuserid > 0){
            $connection->query("delete from employee where employee_id = $employeeuserid");
            echo "Deletion Successfull!";
            header('location: admin.php');
        }
        
        
        //echo "Deletion not occured!";
    ?>
</body>
</html>
