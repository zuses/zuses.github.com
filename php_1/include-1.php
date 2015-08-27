<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>include-1</title>
</head>
<body>
	<h1>欢迎访问我的首页</h1>
	<p>一段文本</p>
	<p>一段文本</p>
	<?php include "include/footer.php"; ?>

	<div class="menu">
		<?php include "include/menu.php"; ?>
	</div>

	<div class="car">
		<?php 
			include "include/vars.php";
			echo '我有一辆'.$color.$car;
		 ?>
	</div>

	<!-- require 语句同样用于向 PHP 代码中引用文件。
	不过，include 与 require 有一个巨大的差异：如果用 include 语句引用某个文件并且 PHP 无法找到它，脚本会继续执行： -->

	<!-- 如果我们使用 require 语句完成相同的案例，echo 语句不会继续执行，因为在 require 语句返回严重错误之后脚本就会终止执行： -->
</body>
</html>