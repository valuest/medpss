<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title> </title>

        <link href="<?php echo ADMIN_CSS_URL; ?>/mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：库存管理-》库存信息</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                </span>
            </span>
        </div>
        <div></div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>库存</td>
                        <td>价格</td>
                        <td>图片</td>
                        <td>缩略图</td>
                        <td>品牌</td>
                        <td>创建时间</td>                  
                    </tr>
                    <tr id="product1">
                        <td>1</td>
                        <td><a href="#">苹果（APPLE）iPhone 4S</a></td>
                        <td>100</td>
                        <td>3888</td>
                        <td><img src="./img/20121018-174034-58977.jpg" height="60" width="60"></td>
                        <td><img src="./img/20121018-174034-97960.jpg" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>2012-10-18 17:40:34</td>
                    </tr>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            [1]
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>