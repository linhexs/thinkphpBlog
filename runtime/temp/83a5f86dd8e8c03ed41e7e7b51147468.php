<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"/usr/blog/public/../application/index/view/about/index.html";i:1534491590;s:61:"/usr/blog/public/../application/index/view/public/header.html";i:1534132358;s:61:"/usr/blog/public/../application/index/view/public/footer.html";i:1530922408;}*/ ?>
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
    <h2 class="litle"><span>学海无涯，学无止境。加油!</span>关于我</h2>
    <div class="ab_box">
        <div class="leftbox">
            <div class="newsview">
                <div class="news_infos">
                    <p>林鹤，男，一个90后”单纯“的小男生！16年开始接触web开发，从此进入了搬砖一样的生活方式，想和编程谈一场轰轰烈烈的恋爱。<br />
                        <br />
                        人生就是一个得与失的过程，而我却是一个幸运者，得到的永远比失去的多。本来大学的生活是非常幸福的时光，但是我却选择利用大学的时间多学习了一些技术，虽然每天都会过的很累，但是我仍然很享受那些熬得只剩下黑眼圈的日子，因为每当看到自己的成果时，总会有一种自豪感！<br />
                        <br />
                        在这条路上，遇到过许多深坑、浅坑。但是自己重来没有言弃过，通过各种手段来填坑，让自己逐渐的进步！<br />
                        <br />
                        还要特别感谢我在大学遇到的老师，同学和朋友！在最艰难的时候有你们陪伴，我永远忘不了大家一起熬夜学习编程、讨论技术、以及一起调试bug的时光。<br />
                        <br />
                        在以后的日子里，我会对自己的职业进行规划，努力去追求更高的技术，虽然自己现在还是菜鸟一枚，但是我有一颗热爱编程的心。完成自己的理想，实现人生价值！</p>
                </div>
            </div>
            <div class="meandblog">
                <h2>我和我的博客</h2>
                    <li>博客域名：blog.linhe3306.com</li>
                    <li> 创建时间：2018-7-5</li>
                    <li> 前端 ：html+css(用的模版)</li>
                    <li> 后端 ：PHP+MYSQL</li>
                    <li> 框架 ：ThinkPHP 5</li>


            </div>
        </div>
        <div class="rightbox">
            <div class="aboutme">
                <h2 class="hometitle">关于我</h2>
                <div class="avatar"> <img src="/static/home/img/avatar.jpg"> </div>
                <div class="ab_con">
                    <p>姓名：lin | 林鹤</p>
                    <p>职业：学生 | web开发 </p>
                    <p>个人微信：linhe838311829</p>
                    <p>邮箱：838311829@qq.com</p>

                </div>
            </div>
            <div class="weixin">
                <h2 class="hometitle">版本</h2>
                <div class="ab_con">
                    <p>v2：接入畅言</p>
                    <p>v1：完成大体功能 </p>


                </div>
            </div>
        </div>
    </div>
</article>

<footer>
    <p>Design by <a href="/">林鹤个人博客</a> <a href="/">辽ICP备17011355号-1</a></p>
</footer>

</body>
</html>