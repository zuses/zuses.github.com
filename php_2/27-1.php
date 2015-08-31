<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 过滤器（Filter）- 1</title>
</head>
<body>
	<?php 
		// PHP 过滤器用于验证和过滤来自非安全来源的数据，比如用户的输入。
		/*
			如需过滤变量，请使用下面的过滤器函数之一：
				filter_var() - 通过一个指定的过滤器来过滤单一的变量
				filter_var_array() - 通过相同的或不同的过滤器来过滤多个变量
				filter_input - 获取一个输入变量，并对它进行过滤
				filter_input_array - 获取多个输入变量，并通过相同的或不同的过滤器对它们进行过滤
		 */
		$int = 123;

		if(!filter_var($int, FILTER_VALIDATE_INT)){
		 echo("Integer is not valid");
		}
		else {
			echo("Integer is valid");
		}
	?>
</body>
</html>