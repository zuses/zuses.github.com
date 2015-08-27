<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php的变量作用域-关键词global</title>
</head>
<body>
	<?php
		$x = 5;
		$y = 15;
		function test(){
			// global 关键词用于访问函数内的全局变量。
			global $x,$y;
			$y = $x + $y;
			echo $y;
		}
		test();
	?>
</body>
</html>