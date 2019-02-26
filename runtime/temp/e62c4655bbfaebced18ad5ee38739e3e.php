<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"/usr/blog/public/../application/index/view/gbook/index.html";i:1534500925;s:61:"/usr/blog/public/../application/index/view/public/header.html";i:1534132358;s:61:"/usr/blog/public/../application/index/view/public/footer.html";i:1530922408;}*/ ?>
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
<style>
    .gbko{ border-top: #a6c3bd 1px solid; padding: 20px; overflow: hidden;  background: rgba(255,255,255,0.8);}
</style>
<article>
    <h2 class="litle"><span>你，我生命中一个重要的过客，我们之所以是过客，因为你未曾会为我停留。</span>留言</h2>
    <div class="gbko">
        <div id="SOHUCS" ></div>
        <script type="text/javascript">
            (function(){
                var appid = 'cytLkfdXm';
                var conf = 'prod_c677ae66223d8b8c67890f95a142453d';
                var width = window.innerWidth || document.documentElement.clientWidth;
                if (width < 960) {
                    window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("http://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>

    </div>
</article>
<footer>
    <p>Design by <a href="/">林鹤个人博客</a> <a href="/">辽ICP备17011355号-1</a></p>
</footer>

</body>
</html>
