<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 运算符 - 数组运算符</title>
</head>
<body>
	<?php
		$x = array('a'=>'red','b'=>'green'); 
		$y = array('c'=>'blue','d'=>'yellow');
		$z = $x + $y; 			// $x 与 $y 的联合
		var_dump($z);
		var_dump($x == $y);  	// 相等
		var_dump($x === $y);	// 全等
		var_dump($x != $y);		// 不相等
		var_dump($x <> $y);		// 不相等
		var_dump($x !== $y);	// 不全等
	?>
</body>
</html>