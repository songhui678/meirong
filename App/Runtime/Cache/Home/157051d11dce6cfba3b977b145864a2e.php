<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="index.php/Home/Sale" method="post">
	
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
<form action="index.php/Home/Sale/shangpin/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" name="form<?php echo ($rand_str); ?>" id="form<?php echo ($rand_str); ?>" data-toggle="validate">
<input type="hidden" name="hid" value="<?php echo ($Rs["id"]); ?>">
<input type="hidden" name="kahao" value="<?php echo ($Rs["kahao"]); ?>">
<input type="hidden" name="xingming" value="<?php echo ($Rs["xingming"]); ?>">
<?php if(!$Rs['shopid']){echo '<Tr><Td colspan=2>对不起，没有查找该会员</td></tr>'; }else{ ?>
<table class="table table-bordered table-hover table-striped" >
<tr><td><label for='shopid_input' class='control-label x85'>所属店铺:</label><?php echo (get_shop_name($Rs["shopid"])); ?></td><td><label for='kahao_input' class='control-label x85'>卡号:</label><?php echo ($Rs["kahao"]); ?></td></tr>
<tr><td><label for='xingming_input' class='control-label x85'>姓名:</label><?php echo ($Rs["xingming"]); ?></td><td><label for='sex_input' class='control-label x85'>性别:</label><?php echo ($Rs["sex"]); ?></td></tr>
<tr><td><label for='dianhua_input' class='control-label x85'>联系电话:</label><?php echo ($Rs["dianhua"]); ?></td><td><label for='dengji_input' class='control-label x85'>会员等级:</label><?php echo ($Rs["dengji"]); ?></td></tr>
<tr><td><label for='dizhi_input' class='control-label x85'>联系地址:</label><?php echo ($Rs["dizhi"]); ?></td><td><label for='zhuangtai_input' class='control-label x85'>会员状态:</label><?php echo ($Rs["zhuangtai"]); ?></td></tr>
<tr><td><label for='jifen_input' class='control-label x85'>会员积分:</label><?php echo ($Rs["jifen"]); ?></td><td><label for='jine_input' class='control-label x85'>会员余额:</label><?php echo ($Rs["jine"]); ?></td></tr>
<tr><td><label for='jici_input' class='control-label x85'>计次:</label><?php echo ($Rs["jici"]); ?></td><td><label for='jztime_input' class='control-label x85'>过期时间:</label><?php echo ($Rs["jztime"]); ?></td></tr>
<tr><td><label for='tjr_input' class='control-label x85'>办卡时间:</label><?php echo ($Rs["addtime"]); ?></td><td><label for='juname_input' class='control-label x85'>办卡人:</label><?php echo ($Rs["uname"]); ?></td></tr>

<Tr><Td colspan=2 style="font-size:20px;line-height:40px;text-align:center">商品消费</td></tr>
</table>
<?php $zhekou=M('dengji')->where(array('title'=>$Rs['dengji']))->getField('zhekou'); $bili=M('dengji')->where(array('title'=>$Rs['dengji']))->getField('bili'); ?>
<script type="text/javascript">
 function js<?php echo ($rand_str); ?>(a)
 {
 document.getElementById("ssxiaoji"+a).value=document.getElementById("num"+a).value*document.getElementById("index["+a+"].zjiage").value;
 document.getElementById("jifen"+a).value=document.getElementById("ssxiaoji"+a).value*<?php echo ($bili); ?>; 
 var a1=document.getElementById("num"+a).value;
 var a2=document.getElementById("index["+a+"].kucun").value;
 if(parseFloat(a1)>parseFloat(a2)){
  document.getElementById("num"+a).value=document.getElementById("index["+a+"].kucun").value;
 }
 var count = 0;
                // 遍历所有文本框
                var list = document.getElementsByTagName("input");
                for(var i = 0; i < list.length; i++) {
                    var name = list[i].getAttribute("name");
                    // 忽略不是xiaoji开头的
                    if (!/^ssxiaoji/.test(name)) continue;
                    var num = parseFloat(list[i].value);
                    // 如果不是数字则忽略
                    if (isNaN(num)) continue;
                    count += num;
                }
  document.getElementById("jine<?php echo ($rand_str); ?>").value = count;
  return js1<?php echo ($rand_str); ?>();
 return js1<?php echo ($rand_str); ?>();
 } 
 function js1<?php echo ($rand_str); ?>(){
 var e0=document.getElementById("yue<?php echo ($rand_str); ?>").value;
 var e1=document.getElementById("xianjin<?php echo ($rand_str); ?>").value;
 var e2=document.getElementById("pos<?php echo ($rand_str); ?>").value;
 var e3=document.getElementById("shishou<?php echo ($rand_str); ?>").value;
 var e4=document.getElementById("jine<?php echo ($rand_str); ?>").value;
 var e5=document.getElementById("kayue<?php echo ($rand_str); ?>").value;
 var e6=document.getElementById("jian<?php echo ($rand_str); ?>").value;
 if(parseFloat(e5)>=parseFloat(e4)){
 document.getElementById("yue<?php echo ($rand_str); ?>").value=document.getElementById("jine<?php echo ($rand_str); ?>").value;
 }else{
 document.getElementById("yue<?php echo ($rand_str); ?>").value=document.getElementById("kayue<?php echo ($rand_str); ?>").value;
 }
 document.getElementById("shishou<?php echo ($rand_str); ?>").value=parseFloat(e0)+parseFloat(e1)+parseFloat(e2)+parseFloat(e6); 
 document.getElementById("zhaoling<?php echo ($rand_str); ?>").value=parseFloat(e3)-parseFloat(e4);
 }
 </script>
<table class="table table-bordered table-hover table-striped" >
<Tr><Td width="30%">
<Table width="100%">
<Tr><Td><label  class='control-label x85'>应付金额:</label><input type='text' id='jine<?php echo ($rand_str); ?>' name='jine' readonly size='10'  value='0'  >元<input type="hidden" id="kayue<?php echo ($rand_str); ?>" name="kayue" value="<?php echo ($Rs["jine"]); ?>"></td></tr>
<Tr><Td><label  class='control-label x85'>优惠抹零:</label><input type='text' id='jian<?php echo ($rand_str); ?>' name='jian'  size='10' onblur="js1<?php echo ($rand_str); ?>()" onchange="js1<?php echo ($rand_str); ?>()" value='0'   data-rule='required;number' >元  如果使用优惠券等，填写此项</td></tr>
<Tr><Td><label  class='control-label x85'>余额支付:</label><input type='text' id='yue<?php echo ($rand_str); ?>' name='yue'  size='10' onblur="js1<?php echo ($rand_str); ?>()" onchange="js1<?php echo ($rand_str); ?>()" value='0' data-rule='required;number' >元,如果用余额结算，填写此项</td></tr>
<Tr><Td><label  class='control-label x85'>现金支付:</label><input type='text' id='xianjin<?php echo ($rand_str); ?>' name='xianjin'  size='10'onblur="js1<?php echo ($rand_str); ?>()" onchange="js1<?php echo ($rand_str); ?>()"  value='0' data-rule='required;number' >元,如果用现金结算，填写此项</td></tr>
<Tr><Td><label  class='control-label x85'>银联支付:</label><input type='text' id='pos<?php echo ($rand_str); ?>' name='pos'  size='10' onblur="js1<?php echo ($rand_str); ?>()" onchange="js1<?php echo ($rand_str); ?>()"  value='0' data-rule='required;number' >元 如果用银联结算，填写此项</td></tr>
<Tr><Td><label  class='control-label x85'>实际收款:</label><input type='text' id='shishou<?php echo ($rand_str); ?>' name='shishou' onblur="js1<?php echo ($rand_str); ?>()" onchange="js1<?php echo ($rand_str); ?>()"  readonly size='10'  value='0' >元</td></tr>
<Tr><Td><label  class='control-label x85'>找零金额:</label><input type='text' id='zhaoling<?php echo ($rand_str); ?>' name='zhaoling' readonly size='10'  value='0'  >元</td></tr>
<!--<Tr><Td><label  class='control-label x85'>备注说明:</label><input type='text' id='title' name='title'  size='20'  value=''  ></td></tr>-->
<Tr><Td><label  class='control-label x85'>是否挂单:</label><input type='radio'  name='guadan'  checked  data-toggle='icheck'  data-label='马上结算' value='0'  >  &nbsp;&nbsp;<input type='radio'  name='guadan'   data-toggle='icheck'  data-label='暂不结算，挂单' value='1'  ></td></tr>
</table>
</td>

<td width="70%" valign="top">
<table class="table table-bordered table-hover table-striped"   data-toggle="tabledit">
 <thead>
                    <tr> 
                        <th title="序号" ><input type="text"  size="5" value="#index#" onblur="js('#index#')"  placeholder="序号"></th>
                        <th title="商品编号"><input type="text" name="xbianhao[#index#]" id="index[#index#].bianhao"  type="text"  value=""  onblur="js<?php echo ($rand_str); ?>('#index#')" size="10" data-toggle="lookup" data-url='index.php/Home/Basic/sale/zhekou/<?php echo ($zhekou); ?>/navTabId/<?php echo CONTROLLER_NAME;?>' data-group="index[#index#]" ></th>
                        <th title="商品名称"><input type="text" name="xtitle[#index#]" id="index[#index#].title" type="text"  value="" size="10"  onblur="js<?php echo ($rand_str); ?>('#index#')"  ></th>
						<th title="销售单价"><input type="text" name="xjiage[#index#]"  id="index[#index#].xjiage"  onblur="js<?php echo ($rand_str); ?>('#index#')" size="10" value=""></th>
						<th title="折后单价"><input type="text" name="zjiage[#index#]"  id="index[#index#].zjiage"   onblur="js<?php echo ($rand_str); ?>('#index#')" size="10" value=""></th>
						<th title="数量"><input type="text" name="xshuliang[#index#]" size="10" id="num#index#"  onblur="js<?php echo ($rand_str); ?>('#index#')" value="0" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><input type="hidden" name="xkucun[#index#]"  id="index[#index#].kucun"  ></th>
						<th title="小计"><input type="text" name="ssxiaoji[#index#]"  id="ssxiaoji#index#"  onblur="js<?php echo ($rand_str); ?>('#index#')" size="10" value=""></th>
						<th title="获得积分"><input type="text" name="jifen[#index#]"  id="jifen#index#" size="10" value=""  onblur="js<?php echo ($rand_str); ?>('#index#')"></th>
						<th title="提成员工"><input type="hidden" name="juid[#index#]" id="index[#index#].juid"  size="10" value=""  onblur="js<?php echo ($rand_str); ?>('#index#')"><input type="text" name="juname[#index#]" id="index[#index#].juname" size="10"  onblur="js<?php echo ($rand_str); ?>('#index#')" value=""  data-toggle="lookup" data-url='index.php/Home/Basic/user/navTabId/<?php echo CONTROLLER_NAME;?>' data-group="index[#index#]"></th>
						<th title="" data-addtool="true" width="50">
                            <a href="index.php/Home/public/delok" class="btn btn-red row-del" data-confirm-msg="确定要删除该行信息吗？">删</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
			  
                </tbody>
</table>
</td></tr>
</table>
<?php } ?>
 </form>
</div>
<div class="bjui-pageFooter">
    <ul>
       <li><button type="button" class="btn-close" data-icon="close">取消</button></li>
       <li><button type="submit" class="btn-default" data-icon="save">保存</button></li>
    </ul>
</div>