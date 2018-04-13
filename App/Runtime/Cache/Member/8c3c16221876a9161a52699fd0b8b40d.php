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




<div class="proMan_list1" style="background: #fff;">
<?php $count=M('ticheng')->where(array('hid'=>cookie('uid'),'juid'=>$uid))->count('id'); if($count>0){ $addtime=M('pingjia')->where(array('juid'=>$uid,'hid'=>cookie('uid')))->order('id desc')->limit(1)->find(); if($addtime){ $count1=M('ticheng')->where(array('hid'=>cookie('uid'),'juid'=>$uid,'addtime'=>array('gt',$addtime['addtime'])))->count('id'); }else{ $count1=1; } } if($count>0&&$count1>0){ ?>
        <form  action="<?php echo U('index/pingjia');?>" id="login_form" method="post">
		<input type="hidden" name="juid" value="<?php echo ($urs["id"]); ?>">
		<input type="hidden" name="shopid" value="<?php echo ($urs["shopid"]); ?>">
		<input type="hidden" name="hid" value="<?php echo ($Rs["id"]); ?>">
		<input type="hidden" name="xingming" value="<?php echo ($Rs["xingming"]); ?>">
		<input type="hidden" name="kahao" value="<?php echo ($Rs["kahao"]); ?>">
		<input type="hidden" name="addtime" value='<?php echo date("Y-m-d H:i:s",time()) ?>'>
<Table width="100%">
<Tr><Td>姓名:</td><td><input type='text'  name='juname' readonly   value='<?php echo ($urs["truename"]); ?>'  ></td></tr>
<Tr><Td>工号:</td><td><input type='text'   readonly   value='<?php echo ($gonghao); ?>'  ></td></tr>
<Tr><Td>总体评价:</td><td>
               <select class="span12" multiple="multiple" name="pingfen" style="width:100%">
                        <option value="100"/>非常满意（100分）
                        <option value="90"/>满意（90分）
                        <option value="50"/>一般（50分）
                        <option value="20"/>不满意（20分）
                        <option value="0"/>非常不满意（0分）
                    </select></td></tr>

<Tr><Td>评价详情:</td><td><input type='text'  name='title'   value='<?php echo ($Rs["title"]); ?>'  ></td></tr>
<Tr><Td></td><td><button class="btn_or" type="submit">提交</button></td></tr>
</table>
</form>
<?php } else{ echo "该员工没有服务过您，或已经对服务过的记录评价过了！"; } ?>
</div>

<div class="orderDet_list2">
        <dl>
            <dt>评价记录</dt>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><dd>
                <span class="current"></span>
                <strong>
                    <b><?php echo ($v["title"]); ?></b>
					客户：<?php echo (msubstr($v["xingming"],0,2)); ?>*<Br/>
                    评分：<?php echo ($v["pingfen"]); ?><Br/>
                    时间：<?php echo ($v["addtime"]); ?><br/>
					回评：<?php echo ($v["content"]); ?><Br/>
					时间：<?php echo ($v["updatetime"]); ?>
                </strong>
            </dd><?php endforeach; endif; else: echo "" ;endif; ?>
           
            
        </dl>
 </div>



</section>
<div style="margin:0 auto;text-align:center"><img src="/Public/assets/images/logo.png"/></div>
</body>
</html>