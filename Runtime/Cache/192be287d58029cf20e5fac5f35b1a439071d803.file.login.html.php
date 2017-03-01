<?php /* Smarty version Smarty-3.1.6, created on 2017-02-17 14:53:28
         compiled from "D:/php/xampp/htdocs/medpss/Home/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:129414845058a475c0cff401-20740765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '192be287d58029cf20e5fac5f35b1a439071d803' => 
    array (
      0 => 'D:/php/xampp/htdocs/medpss/Home/View\\Manager\\login.html',
      1 => 1487314398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129414845058a475c0cff401-20740765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a475c0d2866',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a475c0d2866')) {function content_58a475c0d2866($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MedPss Management System</title>
<link href="<?php echo @CSS_URL;?>
login.css" type="text/css" rel="stylesheet"></link>
<script type="text/javascript" src="<?php echo @JS_URL;?>
img.js"></script>
</head>

<body>

<div class="login-box">
	<h1>药品存销管理系统</h1>
	<form method="post" action="">
		<div class="name">
			<label>账 号：</label>
			<input type="text" name="username" id="username" tabindex="1" autocomplete="off" />
		</div>
		<div class="password">
			<label>密  码：</label>
			<input type="password" name="userpassword" maxlength="16" id="userpassword" tabindex="2"/>
		</div>
		<div class="code">
			<label>验证码：</label>
			<input type="text" name="code" maxlength="4" id="code" tabindex="3"/>
			<div class="codeImg">
                            <img src="<?php echo @__CONTROLLER__;?>
/verifyImg" onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg/'+Math.random()"/>
			</div>
		</div>
            <br></br>
<!--		<div class="remember">
			<input type="checkbox" id="remember" tabindex="4">
			<label>记住密码</label>
		</div>-->
		<div class="login">
			<button type="submit" tabindex="5">登录</button>
		</div>
	</form>
</div>

<!--<div class="bottom">©2016 Leting <a href="javascript:;" target="_blank">关于</a> <span>京ICP证030173号</span><img width="13" height="16" src="Public/image/copy_rignt_24.png" /></div>-->
<div class="screenbg">
	<ul>
            <li><a href="javascript:;"><img src="<?php echo @IMG_URL;?>
login.jpg"></a></li>
	</ul>
</div>
</body>
</html>
<?php }} ?>