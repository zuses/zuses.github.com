<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 过滤器（Filter）- 6</title>
</head>
<body>
	<?php 
		// 使用 Filter Callback
		function convertSpace($string)
		{
		return str_replace("_", " ", $string);
		}

		$string = "Peter_is_a_great_guy!";

		echo filter_var($string, FILTER_CALLBACK, array("options"=>"convertSpace"));
	?>
</body>
</html>