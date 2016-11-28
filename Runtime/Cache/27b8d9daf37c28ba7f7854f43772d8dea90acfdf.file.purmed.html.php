<?php /* Smarty version Smarty-3.1.6, created on 2016-11-23 22:30:22
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Trade/purmed.html" */ ?>
<?php /*%%SmartyHeaderCode:17249440495834b46eb64c38-16035963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27b8d9daf37c28ba7f7854f43772d8dea90acfdf' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Trade/purmed.html',
      1 => 1479909572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17249440495834b46eb64c38-16035963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5834b46ec438d',
  'variables' => 
  array (
    'infoA' => 0,
    'info' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5834b46ec438d')) {function content_5834b46ec438d($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <span style="float: left;">当前位置是：采购管理-》选择采购药品</span>
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
    <div>
        <span>
            <form action="#" method="get">
                <input size="20px" type="text" value="供应商:[<?php echo $_smarty_tpl->tpl_vars['infoA']->value['sup_name'];?>
]" readonly="ture"/>
            </form>
        </span>
    </div>
    
    <div class="rightinfo">
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value=""/></th>
        <th>ID<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>名称</th>
        <th>生产厂商</th>
        <th>规格</th>
        <th>类型</th>
        <th>采购价</th>
        </tr>     
        </thead>
        <tbody>
            <form action="<?php echo @__CONTROLLER__;?>
/purchase" method="post">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
<!--                <tr id="product1">
                        <td><input name="checkbox[]" type="checkbox"/>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_manufacturer'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_norms'];?>
</td>           
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_type'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_price'];?>
</td> </td>
                    </tr>-->
                    <tr id="product1">
<!--                        <td><input name="checkbox[]" type="checkbox" 
                                   value="<?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['med_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['med_manufacturer'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['med_norms'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['med_type'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['med_price'];?>
"/>
                        </td>-->
                        <td><input name="checkbox[]" type="checkbox" 
                                   value="<?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
"/>
                        </td>

                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_manufacturer'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_norms'];?>
</td>           
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_type'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_inprice'];?>
</td></td>
                    </tr>
            <?php } ?>
            <tr>
                <td colspan="20" style="text-align: center;">
                    <div class="pages"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div> 
                </td>
            </tr>
            <tr>
                <td colspan="20" style="text-align: center;">
                    <div class="text-center">
                        <!--<a href="<?php echo @__CONTROLLER__;?>
/sales">-->
                        <input id="checked" name="checked" type="submit" value="生成订单"/>
                        <!--</a>-->        
                    </div>
                </td>
            </tr>
            </form> 
        </tbody>
    </table>
    </div>
</body>
</html>
<?php }} ?>