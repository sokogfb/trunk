<?php
//测试环境
date_default_timezone_set('Asia/Shanghai');  


// php.ini 关闭 magic_quotes_gpc  magic_quotes_runtime
if (get_magic_quotes_gpc() == true) {
	die("fatal error: please set php.ini magic_quotes_gpc=off ");
}


///-----------------------------------------------// 包含文件

require dirname(dirname(__FILE__)).'/libs/phpmailer/class.phpmailer.php';


include(dirname(__FILE__).'/attr.php'); 
include(dirname(__FILE__).'/acc.php');
include(dirname(__FILE__).'/fun.php');

///-----------------------------------------------// 系统消息

$g_sys_name				= "云驴通";
$g_sys_home				= "http://www.cloota.com";
$g_sys_version			= 'C';


///-----------------------------------------------// 域名消息 
$g_host_root_domain		= 'echinabus.cn'; 
$g_host_console			= 'http://'.$_SERVER['HTTP_HOST'].'/console/';
$g_shop_root_domain		= 'echinabus.cn';

$host 					= 'wwwt.bus365.cn';//api address
$loginUrl				= 'http://wwwt.bus365.cn/login0';
$registerUrl			= 'http://wwwt.bus365.cn/user/registerpage/?ismock=0';//注册地址
//http://wwwd.bus365.cn,http://wwwt.bus365.cn,http://wwwm.bus365.cn
//https://www.bus365.cn
$g_bus365_domain        = 'http://wwwt.bus365.cn';
$g_self_domain			= 'http://travelt.bus365.cn';
///-----------------------------------------------// DEBUG模式
$g_console_debug		= false;
$g_is_demo_site			= false;
?>