<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:23:10
         compiled from "D:/xampp/htdocs/medpss/Home/View\Manager\changepass.html" */ ?>
<?php /*%%SmartyHeaderCode:28400584ae87e4ba795-07372408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9be9ac9ce737a2a5f1ba419bfe7ee956149d6dea' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Home/View\\Manager\\changepass.html',
      1 => 1479539800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28400584ae87e4ba795-07372408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_584ae87e51677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae87e51677')) {function content_584ae87e51677($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="<?php echo @CSS_URL;?>
pintuer.css">
<link rel="stylesheet" href="<?php echo @CSS_URL;?>
admin.css">
<script src="<?php echo @JS_URL;?>
jquery.js"></script>
<script src="<?php echo @JS_URL;?>
pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-key"></span> 修改用户密码</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo @__SELF__;?>
">
        <input type="hidden" name="mg_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['mg_id'];?>
"/>
         <!-- 隐藏域,为了让修改时主键id重新返回数据-->
      <div class="form-group">
        <div class="label">
          <label for="sitename">管理员帐号：</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
           <?php echo $_SESSION['user_name'];?>

          </label>
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">原密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" id="old_pass" name="old_pass" size="50" placeholder="请输入原密码" data-validate="required:请输入原始密码" />       
        </div>
      </div>      
      <div class="form-group">
        <div class="label">
          <label for="sitename">新密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" id="mg_password" name="mg_password" size="50" placeholder="请输入新密码" data-validate="required:请输入新密码,length#>=5:新密码不能小于5位" />         
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label for="sitename">确认新密码：</label>
        </div>
        <div class="field">
          <input type="password" class="input w50" name="renewpass" size="50" placeholder="请再次输入新密码" data-validate="required:请再次输入新密码,repeat#mg_password:两次输入的密码不一致" />          
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>   
        </div>
      </div>      
    </form>
  </div>
</div>
</body></html><?php }} ?>