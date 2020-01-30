<?php  
	/**
	 * 利用mysqli来实现连接数据库。数据库操作类
	 */
	class Sql
	{
		//设置属性
		public $host;
		public $port;
		public $user;
		public $pass;
		public $dbname;
		public $charset;

		//构造方法初始化数据：数据较多，应该使用数组来传递数据，关联数组，而且绝大部分的开发者本意是用来测试，所以基本都是本地，因此可以给默认数据

		//初始化：构造方法
		public function __construct(array $info = array())
		{
			# code...构造方法。成员属性=用户传过来的数组
			# 初始化：确保用户传入了数据，否则使用默认值
			$this->host = $info['host'] ?? '127.0.0.1';
			$this->port = $info['port'] ?? '3306';
			$this->user = $info['user'] ?? 'root';
			$this->pass = $info['pass'] ?? 'root';
			$this->dbname = $info['dbname'] ?? 'mysql';
			$this->charset = $info['charset'] ?? 'utf8';

			$this->sql_connect(); //实例化之后，调用连接认证方法
			$this->sql_charset(); //字符集的设定
		}

		//数据库的连接认证
		//需要增加一个属性保存mysqli的连接（对象），因为设定字符集需要跨方法访问
		public $link;
		public function sql_connect()
		{
			//利用mysqli 传入必要的参数进行初始化
			$this->link = @new mysqli($this->host,$this->user,$this->pass,$this->dbname,$this->port);

			//判定连接是否成功
			if($this->link->connect_error){
		        //mysqli对象有两个属性：connect_errno表示错误编号，connect_error表示错误信息：发生错误后终止脚本执行
				die( 'Connect Error ('  .  $this->link -> connect_errno  .  ') ' .  $this->link -> connect_error );
			}
		}

		//设定sql的字符集
		public function sql_charset(){
			//组织sql指令
			$sql = "set names {$this->charset}";
			$res = $this->link->query($sql);

			//错误判定
		    if(!$res){
		        //失败发挥false
		        die('Charset Error(' . $this->link->errno . ') ' . $this->link->error);
    }

		}
	}

	// $s = new Sql(array('charset' => 'utf8' ));	//实例化对象，测试字符集方法
	$s = new Sql();	//实例化对象
	
?>