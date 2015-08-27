<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php switch 语句</title>
</head>
<body>
	<?php
		$x = 1;
		switch ($x) {
			case 1:
				echo "Number 1";
				break;
			case 2:
				echo "Number 2";
				break;
			case 3:
				echo "Number 3";
				break;
			default:
				echo "No number between 1 and 3";
				break;
		}
	?>
</body>
</html>