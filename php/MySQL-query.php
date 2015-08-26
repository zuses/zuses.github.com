<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL-query</title>
</head>
<body>
    <?php
        // 创建数据库 语法 CREATE DATABASE database_name
        $con  = mysql_connect("localhost","root","123456");
        $database = "my_db1";
        $sqlDatabase = 'create database '.$database;
        if(!$con){
            die("Could not connect ".mysql_error());
        }
        if(mysql_query($sqlDatabase,$con)){  // mysql_query 数据库查询
            echo "DATABASE CTEATED.";
        }else{
            echo "Error creating database.".mysql_error();
        }

        /*// 创建数据库表 向 mysql_query() 函数添加 CREATE TABLE 语句
        mysql_select_db("my_db-1",$con);
        $sql = "CREATE TABLE Persons{
          // 主键和自动递增字段
          personID int NOT NULL AUTO_INCREMENT,
          PRIMARY KEY(personID),
          FirstName varchar(15),
          LastName varchar(15),
          Age int
        }";
        mysql_query($sql,$con);
        mysql_close($con);*/
    ?>
</body>
</html>