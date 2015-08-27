<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 超全局变量 -- $GLOBALS</title>
</head>
<body>
	<?php
		/*
			$GLOBALS
			$_SERVER
			$_REQUEST
			$_POST
			$_GET
			$_FILES
			$_ENV
			$_COOKIE
			$_SESSION
		 */
		$x = 75; 
		$y = 25;
		function addition() { 
		  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
		}
		 
		addition(); 
		echo $z; 
		// 在上面的例子中，由于 z 是 $GLOBALS 数组中的变量，因此在函数之外也可以访问它。
	?>
</body>
</html>