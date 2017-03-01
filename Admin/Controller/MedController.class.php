<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\MedpssController;

class MedController extends MedpssController{ 
    //药品信息
//    function show() {
//        $med = D('med');      
//        $count = $med->where($where)->count();
//        $p = getpage($count,15);
//        $info = $med->where($where)->order('med_id')->limit($p->firstRow, $p->listRows)->select();
//        $this->assign('info', $info); // 赋值数据集
//        $this->assign('page', $p->show()); // 赋值分页输出
//        $this->display();
//    }
     function showlist() {
        $med = D('med');      
//      $where = "med_id>0";
        $count = $med->where($where)->count();
        $p = getpage($count,15);
        $info = $med->where($where)->order('med_id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $info); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        //查询测试
        $this->display();
    }

    //药品管理
    function managemed(){
        $med = D('med');
        $count = $med->where($where)->count();
        $p = getpage($count,15);
        $info = $med->where($where)->order('med_id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $info); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this ->display();
    }
    //添加药品
    function addmed(){
        //验证规则
        $rules = array(
            //国药准字号med_approvalnumber唯一验证
            array('med_approvalnumber', '', '该准字号已存在', 0, 'unique'),
            array('med_approvalnumber', '9', '请填写正确的国药准字号', 0, 'length'),
            //药品名验证
            array('med_name', 'require', '药品名不能为空'),
            //生产厂家med_manufacturer验证
            array('med_manufacturer', 'require', '不能为空'),
            //规格med_norms可为空
            //药品剂型med_form
            array('med_form', 'require', '药品剂型不能为空'),
            //类型
            array('type_name', '1', '请选择药品类型',0,'notin'),
            //采购价格:不能为空,药价只能为2-4位数字
            //array('med_inprice','require','药品名不能为空'),
            array('med_inprice', '2,4', '请输入2-4位药品价格', 0, 'length'),
            array('med_inprice', 'number', '请输入2-4位药品价格'),
            //销售价格:不能为空,药价只能为2-4位数字
            //array('med_price','require','药品名不能为空'),
            array('med_price', '2,4', '请输入2-4位药品价格', 0, 'length'),
            array('med_price', 'number', '请输入2-4位药品价格'),
            //库存不能填写
            //供应商不能为空
            array('sup_name', '1', '请选择供应商',0,'notin'),
        );//动态验证

        $med = new \Model\MedModel();//调用MedModel的方法
        //$med = D('med');
//        $med ->group('med_type');
//        $info1 = $med->select();
//        $this ->assign('info1',$info1);
        $type= D('medtype');
        $type->field('type_name');
        $info1 = $type->select();
        $this->assign('info1',$info1);
        $sup = D('supplier');
        $sup ->field('sup_name');
        $info2 = $sup->select();
        $this ->assign('info2',$info2);
        //带表单验证添加信息
        if(!empty($_POST)){
            $add = $med->validate($rules) ->create();//收集表单[$_POST]信息返回,并触发表单验证,过滤非法字段
            if($add){
                   if($med->add($add)){
                      $this->redirect('showlist',array(),1,药品信息添加成功);
                   }
            }else{
                //dump($med->getError());
                $this->assign('errorInfo',$med->getError());
            }
        }
        //dump($_POST);
        $this ->display(); 
    }
    
    //修改药品信息
    function changemed($med_id){
        $med = D('med');
        $med ->group('med_type');
        $info1 = $med->select();
        $this ->assign('info1',$info1);
        $med ->group('med_supplier');
        $info2 = $med->select();
        $this ->assign('info2',$info2);//检索用于检索药品类型和供应商,用于下拉选择
        //echo $_GET['med_id']; 
        if(!empty($_POST)){
            $z = $med ->save($_POST);
            if($z){
               $this->redirect('managemed',array(),1,药品信息修改成功);
            }else{
               $this->redirect('changemed',array('med_id'=>$med_id),1,药品信息修改失败);
            }
        }else{
            //根据med_id获得被修改商品信息
        $info = $med->find($med_id);//find()只返回一条记录[一维数组形式返还]
        $this ->assign('info',$info);
        $this->display();
        }          
    }
    
    //删除数据
    function deletemed($med_id){
        $med = D('med');
        $info = $med->find('info',$info);
        $z = $med->delete($med_id);
        if($z){
               $this->redirect('managemed',array(),1,药品信息删除成功);
            }else{
               $this->redirect('managemed',array('med_id'=>$med_id),1,药品信息删除失败);
            }
    }
    
    //药品类型管理
    function managetype(){
        $type = D('medtype');
        $info = $type->select();
        $this->assign('info',$info);
        $this->display();
    }
    function addtype(){
        //验证规则
        $rules = array(
            //药品类型唯一,不能为空
            array('type_name', '', 'X', 0, 'unique'),
            array('type_name', 'require', 'N'),
        );//动态验证
        $type = D('medtype');
        if(!empty($_POST)){
            $add = $type->validate($rules) ->create();//收集表单[$_POST]信息返回,并触发表单验证,过滤非法字段
            if($add){
                   if($type->add($add)){
                      $this->redirect('managetype',array(),1,药品类型信息添加成功);
                   }
            }else{
                //dump($type->getError());
                $this->assign('errorInfo',$type->getError());
            }
        }
        $this ->display(); 
    }
     function deletetype($type_id){
        $type = D('medtype');
        $info = $type->find('info',$info);
        $z = $type->delete($type_id);
        if($z){
               $this->redirect('managetype',array(),1,药品类型信息删除成功);
            }else{
               $this->redirect('managetype',array('med_id'=>$type_id),1,药品类型信息删除失败);
            }
    }

}

