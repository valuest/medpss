<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:19:21
         compiled from "D:/xampp/htdocs/medpss/Admin/View\Inventory\show_oldin.html" */ ?>
<?php /*%%SmartyHeaderCode:3764584ae7991b0c75-35086797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c78431886839f192c08466ecf9f9554c1e59f72' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\Inventory\\show_oldin.html',
      1 => 1480526618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3764584ae7991b0c75-35086797',
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
  'unifunc' => 'content_584ae7992162f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae7992162f')) {function content_584ae7992162f($_smarty_tpl) {?><!--入库管理-->
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
                <span style="float: left;">当前位置是：库存管理-》入库管理[已入库清单]</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/manageinin">【返回】</a>
                </span>
            </span>
        </div> 
    <div class="rightinfo">
<form name="fm" method="post" action="<?php echo @__CONTROLLER__;?>
/saveout" id="fm" autocomplete="off">
    <table class="tablelist">
    	<thead>
    	<tr>
        <th>入库表单编号<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>审核人员</th>
        <th>入库时间</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['in_order'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['in_user'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['in_date'];?>
</td>  
                        <td><center>
                            <a href="<?php echo @__CONTROLLER__;?>
/in_orders/in_order/<?php echo $_smarty_tpl->tpl_vars['v']->value['in_order'];?>
" class="tablelink">查看</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="<?php echo @__CONTROLLER__;?>
/deletein/in_order/<?php echo $_smarty_tpl->tpl_vars['v']->value['in_order'];?>
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