<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:57:"/usr/blog/public/../application/admin/view/cate/edit.html";i:1489992446;s:61:"/usr/blog/public/../application/admin/view/layout_iframe.html";i:1534076040;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<!-- container-fluid -->
<head>
    <title>Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="admin_css/bootstrap.min.css" />
    <link rel="stylesheet" href="admin_css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="admin_css/loveteemo.main.css" />
    <link rel="stylesheet" href="admin_css/style.css" />
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1477105914_3430886.css">
    <script src="admin_js/jquery.min.js"></script>
    <script type="text/javascript" src="/static/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/static/ueditor/ueditor.all.js"></script>
 <!--   <script src="com_editor/js/wangEditor.min.js"></script>
    <link rel="stylesheet" href="com_editor/css/wangEditor.min.css">-->
    <script src="admin_js/loveteemo.js"></script>
</head>
<style>
    body{background-color: #fff;font-size: 12px;}
    form{margin-top: 40px;}
    .table th, .table td{vertical-align: middle !important;}
    input,select,textarea{margin-top: 5px !important;margin-bottom: 5px !important;}
    .enter{text-align: center;padding-top: 20px;}
</style>
<body>

<form action="<?php echo url('Admin/Cate/edit'); ?>">
    <table cellpadding="0" cellspacing="0" style="border:0; margin: 0 auto;" class="tc">
        <tr>
            <td width="80" align="right">栏目名称：</td>
            <td class="tdright">
                <input type="text" name="menu_name" placeholder="请输入栏目名称" value="<?php echo $menuinfo['menu_name']; ?>">
                <input type="hidden" name="menu_id" value="<?php echo $menuinfo['menu_id']; ?>">
            </td>
        </tr>
        <tr>
            <td width="80" align="right">指向地址：</td>
            <td class="tdright">
                <input type="text" name="menu_url" placeholder="请输入指向地址" value="<?php echo $menuinfo['menu_url']; ?>">
            </td>
        </tr>
        <tr>
            <td width="80" align="right">上级栏目：</td>
            <td class="tdright">
                <div style="width: 262px;">
                    <select name="menu_parent">
                        <option value="0" <?php if($menuinfo['menu_parent'] == '0'): ?> selected <?php endif; ?> >顶级菜单</option>
                        <?php if(is_array($menulist) || $menulist instanceof \think\Collection): $key = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($key % 2 );++$key;?>
                        <option value="<?php echo $m['menu_id']; ?>" <?php if($menuinfo['menu_parent'] == $m['menu_id']): ?> selected <?php endif; ?> ><?php echo treeEmpty($m['level']); ?><?php echo $m['menu_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td width="80" align="right">排序：</td>
            <td class="tdright">
                <input type="text" name="menu_sort" value="<?php echo $menuinfo['menu_sort']; ?>">
            </td>
        </tr>
        <tr>
            <td width="80" align="right">描述：</td>
            <td class="tdright">
                <textarea style="width: 252px;" name="menu_remark"><?php echo $menuinfo['menu_remark']; ?></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="enter">
                <button class="btn editsave" type="button">保存</button>
                <button class="btn " type="reset">重置</button>
            </td>
        </tr>
    </table>
</form>

<script src="com_layer/layer.js"></script>
<script src="com_laydate/laydate.js"></script>
<script src="admin_js/jquery.ui.custom.js"></script>
<script src="admin_js/bootstrap.min.js"></script>
</body>
</html>