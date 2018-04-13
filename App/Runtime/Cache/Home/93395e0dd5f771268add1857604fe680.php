<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="index.php/Home/Fukuan" method="post">
	
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
	 
        <div class="bjui-searchBar">
            <label>关键词：</label><input type="text" value="<?php echo ($_REQUEST['keys']); ?>" name="keys" class="form-control" size="12" />
				<label>添加时间：</label><input type='text' data-toggle='datepicker' value='<?php echo ($_REQUEST['time1']); ?>' name='time1' class='form-control' size='12' />-<input type='text' data-toggle='datepicker' value='<?php echo ($_REQUEST['time2']); ?>' name='time2' class='form-control' size='12' />
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
				&nbsp;<label>支出类型：</label><select name='leixing' data-toggle='selectpicker'><option value=''>全部</option><?php if(is_array($leixinglist)): foreach($leixinglist as $key=>$v): ?><option value='<?php echo ($v["leixing"]); ?>'  <?php if($v["leixing"] == $_REQUEST['leixing']): ?>selected<?php else: echo ($_REQUEST['leixing']); endif; ?> ><?php echo ($v["leixing"]); ?></option><?php endforeach; endif; ?></select>
				&nbsp;<label>经办人：</label><select name='jingban' data-toggle='selectpicker'><option value=''>全部</option><?php if(is_array($jingbanlist)): foreach($jingbanlist as $key=>$v): ?><option value='<?php echo ($v["jingban"]); ?>'  <?php if($v["jingban"] == $_REQUEST['jingban']): ?>selected<?php else: echo ($_REQUEST['jingban']); endif; ?> ><?php echo ($v["jingban"]); ?></option><?php endforeach; endif; ?></select>&nbsp;
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
              <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">清空查询</a>
			  <?php if(display(CONTROLLER_NAME.'/del')){ ?><span style="float:right;" ><a href="index.php/Home/Fukuan/del/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-red" data-toggle="doajax" data-confirm-msg="确定要清理吗？" data-icon="remove">清理</a></span> <?php } ?>
			  <?php if(display(CONTROLLER_NAME.'/outxls')){ ?><span style="float:right;margin-right:5px;"><a href="index.php/Home/Fukuan/outxls" class="btn btn-blue" data-toggle="doexport" data-confirm-msg="确定要导出吗？" data-icon="arrow-up">导出</a></span><?php } ?>
			  <?php if(display(CONTROLLER_NAME.'/add')){ ?><span style="float:right;margin-right:5px;"><a href="index.php/Home/Fukuan/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-green" data-toggle="dialog" data-width="900" data-height="500" data-id="dialog-mask" data-mask="true" data-icon="plus">新增</a></span><?php } ?>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent tableContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
        <thead>
            <tr>
            <th width="10" height="30"></th>
            <th data-order-direction='desc' data-order-field='id'>ID</th>
<?php if(session('iszb')=='是'){ ?><th data-order-direction='desc' data-order-field='shopid'>所属店铺</th><?php } ?>
<th>标题</th>
<th data-order-direction='desc' data-order-field='leixing'>支出类型</th>
<th data-order-direction='desc' data-order-field='type'>付款方式</th>
<th data-order-direction='desc' data-order-field='jine'>支出金额</th>
<th>经办人</th>
<th>备注详情</th>
<th>审核人</th>
<?php if(display(CONTROLLER_NAME.'/shenhe')){ ?><th>审核状态</th><?php } ?>
<th>添加人</th>
<th data-order-direction='desc' data-order-field='addtime'>添加时间</th>

			<?php if(display(CONTROLLER_NAME.'/view')){ ?><th width="40">详细</th><?php } ?>
		    <?php if(display(CONTROLLER_NAME.'/lock')){ ?><th>状态</th><?php } ?>
		    <?php if(display(CONTROLLER_NAME.'/edit')){ ?><th>编辑</th><?php } ?>
            </tr>
        </thead>
        <tbody>

          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		   <td></td>
		   <td><?php echo ($v["id"]); ?></td>
<?php if(session('iszb')=='是'){ ?><td><?php echo (get_shop_name($v["shopid"])); ?></td><?php } ?>
<td><?php echo (msubstr($v["title"],0,20)); ?></td>
<td><?php echo ($v["leixing"]); ?></td>
<td><?php echo ($v["type"]); ?></td>
<td><?php echo ($v["jine"]); ?></td>
<td><?php echo (msubstr($v["jingban"],0,20)); ?></td>
<td><?php echo (msubstr($v["beizhu"],0,20)); ?></td>
<td><?php echo (msubstr($v["shenheren"],0,20)); ?></td>
<?php if(display(CONTROLLER_NAME.'/shenhe')){ ?><td>
<a href="index.php/Home/Fukuan/shenhe/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"   class="btn btn-green btn-sm" data-toggle="dialog" data-width="900" data-height="500" data-id="dialog-mask" data-mask="true" ><?php echo ($v["shenhe"]); ?></a>
</td><?php } ?>
<td><?php echo (msubstr($v["uname"],0,20)); ?></td>
<td><?php echo (substr($v["addtime"],0,10)); ?></td>

		   <?php if(display(CONTROLLER_NAME.'/view')){ ?><td><a href="index.php/Home/Fukuan/view/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"  data-toggle="dialog" data-width="900" data-height="500" data-id="dialog-mask" data-mask="true" >详细</a></td><?php } ?>
		   <?php if(display(CONTROLLER_NAME.'/lock')){ ?><td><a href="index.php/Home/Fukuan/lock/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" data-toggle="doajax" data-confirm-msg="确定要操作吗？"><?php if($v["status"] == 1 ): ?><img src="/Public/images/ok.gif" border="0"/><?php else: ?><img src="/Public/images/locked.gif" border="0"/><?php endif; ?></a></td><?php } ?>
		   <?php if(display(CONTROLLER_NAME.'/edit')){ ?><td>
		   <?php if($v['shenhe'] == '审核通过'): ?><a  class="btn btn-green btn-sm" ><?php echo ($v["shenhe"]); ?></a>
		   <?php else: ?>
		   <a href="index.php/Home/Fukuan/edit/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"   class="btn btn-green btn-sm" data-toggle="dialog" data-width="900" data-height="500" data-id="dialog-mask" data-mask="true" ><?php echo ($v["shenhe"]); ?>/编辑</a><?php endif; ?></td><?php } ?>
		   </td>
         </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>
<div class="bjui-pageFooter">
        <div class="pages">
            <span>共 <?php echo ($totalCount); ?> 条  每页 <?php echo ($numPerPage); ?> 条</span>
        </div>
	    <div class="pagination-box" data-toggle="pagination" data-total="<?php echo ($totalCount); ?>" data-page-size="<?php echo ($numPerPage); ?>" data-page-current="<?php echo ($currentPage); ?>">
        </div>
</div>