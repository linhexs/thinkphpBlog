<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:60:"/usr/blog/public/../application/index/view/detail/index.html";i:1535264128;s:61:"/usr/blog/public/../application/index/view/public/header.html";i:1534132358;s:61:"/usr/blog/public/../application/index/view/public/footer.html";i:1530922408;}*/ ?>
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
  pre{
    background:#f0f0f0;
  }
@media only screen and (max-width: 479px) {
p img { height: 100%; width: 300px }
}
</style>
<article>
  <div class="infos">
    <div class="newsview">
      <h2 class="intitle">您现在的位置是：<a href="/">网站首页</a>&nbsp;&gt;&nbsp;<a href="/">学无止境</a>&nbsp;&gt;&nbsp;<a href="<?php echo url('article/lists',['id'=>$resByInfo['art_pid']]); ?>"><?php echo $menuName[$resByInfo['art_pid']]; ?></a></h2>
      <h3 class="news_title">  <?php echo $resByInfo['art_title']; ?></h3>
      <div class="news_author"><span class="au01">  <?php echo $resByInfo['art_author']; ?></span><span class="au02"> <?php echo date("y-m-d",$resByInfo['art_addtime']); ?></span><span class="au03">共<b><?php echo $resByInfo['art_hit']; ?></b>人围观</span></div>
      <br>
      <input type="hidden" name="art_id" value="<?php echo $resByInfo['art_id']; ?>">
      <?php echo $resByInfo['art_content']; ?>
    </div>
  </div>
  <div class="nextinfo">
    <?php if($front):?>
    <p>上一篇：<a href="<?php echo url('detail/index',['id'=>$front['art_id']]); ?>" ><?php echo $front['art_title']; ?></a></p>
    <?php else:?>
    <p>上一篇：<a href="/" >没有了！！！</a></p>
    <?php endif;if($after):?>
    <p>下一篇：<a href="<?php echo url('detail/index',['id'=>$after['art_id']]); ?>"><?php echo $after['art_title']; ?></a></p>
    <?php else:?>
    <p>下一篇：<a href="/" >没有了！！！</a></p>
    <?php endif;?>
  </div>
<!--  <div class="otherlink">
    <h2>相关文章</h2>
    <ul>
      <li><a href="/" title="云南之行——丽江古镇玉龙雪山">云南之行——丽江古镇玉龙雪山</a></li>
      <li><a href="/" title="云南之行——大理洱海一日游">云南之行——大理洱海一日游</a></li>
      <li><a href="/" target="_blank">住在手机里的朋友</a></li>
      <li><a href="/" target="_blank">豪雅手机正式发布! 在法国全手工打造的奢侈品</a></li>
      <li><a href="/" target="_blank">教你怎样用欠费手机拨打电话</a></li>
      <li><a href="/" target="_blank">原来以为，一个人的勇敢是，删掉他的手机号码...</a></li>
    </ul>
  </div>-->
  <div class="news_pl">
    <h2>文章评论</h2>
    <div id="SOHUCS" ></div>
    <script type="text/javascript">
        (function(){
            var appid = 'cytLkfdXm';
            var conf = 'prod_c677ae66223d8b8c67890f95a142453d';
            var width = window.innerWidth || document.documentElement.clientWidth;
            if (width < 960) {
                window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("http://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })();
    </script>
  </div>

</article>
<script>
  var SCOPE = {
      updateView : "<?php echo url('detail/updateView'); ?>"
  }
</script>
<script>
  $(document).ready(function () {
      $.ajax({
          url:SCOPE.updateView,
          type:'POST',
          data:{
              id:$("input[name=art_id]").val()
          },
          dataType:'json',
          success:function( res ){
          }
      });
  })
</script>


<footer>
    <p>Design by <a href="/">林鹤个人博客</a> <a href="/">辽ICP备17011355号-1</a></p>
</footer>

</body>
</html>
