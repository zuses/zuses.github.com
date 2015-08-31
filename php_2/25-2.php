<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 错误处理-2</title>
</head>
<body>
	<?php 
		// 创建自定义错误处理器
		function customError($errno, $errstr){ 
			echo "<b>Error:</b> [$errno] $errstr<br />";
			echo "Ending Script";
			die();
		}
		set_error_handler('customError');
		echo($test);
	?>
</body>
</html>