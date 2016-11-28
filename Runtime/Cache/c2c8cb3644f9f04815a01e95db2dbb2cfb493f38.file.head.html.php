<?php /* Smarty version Smarty-3.1.6, created on 2016-11-23 05:18:02
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Admin/head.html" */ ?>
<?php /*%%SmartyHeaderCode:18861106965834b60a8710f4-87653401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2c8cb3644f9f04815a01e95db2dbb2cfb493f38' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Admin/head.html',
      1 => 1479556827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18861106965834b60a8710f4-87653401',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5834b60a8d12c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5834b60a8d12c')) {function content_5834b60a8d12c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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