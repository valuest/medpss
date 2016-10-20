<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MedPss Management System</title>
<link href="Public/css/login.css" type="text/css" rel="stylesheet"></link>
<script type="text/javascript" src="Public/js/img.js"></script>
</head>

<body>

<div class="login-box">
	<h1>药品进销存管理</h1>
	<form method="post" action="">
		<div class="name">
			<label>账 号：</label>
			<input type="text" name="" id="" tabindex="1" autocomplete="off" />
		</div>
		<div class="password">
			<label>密  码：</label>
			<input type="password" name="" maxlength="16" id="" tabindex="2"/>
		</div>
		<div class="code">
			<label>验证码：</label>
			<input type="text" name="" maxlength="4" id="code" tabindex="3"/>
			<div class="codeImg">
				<img src="Public/image/captcha.jpeg.jpg" />
			</div>
		</div>
		<div class="remember">
			<input type="checkbox" id="remember" tabindex="4">
			<label>记住密码</label>
		</div>
		<div class="login">
			<button type="submit" tabindex="5">登录</button>
		</div>
	</form>
</div>

<div class="bottom">©2014 Leting <a href="javascript:;" target="_blank">关于</a> <span>京ICP证030173号</span><img width="13" height="16" src="Public/image/copy_rignt_24.png" /></div>
<div class="screenbg">
	<ul>
	    <li><a href="javascript:;"><img src="Public/image/login.jpg"></a></li>
	</ul>
</body>
</html>