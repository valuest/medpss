<?php /* Smarty version Smarty-3.1.6, created on 2016-11-13 06:35:41
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Med/addmed.html" */ ?>
<?php /*%%SmartyHeaderCode:2467539835824975d28aee7-77402497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95ca0364333751836b6b83a0946aad6e124e2c1c' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Med/addmed.html',
      1 => 1478990135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2467539835824975d28aee7-77402497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5824975d30284',
  'variables' => 
  array (
    'info1' => 0,
    '_v' => 0,
    'info2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5824975d30284')) {function content_5824975d30284($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>add</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
            <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
                <!--            <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
check.js"></script>-->
                </head>

                <body>

                    <div class="div_head">
                        <span>
                            <span style="float:left">当前位置是：药品管理-》添加药品</span>
                            <span style="float:right;margin-right: 8px;font-weight: bold">
                            </span>
                        </span>
                    </div>
                    <div></div>

                    <div style="font-size: 13px;margin: 10px 5px">
                        <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                            <table border="1" width="100%" class="table_a">
                                <tr>
                                    <td>国药准字号</td>
                                    <td><input name="med_approvalnumber" type="text" placeholder="例:H20010815"/>(化学药:H+8位数字;中药:Z+8位数字)</td>
                                </tr>
                                <tr>
                                    <td>药品名称</td>
                                    <td><input type="text" name="med_name" /></td>
                                </tr>
                                <tr>
                                    <td>生产厂家</td>
                                    <td><input type="text" name="med_manufacturer" /></td>
                                </tr>
                                <tr>
                                    <td>药品规格</td>
                                    <td><input type="text" name="med_norms" /></td>
                                </tr>
                                <tr>
                                    <td>药品剂型</td>
                                    <td><input type="text" name="med_form" /></td>
                                </tr>
                                <tr>
                                    <td>药品类型</td>
                                    <td>
                                        <select name="med_type">
                                            <option value="">请选择</option>
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
                                    <td><input type="text" name="med_inprice" /></td>
                                </tr>
                                <tr>
                                    <td>药品零售价</td>
                                    <td><input type="text" name="med_price" /></td>
                                </tr>
                                <tr>
                                    <td>药品库存</td>
                                    <td><input type="text" name="med_inventory" value="0" readonly="true"/></td>
                                </tr>
                                <tr>
                                    <td>供应商</td>
                                    <td>
                                        <select name="med_supplier">
                                            <option value="">请选择</option>
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
                                    <td>添加时间</td>
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
                                        <input type="submit" value="添加" onclick="return checkNull()">
                                    </td>
                                </tr>
<!--                                <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" value="添加" onclick="return checkNull()">
                                    </td>
                                </tr>
                                <script type="text/javascript">
                                    function checkNull()
                                    {
                                        var num = 0;
                                        var str = "";
                                        $("input[type$='text']").each(function (n) {
                                            if ($(this).val() == "")
                                            {
                                                num++;
                                                str += "?" + $(this).attr("msg") + "不能为空！\r\n";
                                            }
                                        });
                                        if (num > 0)
                                        {
                                            alert(str);
                                            return false;
                                        } else
                                        {
                                            return true;
                                        }
                                    }

                                </script>-->
                            </table>
                        </form>
                    </div>
                </body>
                </html><?php }} ?>