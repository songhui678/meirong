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






<div class="orderDet_list2">
        <dl>
            <dt>预约记录</dt>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><dd>
                <span class="current"></span>
                <strong>
                    <b><?php echo ($v["title"]); ?></b>
					会员：<?php echo ($v["xingming"]); ?><Br/>
					店铺：<?php echo (get_shop_name($v["shopid"])); ?><Br/>
					被约：<?php echo ($v["juname"]); ?><Br/>
                    时间：<?php echo ($v["yytime"]); ?><br/>
					添加：<?php echo ($v["addtime"]); ?>
                </strong>
            </dd><?php endforeach; endif; else: echo "" ;endif; ?>
           
            
        </dl>
 </div>



</section>
<div style="margin:0 auto;text-align:center"><img src="/Public/assets/images/logo.png"/></div>
</body>
</html>