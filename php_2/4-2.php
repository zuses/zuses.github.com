<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 数据类型-整数</title>
</head>
<body>
	<?php
		# 整数是没有小数的数字。
		# var_dump()方法，返回数据类型和值
		$x = 5985;
		var_dump($x);
		echo "<br>"; 
		$x = -345; // 负数
		var_dump($x);
		echo "<br>"; 
		$x = 0x8C; // 十六进制数
		var_dump($x);
		echo "<br>";
		$x = 047; // 八进制数
		var_dump($x);
	?>
</body>
</html>