<?php
date_default_timezone_set('PRC');//设置时区
@$string=file_get_contents('message.txt');//函数把整个文件读入一个字符串中
if(!empty($string)){//如果$string 不为空的时候执行，也就是message.txt中有留言数据
     $string=rtrim($string,'&^');//每一段留言有一个分格符，但是最后多出了一个&^。因此，我们要将&^删掉
     $arr=explode('&^', $string);//以&^切成数组
     foreach ($arr as $value) {//将留言内容读取
     	list($username,$content,$time)=explode('$#',$value);   //将用户名和内容分开,并批量负值给变量
     	echo "用户名为：<font color='gree'>".$username."</font>内容为<font color='red'>".$content."</font>时间为".date('Y-m-d H:i:s',$time);
     	echo "<hr/>";
     	
     }

}
?>
<h1>基于文件的留言本演示</h1>
<form action="write.php" method="post">
	用户名：<input type="text" name="username" /><br />
	留言内容：<textarea name="content"></textarea><br />
	<input type="submit" value="提交">


</form>