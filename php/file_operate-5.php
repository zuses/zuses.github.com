<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件的写入</title>
</head>
<body>
    <?php
        $myfile = fopen("readfile/webdictionary.txt","w") or die("Unable to open file!");
        $txt = "bill gates\n";
        fwrite($myfile,$txt);
        $txt = "steve jobs\n";
        fwrite($myfile,$txt);
        fclose($myfile);
        // 此时，如果文件里在这之前已有数据，那将会被新写入的数据覆盖
    ?>
</body>
</html>