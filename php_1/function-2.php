<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php函数-参数</title>
</head>
<body>
	<?php
		function familyName($fname,$year){
			echo "$fname Zhang! Born in $year<br>";
		}
		familyName('Li',1987);
		familyName('Hong',1989);
		familyName('Tao',1988);
		familyName('Xiaomei',1990);
		familyName('Jiang',1986);
	?>
</body>
</html>