<!DOCTYPE html>
<?php 
	/*在您把用户信息存储到 PHP session 中之前，首先必须启动会话。*/
	/*session_start() 函数必须位于 <html> 标签之前：*/
	session_start();
	$_SESSION['views']=1;
	if(isset($_SESSION['views'])){
		$_SESSION['views'] = $_SESSION['views'] + 1;
	} else{
		$_SESSION['views']=1;
	}
	echo 'PageViews:'.$_SESSION['views'];

	/*如果您希望删除某些 session 数据，可以使用 unset() 或 session_destroy() 函数。*/
	unset($_SESSION['views']);
	/*session_destroy() 将重置 session，您将失去所有已存储的 session 数据。*/
	session_destroy();
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php cookie</title>
</head>
<body>
	<div style="margin-top: 100px;padding: 10px;background-color: #ccc;">
		Session 的工作机制是：为每个访问者创建一个唯一的 id (UID)，并基于这个 UID 来存储变量。UID 存储在 cookie 中，亦或通过 URL 进行传导。
		<br><br>
	</div>
</body>
</html>