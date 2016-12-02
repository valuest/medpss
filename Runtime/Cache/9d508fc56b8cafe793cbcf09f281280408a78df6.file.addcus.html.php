<?php /* Smarty version Smarty-3.1.6, created on 2016-11-29 05:38:44
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Customer/addcus.html" */ ?>
<?php /*%%SmartyHeaderCode:1330464530583ca3e4396016-32434716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d508fc56b8cafe793cbcf09f281280408a78df6' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Customer/addcus.html',
      1 => 1479513468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1330464530583ca3e4396016-32434716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_583ca3e441edf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ca3e441edf')) {function content_583ca3e441edf($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                            <span style="float:left">当前位置是：客户管理-》添加客户</span>
                            <span style="float:right;margin-right: 8px;font-weight: bold">
                            </span>
                        </span>
                    </div>
                    <div style="font-size: 13px;margin: 10px 5px">
                        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td>客户名称</td>
                                    <td><input name="cus_name" type="text"/> 
                                        <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['cus_name'];?>
</span>
                                    </td>
                                </tr>
                                    <td>手机号码</td>
                                    <td><input type="text" name="cus_phone" maxlength="11"/>
                                        <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['cus_phone'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>银行帐户</td>
                                    <td><input type="text" name="cus_bcard" maxlength="19"/>
                                         <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['cus_bcard'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" name="cus_email" />
                                     <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['cus_email'];?>
</span>
                                    </td>
                                </tr>                            
                                <tr>
                                    <td>通讯地址</td>
                                    <td><input type="text" name="cus_address" />
                                     <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['cus_address'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" value="添加" onclick="return checkNull()">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </body>
                </html><?php }} ?>