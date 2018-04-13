<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理中心 <?php echo ($Rs["title"]); ?></title>
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
        <a href="<?php echo U('index');?>"><span>管理中心</span></a>
        <strong></strong>
    </div>
    <!-----分享--->
    <div class="proMan_menu">
        <ul>
            <li><a href="<?php echo U('index');?>">管理中心</a></li>
             <li><a href="<?php echo U('index/shop');?>">店铺业绩</a></li>
			 <li><a href="<?php echo U('index/top');?>">本月销冠</a></li>
			 <li><a href="<?php echo U('index/tousu');?>">投诉管理</a></li>
			 <li><a href="<?php echo U('index/pingjia');?>">客户评价</a></li>
			 <li><a href="<?php echo U('index/yuyue');?>">预约记录</a></li>
             <li><a href="<?php echo U('index/logout');?>">安全退出</a></li>
        </ul>
    </div>



<?php $map1['addtime'] =array(array('egt',date("Y-m-d",time()).' 00:00:00'),array('elt',date("Y-m-d",time()).' 59:59:59')); ?>
<div class="userCenter_list1">
        <dl>
            <dt>
                <h2>今日业绩</h2>
                <h3>
                    <span><img src="/Public/assets/images/login_photo4.jpg"/></span>
                    <strong>
                        <b>客户 <a href="<?php echo U('index/shop');?>"><i><?php $shops=M('huiyuan')->where($map1)->count('id');echo $shops/1; ?></i></a> 位</b>
                        <b>现金 <a href="<?php echo U('index/shop');?>"><i><?php $xianjin=M('zijin')->where($map1)->sum('xianjin');echo $xianjin/1; ?></i></a> 元 </b>
						<b>银联 <a href="<?php echo U('index/shop');?>"><i><?php $pos=M('zijin')->where($map1)->sum('pos');echo $pos/1; ?></i></a> 元 </b>
                        <b>卡付 <a href="<?php echo U('index/shop');?>"><i><?php $yue=M('zijin')->where($map1)->sum('yue');echo $yue/1; ?></i></a> 元</b>
                    </strong>
                </h3>
                <h4>顾问提成<a href="<?php echo U('index/shop');?>"><span><?php $jine=M('ticheng')->where($map1)->sum('jine');echo $jine/1; ?></span></a>元 </h4>
            </dt>
            <dd><a href="<?php echo U('index/shop');?>">店铺业绩</a> <a href="<?php echo U('index/tousu');?>">客户投诉</a><a href="<?php echo U('index/pingjia');?>">客户评价</a> </dd>
        </dl>
    </div>
    <div class="userCenter_list2">
        <dl>
            <dt>最新动态<a href="<?php echo U('index/news');?>"> 更多>>></a></dt>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><dd><a href="<?php echo U('index/news_detail',array('id'=>$v['id']));?>"><span>[<?php echo ($v["fenlei"]); ?>] <?php echo (msubstr($v["title"],0,20)); ?></span><strong>[<?php echo (msubstr($v["addtime"],5,5)); ?>]</strong></a> </dd><?php endforeach; endif; else: echo "" ;endif; ?>
        </dl>
    </div>
	<div class="userCenter_list3">
        <span><a href="<?php echo U('index/top');?>" class="btn">本月销冠<img src="/Public/assets/images/userCenter_icon2.png"/></a> </span>
        <span><a href="<?php echo U('index/tousu');?>" class="btn">客户投诉<img src="/Public/assets/images/userCenter_icon4.png"/></a> </span>
		<span><a href="<?php echo U('index/yuyue');?>" class="btn">预约记录<img src="/Public/assets/images/userCenter_icon4.png"/></a> </span>
        <span><a href="<?php echo U('index/shop');?>" class="btn">店铺业绩<img src="/Public/assets/images/userCenter_icon7.png"/></a> </span>
    </div>



</section>
<div style="margin:0 auto;text-align:center"><img src="/Public/assets/images/logo.png"/></div>
</body>
</html>