<?php /* Smarty version Smarty-3.1.6, created on 2016-12-09 00:48:28
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/System/backup.html" */ ?>
<?php /*%%SmartyHeaderCode:2034570069583719ce711114-00858021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b4012430a9513b3e23d664face0d177d8fb9a86' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/System/backup.html',
      1 => 1481215672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2034570069583719ce711114-00858021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_583719ce759ee',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583719ce759ee')) {function content_583719ce759ee($_smarty_tpl) {?><!DOCTYPE html>
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