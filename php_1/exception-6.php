<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>异常处理</title>
</head>
<body>
    <?php

        // 设置顶层异常处理器 （Top Level Exception Handler）
        function myException($exception)
        {
            echo "<b>Exception:</b> " , $exception->getMessage();
        }

        set_exception_handler('myException');

        throw new Exception('Uncaught Exception occurred');

    ?>
</body>
</html>