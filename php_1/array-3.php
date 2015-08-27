<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php数组-数组排序</title>
</head>
<body>
	<?php
		$cars1 = array('Volvo','BWM','SAAS');
		$cars2 = array('Volvo','BWM','SAAS');
		$cars3 = array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
		$cars4 = array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
		$cars5 = array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
		$cars6 = array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
		sort($cars1);	// 升序排序
		rsort($cars2);	// 降序排序
		asort($cars3);	// 根据值，以升序对关联数组进行排序
		ksort($cars4);	// 根据键，以升序对关联数组进行排序
		arsort($cars5);	// 根据值，以降序对关联数组进行排序
		krsort($cars6);	// 根据键，以降序对关联数组进行排序

		$carLength = count($cars1);
		$carLength3 = count($cars3);
		for($i = 0; $i < $carLength; $i++) { 
			echo $cars1[$i]."<br>";
		}
		echo "<br><br>";
		for($i = 0; $i < $carLength; $i++) { 
			echo $cars2[$i]."<br>";
		}
		echo "<br><br>";
		foreach($cars3 as $key=>$value) { 
			echo 'Key = '.$key.' , '.'value = '.$value.'<br>';
		}
		echo "<br><br>";
		foreach($cars4 as $key=>$value) { 
			echo 'Key = '.$key.' , '.'value = '.$value.'<br>';
		}
		echo "<br><br>";
		foreach($cars5 as $key=>$value) { 
			echo 'Key = '.$key.' , '.'value = '.$value.'<br>';
		}
		echo "<br><br>";
		foreach($cars6 as $key=>$value) { 
			echo 'Key = '.$key.' , '.'value = '.$value.'<br>';
		}
	?>
</body>
</html>