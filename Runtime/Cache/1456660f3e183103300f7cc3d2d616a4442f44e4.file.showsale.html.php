<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:20:02
         compiled from "D:/xampp/htdocs/medpss/Admin/View\Trade\showsale.html" */ ?>
<?php /*%%SmartyHeaderCode:23768584ae7c2e8bde7-98797282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1456660f3e183103300f7cc3d2d616a4442f44e4' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\Trade\\showsale.html',
      1 => 1481199796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23768584ae7c2e8bde7-98797282',
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
  'unifunc' => 'content_584ae7c2f116c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae7c2f116c')) {function content_584ae7c2f116c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <span style="float: left;">当前位置是：药品采购-》销售订单</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    
                </span>
            </span>
        </div> 
    <div class="rightinfo" >
    <table class="tablelist">
    	<thead>
    	<tr>
        <th>订单编号<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>销售对象</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_principal'];?>
</td>  
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['orderdate'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
                        <td><center>
                            <a href="<?php echo @__CONTROLLER__;?>
/salesorder/orderpo/<?php echo $_smarty_tpl->tpl_vars['v']->value['orderpo'];?>
" class="tablelink">查看</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo @__CONTROLLER__;?>
/deleteorder/orderpo/<?php echo $_smarty_tpl->tpl_vars['v']->value['orderpo'];?>
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
    </div>
</body>
</html>
<?php }} ?>