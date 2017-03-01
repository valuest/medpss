<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:19:41
         compiled from "D:/xampp/htdocs/medpss/Admin/View\Trade\showpur.html" */ ?>
<?php /*%%SmartyHeaderCode:25120584ae7adb5eb81-04880804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d3f981ce7b5bc6da46a0b15676c22a82b713ee7' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\Trade\\showpur.html',
      1 => 1481200268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25120584ae7adb5eb81-04880804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infoA' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_584ae7adbcadb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae7adbcadb')) {function content_584ae7adbcadb($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息管理</title>
<link href="<?php echo @ADMIN_CSS_URL;?>
show.css" rel="stylesheet" type="text/css" />
</head>
<body>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：药品采购-》采购订单</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    
                </span>
            </span>
        </div> 
    <div class="rightinfo">
    <table class="tablelist">
    	<thead>
    	<tr>
        <th>订单编号<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>供应商</th>
        <th>联系人</th>
        <th>订单时间</th>
        <th>订单状态</th>
        <th><center>操作</center></th>
        </tr>     
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['orderpo'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sup_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sup_principal'];?>
</td>  
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['orderdate'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
                        <td><center>
                            <a href="<?php echo @__CONTROLLER__;?>
/purorder/orderpo/<?php echo $_smarty_tpl->tpl_vars['v']->value['orderpo'];?>
" class="tablelink">查看</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo @__CONTROLLER__;?>
/deletepurorder/orderpo/<?php echo $_smarty_tpl->tpl_vars['v']->value['orderpo'];?>
" class="tablelink">删除</a>
                            </center>
                        </td>
                    </tr>
            <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <div class="pages"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div> 
                        </td>
                    </tr>
              <tr>
             
        </tr> 
        </tbody>
    </table>
</body>
</html>
<?php }} ?>