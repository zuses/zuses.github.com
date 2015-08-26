<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL-connect</title>
</head>
<body>
    <?php
        $username="root";
        $userpass="123456";
        $dbhost=localhost;
        $dbdatabase="mysql";
        $db_connect = mysqli_connect($dbhost,$username,$userpass) or die("Unable to connect to the MySQL!");
        $sql = "CREATE DATABASE".mycounter;
        mysqli_query($sql,$db_connect);
    ?>
</body>
</html>