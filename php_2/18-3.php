<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 简单的时间</title>
</head>
<body>
	<?php
		date_default_timezone_set("PRC");   // 设置时区
		echo "现在的时间是：".date('h:i:sa');
	?>
</body>
</html>