<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:59:"/usr/blog/public/../application/admin/view/login/index.html";i:1534496204;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>ADMIN</title>
</head>
<body>
<form action="<?php echo url('login/login'); ?>" method="post">
<input type="text" name="username">帐号<br>
    <hr>
<input type="password" name="pwd">密码</br>
    <hr>
<button type="submit">登录</button>
</form>
</body>
</html>