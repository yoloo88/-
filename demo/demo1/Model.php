<?php
/**
 * 
 */
class Model
{
	
  public static function getDate()
	{
		$data = array(
                   array('id'=>101,'姓名'=>'小王','年龄'=>22,'工资'=>3800),
                   array('id'=>102,'姓名'=>'小娟','年龄'=>26,'工资'=>4000),
                   array('id'=>103,'姓名'=>'小余','年龄'=>28,'工资'=>5800),

		);
		return $data;
	}
}