<?php /* Smarty version Smarty-3.1.6, created on 2016-12-08 21:48:59
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Med/managemed.html" */ ?>
<?php /*%%SmartyHeaderCode:1916471921583ca38dee78b4-44976588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '452d021c23b483ed1e79773dabdbf4b9fbc2377d' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Med/managemed.html',
      1 => 1481204936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1916471921583ca38dee78b4-44976588',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_583ca38e075f4',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ca38e075f4')) {function content_583ca38e075f4($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/ThinkPHP/Library/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <span style="float: left;">当前位置是：药品管理-》信息管理</span>
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
        <th>国药准字号</th>
        <th>名称</th>
        <th>生产厂商</th>
        <th>规格</th>
        <th>剂型</th>
        <th>类型</th>
        <th>售价</th>
        <th>创建时间</th>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_approvalnumber'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_manufacturer'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_norms'];?>
</td>           
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_form'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_type'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_price'];?>
</td>
                        <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['med_date'],"%Y-%m-%d %T");?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/changemed/med_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
" class="tablelink">修改</a>
                            <a href="<?php echo @__CONTROLLER__;?>
/deletemed/med_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
" class="tablelink">  删除</a>
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