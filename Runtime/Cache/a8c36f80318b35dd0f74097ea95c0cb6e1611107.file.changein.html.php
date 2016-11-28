<?php /* Smarty version Smarty-3.1.6, created on 2016-11-25 00:45:28
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Inventory/changein.html" */ ?>
<?php /*%%SmartyHeaderCode:1838116865837192873c844-07741545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8c36f80318b35dd0f74097ea95c0cb6e1611107' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Inventory/changein.html',
      1 => 1479331945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1838116865837192873c844-07741545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_583719287df11',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583719287df11')) {function content_583719287df11($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
add&change.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：库存管理-》库存维护</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/managein">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
                        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                           <input type="hidden" name="med_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_id'];?>
"/>
                           <!-- 隐藏域,为了让修改时主键id重新返回数据-->
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td>国药准字号</td>
                                    <td><input name="med_approvalnumber" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_approvalnumber'];?>
" readonly="true"/></td>
                                </tr>
                                <tr>
                                    <td>药品名称</td>
                                    <td><input type="text" name="med_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_name'];?>
" readonly="true"/></td>
                                </tr>
                                <tr>
                                    <td>生产厂家</td>
                                    <td><input type="text" name="med_manufacturer" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_manufacturer'];?>
"readonly="true"/></td>
                                </tr>
                                <tr>
                                    <td>药品规格</td>
                                    <td><input type="text" name="med_norms" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_norms'];?>
"readonly="true"/></td>
                                </tr>
                                <tr>
                                    <td>药品剂型</td>
                                    <td><input type="text" name="med_form" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_form'];?>
"readonly="true"/></td>
                                </tr>
                                <tr>
                                    <td>药品类型</td>
                                    <td><input type="text" name="med_type" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_type'];?>
"readonly="true"/></td>
                                </tr>
                                <tr>
                                    <td>药品库存</td>
                                    <td><input type="text" name="med_inventory" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_inventory'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>供应商</td>
                                    <td><input type="text" name="med_supplier" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_supplier'];?>
"readonly="true"/></td>
                                </tr> 
                                <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" value="维护">
                                    </td>
                                </tr> 
                            </table>
                        </form>
                    </div>
    </body>
</html><?php }} ?>