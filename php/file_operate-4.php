<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件打开，读取，关闭</title>
</head>
<body>
    <?php
        $myfile = fopen("readfile/webdictionary.txt","r") or die("Unable to open file!");
        while(!feof($myfile)){
            echo fgetc($myfile)."<br>";            // fgetc() 函数用于从文件中读取单个字符。
        }
        fclose($myfile);
    ?>
</body>
</html>