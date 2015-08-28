<?php 
	// 打开文件的更好的方法是通过 fopen() 函数。此函数为您提供比 readfile() 函数更多的选项。
	$myfile = fopen('files/webdictionary.txt','r') or die("Unable to open file!");
	// fread() 的第一个参数包含待读取文件的文件名，第二个参数规定待读取的最大字节数。
	// 如下 PHP 代码把 "webdictionary.txt" 文件读至结尾：
	echo fread($myfile, filesize('files/webdictionary.txt'));
	// fclose() 函数用于关闭打开的文件。
	// 用完文件后把它们全部关闭是一个良好的编程习惯。您并不想打开的文件占用您的服务器资源。
	fclose($myfile);
?>
