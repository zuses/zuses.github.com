<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>异常处理</title>
</head>
<body>
    <?php
        // 异常处理用于在指定的错误（异常）情况发生时改变脚本的正常流程。这种情况称为异常。
        function checkNum($number){
            if($number > 1){
                throw new Exception("Value must be 1 or below");
            }
            return true;
        }
        checkNum(2);
    ?>
</body>
</html>