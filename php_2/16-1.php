<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 简单的HTML表单</title>
</head>
<body>
	Welcome <?php echo $_POST['name'];?>!<br>
	Your email address is <?php echo $_POST['email'];?>
</body>
</html>