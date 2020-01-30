<?php 
	class Saler
	{
		private static $count = 0;
		private function __construct(){
			echo "成功了";
		}

		public static function getInstance()
		{
			return new self; //代表类名Saler
		}
				
	}

	Saler::getInstance(); //通过访问静态方法new一个对象
 ?>