<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 超全局变量 -- $_REQUEST</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		Name: <input type="text" name="fname">
		<input type="submit">
	</form>
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
		#  $_REQUEST 用于收集 HTML 表单提交的数据。
		$name = $_REQUEST['fname'];
		echo $name;
	?>
</body>
</html>