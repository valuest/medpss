<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:04:23
         compiled from "D:/xampp/htdocs/medpss/Admin/View\Customer\managecus.html" */ ?>
<?php /*%%SmartyHeaderCode:574584ae41712b676-81532918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d47af06e1f1a24a361720b2b489ded962f5577f' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\Customer\\managecus.html',
      1 => 1481175482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '574584ae41712b676-81532918',
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
  'unifunc' => 'content_584ae4171b16e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae4171b16e')) {function content_584ae4171b16e($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <span style="float: left;">当前位置是：客户管理-》信息管理</span>
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
        <th>客户名</th>
        <th>联系人</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_principal'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_phone'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_bcard'];?>
</td>           
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_email'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_address'];?>
</td>
                        <td><center>
                            <a href="<?php echo @__CONTROLLER__;?>
/changecus/cus_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['cus_id'];?>
" class="tablelink">修改</a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="<?php echo @__CONTROLLER__;?>
/deletecus/cus_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['cus_id'];?>
" class="tablelink"> 删除</a>
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