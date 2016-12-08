<?php
namespace Admin\Controller;
//use Think\Controller;
use Tools\MedpssController;

class TradeController extends MedpssController{
    //订单号生成
//    function build_order() {
//        $code = date('Ymd') . substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
//        
//        
//        $yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
//        $orderSn = $yCode[intval(date('Y')) - 2013] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
//        dump($code);
//        $this->display();
//    }

    //选择供应商
    function choosesup(){
        $sup = D('supplier');      
        $count = $sup->where($where)->count();
        $p = getpage($count,10);
        $info = $sup->where($where)->order('sup_id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $info); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }
    //选择药
    function purmed($sup_id){  
        $med = D('med');
        $sup = D('supplier');
        $infoA = $sup->find($sup_id);
        session('sup_id',$sup_id);
        $supname = $infoA['sup_name'];
        //$info = $med->query("select * from st_med where med_supplier like '$supname'");
            
        //$count = $med->where("med_supplier like '$supname'")->count();
        //$p = getpage($count,10);
        //$info = $med->where("med_supplier like '$supname'")->order('med_id')->limit($p->firstRow, $p->listRows)->select();
        $info = $med->where("med_supplier like '$supname'")->select();
        $this->assign('info', $info); // 赋值数据集
        //$this->assign('page', $p->show()); // 赋值分页输出
        
        
        //dump($info);
        $this->assign('infoA',$infoA);
        $this->display();
         
    }
   
    //采购
    function purchase(){
        $med = D('med');
        $sup = D('supplier');
        $sup_id = session('sup_id');
        $sup_info = $sup->find($sup_id);
        if(isset($_POST['checked'])){

            foreach($_REQUEST['checkbox'] as $checkbox){
                $id_all.=isset($id_all)?','.$checkbox:$checkbox;
            }
            $info = $med->query("select * from st_med where med_id in($id_all)");
        }
        $orderCode = CG . date('Ymd').substr(implode(NULL,array_map('ord',str_split( substr(uniqid(), 7, 13) , 1))), 0, 8) ;
        $this->assign('orderCode',$orderCode);
        $this->assign('sup_info',$sup_info);
        $this->assign('info',$info);
        $this->display();
        
    }
    //保存数据库
    function savepur(){
                  $purchase = new \Model\PurchaseModel();
                  //dump($_POST);
        if(!empty($_POST)){
            $purchase ->savePurchase(
                    $_POST['orderpo'],
                    $_POST['orderdate'],
                    $_POST['sup_name'],
                    $_POST['user_name'],
                    $_POST['sup_principal'],
                    $_POST['user'],
                    $_POST['sup_phone'],
                    $_POST['user_phone'],
                    $_POST['sup_email'],
                    $_POST['user_email'],
                    $_POST['sup_address'],
                    $_POST['user_address'],
                    $_POST['med_id'],
                    $_POST['med_name'],
                    $_POST['med_inprice'],
                    $_POST['count'],
                    $medsubtotal,
                    $_POST['remark'],
                    $medpurchasetotal);}
//        if($sales){
//            
//        }
        if($purchase){
            $this->redirect('showpur',array(),2,订单提交成功);
        }
    }
    //采购订单
    function showpur(){
        $purchase = D('purchase');      
        //$count = $purchase->where($where)->count();
        //$p = getpage($count,10);
       // $info = $purchase->where($where)->order('orderdate')->limit($p->firstRow, $p->listRows)->select();
        $infoA = $purchase->query("select *,case when status = 1 then '已入库'
                                           when status = 0 then '待入库...'
                                           end as status
                                           from st_purchase
                                           order by orderdate");
        
        $this->assign('infoA', $infoA);
        $this->assign('info', $info); // 赋值数据集
        //$this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }
    //采购订单详情
    function purorder($orderpo){
        $pur = D('purchase');

        $info = $pur->find($orderpo);//find()只返回一条记录[一维数组形式返还]
        $med = explode(",",$info['med_name']);
        $inprice = explode(",",$info['med_inprice']);
        $count = explode(",",$info['count']);
        $subtotal = explode(",",$info['subtotal']);
        $remark = explode(",",$info['remark']);

        $this ->assign('med',$med);
        $this ->assign('inprice',$inprice);
        $this ->assign('count',$count);
        $this ->assign('subtotal',$subtotal);
        $this ->assign('remark',$remark);
        $this ->assign('info',$info);
        $this->display();
                
    }  
    //删除采购订单
    function deletepurorder($orderpo){
        $order = D('purchase');
        $info = $order->find('info',$info);
        $z = $order->delete($orderpo);
//        if($z){
               $this->redirect('showpur',array(),1,订单信息删除成功);
//            }else{
//               $this->redirect('managemed',array('med_id'=>$med_id),1,药品信息删除失败);
//            }
    }
    
    
    //选择客户
    function choosecus(){
        $cus = D('customer');      
        $count = $cus->where($where)->count();
        $p = getpage($count,10);
        $info = $cus->where($where)->order('cus_id')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('info', $info); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }
    
     //选择药品
    function salemed($cus_id){
       
        $cus = D('customer');
        $infoA = $cus->find($cus_id);
        session('cus_id',$cus_id);
        $med = D('med');
        //$count = $med->where($where)->count();
        //$p = getpage($count,15);
        //$info = $med->where($where)->order('med_id')->limit($p->firstRow, $p->listRows)->select();
        
        $info = $med->select();
        $this->assign('info', $info); // 赋值数据集
        //$this->assign('page', $p->show()); // 赋值分页输出
        $this->assign('infoA',$infoA);
//        if(isset($_POST['checked'])){
//            $_SESSION['checkbox'];
//        }
        $this->display();
        
    }
    //销售
    function sales(){
        
        $med = D('med');
        $cus = D('customer');
        $cus_id = session('cus_id');
        $cus_info = $cus->find($cus_id);
        if(isset($_POST['checked'])){

            foreach($_REQUEST['checkbox'] as $checkbox){
                $id_all.=isset($id_all)?','.$checkbox:$checkbox;
            }
            $info = $med->query("select * from st_med where med_id in($id_all)");
        }
        

        $orderCode = XS . date('Ymd').substr(implode(NULL,array_map('ord',str_split( substr(uniqid(), 7, 13) , 1))), 0, 8) ;
        $this->assign('orderCode',$orderCode);

        $this->assign('cus_info',$cus_info);
        $this->assign('info',$info);
        //dump($idnew);
        $this->display();
    }
    //保存销售订单
    function savesale(){
           $sales = new \Model\SalesModel();
        if(!empty($_POST)){
            $sales ->saveSales(
                    $_POST['orderpo'],
                    $_POST['orderdate'],
                    $_POST['cus_name'],
                    $_POST['user_name'],
                    $_POST['cus_principal'],
                    $_POST['user'],
                    $_POST['cus_phone'],
                    $_POST['user_phone'],
                    $_POST['cus_email'],
                    $_POST['user_email'],
                    $_POST['cus_address'],
                    $_POST['user_address'],
                    $_POST['med_id'],
                    $_POST['med_name'],
                    $_POST['med_price'],
                    $_POST['count'],
                    $medsubtotal,
                    $_POST['remark'],
                    $medsaletotal);}
//        if($sales){
//            
//        }
        if($sales){
            $this->redirect('showsale',array(),2,订单提交成功);
        }
    }
    
    //销售订单
    function showsale(){
        $sale = D('sales');      
       // $count = $sale->where($where)->count();
        //$p = getpage($count,10);
        //$info = $sale->where($where)->order('orderdate')->limit($p->firstRow, $p->listRows)->select();
        $infoA = $sale->query("select *,case when status = 1 then '已出库'
                                           when status = 0 then '待出库...' 
                                           end as status 
                                           from st_sales
                                           order by orderdate");
        $this->assign('infoA',$infoA);
      //  $this->assign('info', $info); // 赋值数据集
     //   $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }
    //订单详情
    function salesorder($orderpo){
        $sales = D('sales');

        $info = $sales->find($orderpo);//find()只返回一条记录[一维数组形式返还]
        $med = explode(",",$info['med_name']);
        $price = explode(",",$info['med_price']);
        $count = explode(",",$info['count']);
        $subtotal = explode(",",$info['subtotal']);
        $remark = explode(",",$info['remark']);
//        foreach($med as $k=>$v){
//            echo sprintf("%s %s %s %s %s",$v,$inprice[$k],$count[$k],$subtotal[$k],$remark[$k]);   
//        }
        //dump($med);
        //dump($info);
        $this ->assign('med',$med);
        $this ->assign('price',$price);
        $this ->assign('count',$count);
        $this ->assign('subtotal',$subtotal);
        $this ->assign('remark',$remark);
        $this ->assign('info',$info);
        $this->display();
                
    }
    function deleteorder($orderpo){
        $order = D('sales');
        $info = $order->find('info',$info);
        $z = $order->delete($orderpo);
//        if($z){
               $this->redirect('showsale',array(),1,订单信息删除成功);
//            }else{
//               $this->redirect('managemed',array('med_id'=>$med_id),1,药品信息删除失败);
//            }
    }
}

