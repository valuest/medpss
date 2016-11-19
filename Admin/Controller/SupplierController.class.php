<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\MedpssController;

class SupplierController extends MedpssController{
    //供应商展示
    function showsup(){
//        $sup = D('sup');
//        $info = $sup->query('SELECT sup_supplier,count(*) FROM roc_sup GROUP BY sup_supplier');
//        $info =$sup->count('sup_supplier');
//        dump($sup);
        
        $sup = D('supplier');      
        $count = $sup->where($where)->count();
        $p = getpage($count,10);
        $info = $sup->where($where)->order('sup_id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $info); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }
    //供应商管理
    function managesup(){
        $sup = D('supplier');      
        $count = $sup->where($where)->count();
        $p = getpage($count,10);
        $info = $sup->where($where)->order('sup_id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $info); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this ->display();
    }
    //添加供应商
    function addsup(){
        //验证规则
        $rules = array(
            //应用商名称
            array('sup_name','', '供应商名称已存在', 0, 'unique'),
            array('sup_name', 'require', '名称不能为空'),
            //联系人
            array('sup_princinal', 'require', '名称不能为空'),
            //电话/传真
            array('sup_fax', '8', '请填写正确的电话号码', 0, 'length'),
            array('sup_fax', 'number', '请填写正确的电话号码'),
            //手机号码
            array('sup_phone', '11', '请填写正确的手机号码', 0, 'length'),
            array('sup_phone', 'number', '请填写正确的手机号码'),
            //银行帐户
            array('sup_bcard', '19', '请输入正确的银行帐户',0,'length'),
            array('sup_bcard', 'number', '请输入正确的银行帐户'),
            //Email
            array('sup_email', 'email', '请输入正确的邮箱地址'),
            //通讯地址
            array('sup_address', 'require', '通讯地址不能为空'),
        );//动态验证

        $sup = new \Model\SupplierModel();//调用SupplierModel的方法
        //$sup = D('supplier');
        //带表单验证添加信息
        if(!empty($_POST)){
            $add = $sup->validate($rules) ->create();//收集表单[$_POST]信息返回,并触发表单验证,过滤非法字段
            if($add){
                   if($sup->add($add)){
                      $this->redirect('showsup',array(),1,添加供应商成功);
                   }
            }else{
                //dump($sup->getError());
                $this->assign('errorInfo',$sup->getError());
            }
        }
        $this ->display(); 
    }
    //修改
    
    //修改
    function changesup($sup_id){
        $sup = D('supplier');
        //echo $_GET['sup_id']; 
        if(!empty($_POST)){
            $z = $sup ->save($_POST);
            if($z){
               $this->redirect('managesup',array(),1,信息修改成功);
            }else{
               $this->redirect('changesup',array('sup_id'=>$sup_id),1,信息修改失败);
            }
        }else{
            //根据sup_id获得被修改商品信息
        $info = $sup->find($sup_id);//find()只返回一条记录[一维数组形式返还]
        $this ->assign('info',$info);
        $this->display();
        }          
    }
    
    //删除
    function deletesup($sup_id){
        $sup = D('supplier');
        $info = $sup->find('info',$info);
        $z = $sup->delete($sup_id);
        if($z){
               $this->redirect('managesup',array(),1,信息删除成功);
            }else{
               $this->redirect('managesup',array('sup_id'=>$sup_id),1,信息删除失败);
            }
    }
}

