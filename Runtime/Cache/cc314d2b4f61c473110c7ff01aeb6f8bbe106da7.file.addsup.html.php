<?php /* Smarty version Smarty-3.1.6, created on 2017-02-24 16:09:58
         compiled from "D:/xampp/htdocs/medpss/Admin/View\Supplier\addsup.html" */ ?>
<?php /*%%SmartyHeaderCode:5117584ae3dbb242f8-31691234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc314d2b4f61c473110c7ff01aeb6f8bbe106da7' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\Supplier\\addsup.html',
      1 => 1481303044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5117584ae3dbb242f8-31691234',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_584ae3dbb8388',
  'variables' => 
  array (
    'errorInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae3dbb8388')) {function content_584ae3dbb8388($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                            <span style="float:left">当前位置是：供应商管理-》添加供应商</span>
                            <span style="float:right;margin-right: 8px;font-weight: bold">
                            </span>
                        </span>
                    </div>
                    <div style="font-size: 13px;margin: 10px 5px">
                        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td>应用商名称</td>
                                    <td><input name="sup_name" type="text"/> 
                                        <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['sup_name'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>联系人</td>
                                    <td><input name="sup_principal" type="text"/> 
                                        <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['sup_principal'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>电话/传真</td>
                                    <td><input type="text" name="sup_fax" maxlength="8"/>
                                    <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['sup_fax'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>手机号码</td>
                                    <td><input type="text" name="sup_phone" maxlength="11"/>
                                        <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['sup_phone'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>银行帐户</td>
                                    <td><input type="text" name="sup_bcard" maxlength="19"/>
                                         <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['sup_bcard'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" name="sup_email" />
                                     <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['sup_email'];?>
</span>
                                    </td>
                                </tr>                            
                                <tr>
                                    <td>通讯地址</td>
                                    <td><input type="text" name="sup_address" />
                                     <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['sup_address'];?>
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