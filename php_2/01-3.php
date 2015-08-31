<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 语法-大小写</title>
</head>
<body>
	<?php
		# 在 PHP 中，所有用户定义的函数、类和关键词（例如 if、else、echo 等等）都对大小写不敏感。
		ECHO "Hello world!<br>";
		echo "Hello world!<br>";
		Echo "Hello world!<br><br>";

		# 不过在 PHP 中，所有变量都对大小写敏感。
		$color = "red";
		echo "My car is ".$color."<br>";
		echo "My car is ".$Color."<br>";
		echo "My car is ".$COLOR;
	?>
</body>
</html>