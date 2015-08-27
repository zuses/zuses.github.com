<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		# date('规定时间戳的格式（必选）','规定时间戳（可选）')
		echo '今天是'.date('Y/m/d') . "<br>";
		echo '今天是'.date('Y.m.d') . "<br>";
		echo '今天是'.date('Y-m-d') . "<br>";
		echo '今天是'.date('l') . "<br>";
	?>
	版权所有 2008-<?php echo date(Y); ?>
</body>
</html>