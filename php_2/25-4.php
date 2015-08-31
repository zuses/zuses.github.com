<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 错误处理-4</title>
</head>
<body>
	<?php 
		// 错误记录
		function customError($errno, $errstr){ 
			echo "<b>Error:</b> [$errno] $errstr<br />";
			echo "Webmaster has been notified";
			// 发送带有错误消息的电子邮件
			error_log("Error: [$errno] $errstr",1,
			"someone@example.com","From: webmaster@example.com");
		}

		//set error handler
		set_error_handler("customError",E_USER_WARNING);

		//trigger error
		$test=2;
		if ($test>1){
			trigger_error("Value must be 1 or below",E_USER_WARNING);
		}
	?>
</body>
</html>