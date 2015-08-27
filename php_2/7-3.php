<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 运算符 - 字符串运算符</title>
</head>
<body>
	<?php
		$a = "Hello";
		$b = $a . " world!";
		echo $b . "<br>"; // 输出 Hello world!

		$x="Hello";
		$x .= " world!";
		echo $x; // 输出 Hello world!
	?>
</body>
</html>