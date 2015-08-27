<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>print实例</title>
</head>
<body>
	<?php
		print "<h1>PHP is fun!</h1>";
		print "Hello World!<br>";
		print "I'm ahout to learn PHP!<br>";
		//print "This", " string", " was", " made", " with multiple parameters.<br><br>"; 相对于echo,print 对于有逗号分隔的，不能打印
		$txt1 = 'Lean PHP';
		$txt2 = 'W3School.com.cn';
		$cars = array("Volvo","BMW","SAAB");
		print $txt1;
		print '<br>';
		//print $txt2,'<br>'; 相对于echo,print 对于有逗号分隔的，不能打印
		print "My car is a {$cars[0]}";
	?>
</body>
</html>