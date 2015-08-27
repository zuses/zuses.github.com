<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>过滤器（Filter）</title>
</head>
<body>
    <?php

        // filter_var() - 通过一个指定的过滤器来过滤单一的变量
        $int = 123;
        if(!filter_var($int,FILTER_VALIDATE_INT)){
            echo "Integer is not valid!";
        } else{
            echo "Integer is valid!";
        }

    ?>
</body>
</html>