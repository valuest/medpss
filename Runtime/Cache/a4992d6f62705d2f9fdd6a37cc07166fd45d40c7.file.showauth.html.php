<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:22:46
         compiled from "D:/xampp/htdocs/medpss/Admin/View\System\showauth.html" */ ?>
<?php /*%%SmartyHeaderCode:6934584ae8666768e3-25117179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4992d6f62705d2f9fdd6a37cc07166fd45d40c7' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\System\\showauth.html',
      1 => 1479545534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6934584ae8666768e3-25117179',
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
  'unifunc' => 'content_584ae86670461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae86670461')) {function content_584ae86670461($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <span style="float: left;">当前位置是：系统管理-》权限管理</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                     <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/addauth">【添加权限】</a>
                </span>
            </span>
    <div class="rightinfo">
    <table class="tablelist">
    	<thead>
    	<tr>
        <th>ID<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>权限名称</th>
        <th>父类id</th>
        <th>控制器</th>
        <th>操作方法</th>
        <th>全路径</th>
        <th>等级</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
</td>
                        <td><?php echo preg_replace('!^!m',str_repeat('-->',$_smarty_tpl->tpl_vars['v']->value['auth_level']),$_smarty_tpl->tpl_vars['v']->value['auth_name']);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_pid'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_c'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_a'];?>
</td>           
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_path'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_level'];?>
</td>
                        <td><center>
                        <a href="<?php echo @__CONTROLLER__;?>
/changeauth/auth_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" class="tablelink">修改</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo @__CONTROLLER__;?>
/deleteauth/auth_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" class="tablelink">删除</a>
                        </center></td>
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