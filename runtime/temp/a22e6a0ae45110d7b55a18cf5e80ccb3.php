<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"/usr/blog/public/../application/index/view/links/index.html";i:1534069872;s:61:"/usr/blog/public/../application/index/view/public/header.html";i:1534132358;s:61:"/usr/blog/public/../application/index/view/public/footer.html";i:1530922408;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>个人博客</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/static/home/css/base.css" rel="stylesheet">
    <link href="/static/home/css/index.css" rel="stylesheet">
    <link href="/static/home/css/about.css" rel="stylesheet">
    <link href="/static/home/css/m.css" rel="stylesheet">
    <link href="/static/home/css/info.css" rel="stylesheet">
    <script src="/static/home/js/jquery.min.js"></script>
    <script src="/static/home/js/jquery.easyfader.min.js"></script>
    <script src="/static/home/js/modernizr.js"></script>
    <script type="text/javascript" src="/static/ueditor/third-party/SyntaxHighlighter/shCore.js"></script>
    <link href="/static/ueditor/third-party/SyntaxHighlighter/shCoreDefault.css" rel="stylesheet" type="text/css" />
    <script>
        window.onload = function ()
        {
            var oH2 = document.getElementsByTagName("h2")[0];
            var oUl = document.getElementsByTagName("ul")[0];
            oH2.onclick = function ()
            {
                var style = oUl.style;
                style.display = style.display == "block" ? "none" : "block";
                oH2.className = style.display == "block" ? "open" : ""
            }
        }
    </script>
</head>
<body>
<header>
    <div id="mnav">
        <h2><span class="navicon"></span></h2>
        <ul>
            <li><a href="<?php echo url('index/index'); ?>">网站首页</a></li>
            <li><a href="<?php echo url('about/index'); ?>">关于我</a></li>
          <!--  <li><a href="share.html">模板分享</a></li>-->
            <li><a href="<?php echo url('article/lists',['id'=>1]); ?>">学无止境</a></li>
         <!--   <li><a href="list.html">慢生活</a></li>-->
            <li><a href="<?php echo url('links/index'); ?>">博客导航</a></li>
            <li><a href="<?php echo url('gbook/index'); ?>">留言</a></li>
        </ul>
    </div>
    <nav>
        <ul>
            <li><a href="<?php echo url('index/index'); ?>">网站首页</a></li>
            <li><a href="<?php echo url('about/index'); ?>">关于我</a></li>
          <!--  <li><a href="share.html">模板分享</a></li>-->
            <li><a href="<?php echo url('article/lists',['id'=>1]); ?>">学无止境</a></li>
            <!--<li><a href="list.html">慢生活</a></li>-->
            <li><a href="<?php echo url('links/index'); ?>">博客导航</a></li>
            <li><a href="<?php echo url('gbook/index'); ?>">留言</a></li>
        </ul>
    </nav>
</header>
<link href="/static/home/css/link.css" rel="stylesheet">
<article>
    <h2 class="litle"><span>可能，你觉得自己没有足够得优秀，但我始终相信你仍然在努力坚持着!</span>友情链接</h2>
    <div class="link_box">
        <h2 class="ctitle"><b>友情链接</b> </h2>
        <ul class="blogsitetj">
            <?php if(is_array($resByLinks) || $resByLinks instanceof \think\Collection): $i = 0; $__LIST__ = $resByLinks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li><a href=<?php echo $vo['link_url']; ?> target="_blank" title="<?php echo $vo['link_name']; ?>"><?php echo $vo['link_name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
       <h2 class="ctitle"><b>技术网站推荐</b> </h2>
        <ul class="blogsite">
            <li><a href="http://www.imooc.com" target="_blank" title="慕课网">慕课网</a></li>
            <li><a href="https://www.icourse163.org/" target="_blank" title="中国大学mooc">中国大学mooc</a></li>
            <li><a href="http://www.php.cn/" target="_blank" title="php中文网">php中文网</a></li>
            <li><a href="http://www.php.net/" target="_blank" title="php官网">php官网</a></li>
            <li><a href="https://www.swoole.com/" target="_blank" title="swoole官网">swoole官网</a></li>
            <li><a href="http://www.w3school.com.cn/" target="_blank" title="w3c">w3c</a></li>
            <li><a href="http://www.runoob.com/" target="_blank" title="菜鸟教程">菜鸟教程</a></li>
            <li><a href="http://layer.layui.com/" target="_blank" title="layer">layer弹出层</a></li>
            <li><a href="http://www.thinkphp.cn/" target="_blank" title="thinkphp官网">thinkphp官网</a></li>
            <li><a href="https://www.yiichina.com/" target="_blank" title="yii中文官网">yii中文官网</a></li>
            <li><a href="http://laravelacademy.org/" target="_blank" title="laraval">laraval学院</a></li>
            <li><a href="http://www.bootcss.com/" target="_blank" title="bootstrap">bootstrap</a></li>
            <li><a href="http://www.51cto.com/" target="_blank" title="51cto">51cto</a></li>
            <li><a href="https://www.csdn.net/" target="_blank" title="csdn">csdn</a></li>
            <li><a href="http://nginx.org/" target="_blank" title="nginx">nginx</a></li>
            <li><a href="http://www.17sucai.com/" target="_blank" title="17素材">17素材</a></li>
            <li><a href="http://www.sucaihuo.com/" target="_blank" title="素材火">素材火</a></li>
        </ul>
    </div>
</article>
<footer>
    <p>Design by <a href="/">林鹤个人博客</a> <a href="/">辽ICP备17011355号-1</a></p>
</footer>

</body>
</html>
