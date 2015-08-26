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
        mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
        VALUES ('Peter', 'Griffin', '35')");

        mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
        VALUES ('Glenn', 'Quagmire', '33')");
        mysql_close($con);
    ?>
</body>
</html>