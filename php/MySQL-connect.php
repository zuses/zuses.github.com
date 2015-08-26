<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL-connect</title>
</head>
<body>
    <?php
        // 语法 mysql_connect(servername,username,password);
        $severName = "localhost";
        $userName = "root";
        $passWord = "123456";
        $con  = mysqli_connect( $severName,$userName,$passWord);  // 连接数据库
        if(!$con){
            die("Could not connect ".mysql_error());
        } else{
            echo "Connect sucsses!";
        }
        mysql_close($con);
    ?>
</body>
</html>