<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>常量-define()</title>
</head>
<body>
	<?php
		// 如需设置常量，使用define()函数;
		// define函数有三个参数
		// 参数1：常量名；参数2：常量值；参数3：true/false(表示对大小写是否敏感，默认false-敏感)；
		define('GREETING', 'Welcome to W3School.com.cn!',true);
		echo greeting;
	?>
</body>
</html>