<?php /* Smarty version Smarty-3.1.6, created on 2016-12-10 01:22:53
         compiled from "D:/xampp/htdocs/medpss/Admin/View\System\backup.html" */ ?>
<?php /*%%SmartyHeaderCode:28292584ae86de9b467-31326341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ac3d275acb8d6b1fb378871ea27f1014ca418ec' => 
    array (
      0 => 'D:/xampp/htdocs/medpss/Admin/View\\System\\backup.html',
      1 => 1481186872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28292584ae86de9b467-31326341',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_584ae86ded3b1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ae86ded3b1')) {function content_584ae86ded3b1($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>数据库备份</div>
        <a href="<?php echo @__CONTROLLER__;?>
/backuptest">test备份</a>
        <a href="<?php echo @__CONTROLLER__;?>
/reductiontest">test还原</a>
        
    </body>
</html>
<?php }} ?>