<?php
//roc_med的Model模型
namespace Model;
use Think\Model;

class MedModel extends Model{
     protected $patchValidate = true;
    
    
//    //自动验证定义
//    protected $_validate = array(
//      //array(字段,验证规则,错误提示,验证条件,附加规则,验证时间),
//        //国药准字号med_approvalnumber唯一验证
//        array('med_approvalnumber','','该准字号已存在',0,'unique'),
//        //药品名验证
//        array('med_name','require','药品名不能为空'),
//        //生产厂家med_manufacturer验证
//        array('med_manufacturer','require','不能为空'),
//        //规格med_norms可为空
//        //药品剂型med_form
//        array('med_foerm','require','药品剂型不能为空'),
//        //类型
//        array('med_type','require','药品类型不能为空'),
//        //采购价格:不能为空,药价只能为2-4位数字
//        //array('med_inprice','require','药品名不能为空'),
//        array('med_inprice','2,4','请输入2-4位药品价格',0,'length'),
//        array('med_inprice','number','请输入2-4位药品价格'),
//         //销售价格:不能为空,药价只能为2-4位数字
//        //array('med_price','require','药品名不能为空'),
//        array('med_price','2,4','请输入2-4位药品价格',0,'length'),
//        array('med_price','number','请输入2-4位药品价格'),
//        //供应商不能为空
//        array('med_supplier','require','供应商不能为空'),
//        
//    );//程序采用动态验证
}
