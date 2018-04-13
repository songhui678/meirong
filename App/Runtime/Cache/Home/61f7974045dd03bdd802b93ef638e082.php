<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="index.php/Home/Fxchanpin" method="get">
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
		</div> 
</form>
    
</div>
<div class="bjui-pageContent tableContent" style="padding:8px;">
    <!--//--> 
                   <div class="col-md-12">
                    <div class="panel panel-default">
                          <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-leaf"></i> 入库增长趋势 </h3></div>
                            <div style="min-height:185px">
							<img src="<?php echo U('fxchanpin/rukus',array('keys'=>$_REQUEST['keys'],'time1'=>$_REQUEST['time1'],'time2'=>$_REQUEST['time2'],'shopid'=>$_REQUEST['shopid'],'fenlei'=>$_REQUEST['fenlei']));?>">
						 </div>
                        </div>
                      </div>
                    <!--//-->  
					<div class="col-md-12">
                    <div class="panel panel-default">
                          <div class="panel-heading"><h3 class="panel-title"><i class="fa fa-pencil-square-o"></i> 出库增长趋势 </h3></div>
                            <div style="min-height:185px">
							<img src="<?php echo U('fxchanpin/chukus',array('keys'=>$_REQUEST['keys'],'time1'=>$_REQUEST['time1'],'time2'=>$_REQUEST['time2'],'shopid'=>$_REQUEST['shopid'],'fenlei'=>$_REQUEST['fenlei']));?>">
						 </div>
                        </div>
                      </div>
                  <!--//-->					  
</div>
<div class="bjui-pageFooter">
    <ul>
       <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
    </ul>
</div>