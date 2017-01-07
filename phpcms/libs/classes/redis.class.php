<?php
	class RedisWith
	{
		private $host,$port,$timeout;
		public $redis;
		/*
			//已经用过的key
			jianglishi_html_set   // 讲历史PC端 对接 手机端 生成使用
		*/
		public function __construct($type=0,$host='113.107.248.251',$port="6379",$timeout="300")
		{
			$this->host 	= $host;
			$this->port 	= $port;
			$this->timeout 	= $timeout;
			$this->redis 	= new redis();
			if(!$type){
				$this->redis->connect($this->host,$this->port,$this->timeout);
			} else {
				$this->redis->pconnect($this->host,$this->port,$this->timeout);
			}
		}

		//百度 sitemap 主动推送队列
		public function baidu_sitemap($url)
		{
			if(!$url)return false;
			$this->redis->lpush('baidu_sitemap',$url);
		}


		//详情页缓存生成调用
		public function qsw521_template_cache_app($type=1,$arr=array())
		{
			$type = intval($type);
			switch ($type) 
			{
				case '1': 	// 获取key
						$red = $this->redis->get('qsw521_template_cache_app');
						if($red)return json_decode($red,true);
						return '';
					break;
				case '2':
						$type 	= $this->redis->get('qsw521_template_cache_app');
						if(!$type){
							$this->redis->setex('qsw521_template_cache_app',3600,json_encode($arr));
						}
					break;
				default:
					$red = $this->redis->get('qsw521_template_cache_app');
					if($red)return json_decode($red,true);
					return '';
				break;
			}
		}
	}