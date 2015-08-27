<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件打开，读取，关闭</title>
</head>
<body>
    <?php
    $myfile = fopen('readfile/webdictionary.txt', 'r');
    // fread() 的第一个参数包含待读取文件的文件名，第二个参数filesize()规定待读取的最大字节数。如下 PHP 代码把 "webdictionary.txt" 文件读至结尾：
    echo fread($myfile, filesize('readfile/webdictionary.txt'));
    fclose($myfile); // fclose() 函数用于关闭打开的文件。 用完文件后把它们全部关闭是一个良好的编程习惯。您并不想打开的文件占用您的服务器资源。
    ?>
</body>
</html>