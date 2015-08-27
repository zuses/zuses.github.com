<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$d1 = strtotime('December 31');
		$d2 = ceil(($d1 - time())/60/60/24); // ceil() 函数用于向上取整
		$enddate = strtotime('+6 weeks',$startdate);
		echo '距离12月31日还有 '.$d2." 天";
	?>
</body>
</html>