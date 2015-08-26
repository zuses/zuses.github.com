<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>超全局变量--$_POST</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		Name: <input type="text" name="fname">
		<input type="submit">
	</form>
	<?php
		#广泛用于收集提交 method="post" 的 HTML 表单后的表单数据。$_POST 也常用于传递变量。
		$fname = $_POST['fname'];
		echo $fname; 
	?>
</body>
</html>