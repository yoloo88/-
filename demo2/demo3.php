<?php

class FILE 
{
	
	function  filename()
	{
		$filename="test.txt";
        $fp=fopen($filename,'w');
        $len=fwrite($fp, '我是一只来自北方的狼。');
        fclose($fp);
        echo $len.'字节被写入';
		# code...
	}
}
//$file=new FILE();
//$file->filename();

   //旧文件名
  // $filename = 'test.txt';

   //新文件名
  // $filename2 = $filename . '.old';

   //复制文件
  // rename($filename, $filename2);

// $filename='test.txt.old';
// if(unlink($filename)){
// 	echo "删除成功$filename";

// }else{
// 	echo "删除 $filename 失败!\n";
// }
$files=[
	'test.txt',
	'img/',
	'update/',
];
$flag=true;
foreach ($files as $key => $value) {

	echo $value."\n";

	if(is_file($value)){
		echo "是文件   ";
	}else{
		echo "是一个文件夹  ";
	}

	if(is_readable($value)){

		echo "可读   ";
	}else{
		echo "<font color='red'>不可读</font>   ";
	}

	if (is_writable($value)) {
		echo "可写入   "   ;
	} else {
		echo "<font color='red'>不可写入</font>  ";
	}

	if ($flag) {
		echo "<a href='step1'>下一步</a>  ";
	} else {
		echo "不能进行安装  ";
	}
	
	echo "<br>-----------<br>";
	
}