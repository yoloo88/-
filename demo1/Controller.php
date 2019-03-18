<?php
class Controller
{
	public function show()
	{
		//从模型中获取数据
		$data = Model::getDate();
		//展示数据
		echo View::display($data);
	}
}