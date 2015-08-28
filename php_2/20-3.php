<?php 
	$myfile = fopen('files/webdictionary.txt','r') or die("Unable to open file!");
	// 输出单字符直到 end-of-file
	while(!feof($myfile)){
		// fgetc() 函数用于从文件中读取单个字符。
		echo fgetc($myfile);
	}

	// 在调用 fgetc() 函数之后，文件指针会移动到下一个字符。
?>
