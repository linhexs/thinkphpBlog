<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"/usr/blog/public/../application/admin/view/link/index.html";i:1489992446;s:54:"/usr/blog/public/../application/admin/view/layout.html";i:1534497194;}*/ ?>
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
    <h1>友情链接</h1>
</div>
<div id="breadcrumb">
    <a href="<?php echo url('Admin/Index/index'); ?>" title="回到首页" class="tip-bottom"><i class="icon-home"></i> 首页</a>
    <a href="#" class="current">友情链接</a>
</div>

    <div class="container-fluid">
        
<div class="row-fluid">
    <div class="span12">
        <div class="widget-box">
            <form action="">
            <div class="widget-title">
                <h5>友情链接 管理</h5>
                <a class="label label-info add" data-height="450" data-url="<?php echo url('Admin/Link/add'); ?>">添加</a>
                <a class="label label-info sort" data-url="<?php echo url('Admin/Link/sort'); ?>">排序</a>
            </div>
            <div class="widget-content">
                <!--<div class="search-query">-->
                    <!--<input type="text" name="keyword" value="<?php echo \think\Request::instance()->get('keyword'); ?>"><button class="btn btn-info">搜索</button>-->
                <!--</div>-->
                <style>
                    .search-query>input{width: 300px;margin-top: 9px;margin-right: 10px;}
                    .table th, .table td{vertical-align: middle !important;}
                    input{width: 50px;}
                </style>
                    <table class="table table-bordered table-striped with-check">
                        <thead>
                        <tr>
                            <th width="5%">ID</th>
                            <th width="15%">图标&名称</th>
                            <th>描述</th>
                            <th width="15%">地址</th>
                            <th width="10%">显示</th>
                            <th width="10%">排序</th>
                            <th width="10%">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($list) || $list instanceof \think\Collection): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l): $mod = ($k % 2 );++$k;?>
                        <tr>
                            <td><?php echo $l['link_id']; ?></td>
                            <td style="text-align: center">
                                <img src="<?php echo $l['link_favicon']; ?>"><?php echo $l['link_name']; ?>
                            </td>
                            <td><?php echo $l['link_content']; ?></td>
                            <td><?php echo $l['link_url']; ?></td>
                            <td style="text-align: center">
                                <button class="btn btn-mini changgeview" data-url="<?php echo url('Admin/Link/view'); ?>" data-id="<?php echo $l['link_id']; ?>" data-view="<?php echo $l['link_view']; ?>"><?php echo !empty($l['link_view'])?'显示':'不显示'; ?></button>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $l['link_sort']; ?>" name="sort[<?php echo $k; ?>][link_sort]">
                                <input type="hidden" value="<?php echo $l['link_id']; ?>" name="sort[<?php echo $k; ?>][link_id]">
                            </td>
                            <td style="text-align: center">
                                <button type="button" class="btn btn-mini edit" data-height="500" data-url="<?php echo url('Admin/Link/edit',['id'=>$l['link_id']]); ?>">修改</button>
                                <button type="button" class="btn btn-mini delete" data-url="<?php echo url('Admin/Link/delete'); ?>" data-id="<?php echo $l['link_id']; ?>">删除</button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                    <?php echo $list->render(); ?>
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
