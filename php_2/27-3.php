<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 过滤器（Filter）- 3</title>
</head>
<body>
	<?php 
		// 验证输入
		if(!filter_has_var(INPUT_GET, "email"))
		 {
		 echo("Input type does not exist");
		 }
		else
		 {
		 if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL))
		  {
		  echo "E-Mail is not valid";
		  }
		 else
		  {
		  echo "E-Mail is valid";
		  }
		 }
	?>
</body>
</html>