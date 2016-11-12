<?php /* Smarty version Smarty-3.1.6, created on 2016-11-13 07:02:20
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Med/changemed.html" */ ?>
<?php /*%%SmartyHeaderCode:138600878858278da6215eb3-86884138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3791677bb3b282025fbb1c477727ab2c62c42114' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Med/changemed.html',
      1 => 1478991735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138600878858278da6215eb3-86884138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58278da624008',
  'variables' => 
  array (
    'info' => 0,
    'info1' => 0,
    '_v' => 0,
    'info2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58278da624008')) {function content_58278da624008($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>修改</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改药品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/managemed">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
                        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                           <input type="hidden" name="med_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_id'];?>
"/>
                           <!-- 隐藏域,为了让修改时主键id重新返回数据-->
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td>国药准字号</td>
                                    <td><input name="med_approvalnumber" type="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_approvalnumber'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>药品名称</td>
                                    <td><input type="text" name="med_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_name'];?>
" /></td>
                                </tr>
                                <tr>
                                    <td>生产厂家</td>
                                    <td><input type="text" name="med_manufacturer" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_manufacturer'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>药品规格</td>
                                    <td><input type="text" name="med_norms" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_norms'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>药品剂型</td>
                                    <td><input type="text" name="med_form" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_form'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>药品类型</td>
                                    <td>
                                        <select name="med_type">
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_type'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['med_type'];?>
</option>
                                            <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['med_type'];?>
"><?php echo $_smarty_tpl->tpl_vars['_v']->value['med_type'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>药品采购价</td>
                                    <td><input type="text" name="med_inprice" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_inprice'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>药品零售价</td>
                                    <td><input type="text" name="med_price" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_price'];?>
"/></td>
                                </tr>
                                <tr>
                                    <td>供应商</td>
                                    <td>
                                        <select name="med_supplier">
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['med_supplier'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['med_supplier'];?>
</option>
                                            <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['med_supplier'];?>
"><?php echo $_smarty_tpl->tpl_vars['_v']->value['med_supplier'];?>
</option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>修改时间</td>
                                    <td><input type="text" name="med_date" id="today" /></td>
                                </tr>           
                                <script type="text/javascript">
                                    function today() {
                                        var today = new Date();
                                        var y = today.getFullYear();
                                        var m = today.getMonth() + 1;
                                        var d = today.getDate();
                                        var h = ("0" + today.getHours()).slice(-2);
                                        var f = ("0" + today.getMinutes()).slice(-2);
                                        var s = ("0" + today.getSeconds()).slice(-2);
                                        return y + "-" + m + "-" + d + " " + h + ":" + f + ":" + s;
                                    }

                                    document.getElementById("today").value = today();
                                </script>

                                <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" value="修改">
                                    </td>
                                </tr> 
                            </table>
                        </form>
                    </div>
    </body>
</html><?php }} ?>