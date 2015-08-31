<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php echo/print -- echo-1</title>
</head>
<body>
	<?php
		/*
			echo  - 能够输出一个以上的字符串
			print - 只能输出一个字符串，并始终返回 1
			echo 比 print 稍快，因为它不返回任何值。
		 */
		
		echo "<h2>PHP is fun!</h2>";
		echo "Hello world!<br>";
		echo "I'm about to learn PHP!<br>";
		echo "This", " string", " was", " made", " with multiple parameters.<br><br>";

		/*显示变量*/
		$txt1 = "Learn PHP";
		$txt2="W3School.com.cn";
		$cars=array("Volvo","BMW","SAAB");

		echo $txt1;
		echo "<br>";
		echo "Study PHP at $txt2<br>";
		echo "My car is a {$cars[0]}";
	?>
</body>
</html>