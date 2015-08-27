<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 数组排序-按数字升序 sort()</title>
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
		$numbers=array(3,5,1,22,11);
		sort($numbers); // 按照数字升序对数组 $numbers 中的元素进行排序
		$arrLength = count($numbers); 
		for($x = 0;$x < $arrLength;$x++){
			echo $numbers[$x]."<br>";
		}
	?>
</body>
</html>