<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>错误处理</title>
</head>
<body>
    <?php
      // $file = fopen("readfile/webdictionary.txt","r");
        if(!file_exists("readfile/webdictionary.txt")){
            echo "File not found";
        } else{
            $file = fopen("readfile/webdictionary.txt","r");
            echo fread($file, filesize('readfile/webdictionary.txt'));
            fclose($file);
        }
    ?>
</body>
</html>