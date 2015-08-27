<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 函数 - 参数4 -- 返回值</title>
</head>
<body>
	<?php
		function sum($x,$y){
			$z = $x + $y;
			return $z;
		}
		echo "5 + 10 = ".sum(5,10)."<br>";
		echo "7 + 13 = ".sum(7,13)."<br>";
		echo "2 + 4 = ".sum(2,4)."<br>";
	?>
</body>
</html>