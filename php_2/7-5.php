<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 运算符 - 比较运算符</title>
</head>
<body>
	<?php
		$x=100; 
		$y="100";

		var_dump($x == $y);
		echo "<br>";
		var_dump($x === $y);
		echo "<br>";
		var_dump($x != $y);
		echo "<br>";
		var_dump($x !== $y);
		echo "<br>";

		$a=50;
		$b=90;

		var_dump($a > $b);
		echo "<br>";
		var_dump($a < $b);
	?>
</body>
</html>