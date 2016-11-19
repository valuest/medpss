<?php /* Smarty version Smarty-3.1.6, created on 2016-11-19 19:02:31
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/System/changeuser.html" */ ?>
<?php /*%%SmartyHeaderCode:191837135582fbb7e3533c6-00382830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41e49f05e3732c34b1cc005a5ed55806e5050bdb' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/System/changeuser.html',
      1 => 1479553335,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191837135582fbb7e3533c6-00382830',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_582fbb7e39846',
  'variables' => 
  array (
    'info' => 0,
    'infoA' => 0,
    'infoB' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582fbb7e39846')) {function content_582fbb7e39846($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                <span style="float:left">当前位置是：用户管理-》修改用户信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/manageuser">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
                        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                           <input type="hidden" name="mg_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_id'];?>
"/>
                           <!-- 隐藏域,为了让修改时主键id重新返回数据-->
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td>用户名</td>
                                    <td><input name="mg_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_name'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>密码</td>
                                    <td><input name="mg_password" type="password" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_password'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>用户角色</td>
                                    <td>
                                        <select name="mg_role_id">
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['infoA']->value['role_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['infoA']->value['role_name'];?>
</option>
                                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </td>
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