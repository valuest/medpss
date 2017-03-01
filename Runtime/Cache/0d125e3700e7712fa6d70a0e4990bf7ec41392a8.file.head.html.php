<?php /* Smarty version Smarty-3.1.6, created on 2017-02-17 14:46:47
         compiled from "D:/php/xampp/htdocs/medpss/Admin/View\Admin\head.html" */ ?>
<?php /*%%SmartyHeaderCode:149912626058a69c579f3af0-91198661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d125e3700e7712fa6d70a0e4990bf7ec41392a8' => 
    array (
      0 => 'D:/php/xampp/htdocs/medpss/Admin/View\\Admin\\head.html',
      1 => 1479528026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149912626058a69c579f3af0-91198661',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a69c57a33f8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a69c57a33f8')) {function content_58a69c57a33f8($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
       <div class="nav-top">
    <span>药品进销存管理系统&nbsp;</span>
    <p>Ver.1.0</p>
    <div class="nav-topright">
                    <p>当前用户：<?php echo $_SESSION['user_name'];?>
</p> 
                    <a style="color: #fff" href="../../Home/Manager/changepass" target='right'>修改口令</a> 
                    
                    <a style="color: #fff" onclick="if (confirm('确定要退出吗？')) 
                        return true; else return false;" 
                        href="../../Home/Manager/logout" target=_top>退出系统</a> 
    </div>
</div>
    </body>
</html><?php }} ?>