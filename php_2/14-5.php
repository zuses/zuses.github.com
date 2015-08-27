<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 数组排序-根据值对数组进行升序排序 - asort()</title>
</head>
<body>
	<?php
		/*
			sort() - 以升序对数组排序
			rsort() - 以降序对数组排序
			asort() - 根据值，以升序对关联数组进行排序
			ksort() - 根据键，以升序对关联数组进行排序
			arsort() - 根据值，以降序对关联数组进行排序
			krsort() - 根据键，以降序对关联数组进行排序
		 */
		$age = array('Bill'=>'35','Peter'=>'43','Steve'=>'37');
		asort($age);
		foreach ($age as $key => $value) {
			echo "Key = ".$key." Value = $value<br>";
		}
	?>
</body>
</html>