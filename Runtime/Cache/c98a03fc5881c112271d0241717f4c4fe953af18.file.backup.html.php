<?php /* Smarty version Smarty-3.1.6, created on 2017-02-17 14:47:08
         compiled from "D:/php/xampp/htdocs/medpss/Admin/View\System\backup.html" */ ?>
<?php /*%%SmartyHeaderCode:212543115558a69c6cacada5-80635046%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c98a03fc5881c112271d0241717f4c4fe953af18' => 
    array (
      0 => 'D:/php/xampp/htdocs/medpss/Admin/View\\System\\backup.html',
      1 => 1481186872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212543115558a69c6cacada5-80635046',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a69c6cb22bd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a69c6cb22bd')) {function content_58a69c6cb22bd($_smarty_tpl) {?><!DOCTYPE html>
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