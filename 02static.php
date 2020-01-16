<?php 
	/**
	 * 
	 */
	class Person
	{
		public $money = 0;
		public static $count = 0; //静态的东西属于类，类访问自己的东西不需要实例化对象，直接用:: 即可。对象无法访问类的东西。

		public static function showCount()
		{
			//输出静态属性
			echo self::$count,__FUNCTION__,'<br/>';
		}
		

	}

	$p1 = new Person();
	var_dump($p1);
	echo $p1->money;
	echo Person::$count,'<hr/>'; //类的静态成员访问方式。
	Person::showCount(); //调用静态方法


 ?>