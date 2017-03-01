<?php 
//phpinfo(); 

header('Content-Type:text/html; charset=utf-8');
//引用thinkphp框架制作药品进销存管理系统
//开发模式
define('APP_DEBUG',true);
//静态资源文件访问目录设置常量
//Home分组
define('CSS_URL','/medpss/Public/css/');
define('IMG_URL','/medpss/Public/images/');
define('JS_URL','/medpss/Public/js/');
//Admin分组
define('ADMIN_CSS_URL','/medpss/Admin/Public/css/');
define('ADMIN_IMG_URL','/medpss/Admin/Public/images/');
define('ADMIN_JS_URL','/medpss/Admin/Public/js/');
//引入框架接口文件
include('../ThinkPHP/ThinkPHP.php'); 
 
