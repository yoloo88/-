<?php
//创建图片
$img = imagecreatetruecolor(500, 500);

//分配颜色
$red = imagecolorallocate($img, 255, 0, 0);

$green = imagecolorallocate($img, 0, 255, 0);

$blue = imagecolorallocate($img, 0, 0, 255);

$pur = imagecolorallocate($img, 255, 0, 255);

$yellow = imagecolorallocate($img, 121, 72, 0);


//填充背景
imagefilledrectangle($img, 0, 0, 500, 500, $green);

//画对角线
imageline($img, 0, 0, 500, 500, $red);
imageline($img, 500, 0, 0, 500, $blue);

//画圆
imagefilledellipse($img, 250, 250, 200, 200, $yellow);

//圆中间画矩形
imagefilledrectangle($img, 200, 200, 300, 300, $blue);


//保存图片，图片名为haha.jpg
imagejpeg($img, 'haha.jpg');

//销毁资源
imagedestroy($img);

?>