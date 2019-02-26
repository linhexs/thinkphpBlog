<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:56:"/usr/blog/public/../application/admin/view/link/add.html";i:1490321772;s:61:"/usr/blog/public/../application/admin/view/layout_iframe.html";i:1534076040;}*/ ?>
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

<form action="<?php echo url('Admin/Link/add'); ?>">
    <table cellpadding="0" cellspacing="0" style="border:0; margin: 0 auto;" class="tc">
        <tr>
            <td width="80" align="right">名称：</td>
            <td class="tdright">
                <input type="text" name="link_name" placeholder="请输入名称" value="">
            </td>
        </tr>
        <tr>
            <td width="80" align="right">指向地址：</td>
            <td class="tdright">
                <input type="text" name="link_url" placeholder="请输入指向地址" value="">
            </td>
        </tr>
        <tr>
            <td width="80" align="right">描述：</td>
            <td class="tdright">
                <textarea name="link_content" class="link_content"></textarea>
            </td>
        </tr>
        <tr>
            <td width="80" align="right">排序：</td>
            <td class="tdright">
                <input type="text" name="link_sort" value="100">
            </td>
        </tr>
        <tr>
            <td width="80" align="right">显示：</td>
            <td class="tdright">
                <div class="radio">
                    <input type="radio" name="link_view" id="radio_1" value="1" checked/><label for="radio_1">显示</label>&nbsp;
                    <input type="radio" name="link_view" id="radio_2" value="0" /><label for="radio_2">不显示</label>&nbsp;
                </div>
            </td>
        </tr>
        <tr>
            <td width="80" align="right">图片：</td>
            <td class="tdright">
                <div id="uploader-demo">
                    <div id="filePicker">选择图片</div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center"><span style="color: #666">上传文件尺寸为: 48*48</span></td>
        </tr>
        <tr>
            <td colspan="2" class="enter">
                <button class="btn editsave" type="button">添加</button>
                <button class="btn" type="reset">重置</button>
            </td>
        </tr>
    </table>
</form>
<script src="admin_upload/webuploader.js"></script>
<link rel="stylesheet" href="admin_upload/webuploader.css"/>

<script>
    var uploader = WebUploader.create({
        auto: true,
        swf: 'admin_upload/Uploader.swf',
        server: "<?php echo url('Admin/Link/upload'); ?>",
        fileNumLimit:1,
        fileSingleSizeLimit : 1024*1024,
        pick: '#filePicker',
        fileVal:'image',
        accept: {
            title: 'Images',
            extensions: 'jpg,jpeg,bmp,png,ico',
            mimeTypes: 'image/*'
        }
    });
    uploader.on('uploadSuccess', function (file, data) {
        if( data.err == 0 ){
            _this = $('#filePicker');
            _this.parent().after("<img src='/uploads/link/"+data.data+"'>");
            _this.parent().after("<input name='link_favicon' value='/uploads/link/"+data.data+"' type='hidden'>");
            _this.parent().remove();
            layer.msg(data.msg, {icon: 6,time:500});
        }else{
            layer.msg(data.msg, {icon: 5,time:500});
        }
    });
    uploader.on("error", function (type) {
        if (type == "Q_TYPE_DENIED") {
            layer.msg('请选择图片格式的文件!', {icon: 5,time:500});
        } else if (type == "F_EXCEED_SIZE") {
            layer.msg('文件大小不能超过1MB!', {icon: 5,time:500});
        }
    });
    uploader.on('uploadError', function (file) {
        layer.msg('上传失败!', {icon: 5,time:500});
    });
</script>

<script src="com_layer/layer.js"></script>
<script src="com_laydate/laydate.js"></script>
<script src="admin_js/jquery.ui.custom.js"></script>
<script src="admin_js/bootstrap.min.js"></script>
</body>
</html>