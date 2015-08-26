<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$d = mktime(9,50,32,7,25,2015);  // mktime() 创建日期
		echo date('Y-m-d h:i:sa',$d);
	?>
</body>
</html>