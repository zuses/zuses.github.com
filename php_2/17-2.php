<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 多维数组-1</title>
</head>
<body>
	<?php
		$car = array(
			array('Volvo',22,18),
			array('BMW',15,13),
			array('SAAB',5,2),
			array('Land Rover',15,11)
		);
		for ($row=0;$row < 4;$row++) { 
			echo "<p><b>行数：$row</b></p>";
			echo "<ul>";
			for ($col=0;$col < 3;$col++) { 
				echo "<li>".$car[$row][$col]."</li>";
			}
			echo "</ul>";
		}
	?>
</body>
</html>