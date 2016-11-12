<?php /* Smarty version Smarty-3.1.6, created on 2016-11-10 22:19:33
         compiled from "/Library/WebServer/Documents/medpss/Admin/View/Admin/left.html" */ ?>
<?php /*%%SmartyHeaderCode:1710190121582481f523a5b3-33143236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e4a6bb3dc595f9c0188ebeee7536c3cf20dd2b6' => 
    array (
      0 => '/Library/WebServer/Documents/medpss/Admin/View/Admin/left.html',
      1 => 1478787277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1710190121582481f523a5b3-33143236',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_582481f53c5fc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582481f53c5fc')) {function content_582481f53c5fc($_smarty_tpl) {?><html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
        <script language=javascript>
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                }
                else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
    </head>
    <body>
        <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
        <table height="92.5%" cellspacing=0 cellpadding=0 width=170 
               background="<?php echo @ADMIN_IMG_URL;?>
menu_bg.jpg" border=0>
               <tr>
               
                <td valign=top align=middle>
                    
                    <table cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td height=10></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background="<?php echo @ADMIN_IMG_URL;?>
menu_bt.jpg"><a 
                                    class=menuparent onclick=expand(1) 
                                    href="javascript:void(0);">供应商管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child1 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="../Supplier/showsup" 
                                   target='right'>供应商信息</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="../Supplier/managesup" 
                                   target='right'>信息管理</a></td></tr>
                       <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="../Supplier/addsup" 
                                   target='right'>添加供应商</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background="<?php echo @ADMIN_IMG_URL;?>
menu_bt.jpg"><a 
                                    class=menuparent onclick=expand(2) 
                                    href="javascript:void(0);">药品管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child2 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="../Med/show" 
                                   target='right'>药品信息</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="../Med/managemed" 
                                   target='right'>信息管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="../Med/addmed" 
                                   target='right'>添加药品</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background="<?php echo @ADMIN_IMG_URL;?>
menu_bt.jpg"><a 
                                    class=menuparent onclick=expand(3) 
                                    href="javascript:void(0);">库存管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child3 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="../Inventory/show" 
                                   target='right'>库存信息</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="../Inventory/managein" 
                                   target='right'>信息管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="../Inventory/warning" 
                                   target='right'>库存报警</a></td></tr>
                          <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>出库管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>入库管理</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background="<?php echo @ADMIN_IMG_URL;?>
menu_bt.jpg"><a 
                                    class=menuparent onclick=expand(4) 
                                    href="javascript:void(0);">采购与销售</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child4 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>药品采购</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>药品销售</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background="<?php echo @ADMIN_IMG_URL;?>
menu_bt.jpg"><a 
                                    class=menuparent onclick=expand(5) 
                                    href="javascript:void(0);">表单管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child5 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>收购订单</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>销售订单</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
  <!--                  <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background="<?php echo @ADMIN_IMG_URL;?>
menu_bt.jpg"><a 
                                    class=menuparent onclick=expand(6) 
                                    href="javascript:void(0);">高级管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child6 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>广告管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>访问统计</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>邮件发送设置</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>联系部门</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>用户留言</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>招聘职位</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>应聘人员</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>留言簿</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>产品订购</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>链接管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>文件管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>信息转移</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>-->
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background="<?php echo @ADMIN_IMG_URL;?>
menu_bt.jpg"><a 
                                    class=menuparent onclick=expand(7) 
                                    href="javascript:void(0);">系统管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child7 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>数据备份</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>用户管理</a></td></tr>
                       <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>权限管理</a></td></tr>
    <!--                     <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>功能管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>菜单管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>首页设置</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>管理员列表</a></td></tr>-->
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                       <tr height=22>
                            <td style="padding-left: 30px" background="<?php echo @ADMIN_IMG_URL;?>
menu_bt.jpg"><a 
                                    class=menuparent onclick=expand(0) 
                                    href="javascript:void(0);">关于</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child0 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="#" 
                                   target=main>开发者信息</a></td></tr>
<!--                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   onclick="if (confirm('确定要退出吗？')) return true; else return false;" 
                                   href="login.html" 
                                   target=_top>退出系统</a></td></tr></table>-->
                </td>
                <td width=1 bgcolor=#d1e6f7></td>
            </tr>
        </table>
    </body>
</html><?php }} ?>