<?php /* Smarty version Smarty-3.1.6, created on 2016-11-23 05:18:02
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Admin/left.html" */ ?>
<?php /*%%SmartyHeaderCode:6903014375834b60a980ff2-66551966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e4a6bb3dc595f9c0188ebeee7536c3cf20dd2b6' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Admin/left.html',
      1 => 1479418259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6903014375834b60a980ff2-66551966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth_infoA' => 0,
    'v' => 0,
    'auth_infoB' => 0,
    '_v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5834b60aabf4d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5834b60aabf4d')) {function content_5834b60aabf4d($_smarty_tpl) {?><html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
        <script language=javascript>
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                }
                else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
    </head>
    <body>
        <div class="leftnav-title"><strong><span class="icon-list" width="170"></span>菜单列表</strong></div>
        <table height="92.5%" cellspacing=0 cellpadding=0 width=170 
               background="<?php echo @ADMIN_IMG_URL;?>
menu_bg.jpg" border=0>
               <tr>              
                <td valign=top align=middle>                    
                    <table cellspacing=0 cellpadding=0 width="100%" border=0>
                        <tr>
                            <td height=10></td></tr></table>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background="<?php echo @ADMIN_IMG_URL;?>
menu_bt.jpg"><a 
                                    class=menuparent onclick=expand(<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
)
                                    href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id="child<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
" style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['_v']->value['auth_pid']===$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                        <tr height=20>
                            <td align=middle width=30><img height=9 src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                        <td><a class=menuchild href="<?php echo @__MODULE__;?>
/<?php echo $_smarty_tpl->tpl_vars['_v']->value['auth_c'];?>
/<?php echo $_smarty_tpl->tpl_vars['_v']->value['auth_a'];?>
" target='right'><?php echo $_smarty_tpl->tpl_vars['_v']->value['auth_name'];?>
</a>
                        </td></tr>
                        <tr height=4><td colspan=2></td></tr>
                        <?php }?>
                        <?php } ?>
                     </table>
                    <?php } ?>
                </td>
                <td width=1 bgcolor=#d1e6f7></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>