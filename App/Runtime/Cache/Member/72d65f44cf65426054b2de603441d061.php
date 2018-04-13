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



<div class="tab_con">
    <div class="common myOrder">
	   <div class="myOrder_list">
		<?php if(is_array($slist)): foreach($slist as $key=>$v): ?><a href="<?php echo U('index/yuyue',array('shopid'=>$v['shopid']));?>"  class="btn" style="padding:10px;background: #ff6700;color: #fff;border: 0.1rem solid #ff6700;"><?php echo (get_shop_name($v["shopid"])); ?></a><?php endforeach; endif; ?>
		</div>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="myOrder_list">
                <h2><span>工号：<?php echo ($v["gonghao"]); ?></span><strong>满意度：<?php if($v['manyi']==0){echo '暂无评价';}else{echo $v['manyi']."%";} ?></strong></h2>
                <dl>
                    <dt><img src="<?php echo (getpic($v["attid"])); ?>" style="border:0;float:left;"></dt>
                    <dd>
                        <strong style="width:90%">
                            <a href="#"><img src="/Public/assets/images/orderList_icon1.png" border="0">店铺:<?php echo (get_shop_name($v["shopid"])); ?></a>
                            <a href="#"><img src="/Public/assets/images/orderList_icon2.png" border="0">特长:<?php echo ($v["techang"]); ?></a>
							<a href="#"><img src="/Public/assets/images/orderList_icon1.png" border="0">职称:<?php echo ($v["zhicheng"]); ?></a>
							<?php echo (msubstr($v["content"],0,32)); ?>
                        </strong>
                    </dd>
                </dl>
				<p><a href="<?php echo U('index/yuyue_add',array('id'=>$v['id']));?>" class="btn">我要预约</a><a href="<?php echo U('index/pingjia',array('id'=>$v['id']));?>" class="btn">我要评价</a> </p>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
		<p class="pages"><?php echo ($page); ?></p>
    </div>
 </div>
 





</section>
<div style="margin:0 auto;text-align:center"><img src="/Public/assets/images/logo.png"/></div>
</body>
</html>