<?php /* Smarty version Smarty-3.1.6, created on 2016-11-19 09:27:04
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/System/distribute.html" */ ?>
<?php /*%%SmartyHeaderCode:944512013582faa68217517-91057229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c9c6691163715bc8388ecae75bc10c80fda6993' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/System/distribute.html',
      1 => 1479430276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '944512013582faa68217517-91057229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role_info' => 0,
    'auth_infoA' => 0,
    'v' => 0,
    'have_authids' => 0,
    'auth_infoB' => 0,
    '_v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_582faa682bfde',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582faa682bfde')) {function content_582faa682bfde($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>权限分配</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
            <link href="<?php echo @ADMIN_CSS_URL;?>
add&change.css" rel="stylesheet" type="text/css" />
       
                </head>

                <body>

                    <div class="div_head">
                        <span>
                            <span style="float:left">当前位置是：系统管理-》权限管理-》权限分配[<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_name'];?>
]</span>
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
                                <!--隐藏域-->
                                <input type="hidden" name="role_id" value="<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_id'];?>
"/>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <tr>
                                    <td width="18%"><input type="checkbox" name="auth_id[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
"
                                        <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['auth_id'],$_smarty_tpl->tpl_vars['have_authids']->value)){?>checked='checked'<?php }?>
                                        /><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</td>
                                    <td>
                                        <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['_v']->value['auth_pid']===$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                                        <div style="width: 200px;float: left;">
                                            <input type="checkbox" name="auth_id[]" value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['auth_id'];?>
"
                                        <?php if (in_array($_smarty_tpl->tpl_vars['_v']->value['auth_id'],$_smarty_tpl->tpl_vars['have_authids']->value)){?>checked='checked'<?php }?>
                                        /><?php echo $_smarty_tpl->tpl_vars['_v']->value['auth_name'];?>
</div>
                                        <?php }?>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="2" style="text-align:right;padding-right:20px" >
                                        <input type="submit" value="分配权限"/>
                                    </td>
                                </tr>
                            </table>
                            
<!--                            <input type="submit" value="分配权限"/>-->
                        </form>
                    </div>
                </body>
                </html><?php }} ?>