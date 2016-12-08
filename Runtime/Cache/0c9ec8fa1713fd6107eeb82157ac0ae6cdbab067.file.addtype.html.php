<?php /* Smarty version Smarty-3.1.6, created on 2016-12-08 23:25:35
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Med/addtype.html" */ ?>
<?php /*%%SmartyHeaderCode:3668793558496b0e5b7408-17130162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c9ec8fa1713fd6107eeb82157ac0ae6cdbab067' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Med/addtype.html',
      1 => 1481210724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3668793558496b0e5b7408-17130162',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58496b0e61adf',
  'variables' => 
  array (
    'errorInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58496b0e61adf')) {function content_58496b0e61adf($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>add</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
            <link href="<?php echo @ADMIN_CSS_URL;?>
add&change.css" rel="stylesheet" type="text/css" />
       
                </head>

                <body>

                    <div class="div_head">
                        <span>
                            <span style="float:left">当前位置是：药品管理-》添加药品类型</span>
                            <span style="float:right;margin-right: 8px;font-weight: bold">
                                
                            </span>
                        </span>
                    </div>
                    <div style="font-size: 13px;margin: 10px 5px">
                        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td>药品类型名称</td>
                                    <td><input type="text" name="type_name" />
                                    <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['type_name'];?>
请重新输入</span>
                                    </td>
                                </tr>
                                 <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" value="添加" onclick="checkNull()"/>
                                    </td>
                                </tr>
                                
                            </table>
                        </form>
                    </div>
                </body>
</html><?php }} ?>