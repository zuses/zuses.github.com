<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 数组排序-按字母降序 rsort()</title>
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
		$cars=array("Volvo","BMW","SAAB");
		rsort($cars); // 按照字母降序对数组 $cars 中的元素进行排序
		$arrLength = count($cars); 
		for($x = 0;$x < $arrLength;$x++){
			echo $cars[$x]."<br>";
		}
	?>
</body>
</html>