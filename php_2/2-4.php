<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 变量作用域-$GLOBALS[index]</title>
</head>
<body>
	<?php
		$x = 5; 
		$y = 10;

		/*PHP 同时在名为 $GLOBALS[index] 的数组中存储了所有的全局变量。下标存有变量名。这个数组在函数内也可以访问，并能够用于直接更新全局变量。*/
		function myTest(){
			$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
		}
		myTest();
		echo $y;
	?>
</body>
</html>