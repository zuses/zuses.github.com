<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL-Create</title>
</head>
<body>
    <?php
        $severName = "localhost";
        $userName = "root";
        $passWord = "123456";
        $con  = mysql_connect( $severName,$userName,$passWord);
        if(!$con){
            die("Could not connect ".mysql_error());
        }
        mysql_select_db("my_db",$con);
        $sql = "CREATE TABLE Persons(
            personID int NOT NULL AUTO_INCREMENT,
            PRIMARY KEY(personID),
            FirstName varchar(15),
            LastName varchar(15),
            Age int;
        )";
        mysql_query($sql,$con);
        mysql_close($con);
    ?>
</body>
</html>