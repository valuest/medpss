<?php
//roc_auth的Model模型
namespace Model;
use Think\Model;

class PurchaseModel extends Model{
    //实现权限添加
    function savePurchase( 
                        $orderpos,
                        $orderdates,
                        $sup_names,
                        $user_names,
                        $sup_principals,
                        $users,
                        $sup_phones,
                        $user_phones,
                        $sup_emails,
                        $user_emails,
                        $sup_addresss,
                        $user_addresss,
                        $medid,
                        $medname,
                        $medinprice,
                        $medcount,
                        $medsubtotal,
                        $medremark,
                        $medpurchasetotal
                        )
                        {
        
        
        
        $med_inprice = $_POST['med_inprice'];
        $count=$_POST['count'];
        foreach ($med_inprice as $k => $v){
            $infoA[]=($v*$count[$k]);
            //echo sprintf($v*$count[$k]);
           // echo $infoA;
        }
        
        
        
        
        
       //制作所有信息
//        foreach($medinprice as $k=>$v){
//            $subtotal[] = $v*$medcount[$k];
//        }
        $medpurchasetotals= array_sum($infoA);
        $medsubtotals = implode(',', $infoA);
        $medids = implode(',', $medid);
        $mednames = implode(',', $medname);
        $medinprices = implode(',', $medinprice);
        $medcounts = implode(',', $medcount);
        $medremarks = implode(',', $medremark);
        $sql = "insert st_purchase set "
               . "orderpo='$orderpos',"
               . "orderdate='$orderdates'," 
               . "sup_name='$sup_names',"  
               . "user_name='$user_names',"
               . "sup_principal='$sup_principals'," 
               . "user='$users'," 
               . "sup_phone='$sup_phones',"  
               . "user_phone='$user_phones',"  
               . "sup_email='$sup_emails',"  
               . "user_email='$user_emails',"  
               . "sup_address='$sup_addresss',"  
               . "user_address='$user_addresss'," 
               . "med_id='$medids',"    
               . "med_name='$mednames',"
               . "med_inprice='$medinprices',"
               . "count='$medcounts',"
               . "subtotal='$medsubtotals',"    
               . "remark='$medremarks' ,"
               . "purchase_total='$medpurchasetotals' "
        //dump($mednames);
        

               ;
//                    sup_address
//                    user_address
        
        
        
        
        
        
        return $this ->execute($sql);
    }
}
