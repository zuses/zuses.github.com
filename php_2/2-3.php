<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 变量作用域-global关键字</title>
</head>
<body>
	<?php
		$x = 5; 
		$y = 10;

		function myTest(){
			global $x,$y;
			$y = $x + $y;
		}
		myTest();
		echo $y;
	?>
</body>
</html>