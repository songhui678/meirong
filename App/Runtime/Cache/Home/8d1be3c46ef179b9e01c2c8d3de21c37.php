<?php if (!defined('THINK_PATH')) exit(); if(session('iszb')=='是'){ $map=' and id<>0 '; }else{ $map=" and shopid=".session('shopid')." "; } ?>
<div class="bjui-pageHeader" style="background:#FFF;">
    <div style="padding: 0 15px;">
        <h4 style="margin-bottom:20px;">
            <?php echo (get_shop_name(session('shopid'))); ?>　<small>
			地址：<?php echo M('shop')->where(array('id'=>session('shopid')))->getField('dizhi'); ?>
			电话：<?php echo M('shop')->where(array('id'=>session('shopid')))->getField('dianhua'); ?>
			</small>
        </h4>
        <div style="float:left; width:157px;">
            <div class="alert alert-info" role="alert" style="margin:0 0 5px; padding:10px;">
                <img src="./<?php echo ($trs['folder']); echo ($trs['filename']); ?>" width="135">
            </div>
        </div>
        <div style="margin-left:170px; margin-top:22px; padding-left:6px;">
            <span style="padding-left:10px;">今天新增会员：</span><b><font color=red><?php echo M('huiyuan')->where("addtime like '%".date('Y-m-d',time())."%'".$map)->count('id')/1; ?></font></b>人
			<span style="padding-left:10px;">今天</span>
			现金收入：<b><font color=red><?php echo M('zijin')->where("addtime like '%".date('Y-m-d',time())."%' ".$map)->sum('xianjin')/1; ?></font></b>元 /
			银联收入<b><font color=red><?php echo M('zijin')->where("addtime like '%".date('Y-m-d',time())."%' ".$map)->sum('pos')/1; ?></font></b>元 /
			卡支付<b><font color=red><?php echo M('zijin')->where("addtime like '%".date('Y-m-d',time())."%' ".$map)->sum('yue')/1; ?></font></b>元 /
			赠送<b><font color=red><?php echo M('zijin')->where("addtime like '%".date('Y-m-d',time())."%' ".$map)->sum('song')/1; ?></font></b>元  /
			优惠<b><font color=red><?php echo M('zijin')->where("addtime like '%".date('Y-m-d',time())."%' ".$map)->sum('jian')/1; ?></font></b>元
        </div>
        <div class="row" style="margin-left:170px; margin-top:10px;">
		 <form action="index.php/Home/Index/index/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		 <input type="hidden" name="id" value="<?php echo (session('uid')); ?>">
            <div class="col-md-12" style="padding:5px;">
                <div class="alert alert-success" role="alert" style="margin:0 0 5px; padding:5px 15px;">
                    <h5>我的便签、记事本 &nbsp;<button type="submit" class="btn-default">保存</button></h5>
                    <textarea style="width:100%;height:75px;border:0px;line-height:150%" name="bian"><?php echo ($Rs["bian"]); ?></textarea> 
                </div>
            </div>
		 </form>
        </div>
    </div>
