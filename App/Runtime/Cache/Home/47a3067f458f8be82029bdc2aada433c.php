<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="index.php/Home/Ka" method="post">
	
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
	 
        <div class="bjui-searchBar" style="height:80px;line-height:80px;font-size:18px;">
            请输入卡号/联系电话：<input type="text" value="<?php echo ($_REQUEST['keys']); ?>" name="keys" class="form-control" size="20" />
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
              <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">清空查询</a>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent tableContent"><?php $rand_str=mt_rand(1000,9999); ?>
<form action="index.php/Home/Ka/chongzhi/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" name="form<?php echo ($rand_str); ?>" id="form<?php echo ($rand_str); ?>" data-toggle="validate">
<input type="hidden" name="id" value="<?php echo ($Rs["id"]); ?>">
<input type="hidden" name="kahao" value="<?php echo ($Rs["kahao"]); ?>">
<input type="hidden" name="juid" value="<?php echo ($Rs["juid"]); ?>">
<input type="hidden" name="juname" value="<?php echo ($Rs["juname"]); ?>">
<?php if(!$Rs['shopid']){echo '<Tr><Td colspan=2>对不起，没有查找该会员</td></tr>'; }else{ ?>
<table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
<tr><td><label for='shopid_input' class='control-label x85'>所属店铺:</label><?php echo (get_shop_name($Rs["shopid"])); ?></td><td><label for='kahao_input' class='control-label x85'>卡号:</label><?php echo ($Rs["kahao"]); ?></td></tr>
<tr><td><label for='xingming_input' class='control-label x85'>姓名:</label><?php echo ($Rs["xingming"]); ?></td><td><label for='sex_input' class='control-label x85'>性别:</label><?php echo ($Rs["sex"]); ?></td></tr>
<tr><td><label for='dianhua_input' class='control-label x85'>联系电话:</label><?php echo ($Rs["dianhua"]); ?></td><td><label for='dengji_input' class='control-label x85'>会员等级:</label><?php echo ($Rs["dengji"]); ?></td></tr>
<tr><td><label for='sfz_input' class='control-label x85'>身份证号:</label><?php echo ($Rs["sfz"]); ?></td><td><label for='shengri_input' class='control-label x85'>会员生日:</label><?php echo ($Rs["shengri"]); ?></td></tr>
<tr><td><label for='dizhi_input' class='control-label x85'>联系地址:</label><?php echo ($Rs["dizhi"]); ?></td><td><label for='zhuangtai_input' class='control-label x85'>会员状态:</label><?php echo ($Rs["zhuangtai"]); ?></td></tr>
<tr><td><label for='jifen_input' class='control-label x85'>会员积分:</label><?php echo ($Rs["jifen"]); ?></td><td><label for='jine_input' class='control-label x85'>会员余额:</label><?php echo ($Rs["jine"]); ?></td></tr>
<tr><td><label for='jici_input' class='control-label x85'>计次:</label><?php echo ($Rs["jici"]); ?></td><td><label for='jztime_input' class='control-label x85'>过期时间:</label><?php echo ($Rs["jztime"]); ?></td></tr>
<tr><td><label for='tjr_input' class='control-label x85'>推荐人卡号:</label><?php echo ($Rs["tjr"]); ?></td><td><label for='juname_input' class='control-label x85'>业务员:</label><?php echo ($Rs["juname"]); ?></td></tr>
<tr><td><label for='tjr_input' class='control-label x85'>办卡时间:</label><?php echo ($Rs["addtime"]); ?></td><td><label for='juname_input' class='control-label x85'>办卡人:</label><?php echo ($Rs["uname"]); ?></td></tr>
<script type="text/javascript">
 function js()
 {
 var e1=document.getElementById("xianjin<?php echo ($rand_str); ?>").value;
 var e2=document.getElementById("pos<?php echo ($rand_str); ?>").value;
 var e3=document.getElementById("song<?php echo ($rand_str); ?>").value;
 document.getElementById("jine<?php echo ($rand_str); ?>").value=parseInt(e1)+parseInt(e2)+parseInt(e3); 
 }  
 </script>
<Tr><Td colspan=2 style="font-size:20px;line-height:40px;">充值信息</td></tr>
<Tr><Td colspan=2><label  class='control-label x85'>现金金额:</label><input type='text' id='xianjin<?php echo ($rand_str); ?>' name='xianjin'  size='10' onblur="js()" value='0' onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" >元,如果用现金充值，填写此项</td></tr>
<Tr><Td colspan=2><label  class='control-label x85'>银联金额:</label><input type='text' id='pos<?php echo ($rand_str); ?>' name='pos'  size='10' onblur="js()" value='0' onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" >元 如果用银联充值，填写此项</td></tr>
<Tr><Td colspan=2><label  class='control-label x85'>赠送金额:</label><input type='text' id='song<?php echo ($rand_str); ?>' name='song'  size='10' onblur="js()" value='0'  onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')">元</td></tr>
<Tr><Td colspan=2><label  class='control-label x85'>合计充值:</label><input type='text' id='jine<?php echo ($rand_str); ?>' name='jine' readonly size='10'  value='0'  >元</td></tr>
<!--<Tr><Td><label  class='control-label x85'>备注说明:</label><input type='text' id='title' name='title'  size='20'  value=''  ></td></tr>-->
 </table><?php } ?>
 </form>
</div>
<div class="bjui-pageFooter">
    <ul>
       <li><button type="button" class="btn-close" data-icon="close">取消</button></li>
       <li><button type="submit" class="btn-default" data-icon="save">保存</button></li>
    </ul>
</div>