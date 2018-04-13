<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
    <form action="index.php/Home/Dengji/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
			<tr><td><label for='title_input' class='control-label x85'>等级名称:</label><input type='text' id='title' name='title' data-rule='required;' size='20'   value='<?php echo ($Rs["title"]); ?>'  ></td></tr>
			<tr><td><label for='jifen_input' class='control-label x85'>所需积分:</label><input type='text' id='jifen' name='jifen' data-rule='required;number' size='20'   value='<?php echo ($Rs["jifen"]); ?>'  >  达到多少积分就可以升级为本等级</td></tr>
<tr><td><label for='jizhi_input' class='control-label x85'>升级机制:</label><?php if(is_array(C("SET_JIZHI"))): $i = 0; $__LIST__ = C("SET_JIZHI");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jizhi): $mod = ($i % 2 );++$i;?><input type='radio'  name='jizhi' data-toggle='icheck'  data-label='<?php echo ($jizhi); ?>' value='<?php echo ($jizhi); ?>' <?php if( $jizhi == $Rs['jizhi'] ): ?>checked data-rule='checked'<?php endif; ?> ><?php endforeach; endif; else: echo "" ;endif; ?>  自动升级为每次消费后自动计算积分，根据积分调整等级</td></tr>
<tr><td><label for='zhekou_input' class='control-label x85'>折扣比例:</label><input type='text' id='zhekou' name='zhekou' data-rule='required;number' size='5'   value='<?php echo ($Rs["zhekou"]); ?>'  >%，（即：达到此等级时，所能享受的折扣率，如：80表示八折，100表示不打折） </td></tr>
<tr><td><label for='bili_input' class='control-label x85'>积分比例:</label><input type='text' id='bili' name='bili' data-rule='required;number' size='5'   value='<?php echo ($Rs["bili"]); ?>'  >RMB兑换1积分（即：消费XX人民币自动兑换成1个积分）</td></tr>
           </tbody>
          </table>
        </div>
    </form>
</div>
<div class="bjui-pageFooter">
    <ul>
       <li><button type="button" class="btn-close" data-icon="close">取消</button></li>
       <li><button type="submit" class="btn-default" data-icon="save">保存</button></li>
    </ul>
</div>