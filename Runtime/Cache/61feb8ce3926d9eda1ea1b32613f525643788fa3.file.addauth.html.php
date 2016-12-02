<?php /* Smarty version Smarty-3.1.6, created on 2016-11-29 05:40:31
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/System/addauth.html" */ ?>
<?php /*%%SmartyHeaderCode:1037811026583ca44f6c93e3-74709640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61feb8ce3926d9eda1ea1b32613f525643788fa3' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/System/addauth.html',
      1 => 1479517805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1037811026583ca44f6c93e3-74709640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorInfo' => 0,
    'auth_infoA' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_583ca44f77842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ca44f77842')) {function content_583ca44f77842($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                            <span style="float:left">当前位置是：权限管理-》添加权限</span>
                            <span style="float:right;margin-right: 8px;font-weight: bold">
                                <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showauth">【返回】</a>
                            </span>
                        </span>
                    </div>
                    <div style="font-size: 13px;margin: 10px 5px">
                        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td>权限名称</td>
                                    <td><input type="text" name="auth_name" />
                                    <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['auth_name'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>权限上级</td>
                                    <td>
                                        <select name="auth_pid">
                                            <option value="0">-请选择-</option>
                                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</option>
                                            <?php } ?>
                                        </select>
                                     <span style="color: red;">
                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                     <?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['auth_pid'];?>

                                     </span>    
                                    </td>
                                </tr>
                                <tr>
                                    <td>权限控制器</td>
                                    <td><input type="text" name="auth_c" />
                                         <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['auth_c'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>权限操作方法</td>
                                    <td><input type="text" name="auth_a" />
                                     <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['auth_a'];?>
</span>
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