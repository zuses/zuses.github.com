<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>过滤器（Filter）- 选项和标志</title>
</head>
<body>
    <?php

        // 选项和标志用于向指定的过滤器添加额外的过滤选项。
        $var = 300;
        $int_options = array(
            "options"=>array(    // 选项必须放入一个名为 "options" 的相关数组中。如果使用标志，则不需在数组内。
                "min_range"=>0,
                "max_range"=>256
            )
        );

        if(!filter_var($var,FILTER_VALIDATE_INT,$int_options)){
            echo "Integer is not valid";
        } else{
            echo "Integer is valid";
        }

    ?>
</body>
</html>