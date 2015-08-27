<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php的变量作用域-关键词$GLOBALS</title>
</head>
<body>
	<?php
		$x = 5;
		$y = 15;
		function test(){
			// $GLOBAL 存储了所有的全局变量，下标存有变量名
			$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
		}
		test();
		echo $y;
	?>
</body>
</html>