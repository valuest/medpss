<?php /* Smarty version Smarty-3.1.6, created on 2017-02-17 14:48:02
         compiled from "D:/php/xampp/htdocs/medpss/Admin/View\Trade\purorder.html" */ ?>
<?php /*%%SmartyHeaderCode:120350547158a69ca24945f1-31627405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08528f99def029e554b99f3483eadf70ad53357b' => 
    array (
      0 => 'D:/php/xampp/htdocs/medpss/Admin/View\\Trade\\purorder.html',
      1 => 1481193776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120350547158a69ca24945f1-31627405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'med' => 0,
    'v' => 0,
    'k' => 0,
    'inprice' => 0,
    'count' => 0,
    'subtotal' => 0,
    'remark' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a69ca2522ab',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a69ca2522ab')) {function content_58a69ca2522ab($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>销售单</title>
    <link href="<?php echo @ADMIN_CSS_URL;?>
bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo @ADMIN_CSS_URL;?>
trade.css" rel="stylesheet">
    <!--test-->
<!--    <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
demo.js"></script>-->
    
    </head>
    <body class="skin-blue">
        <div class="div_head">
                        <span>
                            <span style="float:left">当前位置是：采购管理-》采购订单详情</span>
                            <span style="float:right;margin-right: 8px;font-weight: bold">
                                <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showpur">【返回】</a> 
                            </span>
                        </span>
        </div>
        <form name="fm" method="post" action="#" id="fm" autocomplete="off">
            <div class="right-side" style="min-height:400px;   margin-top:5px"> 
                <div class="content" style=" background-color:#ffffff; width:900px;">
                    <div id="part1">
                        <div class="text-center">                 
                            <h3>采购订单</h3> 
                            <div style="margin-bottom:5px;">
                                CG Order：<input value="<?php echo $_smarty_tpl->tpl_vars['info']->value['orderpo'];?>
" name="orderpo" type="text" id="orderpo" style="border:0px; border-bottom:solid 1px #000"readonly/> 
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                订单日期：<input value="<?php echo $_smarty_tpl->tpl_vars['info']->value['orderdate'];?>
" name="orderdate" type="text" id="orderdate" style="border:0px; border-bottom:solid 1px #000"readonly/>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        <table class="table table-bordered table-condensed">
                            <tbody>
                                <tr>
                                    <th style="width:15%">采购方</th>
                                    <td style="width:35%"> 
                        <input name="sup_name" type="text" id="sup_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sup_name'];?>
" readonly/>                                 
                                    </td>
                                    <th style="width:15%">供货方</th>
                                    <td style="width:35%">
                        <input name="companyname" type="text" id="companyname" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['user_name'];?>
"readonly/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>联系人</th>
                                    <td>
                        <input name="sup_principal" type="text" id="sup_principal" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sup_principal'];?>
"readonly/>
                                    </td>
                                    <th>联系人</th>
                                    <td>
                        <input name="companycontact" type="text" id="companycontact" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['user'];?>
"readonly/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>手机</th>
                                    <td>
                        <input name="sup_phone" type="text" id="sup_phone" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sup_phone'];?>
"readonly/>
                                    </td>
                                    <th>手机</th>
                                    <td>
                        <input name="companytel" type="text" id="companytel" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['user_phone'];?>
"readonly/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>电子邮件</th>
                                    <td>
                        <input name="sup_email" type="text" id="sup_email" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sup_email'];?>
"readonly/>
                                    </td>
                                    <th>电子邮件</th>
                                    <td>
                        <input name="companyemail" type="text" id="companyemail" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['user_email'];?>
"readonly/>
                                    </td>
                                </tr>
                                <tr>
                                    <th>通讯地址</th>
                                    <td>
                        <input name="sup_address" type="text" id="sup_address" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sup_address'];?>
"readonly/>
                                    </td>
                                    <th>通讯地址</th>
                                    <td>
                        <input name="companyemail" type="text" id="companyemail" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['user_address'];?>
"readonly/>
                                    </td>
                                </tr>
                            </tbody>       
                        </table>
                    </div>    
                    <table class="table">
                        <thead>
                            <tr>
                                
                                <th>物品名称</th>
                                <th>单价</th> 
                                <th>数量</th>
                                <th>小计</th>
                                
                                <th>备注</th> 
                            </tr><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['med']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</td>
                                
                                <td><?php echo $_smarty_tpl->tpl_vars['inprice']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['count']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['subtotal']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['remark']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</td>
                            </tr><?php } ?>
                            
                        </thead>
                            <tr></tr>
<!--                        <tbody data-bind="foreach: Products"></tbody>-->
                        <tbody><tr></tr>
                        </tbody></table>
                    <div style="text-align:right;padding-right: 40px">合 计 : <?php echo $_smarty_tpl->tpl_vars['info']->value['purchase_total'];?>
</div>
                    <div class="text-center">
                        <input id="btnSubmits" onclick="window.print();" class="" type="button" value="打印订单">
                    </div>
                    <br><br>
                </div>
            </div>
        </form> 
    </div>
</body>
</html><?php }} ?>