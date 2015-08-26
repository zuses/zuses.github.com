<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>foreach 循环</title>
</head>
<body>
	<?php
		// foreach 只适用于于数组
		$color = array('red','green','blue','yellow');
		foreach ($color as $value) {
			echo "$value <br>";
		}
	?>
</body>
</html>