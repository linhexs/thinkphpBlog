<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"/usr/blog/public/../application/index/view/index/index.html";i:1535264562;s:61:"/usr/blog/public/../application/index/view/public/header.html";i:1534132358;s:61:"/usr/blog/public/../application/index/view/public/footer.html";i:1530922408;}*/ ?>
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
<article>
  <div class="banner">
    <div id="sucaihuo" class="fader">
      <?php if(is_array($resBanner) || $resBanner instanceof \think\Collection): $i = 0; $__LIST__ = $resBanner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <img class="slide" src="<?php echo $vo['ban_img']; ?>">
      <?php endforeach; endif; else: echo "" ;endif; ?>
      <div class="fader_controls">
        <div class="page prev" data-target="prev">&lsaquo;</div>
        <div class="page next" data-target="next">&rsaquo;</div>
        <ul class="pager_list">
        </ul>
      </div>
    </div>
    <script>
$(function() {
	$('#sucaihuo').easyFader();
});
</script>
  </div>
  <div class="newblogs">
    <h2 class="hometitle">最新文章</h2>
    <ul>
      <?php if(is_array($res) || $res instanceof \think\Collection): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <li>
        <h3 class="blogtitle"><span><a href="<?php echo url('Article/lists',['id'=>$vo['art_pid']]); ?>" target="_blank"  class="classname"><?php echo $menuName[$vo['art_pid']]; ?></a></span><a href="<?php echo url('detail/index',['id'=>$vo['art_id']]); ?>" target="_blank" ><?php echo $vo['art_title']; ?></a></h3>
        <div class="bloginfo"><span class="blogpic"><a href="<?php echo url('detail/index',['id'=>$vo['art_id']]); ?>"><img src="<?php echo $vo['art_img']; ?>" /></a></span>
          <p><?php echo msubstr($vo['art_remark'],0,70,'utf-8',false); ?>...</p>
        </div>
        <div class="autor"><span class="lm f_l"></span><span class="dtime f_l"><?php echo date("y-m-d",$vo['art_addtime']); ?></span><span class="viewnum f_l">浏览（<a href="/"><?php echo $vo['art_hit']; ?></a>）</span><span class="f_r"><a href="<?php echo url('detail/index',['id'=>$vo['art_id']]); ?>" class="more">阅读原文>></a></span></div>
        <div class="line"></div>
      </li>
      <?php endforeach; endif; else: echo "" ;endif; ?>

    </ul>
  </div>
  <div class="rbox">

    <div class="paihang">
      <h2 class="hometitle">热度排行</h2>
      <ul>
        <?php if(is_array($hit) || $hit instanceof \think\Collection): $i = 0; $__LIST__ = $hit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li><b><a href="<?php echo url('detail/index',['id'=>$vo['art_id']]); ?>" target="_blank"><?php echo $vo['art_title']; ?></a></b>
          <p><i><img src="<?php echo $vo['art_img']; ?>"  /></i><?php echo msubstr($vo['art_remark'],0,35,'utf-8',false); ?>...</p>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <div class="links">
      <h2 class="hometitle">友情链接</h2>
      <ul>
        <?php if(is_array($resByLinks) || $resByLinks instanceof \think\Collection): $i = 0; $__LIST__ = $resByLinks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li><a href="<?php echo $vo['link_url']; ?>"><?php echo $vo['link_content']; ?></a></li>
       <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
  </div>
</article>
<footer>
    <p>Design by <a href="/">林鹤个人博客</a> <a href="/">辽ICP备17011355号-1</a></p>
</footer>

</body>
</html>
