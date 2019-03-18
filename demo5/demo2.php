<?php
//验证码制作
check_code();
function check_code($width = 100,$height = 50,$num = 4,$type = 'jpeg'){

	$img = imagecreate($width,$height);//创建画布
	$string = '';
	for ($i=0; $i < $num; $i++) { 
        $rand=mt_rand(0,2);
        switch ($rand) {
        	case 0:
        		$ascii=mt_rand(48,57);//0-9
        		break;
        	case 1:
        		$ascii=mt_rand(65,90);//A-Z
        		break;
        	case 2:
        		$ascii=mt_rand(97,122);//a-z
        		break;
        	
        }
	//chr(); //chr() 函数从指定的 ASCII 值返回字符
	$string.=sprintf('%c',$ascii);
	}

    //背景颜色
    imagefilledrectangle($img,0,0,$width,$height,randBg($img));
    //画干扰元素
    for ($i=0; $i <50 ; $i++) { 
    	imagesetpixel($img, mt_rand(0,$width), mt_rand(0,$height), randPix($img));
    }
    //写字
    for ($i=0; $i < $num; $i++) { 
    	$x=floor($width / $num) * $i + 2;//X坐标为宽最除4得到的取舍整数来乘第几次再加2.如第一个字就是2的位置。
    	$y=mt_rand(0,$height-15);//Y坐标就在0和高着减15中取随机数吧。
    	imagechar($img, 5, $x, $y, $string[$i], randPix($img));//用5号字体 写出 $string是一个字符串，字符串$string[0]为字符的第一个字符，依此类类推


    }

    $func='image'.$type;
    $header = 'Content-type:image/'.$type;
    if (function_exists($func)) {
    	header($header);
    	$func($img);
    }else{
    	echo '图片类型不支持';
    }
    imagedestroy($img);
    
    return($string);//要将验证字符返回回来，供以后验证字符匹配使用  
}
//浅色的背景
function randBg($img) {
   return imagecolorallocate($img, mt_rand(130, 255), mt_rand(130, 255), mt_rand(130, 255));
}
//深色的字或者点这些干 扰元素
function randPix($img) {
   return imagecolorallocate($img, mt_rand(0, 120), mt_rand(0, 120), mt_rand(0, 120));
}




