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



<div class="profile" style="background: #fff;">
<form  action="<?php echo U('index/yuyue_add');?>" id="login_form" method="post">
<input type="hidden" name="juid" value="<?php echo ($urs["id"]); ?>">
		<input type="hidden" name="shopid" value="<?php echo ($urs["shopid"]); ?>">
		<input type="hidden" name="hid" value="<?php echo ($Rs["id"]); ?>">
		<input type="hidden" name="xingming" value="<?php echo ($Rs["xingming"]); ?>">
		<input type="hidden" name="kahao" value="<?php echo ($Rs["kahao"]); ?>">
		<input type="hidden" name="addtime" value='<?php echo date("Y-m-d H:i:s",time()) ?>'>
<Table width="100%" cellpadding="20" cellspacing="10">
<Tr><Td width="100">顾问姓名:</td><td><input type='text'  name='juname' readonly   value='<?php echo ($urs["truename"]); ?>'  ></td></tr>
<Tr><Td>顾问工号:</td><td><input type='text'   readonly   value='<?php echo ($gonghao); ?>'  ></td></tr>
<Tr><Td>所在店铺:</td><td><input type='text'   readonly   value='<?php echo (get_shop_name($urs["shopid"])); ?>'  ></td></tr>
<Tr><Td>预计到店时间:</td><td>
<input  type="text" value="" placeholder="<?php echo date('Y-m-d',time()); ?>" name="riqi" id="endTime"  >
<select   name="time" >
<option value="08:00:00"/>8:00</option>
<option value="08:30:00"/>8:30</option>
<option value="09:00:00"/>9:00</option>
<option value="09:30:00"/>9:30</option>
<option value="10:00:00"/>10:00</option>
<option value="10:30:00"/>10:30</option>
<option value="11:00:00"/>11:00</option>
<option value="11:30:00"/>11:30</option>
<option value="12:00:00"/>12:00</option>
<option value="12:30:00"/>12:30</option>
<option value="13:00:00"/>13:00</option>
<option value="13:30:00"/>13:30</option>
<option value="14:00:00"/>14:00</option>
<option value="14:30:00"/>14:30</option>
<option value="15:00:00"/>15:00</option>
<option value="15:30:00"/>15:30</option>
<option value="16:00:00"/>16:00</option>
<option value="16:30:00"/>16:30</option>
<option value="17:00:00"/>17:00</option>
<option value="17:30:00"/>17:30</option>
<option value="18:00:00"/>18:00</option>
<option value="18:30:00"/>18:30</option>
<option value="19:00:00"/>19:00</option>
<option value="19:30:00"/>19:30</option>
<option value="20:00:00"/>20:00</option>
<option value="20:30:00"/>20:30</option>
<option value="21:00:00"/>21:00</option>
<option value="21:30:00"/>21:30</option>
<option value="22:00:00"/>22:00</option>
<option value="22:30:00"/>22:30</option>
<option value="23:00:00"/>23:00</option>
<option value="23:30:00"/>23:30</option>
</select></td></tr>
</td></tr>
<Tr><Td>预约服务内容:</td><td><textarea name='title'  cols='60' rows='3' ></textarea></td></tr>
<Tr><Td></td><td><button class="btn" type="submit">提交</button></td></tr>
</table>
</form>
</div>
<div id="datePlugin"></div>



</section>
<div style="margin:0 auto;text-align:center"><img src="/Public/assets/images/logo.png"/></div>
</body>
</html>