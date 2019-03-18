<?php
class View
{
   public static function display($data)
   {
     $table = '<h3 align="center">用户信息表</h3>';
     $table .= '<table border="1" cellpadding="0" cellpadding="0" width="50%" align="center">
       <tr>
       <th>id</th>
       <th>姓名</th>
       <th>年龄</th>
       <th>工资</th>
        </tr>';
        foreach($data as $value)
        {
        	$table .= '<tr>';
        	$table .= '<td>'.$value["id"].'</td>';
        	$table .= '<td>'.$value["姓名"].'</td>';
        	$table .= '<td>'.$value["年龄"].'</td>';
        	$table .= '<td>'.$value["工资"].'</td>';
        	$table .= '</tr>';
        }
        $table .= '</table>';
        return $table;
   }

}