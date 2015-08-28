<?php 
	/*
		fwrite() 函数用于写入文件。
		fwrite() 的第一个参数包含要写入的文件的文件名，第二个参数是被写的字符串。
	 */
	$myfile = fopen('files/newfile.txt','w') or die("Unable to open file!");
	$txt = "Bill Gates\n";
	fwrite($myfile, $txt);
	$txt = "Steve Jobs\n";
	fwrite($myfile, $txt);
	fclose($myfile);
?>
