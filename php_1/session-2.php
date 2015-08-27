<!DOCTYPE html>
<?php
    // 在您把用户信息存储到 PHP session 中之前，首先必须启动会话。
    // session_start() 函数必须位于 "html" 标签之前：
    session_start();
    // store session data
    $_SESSION["views"] = 1;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>session-会话</title>
</head>
<body>
    <?php
        if(isset($_SESSION["views"])){
            $_SESSION["views"] = $_SESSION["views"] + 1;
            echo "VIEWS=".$_SESSION["views"]."<br>";
        } else{
            $_SESSION["views"] = 1;
            echo "VIEWS=".$_SESSION["views"]."<br>";
        }

        // 如果您希望删除某些 session 数据，可以使用 unset() 或 session_destroy() 函数。

        // unset() 函数用于释放指定的 session 变量：
        unset($_SESSION["views"]);
        echo "VIEWS=".$_SESSION["views"]."<br>";
        // 您也可以通过 session_destroy() 函数彻底终结 session：
        // session_destroy() 将重置 session，您将失去所有已存储的 session 数据。
        session_destroy();
        echo "VIEWS=".$_SESSION["views"];
    ?>
</body>
</html>