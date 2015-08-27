<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php foreach 循环</title>
</head>
<body>
	<?php
		$color = array('red','green','yellow','blue');
		foreach($color as $value){
			echo "$value<br>";
		}
	?>
</body>
</html>