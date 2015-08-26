<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>超全局变量&&$_SERVER</title>
</head>
<body>
	<?php
		# $GLOBALS     - 引用全局作用域中可用的全部变量
		# $_SERVER     - 这种超全局变量保存关于报头、路径和脚本位置的信息。
		# $_REQUEST    - 用于收集 HTML 表单提交的数据。
		# $_POST       -  广泛用于收集提交 method="post" 的 HTML 表单后的表单数据。$_POST 也常用于传递变量。 
		# $_GET 
		# $_FILES
		# $_ENV
		# $_COOKIE
		# $_SESSION
		$x = 25;
		$y = 75;
		function add(){
			$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
		}
		add();
		echo $z;
		echo '<br><br>';
		echo '$_SERVER 变量：'.'<br>';
		echo 'PHP_SELF: '.$_SERVER['PHP_SELF']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'SERVER_NAME: '.$_SERVER['SERVER_NAME']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'HTTP_HOST: '.$_SERVER['HTTP_HOST']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'HTTP_USER_AGENT: '.$_SERVER['HTTP_USER_AGENT']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'SCRIPT_NAME: '.$_SERVER['SCRIPT_NAME']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'GATEWAY_INTERFACE: '.$_SERVER['GATEWAY_INTERFACE']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'SERVER_ADDR: '.$_SERVER['SERVER_ADDR']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'SERVER_SOFTWARE: '.$_SERVER['SERVER_SOFTWARE']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'SERVER_PROTOCOL: '.$_SERVER['SERVER_PROTOCOL']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'REQUEST_METHOD: '.$_SERVER['REQUEST_METHOD']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'REQUEST_TIME: '.$_SERVER['REQUEST_TIME']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'QUERY_STRING: '.$_SERVER['QUERY_STRING']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'REMOTE_PORT: '.$_SERVER['REMOTE_PORT']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'SCRIPT_FILENAME: '.$_SERVER['SCRIPT_FILENAME']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'SERVER_ADMIN: '.$_SERVER['SERVER_ADMIN']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'SERVER_PORT: '.$_SERVER['SERVER_PORT']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'SERVER_SIGNATURE: '.$_SERVER['SERVER_SIGNATURE']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'SCRIPT_URI: '.$_SERVER['SCRIPT_URI']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'PATH_TRANSLATED: '.$_SERVER['PATH_TRANSLATED']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'HTTPS: '.$_SERVER['HTTPS']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'REMOTE_HOST: '.$_SERVER['REMOTE_HOST']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'HTTP_REFERER: '.$_SERVER['HTTP_REFERER']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'HTTP_ACCEPT: '.$_SERVER['HTTP_ACCEPT']."<br><br>";
		echo '$_SERVER 变量：'.'<br>';
		echo 'HTTP_ACCEPT_CHARSET: '.$_SERVER['HTTP_ACCEPT_CHARSET']."<br><br>";
	?>
</body>
</html>