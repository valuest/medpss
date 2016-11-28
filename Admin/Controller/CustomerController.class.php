<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\MedpssController;

class CustomerController extends MedpssController{
    //客户展示
    function showcus(){ 
        $cus = D('customer');      
        $count = $cus->where($where)->count();
        $p = getpage($count,10);
        $info = $cus->where($where)->order('cus_id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $info); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }
    //客户管理
    function managecus(){
        $cus = D('customer');      
        $count = $cus->where($where)->count();
        $p = getpage($count,10);
        $info = $cus->where($where)->order('cus_id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $info); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this ->display();
    }
    //添加客户
    function addcus(){
        //验证规则
        $rules = array(
            //应用商名称
            //array('cus_name','', '客户已存在', 0, 'unique'),
            array('cus_name', 'require', '名称不能为空'),
            //手机号码
            array('cus_phone', '11', '手机号码长度过短', 0, 'length'),
            array('cus_phone', 'number', '请填写正确的手机号码'),
            //银行帐户
            array('cus_bcard', '19', '请输入正确的银行帐户',0,'length'),
            array('cus_bcard', 'number', '请输入正确的银行帐户'),
            //Email
            array('cus_email', 'email', '请输入正确的邮箱地址'),
            //通讯地址
            array('cus_address', 'require', '通讯地址不能为空'),
        );//动态验证

        $cus = new \Model\CustomerModel();
        //$cus = D('customer');
        //带表单验证添加信息
        if(!empty($_POST)){
            $add = $cus->validate($rules) ->create();//收集表单[$_POST]信息返回,并触发表单验证,过滤非法字段
            if($add){
                   if($cus->add($add)){
                      $this->redirect('showcus',array(),1,添加客户成功);
                   }
            }else{
                //dump($cus->getError());
                $this->assign('errorInfo',$cus->getError());
            }
        }
        $this ->display(); 
    }
    //修改
    function changecus($cus_id){
        $cus = D('customer');
        //echo $_GET['cus_id']; 
        if(!empty($_POST)){
            $z = $cus ->save($_POST);
            if($z){
               $this->redirect('managecus',array(),1,药品信息修改成功);
            }else{
               $this->redirect('changecus',array('cus_id'=>$cus_id),1,药品信息修改失败);
            }
        }else{
            //根据cus_id获得被修改商品信息
        $info = $cus->find($cus_id);//find()只返回一条记录[一维数组形式返还]
        $this ->assign('info',$info);
        $this->display();
        }          
    }
    
    
    //删除
    function deletecus($cus_id){
        $cus = D('customer');
        $info = $cus->find('info',$info);
        $z = $cus->delete($cus_id);
        if($z){
               $this->redirect('managecus',array(),1,药品信息删除成功);
            }else{
               $this->redirect('managecus',array('cus_id'=>$cus_id),1,药品信息删除失败);
            }
    }
}

