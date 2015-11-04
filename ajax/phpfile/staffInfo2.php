<?php 
	// 设置页面内容是HTML，编码格式是utf-8
	//header('Content-Type:text/plain;charset=utf-8');
	header('Content-Type:application/json;charset=utf-8');
	header('Access-Control-Allow-Origin:*');   		//  XHR2方法处理跨域问题
	header('Access-Control-Allow-Method:GET,POST'); //  XHR2方法处理跨域问题
	// header('Content-Type:text/xml;charset=utf-8');
	// header('Content-Type:text/html;charset=utf-8');
	// header('Content-Type:application/javascript;charset=utf-8');
	
	// 定义一个多位数组，包含员工的信息，每条员工信息为一个数组
	$staff = array(
		array('name' => '洪七','number' => '101','sex' => '男','job' => '总经理'),
		array('name' => '郭靖','number' => '102','sex' => '男','job' => '开发工程师'),
		array('name' => '黄蓉','number' => '103','sex' => '女','job' => '产品经理')
	);

	// 判断如果是get请求，则进行搜索；如果是post请求，则进行新建
	// $_SERVER 是一个超全局变量，在一个脚本的全部作用域中都可用，不用使用global关键字
	// $_SERVER['REQUEST_METHOD'] 返回访问页面使用的请求方法
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		search();
	}elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
		create();
	}

	// 通过员工编号搜索员工
	function search(){
		//$jsonp = $_GET['callback'];  // jsonp跨域方法

		if(!isset($_GET['number']) || empty($_GET['number'])){
			echo '{"success":false,"msg":"参数错误"}';
			return;
		}

		global $staff;
		$number = $_GET['number'];
		$result = '{"success":false,"msg":"没有找到员工"}';

		foreach($staff as $value){
			if($value['number'] == $number){
				$result = '{"success":true,"msg":"找到员工：员工编号：' . $value["number"] . '，员工姓名：' . $value["name"] . '，员工性别：' . $value["sex"] . '，员工职位：' . $value["job"]. '"}';
				break;
			}
		}
		echo $result;
	}

	// 创建员工
	function create(){
		// 判断信息是否填写完成
		if (!isset($_POST["name"]) || empty($_POST["name"])
		|| !isset($_POST["number"]) || empty($_POST["number"])
		|| !isset($_POST["sex"]) || empty($_POST["sex"])
		|| !isset($_POST["job"]) || empty($_POST["job"])) {
		echo '{"success":false,"msg":"参数错误，员工信息填写不全"}';
		return;
	}
		echo '{"success":true,"msg":"员工：' . $_POST["name"] . ' 信息保存成功！"}';
	}
 ?>