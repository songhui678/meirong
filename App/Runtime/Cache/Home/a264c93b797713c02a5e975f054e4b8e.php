<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
    <form action="index.php/Home/Yuyue/edit/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
		   <tr></tr>
<tr><td colspan=2><label for='content_input' class='control-label x85'>处理结果:</label><textarea name='content'  cols='65' rows='5' ><?php echo ($Rs["content"]); ?></textarea></td></tr>
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