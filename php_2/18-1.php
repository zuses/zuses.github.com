<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 日期</title>
</head>
<body>
	<!-- 
		下面列出了一些常用于日期的字符：
			d - 表示月里的某天（01-31）
			m - 表示月（01-12）
			Y - 表示年（四位数）
			1 - 表示周里的某天
	 -->
	<?php
		echo "今天是：".date('Y/m/d')."<br>";
		echo "今天是：".date('Y.m.d')."<br>";
		echo "今天是：".date('Y-m-d')."<br>";
		echo "今天是：".date('l')."<br>";
	?>
</body>
</html>