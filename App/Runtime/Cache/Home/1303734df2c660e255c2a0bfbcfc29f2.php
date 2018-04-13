<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="index.php/Home/Ticheng" method="post">
	
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
			 &nbsp;<label>员工姓名：</label><select name='juname' data-toggle='selectpicker'><option value=''>全部</option><?php if(is_array($junamelist)): foreach($junamelist as $key=>$v): ?><option value='<?php echo ($v["juname"]); ?>'  <?php if($v["juname"] == $_REQUEST['juname']): ?>selected<?php else: echo ($_REQUEST['juname']); endif; ?> ><?php echo ($v["juname"]); ?></option><?php endforeach; endif; ?></select>
				&nbsp;<label>提成类型：</label><select name='type' data-toggle='selectpicker'><option value=''>全部</option><?php if(is_array($typelist)): foreach($typelist as $key=>$v): ?><option value='<?php echo ($v["type"]); ?>'  <?php if($v["type"] == $_REQUEST['type']): ?>selected<?php else: echo ($_REQUEST['type']); endif; ?> ><?php echo ($v["type"]); ?></option><?php endforeach; endif; ?></select>&nbsp;
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
              <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">清空查询</a>
			  <?php if(display(CONTROLLER_NAME.'/outxls')){ ?><span style="float:right;margin-right:5px;"><a href="index.php/Home/Ticheng/outxls" class="btn btn-blue" data-toggle="doexport" data-confirm-msg="确定要导出吗？" data-icon="arrow-up">导出</a></span><?php } ?>
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
<th>员工姓名</th>
<th data-order-direction='desc' data-order-field='danhao'>提成账单</th>
<th>提成类型</th>
<th data-order-direction='desc' data-order-field='jine'>提成金额</th>
<th>详情</th>
<th>关联会员</th>
<th>添加人</th>
<th data-order-direction='desc' data-order-field='addtime'>添加时间</th>
            </tr>
        </thead>
        <tbody>

          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		   <td></td>
		   <td><?php echo ($v["id"]); ?></td>
<?php if(session('iszb')=='是'){ ?><td><?php echo (get_shop_name($v["shopid"])); ?></td><?php } ?>
<td><?php echo (msubstr($v["juname"],0,20)); ?></td>
<td><?php echo ($v["danhao"]); ?></td>
<td><?php echo (msubstr($v["type"],0,20)); ?></td>
<td><?php echo ($v["jine"]); ?></td>
<td><?php echo (msubstr($v["title"],0,200)); ?></td>
<td><?php echo (msubstr($v["xingming"],0,20)); ?></td>
<td><?php echo (msubstr($v["uname"],0,20)); ?></td>
<td><?php echo ($v["addtime"]); ?></td>
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