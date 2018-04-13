<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="index.php/Home/Tjchanpin" method="get">
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
        <div class="bjui-searchBar">
			<label>时间：</label><input type='text' data-toggle='datepicker' value='<?php echo ($_REQUEST['time1']); ?>' name='time1' class='form-control' size='12' />-<input type='text' data-toggle='datepicker' value='<?php echo ($_REQUEST['time2']); ?>' name='time2' class='form-control' size='12' />&nbsp;
			<?php if(session('iszb')=='是'){ ?>
			<label>所属店铺：</label>
			<select  name="shopid" data-toggle="selectpicker" >
             <option  value="">全部</option>
			 <?php $slist=M('shop')->select(); ?>
	         <?php if(is_array($slist)): foreach($slist as $key=>$v): ?><option <?php if($v["id"] == $_REQUEST['shopid'] ): ?>selected value="<?php echo ($_REQUEST['shopid']); ?>" <?php else: ?>value="<?php echo ($v["id"]); ?>"<?php endif; ?> >
	         <?php switch($v["level"]): case "0": ?>+<?php break;?> <?php case "1": ?>+--<?php break; case "2": ?>+------<?php break; default: endswitch;?>
	         <?php echo ($v["title"]); ?>
	          </option><?php endforeach; endif; ?>
             </select>
			 <?php } ?>
		    &nbsp;<label>产品分类：</label><select  name="fenlei" data-toggle='selectpicker'><?php $slist=cateTreed($pid=1,$level=0); ?>
			<option value=''>全部</option><?php if(is_array($slist)): foreach($slist as $key=>$v): ?><option value='<?php echo ($v["title"]); ?>'  <?php if($v["title"] == $_REQUEST['fenlei']): ?>selected<?php else: echo ($_REQUEST['fenlei']); endif; ?> ><?php switch($v["level"]): case "0": ?>+<?php break;?> <?php case "1": ?>+--<?php break; case "2": ?>+------<?php break; default: endswitch; echo ($v["title"]); ?></option><?php endforeach; endif; ?></select>
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
             <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">清空查询</a>
			 <?php if(display(CONTROLLER_NAME.'/dayin')){ ?><span style="float:right;margin-right:5px;"><a href="<?php echo U('tjchanpin/dayin',array('time1'=>$_REQUEST['time1'],'time2'=>$_REQUEST['time2'],'fenlei'=>$_REQUEST['fenlei']));?>" target="_blank" class="btn btn-blue" data-icon="print">打印</a></span><?php } ?>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent tableContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
            <thead>
                <tr>
                    <th rowspan="2" data-order-field="id">ID</th>
<th rowspan="2">所属店铺</th>
<th rowspan="2" data-order-direction='desc' data-order-field='bianhao'>产品编号</th>
<th rowspan="2">产品名称</th>
<th rowspan="2">产品大类</th>
<th rowspan="2">产品分类</th>
<th rowspan="2">产品规格</th>
<th rowspan="2">计量单位</th>
                <th colspan="3" align="center"><?php echo ($_REQUEST['time1']); ?>-<?php echo ($_REQUEST['time2']); ?>统计</th>
                </tr>
                <tr>
                    <th>入库</th>
                    <th>出库</th>
					<th  data-order-direction='desc' data-order-field='kucun'>库存</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($v["id"]); ?></td>
<td><?php echo (get_shop_name($v["shopid"])); ?></td>
<td><?php echo ($v["bianhao"]); ?></td>
<td><?php echo (msubstr($v["title"],0,20)); ?></td>
<td><?php echo ($v["dalei"]); ?></td>
<td><?php echo (msubstr($v["fenlei"],0,20)); ?></td>
<td><?php echo (msubstr($v["type"],0,20)); ?></td>
<td><?php echo (msubstr($v["danwei"],0,20)); ?></td>
<td>
<?php if(isset($_REQUEST['time1']) && $_REQUEST['time1'] != ''&&isset($_REQUEST['time2']) && $_REQUEST['time2'] != ''){ $map['shijian'] =array(array('egt',I('time1').' 00:00:00'),array('elt',I('time2').' 59:59:59'));} $where['bianhao']=array("eq",$v['bianhao']); $map['_complex'] = $where; echo M('rukus')->where($map)->sum('shuliang'); $where=""; $map=""; ?>
</td>
<td>
<?php if(isset($_REQUEST['time1']) && $_REQUEST['time1'] != ''&&isset($_REQUEST['time2']) && $_REQUEST['time2'] != ''){ $map['shijian'] =array(array('egt',I('time1').' 00:00:00'),array('elt',I('time2').' 59:59:59'));} $where['bianhao']=array("eq",$v['bianhao']); $map['_complex'] = $where; echo M('chukus')->where($map)->sum('shuliang'); $where=""; $map=""; ?>
</td>
<td><?php echo ($v["kucun"]); ?></td>
         </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
				  
</div>
<div class="bjui-pageFooter">
    <ul>
       <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
    </ul>
</div>