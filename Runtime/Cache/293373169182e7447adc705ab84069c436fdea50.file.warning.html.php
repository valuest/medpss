<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:06:38
         compiled from "D:/xampp/htdocs/medpss/Admin/View\Inventory\warning.html" */ ?>
<?php /*%%SmartyHeaderCode:15397584ae49e6fc017-63393299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '293373169182e7447adc705ab84069c436fdea50' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\Inventory\\warning.html',
      1 => 1481199306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15397584ae49e6fc017-63393299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_584ae49e75596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae49e75596')) {function content_584ae49e75596($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息管理</title>
<link href="<?php echo @ADMIN_CSS_URL;?>
show.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @ADMIN_CSS_URL;?>
add&change.css" rel="stylesheet" type="text/css" />
</head>
<body>

        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：库存管理-》库存预警</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                </span>
            </span>
        </div>
    <div class="rightinfo">
    <table class="tablelist">
    	<thead>
    	<tr>
        <!--<th><input name="" type="checkbox" value="" checked="checked"/></th>-->
        <th>ID<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>名称</th>
        <th>生产厂商</th>
        <th>库存</th>
        <!--<th><center>操作</center></th>-->
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
                    <tr id="product1">
<!--                        <td><input name="" type="checkbox" value="" /></td>-->
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_manufacturer'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_inventory'];?>
</td>
<!--                        <td><a href="#" class="tablelink">
                                <center>补仓</center></a>
                            补仓直接跳转到采购
                       </td>-->
                    </tr>
            <?php } ?>
            <tr>
                <td colspan="20" style="text-align: center;">
                    <div class="pages"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div> 
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
<?php }} ?>