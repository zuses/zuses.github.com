<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 过滤器（Filter）- 2</title>
</head>
<body>
	<?php 
		// 
		$var=300;

		$int_options = array(
		"options"=>array
		 (
		 "min_range"=>0,
		 "max_range"=>256
		 )
		);

		if(!filter_var($var, FILTER_VALIDATE_INT, $int_options))
		 {
		 echo("Integer is not valid");
		 }
		else
		 {
		 echo("Integer is valid");
		 }
	?>
</body>
</html>