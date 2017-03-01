<?php /* Smarty version Smarty-3.1.6, created on 2017-02-24 16:10:12
         compiled from "D:/xampp/htdocs/medpss/Admin/View\Inventory\manageoutin.html" */ ?>
<?php /*%%SmartyHeaderCode:4602584ae4a28844c6-81276082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e17e4c80c344ae84ab600d4992b87581c923c65' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\Inventory\\manageoutin.html',
      1 => 1481307234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4602584ae4a28844c6-81276082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_584ae4a28ebd1',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae4a28ebd1')) {function content_584ae4a28ebd1($_smarty_tpl) {?><!--出库管理-->
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
                <span style="float: left;">当前位置是：库存管理-》出库管理[未出库清单]</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a href="<?php echo @__CONTROLLER__;?>
/show_oldout" class="tablelink">查看历史清单</a>
                </span>
            </span>
        </div> 
    <div class="rightinfo">

    <table class="tablelist">
    	<thead>
    	<tr>
        <th>销售订单编号<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>供应商</th>
        <th>联系人</th>
        <th>订单金额</th>
        <th>订单时间</th>
        <th>订单状态</th>
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
                        <td width="15%"><?php echo $_smarty_tpl->tpl_vars['v']->value['orderpo'];?>
</td>
                        <td width="10%"><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_name'];?>
</td>
                        <td width="10%"><?php echo $_smarty_tpl->tpl_vars['v']->value['cus_principal'];?>
</td>  
                        <td width="10%"><?php echo $_smarty_tpl->tpl_vars['v']->value['sale_total'];?>
</td>
                        <td width="20%"><?php echo $_smarty_tpl->tpl_vars['v']->value['orderdate'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
                        <td><center>
            <!-- <a href="<?php echo @__CONTROLLER__;?>
/saveout/orderpo/<?php echo $_smarty_tpl->tpl_vars['v']->value['orderpo'];?>
" class="tablelink">查看订单</a>
            &nbsp;&nbsp; &nbsp; &nbsp;  -->
            <a href="<?php echo @__CONTROLLER__;?>
/saveout/orderpo/<?php echo $_smarty_tpl->tpl_vars['v']->value['orderpo'];?>
" class="tablelink">确认出库</a>
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
</form
</body>
</html>


<?php }} ?>