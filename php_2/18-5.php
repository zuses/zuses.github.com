<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php strtotime()-用字符串来创建日期</title>
</head>
<body>
	<?php
		// PHP strtotime() 函数用于把人类可读的字符串转换为 Unix 时间。
		$d = strtotime("10:38pm April 15 2015");
		echo "现在的时间是：".date('Y-m-d h:i:sa',$d)."<br>";

		// PHP 在将字符串转换为日期这方面非常聪明，所以您能够使用各种值：
		$D=strtotime("tomorrow");
		echo date("Y-m-d h:i:sa", $D) . "<br>";

		$D=strtotime("next Saturday");
		echo date("Y-m-d h:i:sa", $D) . "<br>";

		$D=strtotime("+3 Months");
		echo date("Y-m-d h:i:sa", $D) . "<br>";
		// 不过，strtotime() 并不完美，所以请记得检查放入其中的字符串。
		
		// 下例输出下周六的日期：
		$d1=strtotime('next ');
	?>
</body>
</html>