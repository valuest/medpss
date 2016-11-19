<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\MedpssController;

class InventoryController extends MedpssController{
    //库存展示
    function showin(){
        $med = D('med');      
        $count = $med->where($where)->count();
        $p = getpage($count,15);
        $info = $med->where($where)->order('med_id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $info); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();   
    }
    
    //库存管理
    function managein(){
        $med = D('med');
        $count = $med->where($where)->count();
        $p = getpage($count,15);
        $info = $med->where($where)->order('med_id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $info); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();      
    }
    
    //库存维护
    function changein(){
        
    
     $med = D('med');
        if(!empty($_POST)){
            $z = $med ->save($_POST);
            if($z){
               $this->redirect('managein',array(),1,药品信息修改成功);
            }else{
               $this->redirect('changein',array('med_id'=>$med_id),1,药品信息修改失败);
            }
        }else{
            //根据med_id获得被修改商品信息
        $info = $med->find($med_id);//find()只返回一条记录[一维数组形式返还]
        $this ->assign('info',$info);
        $this->display();
        }   
     }          
    //库存报警
    function warning(){
        $med = D('med');
        $med ->where('med_inventory<100')->order('med_inventory');
        $info = $med->select();
        $this->assign('info',$info);
        $this->display();
    }
    //出库管理
    function manageoutin(){
        $med = D('med');
        $med ->where('med_inventory<100')->order('med_inventory');
        $info = $med->select();
        $this->assign('info',$info);
        $this->display();
    }
    //入库管理
    function manageinin(){
        $med = D('med');
        $med ->where('med_inventory<100')->order('med_inventory');
        $info = $med->select();
        $this->assign('info',$info);
        $this->display();
    }
    
}

