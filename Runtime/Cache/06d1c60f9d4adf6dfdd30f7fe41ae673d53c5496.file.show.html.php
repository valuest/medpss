<?php /* Smarty version Smarty-3.1.6, created on 2016-11-12 08:59:41
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Med/show.html" */ ?>
<?php /*%%SmartyHeaderCode:103968323958249ba0d36c57-83956280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06d1c60f9d4adf6dfdd30f7fe41ae673d53c5496' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Med/show.html',
      1 => 1478912359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103968323958249ba0d36c57-83956280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58249ba0d8244',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58249ba0d8244')) {function content_58249ba0d8244($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/ThinkPHP/Library/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title> </title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
/mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：药品管理-》药品信息</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    药名<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody>
                    <tr style="font-weight: bold;">
                        <td>ID</td>
                        <td>国药准字号</td>
                        <td>名称</td>
                        <td>生产厂商</td>
                        <td>规格</td>
                        <td>剂型</td>
                        <td>类型</td>
                        <td>售价</td>
                        <td>创建时间</td>                  
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
                    <tr id="product1">
                        <td width="3%"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
</td>
                        <td width="13%"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_approvalnumber'];?>
</td>
                        <td width="15%"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_name'];?>
</td>
                        <td width="18%"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_manufacturer'];?>
</td>
                        <td width="20%"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_norms'];?>
</td>           
                        <td width="8%"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_form'];?>
</td>
                        <td width="6%"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_type'];?>
</td>
                        <td width="4%"><?php echo $_smarty_tpl->tpl_vars['v']->value['med_price'];?>
</td>
                        <td width="11%"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['med_date'],"%Y-%m-%d %T");?>
</td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <div class="pages"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
                            <style>
                                .pages{
                                    width:100.5%;
                                    text-align: center;
                                    padding: 10px 0;
                                    clear: both;
                                }
                                .pages a,.pages .current{
                                    font-size: 12px;
                                    font-family: Arial;
                                    margin: 0 2px;
                                }
                                .pages a,.pages .current{
                                    border: 1px solid background;
                                    background: #fff;
                                    padding: 2px 6px;
                                    text-decoration: none;
                                }
                                .pages .current,.pages a:hover{
                                    background: #B2DFEE;
                                    color: #fff;
                                }
/*                                .pages .now{
                                    color:red; 
                                }
                                .pages .now b{
                                    color:#B2DFEE; 
                                }
                                .pages .total{
                                    color:#B2DFEE;  
                                }
                                .pages .total b{
                                    color:#B2DFEE;  
                                }*/
                            </style>
                        </td>
                </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
<?php }} ?>