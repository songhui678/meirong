<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
    <form action="index.php/Home/Guwen/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
			<tr><td><label for='shopid_input' class='control-label x85'>所在店铺:</label><input type='text' id='shopid' name='shopid'  size='20'   value='<?php echo ($Rs["shopid"]); ?>'  ></td><td><label for='gonghao_input' class='control-label x85'>工号:</label><input type='text' id='gonghao' name='gonghao'  size='20'   value='<?php echo ($Rs["gonghao"]); ?>'  ></td></tr>
<tr><td><label for='xingming_input' class='control-label x85'>姓名:</label><input type='text' id='xingming' name='xingming'  size='20'   value='<?php echo ($Rs["xingming"]); ?>'  ></td><td><label for='zhicheng_input' class='control-label x85'>职称:</label><input type='text' id='zhicheng' name='zhicheng'  size='20'   value='<?php echo ($Rs["zhicheng"]); ?>'  ></td></tr>
<tr><td><label for='techang_input' class='control-label x85'>特长:</label><input type='text' id='techang' name='techang'  size='20'   value='<?php echo ($Rs["techang"]); ?>'  ></td></tr>
<tr></tr>
<tr><td colspan=2><label for='content_input' class='control-label x85'>个人介绍:</label><textarea name='content'  cols='65' rows='5' ><?php echo ($Rs["content"]); ?></textarea></td></tr></tr>
<tr><td colspan=2><label for='attid_input' class='control-label x85'>上传照片:</label><div style='display: inline-block; vertical-align: middle;'><IFRAME   src='index.php/Home/Public/attfile/attid/<?php echo ($attid); ?>/'  frameBorder=0 width='100%' height='30' scrolling=no ></IFRAME><input type='hidden' id='attid' name='attid'  value='<?php echo ($attid); ?>'  ><a href='index.php/Home/Public/uploads/attid/<?php echo ($attid); ?>/'   class='btn btn-green btn-sm' data-toggle='dialog' data-width='550' data-height='300' data-id='dialog-normal' data-mask='true' >已上传文件管理</a></div></td></tr>
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