<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>常量</title>
</head>
<body>
	<?php 
		define('PI',3.14);
		$r = 3;
		$area = constant('PI')*$r*$r;
		echo '面积为：'.PI*$r*$r.'<br>';
		echo '周长为：'.(2*PI*$r).'<br>';
		echo $area.'<br>';

		echo __FILE__.'<br>';  // 当前文件在服务器的物理位置
		echo __LINE__.'<br>';  // 当前代码的行数
		echo PHP_VERSION.'<br>';      // 当前PHP解析器的版本号
		echo PHP_OS.'<br>';           // 执行当前PHP版本的操作系统名称


		$p = '';
		define('PI1',3.14);
		define('PI2',3.142);
		$height = '中';
		if($height == '中'){
			$p = 'PI1';
		} elseif($height == '低'){
			$p = 'PI2';
		}
		$r = 1;
		$area = constant($p)*$r*$r;
		echo $area;
	 ?>
</body>
</html>