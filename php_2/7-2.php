<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 运算符 - 赋值运算符</title>
</head>
<body>
	<?php
		$x=10; 
		echo $x."<br>"; // 输出 10

		$y=20; 
		$y += 100;
		echo $y."<br>"; // 输出 120

		$z=50;
		$z -= 25;
		echo $z."<br>"; // 输出 25

		$i=5;
		$i *= 6;
		echo $i."<br>"; // 输出 30

		$j=10;
		$j /= 5;
		echo $j."<br>"; // 输出 2

		$k=15;
		$k %= 4;
		echo $k; // 输出 3
	?>
</body>
</html>