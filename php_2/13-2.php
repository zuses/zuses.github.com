<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 数组 - 关联数组</title>
</head>
<body>
	<?php
		$age = array('Bill'=>'35','Steve'=>'37','Peter'=>'43');
		/*
			或者:
				$age['Bill'] = '35';
				$age['Steve'] = '37';
				$age['Peter'] = '43';
		 */
		echo "Peter is ".$age["Peter"]." years old.<br><br>";

		foreach($age as $x => $x_value){
			echo "Key = ".$x.",Value = ".$x_value."<br>";
		}

		// PHP 高级教程中学习多维数组。
		// 如需完整的数组函数参考手册，可以查看 PHP 数组参考手册。
	?>
</body>
</html>