<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信友协同办公管理系统</title>

</head>

<body style="margin:0;font-size:12px">
<form action="<?php echo U('Public/upload');?>" enctype="multipart/form-data" id="login_form" method="post"> 
<input name="filename" type="file" size=10 value=""/>
<input name="attid" type="hidden"  value="<?php echo ($attid); ?>"/>
<input name="" type="submit"  value="上传"/>
<?php $num=M('files')->where('attid='.$attid)->count();if ($num>0){echo '已上传<font color=red> '.$num.' </font>文件';} ?>
</form>
</body>
</html>