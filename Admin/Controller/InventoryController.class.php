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
    //出库管理(显示未入库订单)
    function manageoutin(){
        $sale = D('sales');      
        //$info = $sale->where("status=0") ->select();
        $info = $sale->query("select *,case when status = 1 then '已出库'
                                           when status = 0 then '未出库'
                                           end as status
                                           from st_sales where status='0'");
        
        //$this->assign('infoA',$infoA);
        $this->assign('info', $info); // 赋值数据集
        $this->display();
    }
    //出库管理(显示更多订单:已处理的订单)
    function show_oldout(){
        $out = D('outorder');      
        $info = $out ->select();
        $this->assign('info', $info); // 赋值数据集
        $this->display();
    }
    //确认出库
    function saveout($orderpo){
        $sales = D('sales');
        $info = $sales->find($orderpo);//find()只返回一条记录[一维数组形式返还]
        //session($orderpo);
        $sale_orderpo = $info['orderpo'];
        $med_ids = $info['med_id'];
        $med_name = $info['med_name'];
        $med_count = $info['count'];
        $admin_name = session('user_name');
        $out_date = date('Y-m-d H:i:s');
        $id = explode(",",$info['med_id']); 
        $med = D('med');
        $count = explode(",",$info['count']);
        foreach($id as $k=>$v){
            $med_id = $v;
            $med_out= $count[$k];
            $med_result = $med->where("med_id=$med_id")->setDec('med_inventory',$med_out);//出库更新库存
        }
        //修改订单状态
        $sale_result = $sales->execute("update st_sales set status='1' where orderpo='$sale_orderpo'");
        //保存成出库订单
        $out_order = D();
        $orderCode = CK . date('Ymd').substr(implode(NULL,array_map('ord',str_split( substr(uniqid(), 7, 13) , 1))), 0, 8) ;
        $out_result = $out_order->execute("insert st_outorder set out_order='$orderCode',"
                . "out_date='$out_date',"
                . "out_medid='$med_ids'," 
                . "out_medname='$med_name',"
                . "out_medcount='$med_count',"
                . "sale_order='$orderpo',"   
                . "out_user='$admin_name'");
        if($med_result){
            $this->redirect('show_oldout',array(),1,药品出库成功);
        }
    }
    //出库清单
    function out_orders($out_order){
        $out = D('outorder');
        $info = $out->find($out_order);//find()只返回一条记录[一维数组形式返还]
        //dump($info);
        $id = explode(",",$info['out_medid']);
        $med = explode(",",$info['out_medname']);
        $count = explode(",",$info['out_medcount']);
        $this->assign('info',$info);
        $this ->assign('id',$id);
        $this ->assign('med',$med);
        $this ->assign('count',$count);
        $this->display();
    }
    //删除出库清单
    function deleteout($out_order){
        $out = D('outorder');
        $info = $out->find('info',$info);
        $z = $out->delete($out_order);
        if($z){
               $this->redirect('show_oldout',array(),1,出库清单删除成功);
            }else{
               $this->redirect('show_oldout',array(),1,删除失败);
            }
    }
    
    
    
    
    
    
    
    
    
    
    
    //入库管理(未入库清单)
    function manageinin(){
        $pur= D('purchase');      
        //$info = $pur->where("status=0") ->select();
        $id = $info['orderpo'];
        $info = $pur->query("select *,case when status = 1 then '已入库'
                                           when status = 0 then '未入库'
                                           end as status
                                           from st_purchase where status='0'");
        //dump($info);
        //$this->assign('infoA',$infoA);
        $this->assign('info', $info); // 赋值数据集
        $this->display();
    }
    //
    //(已入库清单)
    function show_oldin(){
        $in = D('inorder');      
        $info = $in ->order('in_date')->select();
        $this->assign('info', $info); // 赋值数据集
        $this->display();
    }
    //确认入库
    function savein($orderpo){
        $pur = D('purchase');
        $info = $pur->find($orderpo);//find()只返回一条记录[一维数组形式返还]
        $pur_orderpo = $info['orderpo'];
        //dump($pur_orderpo);
        $med_ids = $info['med_id'];
        $med_name = $info['med_name'];
        $med_count = $info['count'];
        $admin_name = session('user_name');
        $in_date = date('Y-m-d H:i:s');
        $id = explode(",",$info['med_id']); 
        $med = D('med');
        $count = explode(",",$info['count']);
        foreach($id as $k=>$v){
            $med_id = $v;
            $med_in= $count[$k];
            $med_result = $med->where("med_id=$med_id")->setDec('med_inventory',$med_in);//出库更新库存
        }

        //修改订单状态
        $pur_result = $pur->execute("update st_purchase set status='1' where orderpo='$pur_orderpo'");
        
        //保存成出库订单
        $in_order = D();
        $orderCode = RK . date('Ymd').substr(implode(NULL,array_map('ord',str_split( substr(uniqid(), 7, 13) , 1))), 0, 8) ;
        $in_result = $in_order->execute("insert st_inorder set in_order='$orderCode',"
                . "in_date='$in_date',"
                . "in_medid='$med_ids'," 
                . "in_medname='$med_name',"
                . "in_medcount='$med_count',"
                . "pur_order='$orderpo',"    
                . "in_user='$admin_name'");
        if($med_result){
            $this->redirect('show_oldin',array(),1,药品入库成功);
        }
    }
    //入库清单详情
    function in_orders($in_order){
        $in = D('inorder');
        $info = $in->find($in_order);//find()只返回一条记录[一维数组形式返还]
        $id = explode(",",$info['in_medid']);
        $med = explode(",",$info['in_medname']);
        $count = explode(",",$info['in_medcount']);
        $this->assign('info',$info);
        $this ->assign('id',$id);
        $this ->assign('med',$med);
        $this ->assign('count',$count);
        $this->display();
    }
    
    //删除入库清单
    function deletein($in_order){
        $in = D('inorder');
        $info = $in->find('info',$info);
        $z = $in->delete($in_order);
        if($z){
               $this->redirect('show_oldin',array(),1,出库清单删除成功);
            }else{
               $this->redirect('show_oldin',array(),1,删除失败);
            }
    }
}

