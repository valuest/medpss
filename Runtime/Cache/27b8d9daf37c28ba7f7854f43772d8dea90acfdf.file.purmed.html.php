<?php /* Smarty version Smarty-3.1.6, created on 2016-12-08 21:31:20
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Trade/purmed.html" */ ?>
<?php /*%%SmartyHeaderCode:17249440495834b46eb64c38-16035963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27b8d9daf37c28ba7f7854f43772d8dea90acfdf' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Trade/purmed.html',
      1 => 1481203875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17249440495834b46eb64c38-16035963',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5834b46ec438d',
  'variables' => 
  array (
    'infoA' => 0,
    'info' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5834b46ec438d')) {function content_5834b46ec438d($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
      });//全选和shift下部分选
      function Check()
     {
         var check=document.getElementsByTagName('input');
         var bl=false;
     for(var i=0;i<check.length;i++)
     {
         if(check[i].checked) 
         {
            bl=ture;
            break;
         
         }
     } 
     if(!bl) 
         alert('最少选择一种药');
         return false;
         //redirect('salemed');
     }//判断复选框是否为空
     
     checkedIds="";//翻页保存选中的id(翻页记录前一页的check的值)
          function changeIds(){
             var oneches=document.getElementsByName("checkbox");
             for(var i=0;i<oneches.length;i++){
                 if(oneches[i].checked==true){
                     //避免重复累计id （不含该id时进行累加）
                     if(checkedIds.indexOf(oneches[i].value)==-1){
                         checkedIds=checkedIds+oneches[i].value+",";
                     }
                 }
                 if(oneches[i].checked==false){
                     //取消复选框时 含有该id时将id从全局变量中去除
                     if(checkedIds.indexOf(oneches[i].value)!=-1){
                         checkedIds=checkedIds.replace((oneches[i].value+","),"");
                     }
                 }
             }
          }
    function getChecked(){
                var oneches=document.getElementsByName("checkbox");
             for(var i=0;i<oneches.length;i++){
                     //全局变量中含有id，则该复选框选中
                     if(checkedIds.indexOf(oneches[i].value)!=-1){
                         oneches[i].checked=true;
                     }
                 }
          }
    </script>

</head>
<body>

        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：采购管理-》选择采购药品</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                </span>
            </span>
        </div>
<!--        <div class="div_search">
            <span>
                <form action="#" method="get">
                    <input type="text"/>
                    <input value="查询" type="submit" />
                </form>
            </span>           
        </div>-->
    <div>
        <span>
            <form action="#" method="get">
                <input size="20px" type="text" value="供应商:[<?php echo $_smarty_tpl->tpl_vars['infoA']->value['sup_name'];?>
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
        <th>采购价</th>
        </tr>     
        </thead>
        <tbody>
            <form action="<?php echo @__CONTROLLER__;?>
/purchase" method="post" onsubmit="return Check()">
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
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['med_inprice'];?>
</td></td>
                    </tr>
            <?php } ?>
<!--            <tr>
                <td colspan="20" style="text-align: center;">
                    <div class="pages"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div> 
                </td>
            </tr>-->
            <tr>
                <td colspan="20" style="text-align: center;">
                    <div class="text-center">
                        <!--<a href="<?php echo @__CONTROLLER__;?>
/sales">-->
                        <input style="height: 30px; width:250; background:#6699ff" id="checked" name="checked" type="submit" value="生成订单"/>
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