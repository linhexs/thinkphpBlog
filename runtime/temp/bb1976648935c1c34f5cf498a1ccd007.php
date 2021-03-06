<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:60:"/usr/blog/public/../application/admin/view/banner/index.html";i:1530926186;s:54:"/usr/blog/public/../application/admin/view/layout.html";i:1534497194;}*/ ?>
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
    <h1>插件</h1>
</div>
<div id="breadcrumb">
    <a href="<?php echo url('Admin/Index/index'); ?>" title="回到首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
    <a href="#" class="current">首页幻灯</a>
</div>

    <div class="container-fluid">
        
<div class="row-fluid">
    <div class="span12">
        <div class="widget-box">
            <form action="">
            <div class="widget-title">
                <h5>Banner 管理  ---   图片大小1050*354</h5>
                <a class="label label-info add" data-height="350" data-url="<?php echo url('Admin/Banner/add'); ?>">添加</a>
                <a class="label label-info sort" data-url="<?php echo url('Admin/Banner/sort'); ?>">排序</a>
            </div>
            <div class="widget-content">
                <style>
                    .table th, .table td{vertical-align: middle !important;}
                    input{width: 50px;}
                </style>
                    <table class="table table-bordered table-striped with-check">
                        <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="30%">缩略图</th>
                            <th width="15%">描述</th>
                            <th width="15%">地址</th>
                            <th width="10%">显示</th>
                            <th width="10%">排序</th>
                            <th width="10%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($bannerlist) || $bannerlist instanceof \think\Collection): $k = 0; $__LIST__ = $bannerlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$b): $mod = ($k % 2 );++$k;?>
                        <tr>
                            <td><?php echo $b['ban_id']; ?></td>
                            <td style="text-align: center">
                                <img src="<?php echo $b['ban_img']; ?>" alt="" width="200">
                            </td>
                            <td><?php echo $b['ban_title']; ?></td>
                            <td><?php echo $b['ban_url']; ?></td>
                            <td style="text-align: center">
                                <button class="btn btn-mini changgeview" data-url="<?php echo url('Admin/Banner/view'); ?>" data-id="<?php echo $b['ban_id']; ?>" data-view="<?php echo $b['ban_view']; ?>"><?php echo !empty($b['ban_view'])?'显示':'不显示'; ?></button>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $b['ban_sort']; ?>" name="sort[<?php echo $k; ?>][ban_sort]">
                                <input type="hidden" value="<?php echo $b['ban_id']; ?>" name="sort[<?php echo $k; ?>][ban_id]">
                            </td>
                            <td style="text-align: center">
                                <button type="button" class="btn btn-mini edit" data-height="500" data-url="<?php echo url('Admin/Banner/edit',['id'=>$b['ban_id']]); ?>">修改</button>
                                <button type="button" class="btn btn-mini delete" data-url="<?php echo url('Admin/Banner/delete'); ?>" data-id="<?php echo $b['ban_id']; ?>">删除</button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                    <?php echo $bannerlist->render(); ?>
            </div>
            </form>
        </div>
    </div>
</div>

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
