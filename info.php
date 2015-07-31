<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php数组</title>
</head>
<body>
	<?php
		// php中，用array()函数创建数组
		$cars = array('Volvo','BWM','SAAS');
		echo "I like ".$cars[0].", ".$cars[1]." and ".$cars[2];
		// php中，用count()函数返回数组的长度
		echo "<br>数组长度为：".count($cars)."<br>";
		// 输出数组的所有值
		$arrLenth = count($cars);
		for($i = 0;$i < $arrLenth;$i++){
			echo $cars[$i]."<br>";
		}
	?>
</body>
</html>