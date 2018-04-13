<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
    <form action="index.php/Home/News/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
			<tr><td><label for='fenlei_input' class='control-label x85'>分类:</label><select name='fenlei'  data-toggle='selectpicker' ><option value=''>请选择</option><?php if(is_array(C("NEW_FENLEI"))): $i = 0; $__LIST__ = C("NEW_FENLEI");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fenlei): $mod = ($i % 2 );++$i;?><option value='<?php echo ($fenlei); ?>' <?php if( $fenlei == $Rs['fenlei'] ): ?>selected<?php endif; ?> ><?php echo ($fenlei); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></td><td><label for='title_input' class='control-label x85'>标题:</label><input type='text' id='title' name='title' data-rule='required;' size='20'   value='<?php echo ($Rs["title"]); ?>'  ></td></tr>
<tr></tr>
<tr><td colspan=2><label for='content_input' class='control-label x85'>详情:</label><div style='display: inline-block; vertical-align: middle;'><textarea name='content'   data-toggle='kindeditor' data-minheight='150' data-items='fontname, fontsize, |, forecolor, hilitecolor, bold, italic, underline, removeformat, |, justifyleft, justifycenter, justifyright, insertorderedlist, insertunorderedlist, |, emoticons, image, link'><?php echo ($Rs["content"]); ?></textarea></div></td></tr>
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