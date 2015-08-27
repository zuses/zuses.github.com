<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php do...while 循环</title>
</head>
<body>
	<?php
		# 就算条件不成立，do while 循环至少会执行一次语句
		$x = 6;
		do{
			echo "这个数字是：$x<br>";
			$x++;
		} while($x < 5);
	?>
</body>
</html>