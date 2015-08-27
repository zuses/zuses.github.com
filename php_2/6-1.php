<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 常量</title>
</head>
<body>
	<?php
		# 常量是单个值的标识符（名称）。在脚本中无法改变该值。
		# 有效的常量名以字符或下划线开头（常量名称前面没有 $ 符号）。
		# 与变量不同，常量贯穿整个脚本是自动全局的。
		/*
			如需设置常量，请使用 define() 函数 - 它使用三个参数：
			1,首个参数定义常量的名称
			2,第二个参数定义常量的值
			3,可选的第三个参数规定常量名是否对大小写敏感。默认是 false。
		*/

		# 对大小写敏感的常量
		define('GREETING','Welcome to W3School.com.cn!');
		echo GREETING;
	?>
</body>
</html>