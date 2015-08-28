<!DOCTYPE html>
<?php 
	/*setcookie() 函数必须位于 <html> 标签之前。*/
	setrawcookie('user','Alex',time()+3600);
	/*在发送 cookie 时，cookie 的值会自动进行 URL 编码，在取回时进行自动解码（为防止 URL 编码，请使用 setrawcookie() 取而代之）。*/
	
	/*PHP 的 $_COOKIE 变量用于取回 cookie 的值*/
	echo $_COOKIE['user']."<br><br>";

	/*显示所有的 cookie */
	print_r($_COOKIE);
	echo "<br><br>";

	/*使用 isset() 函数来确认是否已设置了 cookie：*/
	if(isset($_COOKIE['user'])){
		echo "Welcome ".$_COOKIE['user'];
	} else{
		echo "Welcome guest";
	}

	/*当删除 cookie 时，您应当使过期日期变更为过去的时间点。*/
	setcookie('user','',time()-3600);
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php cookie</title>
</head>
<body>
	<div style="margin-top: 100px;padding: 10px;background-color: #ccc;">
		cookie 常用于识别用户。cookie 是服务器留在用户计算机中的小文件。每当相同的计算机通过浏览器请求页面时，它同时会发送 cookie。通过 PHP，您能够创建并取回 cookie 的值。
		<br><br>
		语法：setcookie(name, value, expire, path, domain);
		<br><br>
		在发送 cookie 时，cookie 的值会自动进行 URL 编码，在取回时进行自动解码（为防止 URL 编码，请使用 setrawcookie() 取而代之）。
	</div>
</body>
</html>