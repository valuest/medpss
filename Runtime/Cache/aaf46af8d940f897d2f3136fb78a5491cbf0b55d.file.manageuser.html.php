<?php /* Smarty version Smarty-3.1.6, created on 2017-02-17 14:46:54
         compiled from "D:/php/xampp/htdocs/medpss/Admin/View\System\manageuser.html" */ ?>
<?php /*%%SmartyHeaderCode:148622130158a69c5ebb9ba8-06078287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaf46af8d940f897d2f3136fb78a5491cbf0b55d' => 
    array (
      0 => 'D:/php/xampp/htdocs/medpss/Admin/View\\System\\manageuser.html',
      1 => 1479494170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148622130158a69c5ebb9ba8-06078287',
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
  'unifunc' => 'content_58a69c5ec73cb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a69c5ec73cb')) {function content_58a69c5ec73cb($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
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
                <span style="float: left;">当前位置是：系统管理-》用户管理</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/adduser">【添加用户】</a>
                </span>
            </span>
        </div>
    <div class="rightinfo">
    <table class="tablelist">
    	<thead>
    	<tr>
        <th>ID<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>用户名</th>
        <th>注册时间</th>
        <th>角色id</th>
        <th colspan="2"><center>操作</center></th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_time'];?>
</td>                       
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['mg_role_id'];?>
</td>                   
                        <td>
                            <center><a href="<?php echo @__CONTROLLER__;?>
/changeuser/mg_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
" class="tablelink">修改</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo @__CONTROLLER__;?>
/deleteuser/mg_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mg_id'];?>
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