<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>过滤器（Filter）- 净化输入</title>
</head>
<body>
    <?php

        if(!filter_has_var(INPUT_POST,"url")){
            echo "Input type does not exist";
        } else{
            $url = filter_input(INPUT_POST,"url",FILTER_SANITIZE_URL);
        }

    ?>
</body>
</html>