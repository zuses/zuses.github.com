<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>超全局变量--$_REQUEST</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Name: <input type="text" name="fname">
		<input type="submit">
	</form>
	<?php
		# $_REQUEST 用于收集 HTML 表单提交的数据。
		$fname = $_REQUEST['fname'];
		echo $fname; 
	?>
</body>
</html>