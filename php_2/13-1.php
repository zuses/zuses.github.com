<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 数组 - 索引数组</title>
</head>
<body>
	<?php
		/*
			在 PHP 中，有三种数组类型：
				索引数组 - 带有数字索引的数组
				关联数组 - 带有指定键的数组
				多维数组 - 包含一个或多个数组的数组
		 */
		$cars = array('Volvo','BMW','SAAB');
		/*
			或者也可以手动分配索引：
				$cars[0]="Volvo";
				$cars[1]="BMW";
				$cars[2]="SAAB";
		 */
		echo "I like $cars[0] 、$cars[1] and $cars[2].<br><br>";

		// count()函数用于获取数组的长度
		echo "cars数组的长度为：".count($cars)."<br><br>";

		// 遍历索引数组
		$arrlength = count($cars);
		for($x = 0;$x < $arrlength;$x++){
			echo $cars[$x]."<br>";
		}

	?>
</body>
</html>