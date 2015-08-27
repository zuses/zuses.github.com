<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>过滤器（Filter）- 过滤多个输入</title>
</head>
<body>
    <?php

        $filter = array(
            "name"=>array(
                "filter"=>FILTER_SANITIZE_STRING
            ),
            "age"=>array(
                "filter"=>FILTER_VALIDATE_INT,
                "options"=>array(
                    "min_range"=>1,
                    "max_range"=>120
                )
            ),
            "email"=>FILTER_VALIDATE_EMAIL
        );

        $result = filter_input_array(INPUT_GET,$filter);

        if (!$result["age"])
        {
            echo("Age must be a number between 1 and 120.<br />");
        }
        elseif(!$result["email"])
        {
            echo("E-Mail is not valid.<br />");
        }
        else
        {
            echo("User input is valid");
        }

    ?>
</body>
</html>