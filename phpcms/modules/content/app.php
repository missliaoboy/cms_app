<?php
//pc端对接手机端的程序处理类，手机端百度主动推送
defined('IN_PHPCMS') or exit('No permission resources.');
//模型缓存路径
define('CACHE_MODEL_PATH',CACHE_PATH.'caches_model'.DIRECTORY_SEPARATOR.'caches_data'.DIRECTORY_SEPARATOR);
pc_base::load_app_func('util','content');
pc_base::load_app_class('admin','admin',0); 
class app
{
	private $db,$redis;
	public function __construct()
	{
        pc_base::load_sys_class('redis','',0);
        $this->redis  = new RedisWith(1);
		$this->db = pc_base::load_model('content_model');
	}

	//pc端 对接 手机端生成
	public function index()
	{  
        while ( $redis_arr = $this->redis->redis->lindex('qsw_html_set',0) ) {
            if(!$redis_arr)break;
            $list           = json_decode($redis_arr,true);
            $catid          = !empty($list['catid']) ?intval($list['catid']):'';
            $modelid        = !empty($list['modelid']) ?intval($list['modelid']):'';
            $id             = !empty($list['id']) ?intval($list['id']):'';
            if(empty($catid) || empty($modelid))continue;
            $html = pc_base::load_app_class('html', 'content');
            $this->url = pc_base::load_app_class('url', 'content');
            $this->db = pc_base::load_model('content_model');
            $this->db->set_model($modelid);
            $content_info = $this->db->get_content($catid,$id);
            $urls = $this->url->show($id, 0, $content_info['catid'], $content_info['inputtime'], $content_info['prefix'],$content_info,'add');
            if( $urls['data'] ) {
            	$html->show($urls[1],$urls['data'],0);
            }
            $this->redis->redis->lpop('jianglishi_html_set');
        }
        $this->baidu_sitemap();
        $this->type_start();
	}

	//站点百度sitemap提交
	public function baidu_sitemap()
	{
        while ( $url = $this->redis->redis->lpop('baidu_sitemap',0) ) {
    		$baidu_sitemap_model = pc_base::load_model('baidu_sitemap_model');
    		$baidu_sitemap_model->start(array($url));
        }
	}

    //类别生成
    public function type_start()
    {
        while ( $redis_arr = $this->redis->redis->lindex('qsw521_app_type_list',0) ) {
            if(!$redis_arr)break;
            $arr   = json_decode($redis_arr,true);
            $str    = PHPCMS_PATH.$arr['prefix_url']; 
            $html  = pc_base::load_app_class('html', 'content');
            switch ($arr['level']) {
                case '1':       //民族首页
                        $file   = $str.'index.html';
                        $html->category_type($arr['data'],$page,$file,$arr['template']);
                    break;
                case '2':       //民族列表页
                        $page       = 1;
                        do {
                            if($page == 1 ){
                                $file   = $str.'list_index.html';
                            } else {
                                $file   = $str.'list_'.$page.'.html';
                            }
                            $html->category_type($arr['data'],$page,$file,$arr['template']);
                            $page++;
                            $total_number = MAX_PAGES;
                        } while ($page <= MAX_PAGES);
                    break;
                default:
                    # code...
                    break;
            }
            $this->redis->redis->lpop('qsw521_app_type_list');
        }
    }
}