<?php

namespace Admin\Controller;
//use Think\Controller;
use Tools\MedpssController;

class SystemController extends MedpssController{
    //用户管理  
    function manageuser(){
        $info = D('manager')->where("mg_id not in('1')")->select();
        $this->assign('info',$info);
        $this->display();
    }
    //修改用户
    function changeuser($mg_id){
        $mg = D('manager');
        $mg_info = $mg->find($mg_id);
        //定义角色选择
        $role =D ('role');
        $infoA = $role ->find($mg_info['mg_role_id']);
        //$this->assign('role_info',$role_info);
        
        $infoB = $role ->select();
        $this->assign('infoA',$infoA);
        $this->assign('infoB',$infoB);
        //dump($infoA);
        
        if(!empty($_POST)){
            $z = $mg ->save($_POST);
            if($z){
               $this->redirect('manageuser',array(),1,信息修改成功);
            }else{
               $this->redirect('changeuser',array('mg_id'=>$mg_id),1,信息修改失败);
            }
        }else{
            
        $info = $mg->find($mg_id);//find()只返回一条记录[一维数组形式返还]
        $this ->assign('info',$info);
        $this->display();
        }          
    }
    //添加用户
    function adduser(){

        $role =D ('role');
        $info = $role ->select();
        $this->assign('info',$info);
        
        $user = D('manager');
        if(!empty($_POST)){
            //$add = $user->validate($rules) ->create();//收集表单[$_POST]信息返回,并触发表单验证,过滤非法字段
            $add = $user->create();
            if($add){
                   if($user->add($add)){
                      $this->redirect('manageuser',array(),1,信息添加成功);
                   }
            }else{
                //dump($role->getError());
//                $this->assign('errorInfo',$user->getError());
            }
        }
        $this->display();
    }
    //删除用户
    function deleteuser($mg_id){
        $user = D('manager');
        $info = $user->find('info',$info);
        $z = $user->delete($mg_id);
        if($z){
               $this->redirect('manageuser',array(),1,信息删除成功);
            }else{
               $this->redirect('manageuser',array('mg_id'=>$mg_id),1,信息删除失败);
            }
    }
    
    
    //添加角色
    function addrole(){
        $rules = array(
            array('role_name','require','NOT NULL!!!'),
            );
        $role = D('role');
        if(!empty($_POST)){
            $add = $role->validate($rules) ->create();//收集表单[$_POST]信息返回,并触发表单验证,过滤非法字段
            if($add){
                   if($role->add($add)){
                      $this->redirect('manageauth',array(),1,信息添加成功);
                   }
            }else{
                //dump($role->getError());
                $this->assign('errorInfo',$role->getError());
            }
        }
        $this->display();
    }
    //删除角色
    function deleterole($role_id){
        $role = D('role');
        $info = $role->find('info',$info);
        $z = $role->delete($role_id);
        if($z){
               $this->redirect('manageauth',array(),1,信息删除成功);
            }else{
               $this->redirect('manageauth',array('role_id'=>$role_id),1,信息删除失败);
            }
    }
    //权限管理
    function manageauth(){
        $info = D('role')->where("role_id not in('0')")->select();
        $this->assign('info',$info);
        $this->display();
    }
    //分配权限
    function distribute($role_id){
        $role =new \Model\RoleModel();
        //展示和收集
        if(!empty($_POST)){
            //dump($_POST);
            ////role_id auth_id(array)
            //收集所选权限,并制作成数据表相应的格式保存
            $z=$role->saveRole($_POST['role_id'],$_POST['auth_id']);
            if($z){
                $this ->redirect('manageauth',array(),2,'权限分配成功!');
            }else{
                $this ->redirect('distribute',array('role_id'=>$role_id),2,'权限分配失败!');
            }
        } else {
            //查询角色信息 
            $role_info = $role->find($role_id);
            //查询当前角色已经拥有的权限
            $have_authids = $role_info['role_auth_ids'];
            $have_authids = explode(',', $have_authids);//将字符串变成数组,使判断更严谨
            //
            //获得权限信息
            $auth_infoA = D('auth')->where("auth_level=0 and auth_id not in('107')")->select();
            $auth_infoB = D('auth')->where("auth_level!=0 and auth_id not in('131')")->select();
           // $auth_infoC = D('auth')->where("auth_level=2 ")->select();
            
            $this->assign('role_info', $role_info);
            $this->assign('have_authids', $have_authids);
            $this->assign('auth_infoA', $auth_infoA);
            $this->assign('auth_infoB', $auth_infoB);
           // $this->assign('auth_infoC', $auth_infoC);
            //dump($auth_infoB);
            $this->display();
        }
    }
    function showauth(){
        //获得全部权限信息
        $auth = D('auth');
        //$info = D('auth')->order('auth_path')->select();
        //数据过多,分页处理
        
        $count = $auth->where($where)->count();
        $p = getpage($count,12);
        $info = $auth->where($where)->order('auth_path')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info',$info);
        $this->assign('page', $p->show());
        $this->display();
    }

    function addauth(){
        $auth = new \Model\AuthModel();
        if(!empty($_POST)){
            $z = $auth ->saveAuth($_POST);//利用算法制作auth_path和auth_level
            if($z){
               $this->redirect('showauth',array(),1,添加权限信息成功);
            }else{
               $this->redirect('addauth',array('auth_id'=>$auth_id),1,添加权限信息失败);
            }
        }else{
            //获取1级权限
            $auth_infoA = $auth->where('auth_level=0')->select();
            $this->assign('auth_infoA',$auth_infoA);
            $this->display();
        } 
    }
            
    function changeauth($auth_id){
        $auth = D('auth');
        $auth_info = $auth->where('auth_level=0')->select();
        $this->assign('auth_info', $auth_info);
        //echo $_GET['auth_id']; 
        if(!empty($_POST)){
            $z = $auth ->save($_POST);
            if($z){
               $this->redirect('showauth',array(),1,权限信息修改成功);
            }else{
               $this->redirect('changeauth',array('auth_id'=>$auth_id),1,权限信息修改失败);
            }
        }else{
            //根据auth_id获得被修改商品信息
        $info = $auth->find($auth_id);//find()只返回一条记录[一维数组形式返还]
        $this ->assign('info',$info);
        $this->display();
        }          
    }
    function deleteauth($auth_id){
        $auth = D('auth');
        $info = $auth->find('info',$info);
        $z = $auth->delete($auth_id);
        if($z){
               $this->redirect('showauth',array(),1,权限信息删除成功);
            }else{
               $this->redirect('showauth',array('auth_id'=>$auth_id),1,权限信息删除失败);
            }
   
    }
}

