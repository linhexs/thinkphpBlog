<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"/usr/blog/public/../application/admin/view/article/edit.html";i:1534128858;s:54:"/usr/blog/public/../application/admin/view/layout.html";i:1534497194;}*/ ?>
<!DOCTYPE html>
<html lang="Zh-cn">
<head>
    <title>Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="admin_css/bootstrap.min.css" />
    <link rel="stylesheet" href="admin_css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="admin_css/loveteemo.main.css" />
    <link rel="stylesheet" href="admin_css/style.css" />
    <link rel="stylesheet" href="admin_css/loveteemo.<?php echo (\think\Cookie::get('color')) ? \think\Cookie::get('color') : 'grey'; ?>.css" class="skin-color" />
    <script src="admin_js/jquery.min.js"></script>
    <script src="com_laydate/laydate.js"></script>
</head>
<body>


<div id="header">
    <h1><a href="<?php echo url('Admin/Index/index'); ?>">Admin</a></h1>
</div>
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav btn-group">
        <li class="btn btn-inverse cleancache" data-url="<?php echo url('Admin/Auth/clean'); ?>">
            <a title="" href="javascript:;"><i class="icon icon-trash"></i> <span class="text">清空缓存</span></a>
        </li>
        <li class="btn btn-inverse">
            <a title="" href="javascript:;" data-url="<?php echo url('Admin/login/logout'); ?>" class="logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a>
        </li>
    </ul>
</div>

<div id="sidebar">
    <a href="#" class="visible-phone"><i class="icon icon-home"></i>仪表板</a>
    <ul>
        <li class="<?php echo adminmenu('Index'); ?>">
            <a href="<?php echo url('Admin/Index/index'); ?>"><i class="icon icon-home"></i> <span>仪表板</span></a>
        </li>
        <li class="<?php echo adminmenu('Cate'); ?>">
            <a href="<?php echo url('Admin/Cate/index'); ?>"><i class="icon icon-th-list"></i> <span>自定义菜单</span></a>
        </li>
        <li class="<?php echo adminmenu('Banner'); ?>">
            <a href="<?php echo url('Admin/Banner/index'); ?>"><i class="icon icon-resize-vertical"></i> <span>首页幻灯</span></a>
        </li>
        <li class="<?php echo adminmenu('Article'); ?>">
            <a href="<?php echo url('Admin/Article/index'); ?>"><i class="icon icon-align-justify"></i> <span>文章列表</span></a>
        </li>


        <li class="<?php echo adminmenu('Link'); ?>">
            <a href="<?php echo url('Admin/Link/index'); ?>"><i class="icon icon-warning-sign"></i> <span>友情链接</span></a>
        </li>

    </ul>
</div>

<div id="style-switcher" data-url="<?php echo url('Admin/Auth/color'); ?>">
    <i class="icon-arrow-left icon-white"></i>
    <span>Style:</span>
    <a href="#grey" style="background-color: #555555;border-color: #aaaaaa;"></a>
    <a href="#blue" style="background-color: #2D2F57;"></a>
    <a href="#red" style="background-color: #673232;"></a>
</div>

<div id="content">
    
<div id="content-header">
    <h1>修改文章</h1>
</div>
<div id="breadcrumb">
    <a href="<?php echo url('Admin/Index/index'); ?>" title="回到首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
    <a href="#" class="current">修改文章</a>
</div>

    <div class="container-fluid">
        
