<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>错误处理</title>
</head>
<body>
<?php
    function customError($errno,$errstr){
        echo "<b>Error:</b> [$errno] $errstr<br>";
        echo "Webmaster has been notified";
        error_log("Error:[$errno] $errstr<br>",1,"108274244@qq.com","From: webmaster@example.com");
    }
    set_error_handler("customError",E_USER_WARNING);
    $test = 2;
    if($test > 1){
        trigger_error("Value must be 1 or below",E_USER_WARNING);
    }
    echo($test);
?>
</body>
</html>