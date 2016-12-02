<?php /* Smarty version Smarty-3.1.6, created on 2016-12-02 18:49:01
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Trade/salemed.html" */ ?>
<?php /*%%SmartyHeaderCode:10490487625834b5e5f012d0-45923586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a3af537440386139204a874f3297547a6a6b008' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Trade/salemed.html',
      1 => 1480675734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10490487625834b5e5f012d0-45923586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5834b5e609d7a',
  'variables' => 
  array (
    'infoA' => 0,
    'info' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5834b5e609d7a')) {function content_5834b5e609d7a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息管理</title>
<link href="<?php echo @ADMIN_CSS_URL;?>
show.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @ADMIN_CSS_URL;?>
add&change.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.shiftcheckbox.js"></script>
<script type="text/javascript">
      function setInfoText(text) {
        $('#demo1-link').text(text);
        if (console && console.log) console.log(text);
      }
      $(function() {
        $('#demo1 div.checkbox').shiftcheckbox({
          checkboxSelector: ':checkbox',
          selectAll: $('#demo1 .all'),
          onChange: function(checked) {
            setInfoText('Changed checkbox ' + $(this).attr('id') + ' to ' + checked + ' programmatically');
          }
        });     
      });
    </script>
</head>
<body>

        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：药品管理-》信息管理</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                </span>
            </span>
        </div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    <input type="text"/>
                    <input value="查询" type="submit" />
                </form>
            </span>           
        </div>
    <div>
        <span>
            <form action="#" method="get">
                <input size="20px" type="text" value="销售客户:[<?php echo $_smarty_tpl->tpl_vars['infoA']->value['cus_name'];?>
]" readonly="ture"/>
            </form>
        </span>
    </div>
    
    <div class="rightinfo" id="demo1">
    <table class="tablelist">
    	<thead>
    	<tr>
        <th><div class="all"><input type="checkbox" id="all-1" value=""/></div></th>
        <th>ID<i class="sort"><img src="<?php echo @ADMIN_IMG_URL;?>
px.gif" /></i></th>
        <th>名称</th>
        <th>生产厂商</th>
        <th>规格</th>
        <th>类型</th>
        <th>售价</th>
        </tr>     
        </thead>
        <tbody>
            <form action="<?php echo @__CONTROLLER__;?>
/sales" method="post">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
                    <tr id="product1">
                        <td><div class="checkbox"><input name="checkbox[]" type="checkbox" 
                                   value="<?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
"/></div>
                        </td>

                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_manufacturer'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_norms'];?>
</td>           
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_type'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_price'];?>
</td></td>
                    </tr>
            <?php } ?>
            <tr>
                <td colspan="20" style="text-align: center;">
                    <div class="pages"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div> 
                </td>
            </tr>
            <tr>
                <td colspan="20" style="text-align: center;">
                    <div class="text-center">
                        <!--<a href="<?php echo @__CONTROLLER__;?>
/sales">-->
                        <input id="checked" name="checked" type="submit" value="生成订单"/>
                        <!--</a>-->        
                    </div>
                </td>
            </tr>
            </form> 
        </tbody>
    </table>
    </div>
</body>
</html>
<?php }} ?>