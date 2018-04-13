<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
    <form action="index.php/Home/Fukuan/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
			<tr><td><label for='title_input' class='control-label x85'>标题:</label><input type='text' id='title' name='title' data-rule='required;' size='20'   value='<?php echo ($Rs["title"]); ?>'  ></td></tr>
<tr><td><label for='leixing_input' class='control-label x85'>支出类型:</label><input type='text' id='leixing' name='leixing'  size='20' data-toggle='lookup' data-url='index.php/Home/basic/fkleixing/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["leixing"]); ?>'  ></td><td><label for='type_input' class='control-label x85'>付款方式:</label><input type='text' id='type' name='type'  size='20' data-toggle='lookup' data-url='index.php/Home/basic/fktype/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["type"]); ?>'  ></td></tr>
<tr><td><label for='jine_input' class='control-label x85'>支出金额:</label><input type='text' id='jine' name='jine' data-rule='required;number' size='20'   value='<?php echo ($Rs["jine"]); ?>'  ></td><td><label for='jingban_input' class='control-label x85'>经办人:</label><input type='text' id='jingban' name='jingban'  size='20'   value='<?php echo ($Rs["jingban"]); ?>'  ></td></tr>
<tr></tr>
<tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>备注详情:</label><textarea name='beizhu'  cols='65' rows='5' ><?php echo ($Rs["beizhu"]); ?></textarea></td></tr></tr>
<tr><td colspan=2><label for='attid_input' class='control-label x85'>上传附件:</label><div style='display: inline-block; vertical-align: middle;'><IFRAME   src='index.php/Home/Public/attfile/attid/<?php echo ($attid); ?>/'  frameBorder=0 width='100%' height='30' scrolling=no ></IFRAME><input type='hidden' id='attid' name='attid'  value='<?php echo ($attid); ?>'  ><a href='index.php/Home/Public/uploads/attid/<?php echo ($attid); ?>/'   class='btn btn-green btn-sm' data-toggle='dialog' data-width='550' data-height='300' data-id='dialog-normal' data-mask='true' >已上传文件管理</a></div></td></tr>
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