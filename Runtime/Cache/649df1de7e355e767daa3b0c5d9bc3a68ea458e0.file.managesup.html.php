<?php /* Smarty version Smarty-3.1.6, created on 2016-12-08 21:46:06
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Supplier/managesup.html" */ ?>
<?php /*%%SmartyHeaderCode:1979175472583ca3e6b5ed74-06142972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '649df1de7e355e767daa3b0c5d9bc3a68ea458e0' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Supplier/managesup.html',
      1 => 1481204754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1979175472583ca3e6b5ed74-06142972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_583ca3e6c248a',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ca3e6c248a')) {function content_583ca3e6c248a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <span style="float: left;">当前位置是：供应商管理-》信息管理</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                </span>
            </span>
        </div>
<!--        <div class="div_search">
            <span>
                <form action="#" method="get">
                    <input type="text"/>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>-->
    <div class="rightinfo">
    <table class="tablelist">
    	<thead>
    	<tr>
        <!--<th><input name="" type="checkbox" value="" checked="checked"/></th>-->
        <th>ID<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>供应商名</th>
        <th>联系人</th>
        <th>传真/电话</th>
        <th>手机号码</th>
        <th>银行账户</th>
        <th>Email</th>
        <th>通讯地址</th>
        <th><center>操作</center></th>
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
                        <!--<td><input name="" type="checkbox" value="" /></td>-->
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sup_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sup_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sup_principal'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sup_fax'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sup_phone'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sup_bcard'];?>
</td>           
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sup_email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sup_address'];?>
</td>
                        <td><center>
                            <a href="<?php echo @__CONTROLLER__;?>
/changesup/sup_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['sup_id'];?>
" class="tablelink">修改</a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="<?php echo @__CONTROLLER__;?>
/deletesup/sup_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['sup_id'];?>
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
        </tbody>
    </table>
</body>
</html>
<?php }} ?>