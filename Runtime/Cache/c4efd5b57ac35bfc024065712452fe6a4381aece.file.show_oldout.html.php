<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:06:54
         compiled from "D:/xampp/htdocs/medpss/Admin/View\Inventory\show_oldout.html" */ ?>
<?php /*%%SmartyHeaderCode:23048584ae4ae12a374-90910760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4efd5b57ac35bfc024065712452fe6a4381aece' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\Inventory\\show_oldout.html',
      1 => 1480526458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23048584ae4ae12a374-90910760',
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
  'unifunc' => 'content_584ae4ae1b2bf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae4ae1b2bf')) {function content_584ae4ae1b2bf($_smarty_tpl) {?><!--出库管理-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <span style="float: left;">当前位置是：库存管理-》出库管理[已出库清单]</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/manageoutin">【返回】</a>
                </span>
            </span>
        </div> 
    <div class="rightinfo">
<form name="fm" method="post" action="<?php echo @__CONTROLLER__;?>
/saveout" id="fm" autocomplete="off">
    <table class="tablelist">
    	<thead>
    	<tr>
        <th>出库表单编号<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>审核人员</th>
        <th>出库时间</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['out_order'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['out_user'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['out_date'];?>
</td>  
                        <td><center>
                            <a href="<?php echo @__CONTROLLER__;?>
/out_orders/out_order/<?php echo $_smarty_tpl->tpl_vars['v']->value['out_order'];?>
" class="tablelink">查看</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo @__CONTROLLER__;?>
/deleteout/out_order/<?php echo $_smarty_tpl->tpl_vars['v']->value['out_order'];?>
" class="tablelink">删除</a>
                            </center>
                        </td>
                    </tr>
            <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
<!--                            <div class="pages"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div> -->
                        </td>
                    </tr>
              <tr>
             
        </tr> 
        </tbody>
    </table>
</form>
</body>
</html>


<?php }} ?>