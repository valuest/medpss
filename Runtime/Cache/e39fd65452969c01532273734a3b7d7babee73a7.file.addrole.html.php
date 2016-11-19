<?php /* Smarty version Smarty-3.1.6, created on 2016-11-19 22:11:36
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/System/addrole.html" */ ?>
<?php /*%%SmartyHeaderCode:1911466197582fa73aaf3b78-76465461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e39fd65452969c01532273734a3b7d7babee73a7' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/System/addrole.html',
      1 => 1479564693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1911466197582fa73aaf3b78-76465461',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_582fa73ab69dd',
  'variables' => 
  array (
    'errorInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582fa73ab69dd')) {function content_582fa73ab69dd($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="zh-cn">
    <head>
        <title>add</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
            <link href="<?php echo @ADMIN_CSS_URL;?>
add&change.css" rel="stylesheet" type="text/css" />    
                </head>
                <body>

                    <div class="div_head">
                        <span>
                            <span style="float:left">当前位置是：权限管理-》添加角色</span>
                            <span style="float:right;margin-right: 8px;font-weight: bold">
                                <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/manageauth">【返回】</a>
                            </span>
                        </span>
                    </div>
                    <div style="font-size: 13px;margin: 10px 5px">
                        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td>角色名称</td>
                                    <td>
                                        <input type="text" name="role_name" placeholder="请输入角色名" data-validate="required:角色名不能为空" />
<!--                                    <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['role_name'];?>
</span>-->
                                    </td>
                                </tr>
                                 <tr>
                                    <td colspan="2" style="text-align:right;padding-right:20px">
                                        <input type="submit" value="添加" onclick="return checkNull()">
                                    </td>
                                </tr>
                                
                            </table>
                        </form>
                    </div>
                </body>
                </html><?php }} ?>