<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
index.php/Home
    <form action="index.php/Home/Huiyuan/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
    <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
		  <thead>
            <tr>
            <th colspan="2" height="30"></th>
            </tr>
        </thead>
           <tbody>
			<tr>
        <td colspan=2>
          <label for='kahao_input' class='control-label x85'>卡号:</label>
          <input type='text' id='kahao' name='kahao' data-rule='required;' size='20'   value='<?php echo ($Rs["kahao"]); ?>'  >请刷卡或是输入卡号
        </td> 
      </tr>
			<tr>
      <td>
      <label for='kahao_input' class='control-label x85'>会员密码:</label>
      <input type='password' id='mima' name='mima' data-rule="密码:required" size='20'   value='<?php echo ($Rs["mima"]); ?>'  >
      </td>
      <td>
      <label for='mima_input' class='control-label x85'>确认密码:</label><input type='password' id='mima1' name='mima1' data-rule="required;match(mima)"  size='20'   value='<?php echo ($Rs["mima1"]); ?>'  ></td></tr>
<tr><td><label for='xingming_input' class='control-label x85'>姓名:</label><input type='text' id='xingming' name='xingming' data-rule='required;' size='20'   value='<?php echo ($Rs["xingming"]); ?>'  ></td><td><label for='sex_input' class='control-label x85'>性别:</label><?php if(is_array(C("BASE_SEX"))): $i = 0; $__LIST__ = C("BASE_SEX");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sex): $mod = ($i % 2 );++$i;?><input type='radio'  name='sex' data-toggle='icheck'  data-label='<?php echo ($sex); ?>' value='<?php echo ($sex); ?>' <?php if( $sex == $Rs['sex'] ): ?>checked data-rule='checked'<?php endif; ?> ><?php endforeach; endif; else: echo "" ;endif; ?></td></tr>
<tr><td><label for='dianhua_input' class='control-label x85'>联系电话:</label><input type='text' id='dianhua' name='dianhua' data-rule='required;' size='20'   value='<?php echo ($Rs["dianhua"]); ?>'  ></td><td><label for='shengri_input' class='control-label x85'>会员生日:</label><input type='text' data-toggle='datepicker' id='shengri' name='shengri'   size='20'   value='<?php echo (substr($Rs["shengri"],0,10)); ?>'  ></td></tr>
<tr><td><label for='sfz_input' class='control-label x85'>身份证号:</label><input type='text' id='sfz' name='sfz'  size='20'   value='<?php echo ($Rs["sfz"]); ?>'  ></td><td><label for='dizhi_input' class='control-label x85'>联系地址:</label><input type='text' id='dizhi' name='dizhi'  size='20'   value='<?php echo ($Rs["dizhi"]); ?>'  ></td></tr>
<tr><td><label for='dengji_input' class='control-label x85'>会员等级:</label><select name='dengji'  data-toggle='selectpicker' ><?php $slist=M('dengji')->select(); if(is_array($slist)): $i = 0; $__LIST__ = $slist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value='<?php echo ($v["title"]); ?>' <?php if( $v["title"] == $Rs['dengji'] ): ?>selected<?php endif; ?> ><?php echo ($v["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></td><td><label for='zhuangtai_input' class='control-label x85'>会员状态:</label><select name='zhuangtai'  data-toggle='selectpicker' ><?php if(is_array(C("HUIYUAN_ZHUANGTAI"))): $i = 0; $__LIST__ = C("HUIYUAN_ZHUANGTAI");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zhuangtai): $mod = ($i % 2 );++$i;?><option value='<?php echo ($zhuangtai); ?>' <?php if( $zhuangtai == $Rs['zhuangtai'] ): ?>selected<?php endif; ?> ><?php echo ($zhuangtai); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></td></tr>
<Tr><td><label for='jifen_input' class='control-label x85'>会员积分:</label><input type='text' id='jifen' name='jifen'  size='20'   value='<?php echo ($Rs["jifen"]); ?>'  onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></td><td><label for='jine_input' class='control-label x85'>会员余额:</label><input type='text' id='jine' name='jine'  size='20'   value='<?php echo ($Rs["jine"]); ?>' onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" ></td></tr>
<tr><td colspan=2><label for='jifen_input' class='control-label x85'>赠送金额:</label><input type='text' id='song' name='song'  size='20'   value='<?php echo ($Rs["song"]); ?>' onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" ></td></tr>
<Tr><td><label for='jztime_input' class='control-label x85'>过期时间:</label><input type='text' data-toggle='datepicker' id='jztime' name='jztime'   size='20'   value='<?php echo (substr($Rs["jztime"],0,10)); ?>'  ></td><td><label for='tjr_input' class='control-label x85'>推荐人卡号:</label><input type='text' id='tjr' name='tjr'  size='20' data-toggle='lookup' data-url='index.php/Home/basic/tjr/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["tjr"]); ?>'  ></td></tr>
<tr><td><label for='juname_input' class='control-label x85'>业务员:</label><input type='text' id='juname' name='juname'  size='20' data-toggle='lookup' data-url='index.php/Home/basic/user/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juname"]); ?>'  ></td></tr>
<tr><td colspan=2><input type='hidden' id='juid' name='juid'  size='0'   value='<?php echo ($Rs["juid"]); ?>'  ></td></tr>
<tr><td colspan=2><label for='attid_input' class='control-label x85'>上传附件:</label><div style='display: inline-block; vertical-align: middle;'><IFRAME   src='index.php/Home/Public/attfile/attid/<?php echo ($attid); ?>/'  frameBorder=0 width='100%' height='30' scrolling=no ></IFRAME><input type='hidden' id='attid' name='attid'  value='<?php echo ($attid); ?>'  ><a href='index.php/Home/Public/uploads/attid/<?php echo ($attid); ?>/'   class='btn btn-green btn-sm' data-toggle='dialog' data-width='550' data-height='300' data-id='dialog-normal' data-mask='true' >已上传文件管理</a></div></td></tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>备注:</label><div style='display: inline-block; vertical-align: middle;'><textarea name='beizhu'   data-toggle='kindeditor' data-minheight='150' data-items='fontname, fontsize, |, forecolor, hilitecolor, bold, italic, underline, removeformat, |, justifyleft, justifycenter, justifyright, insertorderedlist, insertunorderedlist, |, emoticons, image, link'><?php echo ($Rs["beizhu"]); ?></textarea></div></td></tr>
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