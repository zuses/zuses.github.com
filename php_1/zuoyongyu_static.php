<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php的变量作用域-关键词static</title>
</head>
<body>
	<?php
		function test(){
			// 当函数完成/执行后，会删除所有变量;在不需要删除局部变量的时候，用static
			static $x = 0;
			echo $x;
			$x++;
		}
		test();
		test();
		test();
	?>
</body>
</html>