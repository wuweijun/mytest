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
	echo $Buyer1->money = 20;

	//修改属性（数据）
	$Buyer1->name = '吴伟俊';
	echo $Buyer1->name;

	echo '<hr/>';

	//访问成员方法
	echo $Buyer1->ShowClassName();





	/**
	 * 
	 */
	class Person 
	{
		private $name;
		protected $age;
		protected $money;
		const PI = 3.14;
		
		//构造方法初始化属性。低版本
		function __construct($m)
		{
			echo __CLASS__;
			$this->money = $m;
		}
	}

	$Person1 = new Person(100);
	var_dump($Person1); //查看数据

	echo '<hr/>';
	//类访问类常量用::
	echo Person::PI; 




	
 ?>