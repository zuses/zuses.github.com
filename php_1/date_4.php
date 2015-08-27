<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$d = strtotime('10:15:50am April 15 2015');  // strtotime() 函数用于把人类可读的字符串转换为 Unix 时间。
		echo date('Y-m-d h:i:sa',$d)."<br>";
		$d = strtotime('tomorrow');
		echo date('Y-m-d h:i:sa',$d)."<br>";
		$d = strtotime('next Sunday');
		echo date('Y-m-d h:i:sa',$d)."<br>";
		$d = strtotime('+3 Month');
		echo date('Y-m-d h:i:sa',$d);
	?>
</body>
</html>