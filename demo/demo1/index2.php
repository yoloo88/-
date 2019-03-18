<?php
$data = [
  ['id'=>101,'姓名'=>'小王','年龄'=>22,'工资'=>3800], 
  ['id'=>102,'姓名'=>'小娟','年龄'=>26,'工资'=>4000],  
  ['id'=>103,'姓名'=>'小余','年龄'=>28,'工资'=>5800],       
];
var_dump($data);
print("<br><pre>");//pre 元素可定义预格式化的文本。被包围在 pre 元素中的文本通常会保留空格和换行符。而文本也会呈现为等宽字体。
print_r($data);
print("</pre>");
$data2 = array
   (
      array('id'=>101,'姓名'=>'小王','年龄'=>22,'工资'=>3800),
      array('id'=>102,'姓名'=>'小娟','年龄'=>26,'工资'=>4000),
      array('id'=>103,'姓名'=>'小余','年龄'=>28,'工资'=>5800),

   );
   print("<br><pre>");
   print_r($data2);
   print("</pre>");
echo "<h3 align='center'>用户信息表</h3>";
echo '<table border="1" cellpadding="0" cellpadding="0" width="50%" align="center">
       <tr>
       <th>id</th>
       <th>姓名</th>
       <th>年龄</th>
       <th>工资</th>
        </tr>';

foreach ($data2 as $key => $value) 
     {
	echo '<tr><td>'.$value["id"].'</td>';
	echo '<td>'.$value["姓名"].'</td>';
	echo '<td>'.$value["年龄"].'</td>';
	echo '<td>'.$value["工资"].'</td></tr>';
	
     }
     
echo "</table>";