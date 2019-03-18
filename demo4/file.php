<?php
var_dump($_FILES);
echo "<pre>";
print_r($_FILES['file']);
echo "</pre>";

if ($_FILES['file']['error']>0) {
   switch ($_FILES['file']['error']) {
   	case '1':
   		echo "文件过大";
   		break;
   	case '2':
   		echo "文件超出指定大小";
   		break;
   	case '3':
   		echo "只有部分文件被上传";
   		break;	
   	case '4':
   		echo "文件没有被上传";
   		break;
   	case '6':
   		echo "找不到指定文件夹";
   		break;
   	case '7':
   		echo "文件写入失败";
   		break;
   	default:
   		echo "上传出错<br/>";
   		break;
   }
}else{
     
     $MAX_FILE_SIZE=1000000;//规定文件大小
     if ($_FILES['file']['size']>$MAX_FILE_SIZE) {
     	exit('文件超出指定大小');
     	# code...
     }
     
     $allowSuffix=[
               'jpg',
               'gif',
               'png'
                ];
     $myImg = explode('.', $_FILES['file']['name']);//以.分割文件名返回到数组，也就是把文件名和扩展名分开。explode() 将一个字符串用指定的字符切割，并返回一个数组，这里我们将文件名用'.''切割,结果存在$myImg中，文件的后缀名即为数组的最后一个值
     $myImgSuffix = array_pop($myImg);//array_pop	弹出数组末尾的最后一个元素,根据上传文件名获取文件的后缀名
    
    //使用in_array()函数，判断上传文件是否符合要求当文件后缀名不在我们允许的范围内时退出上传并返回错误信息
     if (!in_array($myImgSuffix, $allowSuffix)) {
     	exit('文件后缀不符');
     
     }

     /*
mime类型和文件后缀名的对应关系，我们可以通过很多途径查询到，为了避免用户自主修改文件后缀名造成文件无法使用。
mime类型也必须做出限制检查mime类型，是为了防止上传者直接修改文件后缀名
导致文件不可用或上传的文件不符合要求。
*/
//数组内容为允许上传的mime类型
  $allowMime=[
            "image/jpg",
            "image/jpeg",
            "image/pjpeg",
            "image/gif",
            "image/png"
             ];


    if (!in_array($_FILES['file']['type'],$allowMime)) {
    	//判断上传文件的mime类型是否在允许的范围内
    	exit('文件格式不正确，请检查');
    	//如果不在允许范围内，退出上传并返回错误信息
    
    }
    //指定上传文件夹
    $path="up/";
  /*
根据当前时间生成随机文件名，本行代码是使用当前时间 + 随机一个0-9的数字组合成文件名，后缀即为前面取到的文件后缀名
*/
 $name=date('Y').date('m').date('d').date('H').date('i').date('s').rand(0,9).'.'.$myImgSuffix;

 //使用is_uploaded_file()判断是否是上传文件,函数介绍见上文
   if (is_uploaded_file($_FILES['file']['tmp_name'])) {

//使用move_uploaded_file()移动上传文件至指定位置,第一个参数为上传文件，第二个参数为我们在前面指定的上传路径和名称。

           
              if (move_uploaded_file($_FILES['file']['tmp_name'],$path.$name)) {
              	echo "上传成功";
              	
              }else{
            //文件移动失败，检查磁盘是否有足够的空间，或者linux类系统中文件夹是否有足够的操作权限

           echo '上传失败';  
              }
      
   }else{
   	echo "不是上传的文件";
   }


}