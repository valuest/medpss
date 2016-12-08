<?php /* Smarty version Smarty-3.1.6, created on 2016-12-09 04:15:52
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Trade/sales.html" */ ?>
<?php /*%%SmartyHeaderCode:19093241875834adc13a3072-07144356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edff5b24435425c65bd4d08b9bed713176048b5d' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Trade/sales.html',
      1 => 1481222728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19093241875834adc13a3072-07144356',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5834adc1489a0',
  'variables' => 
  array (
    'orderCode' => 0,
    'cus_info' => 0,
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5834adc1489a0')) {function content_5834adc1489a0($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/ThinkPHP/Library/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
    <link href="<?php echo @ADMIN_CSS_URL;?>
bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo @ADMIN_CSS_URL;?>
trade.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
style.css"/>
    <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
demo.js"></script>   
            
</head>
<body>
<div class="catbox">
     <body class="skin-blue">
        <div class="div_head">
                        <span>
                            <span style="float:left">当前位置是：销售管理-》药品销售</span>
                            <span style="float:right;margin-right: 8px;font-weight: bold">
                                <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/salemed/cus_id/<?php echo $_SESSION['cus_id'];?>
">【返回】</a> 
                            </span>
                        </span>
        </div>
        <form name="fm" method="post" action="<?php echo @__CONTROLLER__;?>
/savesale" id="fm" autocomplete="off">
            <div style="min-height:400px;   margin-top:3px"> 
                <div class="content" style=" background-color:#ffffff; width:90%px;">
                    <div id="part1">
                        <div class="text-center">                 
                            <h3>销售订单</h3> 
                            <div style="margin-bottom:5px;">
                                XS Order：<input readonly name="orderpo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['orderCode']->value;?>
" id="orderpo" style="border:0px; border-bottom:solid 1px #000"/> 
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                订单日期：<input readonly name="orderdate" type="text" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
" id="orderdate" style="border:0px; border-bottom:solid 1px #000"/>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <table class="table table-bordered table-condensed">
                            <tbody>
                                <tr>
                                    <th style="width:15%">采购方</th>
                                    <td style="width:35%"> 
                        <input name="cus_name" type="text" id="cus_name" value="<?php echo $_smarty_tpl->tpl_vars['cus_info']->value['cus_name'];?>
" readonly />                                 
                                    </td>
                                    <th style="width:15%">供货方</th>
                                    <td style="width:35%">
                        <input name="user_name" type="text" id="companyname" value="药品进销存管理系统" readonly/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>联系人</th>
                                    <td>
                        <input name="cus_principal" type="text" id="cus_principal" value="<?php echo $_smarty_tpl->tpl_vars['cus_info']->value['cus_principal'];?>
"readonly/>
                                    </td>
                                    <th>联系人</th>
                                    <td>
                        <input name="user" type="text" id="companycontact" value="<?php echo $_SESSION['user_name'];?>
"readonly/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>手机</th>
                                    <td>
                        <input name="cus_phone" type="text" id="cus_phone" value="<?php echo $_smarty_tpl->tpl_vars['cus_info']->value['cus_phone'];?>
"readonly/>
                                    </td>
                                    <th>手机</th>
                                    <td>
                        <input name="user_phone" type="text" id="companytel" value="18819438230"readonly/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>电子邮件</th>
                                    <td>
                        <input name="cus_email" type="text" id="cus_email" value="<?php echo $_smarty_tpl->tpl_vars['cus_info']->value['cus_email'];?>
"readonly/>
                                    </td>
                                    <th>电子邮件</th>
                                    <td>
                        <input name="user_email" type="text" id="companyemail" value="542783146@qq.com"readonly/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>通讯地址</th>
                                    <td>
                        <input name="cus_address" type="text" id="cus_address" value="<?php echo $_smarty_tpl->tpl_vars['cus_info']->value['cus_address'];?>
"readonly/>
                                    </td>
                                    <th>通讯地址</th>
                                    <td>
                        <input name="user_address" type="text" id="companyemail" value="华软"readonly/>
                                    </td>
                                </tr>
                            </tbody>       
                        </table>
                    </div>    
  <table id="cartTable">
    <thead>
      <tr>
        <th>
        <input class="check-all check" type="checkbox"/>&nbsp;&nbsp;全选</th>
        <th>名称</th>
<!--        <th>生产厂商</th>-->
        <th><center>单价</center></th>
        <th><center>数量</center></th>
        <th><center>小计</center></th>
        <th><center>备注</center></th>
      </tr>
    </thead>
    <tbody>
        
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
      <tr>
          <td class="checkbox"><label>
            <input border="0px" class="check-one check" type="checkbox"/></label></td>
        <td class="goods" name="med_name">
            <img src="" alt=""/>
            <span><?php echo $_smarty_tpl->tpl_vars['v']->value['med_name'];?>
</span>
            
        </td>
          
<!--        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_manufacturer'];?>
</td>-->
        <td class="price" name="med_price"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_price'];?>
</td>
        <td class="count">
            <span class="reduce"></span>
          <input name="count[]" class="count-input" type="text" value="1"/>
          <span class="add">+</span></td>
        <td class="subtotal" name="med_toprice[]"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_price'];?>
</td>
        
<!--        <input type="hidden" id="subtotal" name="subtotal[]"/>-->
        
        <td><input name="remark[]" width="500" style="border: 0px" type="text" value=""/></td>
        <input type="hidden" name="med_name[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['med_name'];?>
"/>
        <input type="hidden" name="med_price[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['med_price'];?>
"/>
        <input type="hidden" name="med_id[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
"/>
        
      </tr>
        <?php } ?> 
    </tbody>
  </table>
                    
  <div class="foot" id="foot">
    
    <!--<div class="fr closing" onclick="getTotal();">确认订单</div>-->
    <!--<div class="fr closing" onclick="getTotal();">-->
        
    <input style="height: 48px" class="fr closing" border="0px" id="checked" type="submit" value="生成订单"/>
    
<!--    </div>-->
    
    <input type="hidden" id="cartTotalPrice" />
    <div class="fr total">合计：￥<span id="priceTotal" name="total[]">0.00</span></div>
    <div class="fr selected" id="selected">已选商品<span id="selectedTotal">0</span>件<span class="arrow up">︽</span><span class="arrow down">︾</span></div>
    <div class="selected-view">
      <div id="selectedViewList" class="clearfix">
        <div><img src=""><span></span></div>
      </div>
      <span class="arrow">◆<span>◆</span></span> </div>
  </div>
</div>
        </form>
</body>
</html><?php }} ?>