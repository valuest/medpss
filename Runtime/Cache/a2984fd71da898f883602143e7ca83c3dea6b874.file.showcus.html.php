<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:04:22
         compiled from "D:/xampp/htdocs/medpss/Admin/View\Customer\showcus.html" */ ?>
<?php /*%%SmartyHeaderCode:29433584ae416798423-77983991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2984fd71da898f883602143e7ca83c3dea6b874' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\Customer\\showcus.html',
      1 => 1481176072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29433584ae416798423-77983991',
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
  'unifunc' => 'content_584ae4168054f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae4168054f')) {function content_584ae4168054f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <span style="float: left;">当前位置是：客户管理-》客户信息</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                </span>
            </span>
        </div> 
    <div class="rightinfo">
    <table class="tablelist">
    	<thead>
    	<tr>
        <th>ID<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>客户名</th>
        <th>联系人</th>
        
        <th>手机号码</th>
        <th>Email</th>
        <th>通讯地址</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_principal'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_phone'];?>
</td>      
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_address'];?>
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