<div class="row-fluid">
    <div class="span12">
        <div class="alert alert-info">
            附加上传请勿使用中文
            <a href="#" data-dismiss="alert" class="close">×</a>
        </div>
        <div class="widget-box">
            <div class="widget-content nopadding">
                <form class="form-horizontal" action="<?php echo url('Admin/Article/edit'); ?>"/>
                <input type="hidden" name="art_id" value="<?php echo $info['art_id']; ?>">
                <input type="hidden" name="art_old_img" value="<?php echo $info['art_img']; ?>">
                <div class="control-group">
                    <label class="control-label">文章标题</label>
                    <div class="controls">
                        <input type="text" name="art_title" value="<?php echo $info['art_title']; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">文章类别</label>
                    <div class="controls">
                        <div style="width: 262px;">
                            <select name="art_pid" class="art_pid">
                                <option value="">选择文章栏目</option>
                                <?php if(is_array($menulist) || $menulist instanceof \think\Collection): $key = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($key % 2 );++$key;?>
                                <option value="<?php echo $m['menu_id']; ?>" <?php if($info['art_pid'] == $m['menu_id']): ?>selected<?php endif; ?> ><?php echo $m['menu_name']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <option value="99" <?php if($info['art_pid'] == '99'): ?>selected<?php endif; ?> >下载资源</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="control-group download" style="display: none">
                    <label class="control-label">附件</label>
                    <div class="controls">
                        <div id="picker">选择文件</div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">关键词</label>
                    <div class="controls">
                        <input type="text" name="art_keyword" placeholder="用中文，分隔" value="<?php echo $info['art_keyword']; ?>" />
                    </div>
                </div>
                <div class="control-group" >
                    <label class="control-label">封面</label>
                    <div class="controls">
                        <div id="uploader-demo">
                            <!--用来存放item-->
                            <p style="font-size: 20px;color: red">默认存在封面图</p>
                            <div id="filePicker">选择图片</div>
                            <p style="font-size: 20px;color: red">图片大小为100*100</p>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">描述</label>
                    <div class="controls">
                        <textarea name="art_remark" class="art_remark"><?php echo $info['art_remark']; ?></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">内容</label>
                        <div class="controls" style="width: 80% !important;">
                            <textarea id="container" name="content" type="text/plain" ><?php echo $info['art_content']; ?></textarea>
                        </div>

                </div>
                <div class="control-group">
                    <label class="control-label">显示</label>
                    <div class="controls">
                        <div class="radio">
                            <input type="radio" name="art_view" id="radio_1" value="2" <?php if($info['art_view'] == '2'): ?> checked <?php endif; ?> /><label for="radio_1">显示并推荐</label>&nbsp;
                            <input type="radio" name="art_view" id="radio_2" value="1" <?php if($info['art_view'] == '1'): ?> checked <?php endif; ?> /><label for="radio_2">显示</label>&nbsp;
                            <input type="radio" name="art_view" id="radio_3" value="0" <?php if($info['art_view'] == '0'): ?> checked <?php endif; ?> /><label for="radio_3">不显示</label>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">原创</label>
                    <div class="controls">
                        <div class="radio">
                            <input type="radio" name="art_original" id="radio_4" value="1" <?php if($info['art_original'] == '1'): ?> checked <?php endif; ?> /><label for="radio_4">原创</label>&nbsp;
                            <input type="radio" name="art_original" id="radio_5" value="0" <?php if($info['art_original'] == '0'): ?> checked <?php endif; ?> /><label for="radio_5">转载</label>&nbsp;
                        </div>
                    </div>
                </div>

                <?php if($info['art_original'] == '1'): ?>
                    <div class="control-group art-url" style="display: none;">
                <?php else: ?>
                    <div class="control-group art-url">
                <?php endif; ?>
                    <label class="control-label">转载地址</label>
                    <div class="controls">
                        <input type="text" name="art_url" value="<?php echo $info['art_url']; ?>" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">作者</label>
                    <div class="controls">
                        <input type="text" name="art_author" value="<?php echo $info['art_author']; ?>" />
                    </div>
                </div>
                <div class="form-actions">
                    <button type="button" class="btn btn-primary addarticle">修改文章</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="admin_css/style.css">
<script type="text/javascript" src="/static/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/static/ueditor/ueditor.all.js"></script>
<script src="admin_js/cropbox-min.js"></script>
<script src="admin_upload/webuploader.js"></script>
<link rel="stylesheet" href="admin_upload/webuploader.css"/>
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
<script>

    var uploader = WebUploader.create({
        auto: true,
        swf: 'admin_upload/Uploader.swf',
        server: "<?php echo url('Admin/Article/uploadfile'); ?>",
        fileNumLimit:1,
        fileSingleSizeLimit : 1024*1024,
        pick: '#filePicker',
        fileVal:'image',
        accept: {
            title: 'Images',
            extensions: 'jpg,jpeg,png',
            mimeTypes: 'image/jpg,image/jpeg,image/png'
        }
    });
    uploader.on('uploadSuccess', function (file, data) {
        if( data.err == 0 ){
            _this = $('#filePicker');
            _this.parent().after("<img src='/uploads/"+data.data+"' width='100'>");
            _this.parent().after("<input name='ban_img' value='/uploads/"+data.data+"' type='hidden'>");
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



    $("input[name='art_original']").click(function () {
        var original = $("input[name='art_original']:checked").val();
        if(original == 0){
            $('.art-url').css('display','block');
        }else{
            $('.art-url').hide();
        }
    });
    $(".addarticle").click(function () {
        var _this = $(this);
        _this.attr('disabled', true);
        var url = $('form').attr('action');
        layer.msg('后台数据处理中',{icon:16});
        var data = {
            "art_id"        :   $("input[name='art_id']").val(),
            "art_old_img"   :   $("input[name='art_old_img']").val(),
            "art_title"     :   $("input[name='art_title']").val(),
            "art_pid"       :   $(".art_pid").val(),
            "art_file"      :  $("input[name='art_file']").val(),
            "art_keyword"   :   $("input[name='art_keyword']").val(),
            "art_remark"    :   $(".art_remark").val(),
            "art_view"      :   $("input[name='art_view']:checked").val(),
            "art_original"  :   $("input[name='art_original']:checked").val(),
            "art_url"       :   $("input[name='art_url']").val(),
            "art_author"    :   $("input[name='art_author']").val(),
            "art_img"       :      $("input[name='ban_img']").val(),
            "art_content"   :  ue.getContent()
        };

        $.ajax({
            data    : data,
            type    : "Post",
            dataType: "Json",
            url     : url,
            success :function (data) {
                if(data.err==0){
                    layer.msg(data.msg,{icon:1},function () {
                        layer.closeAll();
                        location.href="<?php echo url('Admin/Article/index'); ?>";
                    });
                }else{
                    layer.msg(data.msg,{icon:2,time:500});
                    _this.attr("disabled",false);
                }
            },
            error   :function () {
                layer.msg('网络错误',{icon:2,time:500});
                _this.attr("disabled",false);
            }
        });
    });

</script>

        <div class="row-fluid">
            <div id="footer" class="span12">

            </div>
        </div>
    </div>
</div>
<script src="com_layer/layer.js"></script>
<script src="admin_js/jquery.ui.custom.js"></script>
<script src="admin_js/bootstrap.min.js"></script>
<script src="admin_js/loveteemo.js"></script>
</body>
</html>
