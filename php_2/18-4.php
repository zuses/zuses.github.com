<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php mktime()-创建时间</title>
</head>
<body>
	<?php
		$d = mktime(13,52,39,8,25,2013);
		echo "现在的时间是：".date('Y-m-d h:i:sa',$d);
	?>
</body>
</html>