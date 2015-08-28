<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php strtotime()-输出距离天数</title>
</head>
<body>
	<?php
		// 下例输出今天距十二月三十一号还有多少天
		$d1 = strtotime('December 31');
		$d2 = ceil(($d1-time())/60/60/24);
		echo "距离十二月三十一日还有".$d2."天";
	?>
</body>
</html>