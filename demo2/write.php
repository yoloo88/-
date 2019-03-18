<?php
$fp=fopen('message.txt', a);//追加方式打开文件，每次写入就可以追加内容在后面。
$time=time();//设置时间
$username=trim($_POST['username']);//得到用户名
$content=trim($_POST['content']);//得到内容
$string=$username.'$#'.$content.'$#'.$time.'&^';//组合写入的字符串：内容和用户之间分开，使用$#  ，行与行之间分开，使用&^
fwrite($fp,$string);//写入文件
fclose($fp);//关闭文件
header('location:index.php');