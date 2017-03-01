<?php
return array(
    //'配置项'=>'配置值'
    'DEFAULT_MODULE'        =>  'Home',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'Manager', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'login', // 默认操作名称
    //页面底部显示跟踪信息
   // 'SHOW_PAGE_TRACE' =>true,
    //默认分组设置
    'DEFAULT_MOUDLE' =>'Admin', //默认模块
    'MOUDLE_ALLOW_LIST'=>array('Home','Admin'),//定义可访问的分组
    //Smarty模版引擎切换
    'TMPL_ENGINE_TYPE' => 'Smarty',
    //数据库连接
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'medpss',    // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '',          // 端口
    'DB_PREFIX'             =>  'st_',      // 数据库连接参数    
    'DB_DEBUG'  	    =>  TRUE,        // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
);