<?php
$string=file_get_contents('config.php');
foreach ($_POST as $key => $value) {
	 $yx="/define\('$key','.*?'\);/";
	 $re="define('$key','$value');";
	 $string=preg_replace($yx, $re, $string);
}
if (file_put_contents('config.php', $string)){
echo "修改成功";

}

