<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php的变量作用域</title>
</head>
<body>
	<?php
		// php的函数内部的变量只能函数内访问
		// php的函数外部的变量只能在外部访问,函数内不能访问外部变量（与JS不同）
		$x = 5;
		function test(){
			$y = 3;
			echo '<p>测试函数内部的变量</p>'.'<br />';
			echo '函数内输出外部变量：'.$x.'<br />';
			echo '函数内输出内部变量：'.$y.'<br />';
		}
		test();
		echo '函数外输出外部变量：'.$x.'<br />';
		echo '函数外输出内部变量：'.$y.'<br />';
	?>
</body>
</html>