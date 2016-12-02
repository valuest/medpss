<?php /* Smarty version Smarty-3.1.6, created on 2016-11-23 06:24:54
         compiled from "/Library/WebServer/Documents/medpss/Home/View/Manager/login.html" */ ?>
<?php /*%%SmartyHeaderCode:20061476665834c5b64fffb5-48017383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e8b089321a0b6573aa6a7675ae755c1f9b5d4cf' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Home/View/Manager/login.html',
      1 => 1479511926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20061476665834c5b64fffb5-48017383',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5834c5b657d1a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5834c5b657d1a')) {function content_5834c5b657d1a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	<h1>药品进销存管理系统</h1>
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