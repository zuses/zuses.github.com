<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php require vs include</title>
</head>
<body>
	<h1>欢迎访问我的首页！</h1>
	<?php 
		// require 语句同样用于向 PHP 代码中引用文件。
		// 不过，include 与 require 有一个巨大的差异：如果用 include 语句引用某个文件并且 PHP 无法找到它，脚本会继续执行：
		include 'include/vars-nofound.php';
		echo "我有一辆".$color.$car;

		//如果我们使用 require 语句完成相同的案例，echo 语句不会继续执行，因为在 require 语句返回严重错误之后脚本就会终止执行：
		require 'include/vars-nofound.php';
		echo "I have a $color $car.";

		// 请在此时使用 require：当文件被应用程序请求时。
		// 请在此时使用 include：当文件不是必需的，且应用程序在文件未找到时应该继续运行时。
	?>
</body>
</html>