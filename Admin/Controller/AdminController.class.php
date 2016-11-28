<?php
namespace Admin\Controller;
use Tools\MedpssController;
//use Think\Controller;

class AdminController extends MedpssController{
    function admin(){
        $this ->display();
    }//索引页(整合)
    function head(){
        $this ->display();
    }//头部
    
    
    function left(){
        //根据管理员获取角色,进而获取角色权限
        //1.根据管理员地信息获得本身记录信息
        $admin_id = session('user_id');
        $admin_name = session('user_name');
        
        $manager_info = D('manager')->find($admin_id);
        $role_id = $manager_info['mg_role_id'];
        
        //2.根据$role_id获取本身记录信息
        $role_info = D('role')->find($role_id);
        $this ->assign('role_info',$role_info);
        $auth_ids = $role_info['role_auth_ids'];
        
        //3.根据$auth_ids获得具体权限
        //管理员登录时获得所有权限
        if($admin_name===admin){
              //父级
              $auth_infoA = D('auth')->where("auth_level=0")->select();
              //子级
              $auth_infoB = D('auth')->where("auth_level=1")->select();
        }else{
        //父级
        $auth_infoA = D('auth')->where("auth_level=0 and auth_id in($auth_ids)")->select();
        //子级
        $auth_infoB = D('auth')->where("auth_level=1 and auth_id in($auth_ids)")->select();
        //$auth_info = D('auth')->select($auth_ids);
        //dump($auth_info);
        }
        $this ->assign('auth_infoA',$auth_infoA);
        $this ->assign('auth_infoB',$auth_infoB);
        $this ->display();
    }//左部
    
    
    function right(){
        //1.根据管理员地信息获得本身记录信息
        $admin_id = session('user_id');
        $manager_info = D('manager')->find($admin_id);
        $role_id = $manager_info['mg_role_id'];
        
        //2.根据$role_id获取本身记录信息
        $role_info = D('role')->find($role_id);
        session('role_name',$role_info['role_name']);
        $this ->assign('role_info',$role_info);
        $this ->display();
    }//右侧
}

