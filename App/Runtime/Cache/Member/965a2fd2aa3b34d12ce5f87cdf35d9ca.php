<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员中心 <?php echo ($Rs["title"]); ?></title>
    <link href="/Public/assets/css/result.css" rel="stylesheet" type="text/css">
	<link href="/Public/assets/css/date.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/Public/assets/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/Public/assets/js/js.js"></script>
	<script type="text/javascript" src="/Public/assets/js/date.js" ></script>
    <script type="text/javascript" src="/Public/assets/js/iscroll.js" ></script>
    <script type="text/javascript">
        $(function(){
            $('#beginTime').date();
            $('#endTime').date();
        });
    </script>
	<style type="text/css">
     input,textarea{font-family: "microsoft yahei";font-size: 1.2rem;background: #f5f5f5;border: 1px #ccc solid;width: 100%;padding:10px;}
	 select{font-family: "microsoft yahei";font-size: 1.8rem;line-height:2rem;width: 100%;padding:10px;}
	 button{width: 50%;font-family: "microsoft yahei";font-size: 1.2rem;color:#fff;}
    </style>
</head>
<body>
<section class="header_red">

 <div class="proMan_header">
        <a href="<?php echo U('index');?>"><span>会员中心</span></a>
        <strong></strong>
    </div>
    <!-----分享--->
    <div class="proMan_menu">
        <ul>
            <li><a href="<?php echo U('index');?>">会员中心</a></li>
             <li><a href="<?php echo U('index/myzijin');?>">我的账户</a></li>
			 <li><a href="<?php echo U('index/mycika');?>">我的次卡</a></li>
			 <li><a href="<?php echo U('index/myxiaofei');?>">我的消费</a></li>
			 <li><a href="<?php echo U('index/mypingjia');?>">我的评价</a></li>
			 <li><a href="<?php echo U('index/lipin');?>">积分礼品</a></li>
             <li><a href="<?php echo U('index/user');?>">个人中心</a></li>
             <li><a href="<?php echo U('index/logout');?>">安全退出</a></li>
        </ul>
    </div>




<div class="userCenter_list1">
        <dl>
            <dt>
                <h2><?php echo ($Rs["xingming"]); ?>  [<?php echo ($Rs["dengji"]); ?>]</h2>
                <h3>
                    <span><img src="/Public/assets/images/login_photo4.jpg"/></span>
                    <strong>
                        <b><?php echo ($Rs["truename"]); ?></b>
                        <b>账户余额 <a href="<?php echo U('index/myzijin');?>"><i><?php echo ($Rs["jine"]); ?></i></a> </b>
						<b>次卡余额 <a href="<?php echo U('index/mycika');?>"><i><?php echo ($Rs["jici"]); ?></i></a> </b>
                        <b>积分余额 <a href="<?php echo U('index/myjifen');?>"><i><?php echo ($Rs["jifen"]); ?></b>
                    </strong>
                </h3>
                <h4>总消费 <a href="<?php echo U('index/myxiaofei');?>"><span><?php echo ($Rs["xiaofei"]); ?> </span></a>元</h4>
            </dt>
            <dd><a href="<?php echo U('yuyue');?>">预约/评价</a> <a href="<?php echo U('index/tousu');?>">我要投诉</a><a href="<?php echo U('index/myyuyue');?>">我的预约</a> </dd>
        </dl>
    </div>
    <div class="userCenter_list2">
        <dl>
            <dt>最新动态<a href="<?php echo U('index/news');?>"> 更多>>></a></dt>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo U('index/news_detail',array('id'=>$v['id']));?>"><span>[<?php echo ($v["fenlei"]); ?>] <?php echo (msubstr($v["title"],0,26)); ?></span><strong>[<?php echo (msubstr($v["addtime"],5,5)); ?>]</strong></a> </dd><?php endforeach; endif; else: echo "" ;endif; ?>
        </dl>
    </div>



</section>
<div style="margin:0 auto;text-align:center"><img src="/Public/assets/images/logo.png"/></div>
</body>
</html>