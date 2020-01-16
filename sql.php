<?php  
	/**
	 * 利用mysqli来实现连接数据库。数据库操作类
	 */
	class sql
	{
		//设置属性
		public $host;
		public $port;
		public $user;
		public $pass;
		public $dbname;
		public $charset;

		function __construct(array $info = array())
		{
			# code...构造方法
			$this->host = $info['host'] ?? 'loclhost';
			$this->port = $info['port'] ?? '3306';
			$this->user = $info['user'] ?? 'root';
			$this->pass = $info['pass'] ?? 'root';
			$this->dbname = $info['dbname'] ?? 'tset';
			$this->charset = $info['charset'] ?? 'utf8';
		}
	}
?>