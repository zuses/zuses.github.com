<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>数据类型-对象</title>
</head>
<body>
	<?php
		Class car
		{
			var $color;
			function Car($color = 'green'){
				$this->color = $color;
			}
			function what_color(){
				return $this->color;
			}
		}
		function print_vars($obj) {
		   foreach (get_object_vars($obj) as $prop => $val) {
		     echo "\t$prop = $val\n";
		   }
		}
		// instantiate one object
		$herbie = new Car("white");

		// show herbie properties
		echo "\herbie: Properties\n";
		print_vars($herbie);
	?>
</body>
</html>