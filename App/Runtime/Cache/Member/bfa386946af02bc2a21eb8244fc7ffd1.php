<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员登陆</title>
    <link href="/Public/assets/css/result.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/Public/assets/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/Public/assets/js/js.js"></script>
</head>
<body style="background: #fff;">
<section class="login_or">
    <h1><img src="/Public/assets/images/login_photo2.jpg"></h1>
    <form class="log-page" action="<?php echo U('index/login');?>" name="login_form" method="post">
        <dl>
            <dt><span><img src="/Public/assets/images/login_icon1.png" alt=""></span><strong><input type="text" name="username" placeholder="卡号或手机号码"></strong></dt>
            <dt><span><img src="/Public/assets/images/login_icon2.png" alt=""></span><strong><input type="text" name="password" placeholder="密码"></strong></dt>
            <dd class="btn_or"><a href="#" onClick="JavaScript:document.login_form.submit();">登陆</a></dd>
        </dl>
        </dl>
    </form>
    <h3>无法登陆？请到店咨询</h3>
</section>
</body>
</html>