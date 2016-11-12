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
        $this ->display();
    }
}

