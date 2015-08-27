<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>过滤器（Filter）- 使用 Filter Callback</title>
</head>
<body>
    <?php

        // 通过使用 FILTER_CALLBACK 过滤器，可以调用自定义的函数，把它作为一个过滤器来使用。这样，我们就拥有了数据过滤的完全控制权。
        // 您可以创建自己的自定义函数，也可以使用已有的 PHP 函数。
        // 规定您准备用到过滤器函数的方法，与规定选项的方法相同。
        function converSpace($string){
            return str_replace("_"," ",$string);
        }

        $string = "Peter_is_a_great_guy!";

        echo filter_var($string,FILTER_CALLBACK,array("options"=>"converSpace"));
    ?>
</body>
</html>