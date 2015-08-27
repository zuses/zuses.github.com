<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 超全局变量 -- $_GET</title>
</head>
<body>
	<?php
		/*
			$GLOBALS
			$_SERVER
			$_REQUEST
			$_POST
			$_GET
			$_FILES
			$_ENV
			$_COOKIE
			$_SESSION
		 */
		# $_GET 也可用于收集提交 HTML 表单 (method="get") 之后的表单数据。
		# $_GET 也可以收集 URL 中的发送的数据。
		echo "Study ".$_GET["subject"]." at ".$_GET['web'];
	?>
</body>
</html>