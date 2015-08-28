<?php 
	/*
		如果现在 "newfile.txt" 包含了一些数据，我们可以展示在写入已有文件时发生的的事情。所有已存在的数据会被擦除并以一个新文件开始。
		在下面的例子中，我们打开一个已存在的文件 "newfile.txt"，并向其中写入了一些新数据：
	 */
	$myfile = fopen('files/newfile.txt','w') or die("Unable to open file!");
	$txt = "Mickey Mouse\n";
	fwrite($myfile, $txt);
	$txt = "Minnie Mouse\n";
	fwrite($myfile, $txt);
	fclose($myfile);
?>
