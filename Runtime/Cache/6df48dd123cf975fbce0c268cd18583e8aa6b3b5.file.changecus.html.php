<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 10:02:15
         compiled from "D:/xampp/htdocs/medpss/Admin/View\Customer\changecus.html" */ ?>
<?php /*%%SmartyHeaderCode:27086584b622783b557-36963052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6df48dd123cf975fbce0c268cd18583e8aa6b3b5' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\Customer\\changecus.html',
      1 => 1481175612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27086584b622783b557-36963052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_584b62279e84c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584b62279e84c')) {function content_584b62279e84c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
           <link href="<?php echo @ADMIN_CSS_URL;?>
add&change.css" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：客户管理-》修改客户信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/managecus">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
                        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                           <input type="hidden" name="cus_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cus_id'];?>
"/>
                           <!-- 隐藏域,为了让修改时主键id重新返回数据-->
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td>客户名</td>
                                    <td><input name="cus_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cus_name'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>联系人</td>
                                    <td><input name="cus_principal" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cus_principal'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>手机号码</td>
                                    <td><input type="text" name="cus_phone" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cus_phone'];?>
" /></td>
                                </tr>
                                <tr>
                                    <td>银行帐户</td>
                                    <td><input type="text" name="cus_bcard" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cus_bcard'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text" name="cus_email" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cus_email'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>通讯地址</td>
                                    <td><input type="text" name="cus_address" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['cus_address'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" value="修改">
                                    </td>
                                </tr> 
                            </table>
                        </form>
                    </div>
    </body>
</html><?php }} ?>