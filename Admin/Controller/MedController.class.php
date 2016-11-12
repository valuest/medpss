<?php
namespace Admin\Controller;
use Think\Controller;
class MedController extends Controller{
    //药品展示
//    function show1(){
//        //使用Medmodel
////      $med = new \Model\MedModel();//命名空间方式实例化Model
////      var_dump($med);
////        $med = D('Med');
////        var_dump($med);
//        $med = new \Model\MedModel();//命名空间方式实例化Model
//        $info = $med->select();//Select * From 'roc_med'
////        dump($info);
//        $this ->assign('info',$info);
//        $this ->display();
//    }
//        function show2(){
//        //分页输出
//        $Page = new \Think\Page($count,10);
//        $show = $Page->show();
//        $med = new \Model\MedModel();//命名空间方式实例化Model
////        $info = $med->select();//Select * From 'roc_med'
//        $info =D("med")->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();
//        $this ->assign('info',$info);
//        $this ->assign('page',$show);
//        $this ->display();
//    }
        function show() {
        $med = D('med');      
//      $where = "med_id>0";
        $count = $med->where($where)->count();
        $p = getpage($count,15);
        $info = $med->where($where)->order('med_id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $info); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
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
        $med = D('med');
        $med ->group('med_type');
        $info1 = $med->select();
        $this ->assign('info1',$info1);
        $med ->group('med_supplier');
        $info2 = $med->select();
        $this ->assign('info2',$info2);
        //$med ->field("med_type","med_supplier");
        
        
        //两个逻辑:展示表单,收集表单
        if(!empty($_POST)){
           //dump($_POST);//测试收集表单数据
            $z = $med ->add($_POST);
            if($z){
               $this->redirect('show',array(),1,药品信息添加成功);
            }else{
               $this->redirect('addmed',array(),2,药品信息添加失败);
            }
        }else{
           $this ->display(); 
        }  
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
}

