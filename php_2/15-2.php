<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 超全局变量 -- $_SERVER</title>
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
		#$_SERVER 这种超全局变量保存关于报头、路径和脚本位置的信息。
		echo $_SERVER['PHP_SELF']."<br>";  		 	// 返回当前执行脚本的文件名。
		echo $_SERVER['SERVER_NAME']."<br>";	 	// 返回当前运行脚本所在的服务器的主机名
		echo $_SERVER['HTTP_HOST']."<br>";			// 返回来自当前请求的 Host 头。
		echo $_SERVER['HTTP_USER_AGENT']."<br>";	// 返回用户代理信息。
		echo $_SERVER['SCRIPT_NAME']."<br>";  		// 返回当前脚本的路径。
		echo $_SERVER['SERVER_ADDR']."<br>";  		// 返回当前运行脚本所在的服务器的 IP 地址。
		echo $_SERVER['GATEWAY_INTERFACE']."<br>";  // 返回服务器使用的 CGI 规范的版本。地址。
		echo $_SERVER['SERVER_SOFTWARE']."<br>";    // 返回服务器标识字符串（比如 Apache/2.2.24）。
		echo $_SERVER['SERVER_PROTOCOL']."<br>";    // 返回请求页面时通信协议的名称和版本（例如，“HTTP/1.0”）。
		echo $_SERVER['REQUEST_METHOD']."<br>";    	// 返回访问页面使用的请求方法（例如 POST）。
		echo $_SERVER['REQUEST_TIME']."<br>";    	// 返回请求开始时的时间戳（例如 1577687494）。
		echo $_SERVER['QUERY_STRING']."<br>";    	// 返回查询字符串，如果是通过查询字符串访问此页面。
		echo $_SERVER['HTTP_ACCEPT']."<br>";    	// 返回来自当前请求的请求头。
		echo $_SERVER['HTTP_ACCEPT_CHARSET']."<br>";// 返回来自当前请求的 Accept_Charset 头（ 例如 utf-8,ISO-8859-1）
		echo $_SERVER['HTTPS']."<br>";    			// 是否通过安全 HTTP 协议查询脚本。
		echo $_SERVER['REMOTE_ADDR']."<br>";    	// 返回浏览当前页面的用户的 IP 地址。
		echo $_SERVER['REMOTE_HOST']."<br>";    	// 返回浏览当前页面的用户的主机名。
		echo $_SERVER['REMOTE_PORT']."<br>";    	// 返回用户机器上连接到 Web 服务器所使用的端口号。
		echo $_SERVER['SCRIPT_FILENAME']."<br>";    // 返回当前执行脚本的绝对路径。
		echo $_SERVER['SERVER_ADMIN']."<br>";    	// 该值指明了 Apache 服务器配置文件中的 SERVER_ADMIN 参数。
		echo $_SERVER['SERVER_PORT']."<br>";    	// Web 服务器使用的端口。默认值为 “80”。
		echo $_SERVER['SERVER_SIGNATURE']."<br>";   // 返回服务器版本和虚拟主机名。
		echo $_SERVER['PATH_TRANSLATED']."<br>";   	// 当前脚本所在文件系统（非文档根目录）的基本路径。
		echo $_SERVER['SCRIPT_URI']."<br>";   		// 返回当前页面的 URI。
	?>
</body>
</html>