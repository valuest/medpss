<?php /* Smarty version Smarty-3.1.6, created on 2016-12-09 03:03:50
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Inventory/in_orders.html" */ ?>
<?php /*%%SmartyHeaderCode:1655181026583f77a8a0cd92-61532386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31ed23b1a8030d3cfb1b2e025a2c8066b2bc0685' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Inventory/in_orders.html',
      1 => 1481222829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1655181026583f77a8a0cd92-61532386',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_583f77a8aa616',
  'variables' => 
  array (
    'info' => 0,
    'id' => 0,
    'v' => 0,
    'k' => 0,
    'med' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583f77a8aa616')) {function content_583f77a8aa616($_smarty_tpl) {?><!DOCTYPE html>
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
                            <span style="float:left">当前位置是：入库管理-》入库清单</span>
                            <span style="float:right;margin-right: 8px;font-weight: bold">
                                <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/show_oldin">【返回】</a> 
                            </span>
                        </span>
        </div>
        <form name="fm" method="post" action="#" id="fm" autocomplete="off">
            <div class="right-side" style="min-height:400px;   margin-top:5px"> 
                <div class="content" style=" background-color:#ffffff; width:900px;">
                    <div id="part1">
                        <div class="text-center">                 
                            <h3>入库清单</h3> 
                            <div style="margin-bottom:5px;">
                                CG Order：<input value="<?php echo $_smarty_tpl->tpl_vars['info']->value['pur_order'];?>
" readonly name="orderpo" type="text" id="orderpo" style="width: 150px;border:0px; border-bottom:solid 1px #000"/> 
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                RK Order：<input value="<?php echo $_smarty_tpl->tpl_vars['info']->value['in_order'];?>
" readonly name="orderpo" type="text" id="orderpo" style="border:0px; border-bottom:solid 1px #000"readonly/> 
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                入库日期：<input value="<?php echo $_smarty_tpl->tpl_vars['info']->value['in_date'];?>
" name="orderdate" type="text" id="orderdate" style="border:0px; border-bottom:solid 1px #000"readonly/>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>     
                    <table class="table">
                        <thead>
                            <tr>
                                <th>药品ID</th>
                                <th>药品名称</th>
                                <th>数量</th>   
                            </tr><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['id']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['med']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['count']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</td>
                            </tr><?php } ?>
                            
                        </thead>
                            <tr></tr>
<!--                        <tbody data-bind="foreach: Products"></tbody>-->
                        <tbody><tr></tr>
                        </tbody></table>
                    
                    <div class="text-center">
                        <input id="btnSubmits" onclick="window.print();" class="" type="button" value="打印清单">
                    </div>
                    <br><br>
                </div>
            </div>
        </form> 
    </div>
</body>
</html><?php }} ?>