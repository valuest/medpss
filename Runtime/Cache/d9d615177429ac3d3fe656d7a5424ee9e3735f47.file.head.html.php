<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:03:17
         compiled from "D:/xampp/htdocs/medpss/Admin/View\Admin\head.html" */ ?>
<?php /*%%SmartyHeaderCode:5358584ae3d5e2ab73-94166698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9d615177429ac3d3fe656d7a5424ee9e3735f47' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\Admin\\head.html',
      1 => 1479528026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5358584ae3d5e2ab73-94166698',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_584ae3d5e691c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae3d5e691c')) {function content_584ae3d5e691c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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