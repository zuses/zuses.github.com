<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 多维数组-1</title>
</head>
<body>
	<?php
		$car = array(
			array('Volvo',22,18),
			array('BMW',15,13),
			array('SAAB',5,2),
			array('Land Rover',15,11)
		);
		echo $car[0][0]." 库存：".$car[0][1].", 销量：".$car[0][2]."<br>";
		echo $car[1][0]." 库存：".$car[1][1].", 销量：".$car[1][2]."<br>";
		echo $car[2][0]." 库存：".$car[2][1].", 销量：".$car[2][2]."<br>";
		echo $car[3][0]." 库存：".$car[3][1].", 销量：".$car[3][2];
	?>
</body>
</html>