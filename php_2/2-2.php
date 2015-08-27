<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 变量作用域</title>
</head>
<body>
	<?php
		/*
			PHP 有三种不同的变量作用域：
				1,local（局部）
				2,global（全局）
				3,static（静态）
		 */
		
		$x = 5; #函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问。
		function myTest(){
			$y = 10; #函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问。
			echo "<p>测试函数内部的变量</p>";
			echo "变量x是 $x";
			echo "<br>";
			echo "变量y是 $y";
		}
		myTest();

		echo "<p>在函数之外测试变量</p>";
		echo "变量x是 $x";
		echo "<br>";
		echo "变量y是 $y";
	?>
</body>
</html>