</div>
<div class="bjui-pageContent">
    <div style="margin-top:5px;  overflow:hidden;">
        <div class="row" style="padding: 0 8px;">
           		<!--//-->
                      <div class="col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-user-md"></i> 近期生日的会员 <a href="<?php echo U('huiyuan/shengri');?>" data-toggle="navtab" data-id="<?php echo U('huiyuan/shengri');?>" data-title="近期生日的会员">详细</a></h3></div>
                            <div style="min-height:185px">
							<table class="table table-bordered table-striped table-hover">
                             <thead>
                              <tr>
                              <th height=30>姓名</th>
                              <th>性别</th>
                              <th>联系电话</th>
                              <th>会员等级</th>
                              <th>会员生日</th>
                              </tr>
                            </thead>
                            <tbody>
							<?php $benyue=date("-m-",time()); $xiayue=date("-m-",strtotime("+1 month")); $list = M('huiyuan')->where("shengri like '%".$benyue."%' or shengri like '%".$xiayue."%'")->limit(5)->select(); ?>
						    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                              <td><?php echo (msubstr($v["xingming"],0,20)); ?></td>
                              <td><?php echo ($v["sex"]); ?></td>
                              <td><?php echo (msubstr($v["dianhua"],0,20)); ?></td>
                              <td><?php echo ($v["dengji"]); ?></td>
                              <td><?php echo (substr($v["shengri"],0,10)); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                           </tbody>
                          </table>
						  </div>
                        </div>
                      </div>
                      <!--//-->
                      <!--//-->
                      <div class="col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-pencil-square-o"></i> 一个月未来消费 <a href="<?php echo U('huiyuan/weixiaofei');?>" data-toggle="navtab" data-id="<?php echo U('huiyuan/weixiaofei');?>" data-title="一个月未来消费">详细</a></h3></div>
                            <div style="min-height:185px">
							<table class="table table-bordered table-striped table-hover">
                             <thead>
                              <tr>
                              <th height=30>姓名</th>
                              <th>性别</th>
                              <th>联系电话</th>
                              <th>会员等级</th>
                              <th>上次消费</th>
                              </tr>
                            </thead>
                            <tbody>
							<?php $list = M('huiyuan')->where(array('updatetime'=>array('elt',date("Y-m-d",strtotime("-1 month")))))->limit(5)->select(); ?>
						    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                              <td><?php echo (msubstr($v["xingming"],0,20)); ?></td>
                              <td><?php echo ($v["sex"]); ?></td>
                              <td><?php echo (msubstr($v["dianhua"],0,20)); ?></td>
                              <td><?php echo ($v["dengji"]); ?></td>
                              <td><?php echo (substr($v["updatetime"],0,10)); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                           </tbody>
                          </table>
						  </div>
                        </div>
                      </div>
                      <!--//-->  
					  <!--//-->
                      <div class="col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-volume-up"></i>  新闻动态 <a href="<?php echo U('news/index');?>" data-toggle="navtab" data-id="<?php echo U('news/index');?>" data-title="新闻动态">详细</a></h3></div>
                            <div style="min-height:185px">
							<table class="table table-bordered table-striped table-hover">
                             <thead>
                              <tr>
                              <th height=30>标题</th>
                              <th>分类</th>
                              <th>浏览</th>
                              <th>发布</th>
                              </tr>
                            </thead>
                            <tbody>
							<?php $list=M('news')->order("id desc")->limit(5)->select(); ?>
						    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                              <td><?php echo (msubstr($v["title"],0,30)); ?></td>
                              <td><?php echo (msubstr($v["fenlei"],0,10)); ?></td>
                              <td><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>./index.php/news/<?php echo ($v["id"]); ?>" target="_blank">打开浏览</a></td>
                              <td><?php echo (substr($v["addtime"],0,10)); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                           </tbody>
                          </table>
						  </div>
                        </div>
                      </div>
                      <!--//--> 
                      <div class="col-md-6">
                        <div class="panel panel-default">
                          <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-phone-square"></i>  客户预约 <a href="<?php echo U('yuyue/index');?>" data-toggle="navtab" data-id="<?php echo U('yuyue/index');?>" data-title="客户预约">详细</a></h3></div>
                            <div style="min-height:185px">
							<table class="table table-bordered table-striped table-hover">
                             <thead>
                              <tr>
                              <th height=30>会员</th>
							  <th>预约时间</th>
							  <th>预约内容</th>
							  <th>员工姓名</th>
							  <th>新增时间</th>
                              </tr>
                            </thead>
                            <tbody>
							<?php if(session('iszb')!=='是'){ $map1['shopid'] = array('EQ', session('shopid')); }else{ $map1='id<>0'; } $list=M('yuyue')->where($map1)->order("id desc")->limit(5)->select(); ?>
						    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                              <td><?php echo ($v["xingming"]); ?></td>
							  <td><?php echo ($v["yytime"]); ?></td>
							  <td><?php echo ($v["title"]); ?></td>
							  <td><?php echo ($v["juname"]); ?></td>
							  <td><?php echo (substr($v["addtime"],0,10)); ?></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                           </tbody>
                          </table>
						  </div>
                        </div>
                      </div>
                      <!--//-->  

       									  
			
        </div>
    </div>
</div>