<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<?php
		$startdate = strtotime('Saturday');
		$enddate = strtotime('+6 weeks',$startdate);
		while ($startdate < $enddate) {
			echo date('m-d',$startdate)."<br>";
			$startdate = strtotime("+1 week", $startdate);
		}
	?>
</body>
</html>