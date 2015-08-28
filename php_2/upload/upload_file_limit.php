<?php 
	if(($_FILES['file']['type'] == "image/gif"
		|| $_FILES['file']['type'] == "image/jpeg" 
		|| $_FILES['file']['type'] == "image/pjpeg" )  // 对于 IE，识别 jpg 文件的类型必须是 pjpeg，对于 FireFox，必须是 jpeg。
		&& ($_FILES['file']['size'] < 20000)){

		if($_FILES['file']['error'] > 0){
			echo "Error: ".$FILES['file']['error']."<br>";			// $_FILES["file"]["error"] - 由文件上传导致的错误代码
		} else{
			echo "Upload:".$_FILES['file']['name']."<br>";  		// $_FILES["file"]["name"] - 被上传文件的名称
			echo "Type:".$_FILES['file']['type']."<br>";   			// $_FILES["file"]["type"] - 被上传文件的类型
			echo "Size:".($_FILES['file']['size']/1024)."KB<br>";   // $_FILES["file"]["size"] - 被上传文件的大小，以字节计
			echo "Stored in:".$_FILES['file']['tmp_name']."<br>";	// $_FILES["file"]["tmp_name"] - 存储在服务器的文件的临时副本的名称
		}
	
	} else{
		echo "Invalid file!";
	}
?>