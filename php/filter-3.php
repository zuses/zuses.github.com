<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>过滤器（Filter）- 验证输入</title>
</head>
<body>
    <?php

        if(!filter_has_var(INPUT_GET,"email")){
            echo "Input type dose not exist";
        } else{
            if(!filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL)){
                echo "E-mail is not valid";
            } else{
                echo "E-mail is valid";
            }
        }

    ?>
</body>
</html>