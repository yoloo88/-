<?php
//1.引入我们的MVC类
require_once('Model.php');//导入模型类
require_once('View.php');//导入视图类
require_once('Controller.php');//导入控制器类

//.调用指定控制器中的指定方法，使应用动行起来
//Controller::show();//1.静态调用 控制器是static静态方法，这种写死了。
/** 2.通过地址带参数来访问
$c = $_GET['c'];
$a = $_GET['a'];
$controller = new $c;
$controller->$a();//index.php?c=controller&a=show 通过地址带参数来访问
**/
$c = isset($_GET['C']) ? $_GET['c'] : 'Controller';//isset()如果是空就是用Controller
$a = isset($_GET['a']) ? $_GET['a'] : 'show';
$controller = new $c;
$controller->$a();

$con = mysqli_connect("localhost","root","root");
if (!$con) {
	die('Con:'.mysqli_connect_error());
}
echo "连接成功";
	
