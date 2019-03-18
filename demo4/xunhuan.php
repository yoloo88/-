<?php
echo <<<FORM
<h2>表格自动生成器</h2>
<form action="" method="post">
请输入：<input type="number" name="rows">行
<input type="number" name="cols">列
<input type="submit" value="提交">
</form>
FORM;
$rows=isset($_POST['rows']) ? $_POST['rows'] : 0;
$cols=isset($_POST['cols']) ? $_POST['cols'] : 0;
echo '<table border="1" cellspacing="0" cellpadding="5">';
//for循环
for ($i=0; $i <$rows ; $i++) { 
  echo '<tr>';
  for ($j=0; $j <$cols ; $j++) { 
  	echo '<td>'.($i*$cols+$j).'</td>';
  }
  echo '</tr>';
	
}
//用while循环

// $i=0;
// while ($i<$rows) {
// echo "<tr>";
//   $j=0;
//   while ($j<$cols) {
  	
//   	echo "<td>".($i*$cols+$j)."</td>";
//   	$j++;
//   }
//   	$i++;
// echo "</tr>";
// }

echo "</table>";