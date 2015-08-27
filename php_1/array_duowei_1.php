<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>数组-多维数组</title>
</head>
<body>
	<?php
		$cars = array(
			array('Volvo',13,24),
			array('BMW',22,15),
			array('SAAB',27,12),
			array('land rover',19,30),
		);
		echo $cars[0][0].": 库存".$cars[0][1]." 销量: ".$cars[0][2]."<br>";
		echo $cars[1][0].": 库存".$cars[1][1]." 销量: ".$cars[1][2]."<br>";
		echo $cars[2][0].": 库存".$cars[2][1]." 销量: ".$cars[2][2]."<br>";
		echo $cars[3][0].": 库存".$cars[3][1]." 销量: ".$cars[3][2]."<br>";
	?>
</body>
</html>