<?php /* Smarty version Smarty-3.1.6, created on 2016-11-29 05:39:10
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/System/adduser.html" */ ?>
<?php /*%%SmartyHeaderCode:92129927583ca3fe4d37f3-26608758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2942ae47446d7203b68d21af3956ead0d7af353a' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/System/adduser.html',
      1 => 1479555452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92129927583ca3fe4d37f3-26608758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorInfo' => 0,
    'info' => 0,
    '_v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_583ca3fe582a4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ca3fe582a4')) {function content_583ca3fe582a4($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                            <span style="float:left">当前位置是：用户管理-》添加用户</span>
                            <span style="float:right;margin-right: 8px;font-weight: bold">
                                <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/manageuser">【返回】</a>
                            </span>
                        </span>
                    </div>
                    <div style="font-size: 13px;margin: 10px 5px">
                        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td>用户名</td>
                                    <td><input type="text" name="mg_name" />
                                    <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['mg_name'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>密码</td>
                                    <td><input type="password" name="mg_password" />
                                    <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['mg_password'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>确认密码</td>
                                    <td><input type="password" name="mg_password2" />
                                    <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['mg_password2'];?>
</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>添加时间</td>
                                    <td><input type="text" name="mg_time" id="today" /></td>
                                </tr>           
                                <script type="text/javascript">
                                    function today() {
                                        var today = new Date();
                                        var y = today.getFullYear();
                                        var m = today.getMonth() + 1;
                                        var d = today.getDate();
                                        return y + "-" + m + "-" + d ;
                                    }

                                    document.getElementById("today").value = today();
                                </script>
                                
                                <tr>
                                    <td>角色</td>
                                    <td>
                                        <select name="mg_role_id">
                                            <option value="1">-请选择-</option>
                                            <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['role_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_v']->value['role_name'];?>
</option>
                                            <?php } ?>
                                        </select>
                                        <span style="color: red;">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['mg_role_id'];?>
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