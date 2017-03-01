<?php /* Smarty version Smarty-3.1.6, created on 2017-03-01 11:43:54
         compiled from "D:/xampp/htdocs/medpss/Admin/View\System\changeauth.html" */ ?>
<?php /*%%SmartyHeaderCode:125618923758b6437a54d405-11809661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ab20a582242efb12d6a34ed74d8a1f35666f8da' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\System\\changeauth.html',
      1 => 1479546132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125618923758b6437a54d405-11809661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58b6437a6b220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b6437a6b220')) {function content_58b6437a6b220($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                <span style="float:left">当前位置是：权限管理-》修改权限信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showauth">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
                        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                           <input type="hidden" name="auth_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_id'];?>
"/>
                           <!-- 隐藏域,为了让修改时主键id重新返回数据-->
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td>权限名称</td>
                                    <td><input name="auth_name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_name'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>父类id</td>
                                    <td><input name="auth_pid" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_pid'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>控制器</td>
                                    <td><input name="auth_c" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_c'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>操作方法</td>
                                    <td><input name="auth_a" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_a'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>全路径</td>
                                    <td><input name="auth_path" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_path'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>等级</td>
                                    <td><input name="auth_level" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['auth_level'];?>
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