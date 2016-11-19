<?php /* Smarty version Smarty-3.1.6, created on 2016-11-19 09:32:34
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Inventory/showin.html" */ ?>
<?php /*%%SmartyHeaderCode:1447958046582fabb2567d17-50853538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a77a9d4a0a06d64005d6a4ca2e4bbe686218ed5c' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Inventory/showin.html',
      1 => 1479332186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1447958046582fabb2567d17-50853538',
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
  'unifunc' => 'content_582fabb25fcbd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582fabb25fcbd')) {function content_582fabb25fcbd($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/ThinkPHP/Library/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <span style="float: left;">当前位置是：库存管理-》库存信息</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                </span>
            </span>
        </div>
        <div class="div_search">
            <span>
               <form action="#" method="get">
                   <input type="text"/>
                   <input value="查询" type="submit" />
               </form>
            </span>
        </div>

    <div class="rightinfo">
    <table class="tablelist">
    	<thead>
    	<tr>
        <th>ID<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>名称</th>
        <th>生产厂商</th>
        <th>类型</th>
        <th>库存</th>
        <th>创建时间</th>
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
                        <td width="3%"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
</td>
                        <td width="15%"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_name'];?>
</td>
                        <td width="18%"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_manufacturer'];?>
</td>
                        <td width="6%"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_type'];?>
</td>
                        <td width="4%"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_inventory'];?>
</td>
                        <td width="11%"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['med_date'],"%Y-%m-%d %T");?>
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