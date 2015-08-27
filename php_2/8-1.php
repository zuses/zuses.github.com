<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php if...else...elseif 语句</title>
</head>
<body>
	<?php
		date_default_timezone_set('PRC'); // 设置中国时区
		$t = date("H");  // 获取当前几点钟
		if($t < "10"){
			echo "Have a good morning!";
		} elseif($t < "20"){
			echo "Have a good day!";
		} else{
			echo "Have a good night!";
		}
	?>
</body>
</html>