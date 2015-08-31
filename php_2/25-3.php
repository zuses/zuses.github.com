<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 错误处理-3</title>
</head>
<body>
	<?php 
		// 创建自定义错误处理器
		function customError($errno, $errstr){ 
			echo "<b>Error:</b> [$errno] $errstr<br />";
			echo "Ending Script";
			die();
		}

		/*
			可能的错误类型：
				E_USER_ERROR - 致命的用户生成的 run-time 错误。错误无法恢复。脚本执行被中断。
				E_USER_WARNING - 非致命的用户生成的 run-time 警告。脚本执行不被中断。
				E_USER_NOTICE - 默认。用户生成的 run-time 通知。脚本发现了可能的错误，也有可能在脚本运行正常时发生。
		 */

		set_error_handler('customError',E_USER_WARNING);
		
		$test = 2;
		if($test > 1){
			trigger_error("Value must be 1 or below",E_USER_WARNING);
		}
	?>
</body>
</html>