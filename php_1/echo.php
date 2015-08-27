<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>echo实例</title>
</head>
<body>
	<?php
		echo "<h1>PHP is fun!</h1>";
		echo "Hello World!<br>";
		echo "I'm ahout to learn PHP!<br>";
		echo "This", " string", " was", " made", " with multiple parameters.<br><br>";
		$txt1 = 'Lean PHP';
		$txt2 = 'W3School.com.cn';
		$cars = array("Volvo","BMW","SAAB");
		echo $txt1;
		echo '<br>';
		echo $txt2,'<br>';
		echo "My car is a {$cars[0]}";
	?>
</body>
</html>