<?php

if($_FILES["file"]["type"] == "image/gif" || $_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/pjpeg" && $FILES["size"] < 20000){
    // 对于 IE，识别 jpg 文件的类型必须是 pjpeg，对于 FireFox，必须是 jpeg。
    if($_FILES['file']['error'] > 0){
        echo $_FILES['FILE']['error']."<br>";
    } else{
        echo "Upload:" . $_FILES['file']['name']."<br>";
        echo "Type:" . $_FILES['file']['type']."<br>";
        echo "Size:" . $_FILES['file']['size']/1024 ."Kb<br>";
        echo "Stored in:" . $_FILES['file']['tmp_name']."<br>";

        if(file_exists("upload/".$_FILES["file"]["name"])){
            echo $_FILES["file"]["name"]." already exists!";
        } else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
            echo "Stored in ".$_FILES["file"]["name"];
        }}
    }
    else{
    echo "Invalid File!";
}

?>