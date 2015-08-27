<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 变量作用域-static关键字</title>
</head>
<body>
	<?php
		/*
			通常，当函数完成/执行后，会删除所有变量。不过，有时我需要不删除某个局部变量。实现这一点需要更进一步的工作。
			要完成这一点，请在您首次声明变量时使用 static 关键词
		 */
		
		function myTest(){
			static $x = 0;
			echo $x;
			$x++;
		}
		
		myTest();
		myTest();
		myTest();
	?>
</body>
</html>