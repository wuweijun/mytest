<?php 
	/**
	 * 
	 */
	class Person
	{
		public $money = 0;
		public static $count = 0; //静态的东西属于类，不会进到对象里面去
		

	}

	$p1 = new Person();
	var_dump($p1);
	echo $p1->money;
	
 ?>