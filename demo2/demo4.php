<?php
//文件夹目录函数
// $dir="e:/";    
// if(is_dir($dir)){   
//     if($dh=opendir($dir)){
//     	while (($file=readdir($dh)) !== false){
//     		echo "文件名是:$file:文件类型是：".filetype($dir.$file)."<br/>";
//     	}

//        closedir($dh);
//     }

// }  

//文件路径函数
$url=pathinfo('d:/www/index.inc.php');//传入文件路径返回文件的各个组成部份
print_r($url);
echo "<hr>";
foreach ($url as $key => $value) {
	echo "$key:$value<br>";
	# code...
}
echo'文件目录名：'.$url['dirname'].'<br/>';
echo '文件全名:'.$url['basename'].'<br/>';
echo '文件扩展名:'.$url['extension'].'<br/>';
echo '不包含扩展名的文件名:'.$url['filename'].'<br/>';

$url2=dirname(__FILE__);//返回文件路径的文件目录部份
var_dump($url2);

echo "<hr>";
$url3 = 'http://username:password@hostname:9090/path?arg=value#anchor';
echo "<pre>";
var_dump(parse_url($url3));//将网址拆解成各个部份
echo "</pre>";

//http_build_query生成url 中的query字符串
$data=[
   'name'=>'yuping',
   'age'=>28,
];
echo http_build_query($data);