<?php
class weed{
	public function xinqi($dea){

		if($dea<6){
			echo "是工作日";
		}elseif($dea==6){
			echo "是星期6";
		}elseif($dea==0){
			echo "是星期天";

		}
			else{
               echo "没有星期".$dea;
			}
				
		}
	}

$da=date('w');//这个可以获取数字星期比如123，注意0是星期日
$daad=new weed();
$daad->xinqi($da);

class tools
{
  public function tool($tool){
             switch ($tool) {//条件 满足那个条件就执行那个。
             	case 1:
             	echo "星期一就走路吧";
             		# code...
             		break;
             	case 2:
             	echo "星期二就骑单车吧";
             	    break;
             	case 3:
             	echo "星期三就坐公交车吧";  
             	   break;
             	case 4:
             	echo "星期四就打的吧";
             	  break;
             	case 5:
             	echo "星期五就开车吧";
             	break;
             	case 6:
             	echo "星期六在家休息";
             	break;
             	
             	default:
             	echo "星期天出去走走";
             		# code...
             		break;
             }

}

}
$doa=rand(1,7);
$dao=new tools();
$dao->tool($doa);

$count=0;
while ($count<=10) { //while后面接布尔值判断，为真执行，为假停止
	echo "<br>我是小平，这是我的第{$count}次上班";
	$count++;
}

//下面学习while  和if else 来做隔行变色每行10个数字。
$i=0;
echo '<br><table width="800" border="1">';
while ($i<100) 
{
	//0 - 9 为一行
        //10 -19 为一行
        //因此，每一行都能够被10求默，如为为10的时候，应该显示行开始的标签
       if($i%10==0){
                    //为了隔行变色，每20，40，60每行的颜色不同的，因此我们又可以再进行一次取余运算
       	if($i%20==0){
       		echo "<tr>";
       	}else{
       		echo "<tr bgcolor='pink'>";
       	}
       }
        echo "<td>{$i}</td>";
                  //同理，每一行结束是不是应该有一个</tr>结束标签呢？
        $i++;
       if($i%10==0){
       	echo "</tr>";

       }
       
}
echo "</table>";


$ii = 0;
do { //do while 前执行一次，再去看条件
 echo $ii;
 $ii++;

} while ($ii < 10);

//下面学习for循环
/*
表达式1 是初始化赋值，可以同时赋值多个代码。
表达示2 在每次循环开始前求值。如果值为 TRUE，则继续循环，执行嵌套的循环语句。如果值为 FALSE，则终止循环。
表达示3 在每次循环之后被求值。
 */
for($i=0;$i<5;$i++){
	echo "<br>我们结婚{$i}年了";
}

//9 9 乘法表
echo "<br>";
for($i=1;$i<10;$i++){
	for($j=1;$j<=$i;$j++){
      echo $i."x".$j."=".($i*$j)."  ";

	}
	echo "<br>";
}
