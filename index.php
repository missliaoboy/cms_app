<?php
/**
 *  index.php PHPCMS 入口
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-6-1
 */
 //PHPCMS根目录

define('PHPCMS_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('MAX_PAGES', 10);
define('BAIDU_SITEMAP_TYPE', false);  //站点 百度 sitemap 提交
include PHPCMS_PATH.'/phpcms/base.php';
pc_base::creat_app();

?>