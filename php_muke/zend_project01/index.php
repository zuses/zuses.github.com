<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>����</title>
</head>
<body>
	<?php 
		define('PI',3.14);
		$r = 3;
		$area = constant('PI')*$r*$r;
		echo '���Ϊ��'.PI*$r*$r.'<br>';
		echo '�ܳ�Ϊ��'.(2*PI*$r).'<br>';
		echo $area.'<br>';

		echo __FILE__.'<br>';  // ��ǰ�ļ��ڷ�����������λ��
		echo __LINE__.'<br>';  // ��ǰ���������
		echo PHP_VERSION.'<br>';      // ��ǰPHP�������İ汾��
		echo PHP_OS.'<br>';           // ִ�е�ǰPHP�汾�Ĳ���ϵͳ����


		$p = '';
		define('PI1',3.14);
		define('PI2',3.142);
		$height = '��';
		if($height == '��'){
			$p = 'PI1';
		} elseif($height == '��'){
			$p = 'PI2';
		}
		$r = 1;
		$area = constant($p)*$r*$r;
		echo $area;
	 ?>
</body>
</html>