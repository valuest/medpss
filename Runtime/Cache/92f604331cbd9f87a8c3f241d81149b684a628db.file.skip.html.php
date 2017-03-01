<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:23:19
         compiled from "D:/xampp/htdocs/medpss/Home/View\Manager\skip.html" */ ?>
<?php /*%%SmartyHeaderCode:2277584ae887da8621-74513761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92f604331cbd9f87a8c3f241d81149b684a628db' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Home/View\\Manager\\skip.html',
      1 => 1479541812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2277584ae887da8621-74513761',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_584ae887de608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae887de608')) {function content_584ae887de608($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- saved from url=(0034)http://www.linked-f.com/events.asp -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>页面跳转中</title>
    <script type="text/javascript">
	    var InterValObj; //timer变量，控制时间
	    var count=4;
	    var curCount;
	    function SetRemainTime() {
           if (curCount == 0) {
               window.clearInterval(InterValObj);//停止计时器
               window.setTimeout("window.location='<?php echo @__CONTROLLER__;?>
/login'",0); 
           }
           else {
               curCount--;
               document.getElementById("redirect_info").innerHTML=("密码修改成功，"+curCount+"秒后返回登录页面...");
           }
	    }
    </script>
</head>
<body>
<div>
	<p id="redirect_info" class="" align="center" style="font-size:20px; color:#21B7C5;"></p>
	<script type="text/javascript">
		curCount=count;
		InterValObj = window.setInterval(SetRemainTime, 1000);
	</script>
</div>


</body></html><?php }} ?>