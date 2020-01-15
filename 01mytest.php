<?php 
	/**
	 * 
	 */
	class Buyer
	{
		
		public $name;
		public $money = 0;
		public function ShowClassName()
		{
			echo __CLASS__;
		}
	}

	//实例化：对象保存在堆区
	$Buyer1 = new Buyer();
	//var_dump($Buyer1);
	
	//访问属性（数据）
	echo $Buyer1->money;

	//修改属性（数据）
	$Buyer1->name = '吴伟俊';
	echo $Buyer1->name;

	echo '<hr/>';

	//访问成员方法
	echo $Buyer1->ShowClassName();



	
 ?>