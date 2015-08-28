<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php include - vars.php</title>
</head>
<body>
	<h1>欢迎访问我的首页</h1>
	<?php 
		// 如果引用这个 "vars.php" 文件，就可在调用这个文件中的变量：
		include 'include/vars.php';
		echo "我有一辆".$color.$car;
	?>
</body>
</html>