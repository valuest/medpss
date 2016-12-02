<?php /* Smarty version Smarty-3.1.6, created on 2016-11-23 23:12:35
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/System/manageauth.html" */ ?>
<?php /*%%SmartyHeaderCode:11837566815835b1e307dd11-70086332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90fac0b43e93661d420c130371becb7914c8ccf' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/System/manageauth.html',
      1 => 1479518874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11837566815835b1e307dd11-70086332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5835b1e311ce3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835b1e311ce3')) {function content_5835b1e311ce3($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <span style="float: left;">当前位置是：系统管理-》角色权限管理</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/addrole">【添加角色】</a>
                </span>
            </span>
        </div>
    <div class="rightinfo">
    <table class="tablelist">
    	<thead>
    	<tr>
        <th>ID<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>角色名称</th>
        <th colspan="3"><center>操作</center></th>
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
                        <td width="30%"><?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
</td>
                        <td width="30%"><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</td>
                        <td>
                            <center><a href="<?php echo @__CONTROLLER__;?>
/distribute/role_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
" class="tablelink">分配权限</a>
<!--                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo @__CONTROLLER__;?>
/changeauth/role_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
" class="tablelink">修改</a>-->
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo @__CONTROLLER__;?>
/deleterole/role_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
" class="tablelink">删除</a>
                            </center>    
                        </td>
                    </tr>
            <?php } ?>

        </tbody>
    </table>
</body>
</html>
<?php }} ?>