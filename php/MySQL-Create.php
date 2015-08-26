<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL-Create</title>
</head>
<body>
    <?php
        // 语法 mysql_connect(servername,username,password);
        $severName = "localhost";
        $userName = "root";
        $passWord = "123456";
        $con  = mysql_connect( $severName,$userName,$passWord);
        $dbname = "my_db";
        if(!$con){
            die("Could not connect ".mysql_error());
        }
        if(mysql_query("CREATE DATABASE ".$dbname,$con)){   // 创建数据库
            echo "Database created!";
        } else{
            echo "Error creating database:".mysql_error();
        }
        mysql_close($con);
    ?>
</body>
</html>