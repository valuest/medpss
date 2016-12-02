<?php
//roc_auth的Model模型
namespace Model;
use Think\Model;

class SalesModel extends Model{
    //实现权限添加
    function saveSales( $orderpos,
                        $orderdates,
                        $cus_names,
                        $user_names,
                        $cus_principals,
                        $users,
                        $cus_phones,
                        $user_phones,
                        $cus_emails,
                        $user_emails,
                        $cus_addresss,
                        $user_addresss,
                        $medid,
                        $medname,
                        $medprice,
                        $medcount,
                        $medsubtotal,
                        $medremark,
                        $medsaletotal
                        )
                        {
        
        
        
        $med_price = $_POST['med_price'];
        $count=$_POST['count'];
        foreach ($med_price as $k => $v){
            $infoA[]=($v*$count[$k]);
            //echo sprintf($v*$count[$k]);
           // echo $infoA;
        }
        
        
        
        
        
       //制作所有信息
//        foreach($medinprice as $k=>$v){
//            $subtotal[] = $v*$medcount[$k];
//        }
        $medsaletotals= array_sum($infoA);
        $medsubtotals = implode(',', $infoA);
        $medids = implode(',', $medid);
        $mednames = implode(',', $medname);
        $medprices = implode(',', $medprice);
        $medcounts = implode(',', $medcount);
        $medremarks = implode(',', $medremark);
        $sql = "insert st_sales set "
               . "orderpo='$orderpos',"
               . "orderdate='$orderdates'," 
               . "cus_name='$cus_names',"  
               . "user_name='$user_names',"
               . "cus_principal='$cus_principals'," 
               . "user='$users'," 
               . "cus_phone='$cus_phones',"  
               . "user_phone='$user_phones',"  
               . "cus_email='$cus_emails',"  
               . "user_email='$user_emails',"  
               . "cus_address='$cus_addresss',"  
               . "user_address='$user_addresss',"
               . "med_id='$medids',"    
               . "med_name='$mednames',"
               . "med_price='$medprices',"
               . "count='$medcounts',"
               . "subtotal='$medsubtotals',"    
               . "remark='$medremarks' ,"
               . "sale_total='$medsaletotals' "
        //dump($mednames);
        

               ;
//                    cus_address
//                    user_address
        
        
        
        
        
        
        return $this ->execute($sql);
    }
}
