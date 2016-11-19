<?php
//后台分组普通控制器的父类
namespace Tools;
use Think\Controller;

class MedpssController extends Controller{
    //构造方法:实现各个方法访问过滤
    function __construct() {
        parent::__construct();//避免覆盖父类Controller的构造方法
        //echo '过滤';
        //获得当前用户的控制器和操作方法的信息
        $now_ac = CONTROLLER_NAME."-".ACTION_NAME;
        //获得当前用户允许访问的权限信息
        //admin_id-->role-->auth
        
        $admin_id =session('user_id');//获得登录用户信息,从而获得角色id
        $admin_name = session('user_name');
        
        //未登录禁止访问
        //未登录,则跳转到登录页。如果访问登录页或验证码则允许访问
        $loginac = "Manager-login,Manager-verifyImg";
        if(empty($admin_name)&& strpos($loginac,$now_ac)===false){
            //$controllerurl = __CONTROLLER__;
            $js =<<<eof
                    <script type="text/javascript">
                    window.top.location.href="../../Home/Manager/login";
                    </script>
eof;
             echo $js;       
            //$this ->redirect('Manager/login');
            exit;
        }
        
        
        $manager_info = D('manager')->find($admin_id);
        $roleid = $manager_info['mg_role_id'];
        //根据$role_id获得角色信息
        $role_info = D('role')->find($roleid);
        $auth_ac = $role_info['role_auth_ac'];
//        dump($admin_id);
//        dump($manager_info);
//        dump($roleid);
//        dump($role_info);
//        dump($auth_ac);
  //      dump($now_ac);
        
        //默认允许所有人访问的权限
        $allow_ac ="Manager-login,Manager-logout,Admin-admin,Admin-head,Admin-left,Admin-right";
        
        //当前访问的权限与允许访问的权限对比
        //越权访问过滤判断
        //1.当前访问的权限必须出现其权限列表中
        //2.当前访问权限不属于默认允许权限
        //strpos(),判断一个小字符串在一个大字符串中出现位置
        if(strpos($auth_ac, $now_ac)==false&&strpos($allow_ac, $now_ac)==false&&$admin_name!=='admin'){
            exit('无权访问!');
        }
    }
}


