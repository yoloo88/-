<?php
echo "你好。";

$i=['id'=>101,'名字'=>'狂神'];
$a=array(1=>101,'2'=>'狂神');
var_dump($i);
var_dump($a);
$a[2]="双林";//改值。
$a[]="闽威";//增加，默认下标最大加1
unset($a[1]);//unset()删除指定的值
echo "<pre>";//格式化的输出
var_dump($a);
echo "</pre>";

//下面多维数组
$chengsi=
[
	'四川'=>[
		'成都'=>['成华区','金牛区','温江区'],
		'德阳'=>['广汉','中江','什邡'],
		'宜宾'=>['翠屏区','江北'],
            ],
    '浙江'=>[
             ],
    '湖南'=>[
            ],  


];

echo "<pre>";
var_dump($chengsi);
echo "</pre>";

//关联数组遍历
$arr=array(
	'教育部'=>array(
         array('李某','18','人妖'),
         array('高某','20','男'),
         array('张某','21','妖人') 
	),
	'宣传部'=>array(
         array('李某','18','人妖'),
         array('高某','20','男'),
         array('张某','21','妖人'),
	),
	'财务部'=>array(
       array('李某','18','人妖'),
       array('高某','20','男'),
       array('张某','21','妖人'),
	),
);
echo "<pre>";
var_dump($arr);
echo "</pre>";
foreach($arr as $key=>$value){

	foreach ($value as $k => $v) {
		echo $key.'--------'.$v[0].'<br>';
	}
	 echo '----------分割线-----------<br />';
}