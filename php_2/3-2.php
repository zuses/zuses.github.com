<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php echo/print -- print</title>
</head>
<body>
	<?php
		print "<h2>PHP is fun!</h2>";
		print "Hello world!<br>";
		print "I'm about to learn PHP!<br><br>";

		/*显示变量*/
		$txt1="Learn PHP";
		$txt2="W3School.com.cn";
		$cars=array("Volvo","BMW","SAAB");

		print $txt1;
		print "<br>";
		print "Study PHP at $txt2<br>";
		print "My car is a {$cars[0]}";
	?>
</body>
</html>