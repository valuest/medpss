<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:19:33
         compiled from "D:/xampp/htdocs/medpss/Admin/View\Trade\purchase.html" */ ?>
<?php /*%%SmartyHeaderCode:15651584ae7a570ad06-33858180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ba37993f295a681bf0c71d42bc1a94c482b78bc' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\Trade\\purchase.html',
      1 => 1481193826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15651584ae7a570ad06-33858180',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderCode' => 0,
    'sup_info' => 0,
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_584ae7a57bf76',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae7a57bf76')) {function content_584ae7a57bf76($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\xampp\\htdocs\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
                            <span style="float:left">当前位置是：采购管理-》药品采购</span>
                            <span style="float:right;margin-right: 8px;font-weight: bold">
                                <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/purmed/sup_id/<?php echo $_SESSION['sup_id'];?>
">【返回】</a> 
                            </span>
                        </span>
        </div>
        <form name="fm" method="post" action="<?php echo @__CONTROLLER__;?>
/savepur" id="fm" autocomplete="off">
            <div style="min-height:400px;   margin-top:3px"> 
                <div class="content" style=" background-color:#ffffff; width:90%px;">
                    <div id="part1">
                        <div class="text-center">                 
                            <h3>采购订单</h3> 
                            <div style="margin-bottom:5px;">
                                CG Order：<input name="orderpo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['orderCode']->value;?>
" id="orderpo" style="border:0px; border-bottom:solid 1px #000"readonly/> 
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                订单日期：<input name="orderdate" type="text" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
" id="orderdate" style="border:0px; border-bottom:solid 1px #000"readonly/>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <table class="table table-bordered table-condensed">
                            <tbody>
                                <tr>
                                    <th style="width:15%">供应商</th>
                                    <td style="width:35%"> 
                        <input name="sup_name" type="text" id="sup_name" value="<?php echo $_smarty_tpl->tpl_vars['sup_info']->value['sup_name'];?>
"readonly/>                                 
                                    </td>
                                    <th style="width:15%">采购方</th>
                                    <td style="width:35%">
                        <input name="user_name" type="text" id="companyname" value="药品进销存管理系统"readonly/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>联系人</th>
                                    <td>
                        <input name="sup_principal" type="text" id="sup_principal" value="<?php echo $_smarty_tpl->tpl_vars['sup_info']->value['sup_principal'];?>
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
                        <input name="sup_phone" type="text" id="sup_phone" value="<?php echo $_smarty_tpl->tpl_vars['sup_info']->value['sup_phone'];?>
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
                        <input name="sup_email" type="text" id="sup_email" value="<?php echo $_smarty_tpl->tpl_vars['sup_info']->value['sup_email'];?>
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
                        <input name="sup_address" type="text" id="sup_address" value="<?php echo $_smarty_tpl->tpl_vars['sup_info']->value['sup_address'];?>
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
        <td class="price"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_inprice'];?>
</td>
        <td class="count">
            <span class="reduce"></span>
          <input name="count[]" class="count-input" type="text" value="1"/>
          <span class="add">+</span></td>
        <td class="subtotal"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_inprice'];?>
</td>
<!--        <input type="hidden" name="med_price[]"  onfocus="ok(this);"/>-->
        <td><input name="remark[]" width="500" style="border: 0px" type="text" value=""/></td>
        <input type="hidden" name="med_name[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['med_name'];?>
"/>
        <input type="hidden" name="med_inprice[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['med_inprice'];?>
"/>
        <input type="hidden" name="med_id[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
"/>
        
      </tr>
        <?php } ?> 
    </tbody>
  </table>
  <div class="foot" id="foot">
    
    <!--<div class="fr closing" onclick="getTotal();">确认订单</div>-->
    <input style="height: 48px" class="fr closing" border="0px" id="checked" type="submit" value="生成订单"/>
    <input type="hidden" id="cartTotalPrice" />
    <div class="fr total">合计：￥<span id="priceTotal" name="total[]">0.00</span></div>
    <div class="fr selected" id="selected">已选商品<span id="selectedTotal">0</span>件<span class="arrow up">︽</span><span class="arrow down">︾</span></div>
    <div class="selected-view">
      <div id="selectedViewList" class="clearfix">
        <div><img src=""><span>取消选择</span></div>
      </div>
      <span class="arrow">◆<span>◆</span></span> </div>
  </div>
</div>
        </form>
</body>
</html><?php }} ?>