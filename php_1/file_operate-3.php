<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件打开，读取，关闭</title>
</head>
<body>
    <?php
        $myfile = fopen("readfile/webdictionary.txt","r") or die("Unable to open file!");
        while(!feof($myfile)){           // feof() 函数检查是否已到达 "end-of-file" (EOF)。feof() 对于遍历未知长度的数据很有用。
            echo fgets($myfile)."<br>";
        }
        fclose($myfile);
    ?>
</body>
</html>