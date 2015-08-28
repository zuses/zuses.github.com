<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php strtotime()-输出下周六的日期</title>
</head>
<body>
	<?php
		// 下例输出下周六的日期：
		$startdate = strtotime("Saturday");
		$enddate = strtotime("+6 weeks",$startdate);

		while ($startdate < $enddate) {
		  echo date("M d", $startdate),"<br>";
		  $startdate = strtotime("+1 week", $startdate);
		}
	?>
</body>
</html>