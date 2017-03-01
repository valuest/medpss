<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:22:57
         compiled from "D:/xampp/htdocs/medpss/Admin/View\System\addrole.html" */ ?>
<?php /*%%SmartyHeaderCode:30317584ae8716df288-05363558%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7ec1a6c00d51a628f6c669c21f1fdb42e409e56' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\System\\addrole.html',
      1 => 1481182042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30317584ae8716df288-05363558',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errorInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_584ae87172306',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae87172306')) {function content_584ae87172306($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
                                   <span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value['role_name'];?>
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