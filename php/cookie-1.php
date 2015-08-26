<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cookie-setcookie</title>
</head>
<body>
    <?php
        setcookie("user","Alex porter",time()+3600);
        // 在发送 cookie 时，cookie 的值会自动进行 URL 编码，在取回时进行自动解码（为防止 URL 编码，请使用 setrawcookie() 取而代之）
        if(isset($_COOKIE["user"])){
            echo "Welcome ".$_COOKIE["user"];
        } else{
            echo "Welcome guest!";
        }
        // 如何删除cookie
        setcookie("user","",time()-3600);  // 当删除 cookie 时，应当使过期日期变更为过去的时间点。

        // 如果您的应用程序涉及不支持 cookie 的浏览器，您就不得不采取其他方法在应用程序中从一张页面向另一张页面传递信息。一种方式是从表单传递数据（有关表单和用户输入的内容，稍早前我们已经在本教程中介绍过了）。

    ?>
</body>
</html>