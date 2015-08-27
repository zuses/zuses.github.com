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
        echo "Pageviews=".$_SESSION["views"];
    ?>
</body>
</html>