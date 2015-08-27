<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件打开，读取，关闭</title>
</head>
<body>
    <?php
        $myfile = fopen("readfile/webdictionary.txt","r") or die("Unable to open file!");
        echo fgets($myfile); // fgets() 函数用于从文件读取单行。
        fclose($myfile);
        // 调用 fgets() 函数之后，文件指针会移动到下一行。
    ?>
</body>
</html>