<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>异常处理</title>
</head>
<body>
    <?php
        // Try, throw 和 catch
        function checkNum($number){
            if($number > 1){
                throw new Exception("Value must be 1 or below");
            }
            return true;
        }

        try{
            checkNum(2);
            echo "if you see this,the number is 1 or below";
        }
        catch(Exception $e){
            echo "Message:".$e->getMessage();
        }

    ?>
</body>
</html>