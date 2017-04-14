<?php
require_once '../include.php';
$sql="select * from cb_pcate";
$acates=fetchall($sql);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>addarticle</title>
<link href="css/main.css"  rel="stylesheet"  type="text/css" media="all" />
<script type="text/javascript" charset="utf-8" src="plugins/kindeditor/kindeditor.js"></script>
<script type="text/javascript" charset="utf-8" src="plugins/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="js/jquery-1.6.4.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
</script>
</head>
<body>
<h3>添加文章</h3>
<form action="doproject.php?act=addproject" method="post" enctype="multipart/form-data">
<table width="70%"  border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td align="right">文题</td>
		<td><input type="text" name="pname"  placeholder="请输入文章题目"/></td>
	</tr>
	<tr>
		<td align="right">类别</td>
		<td>
		<select name="pid">
               <?php foreach($acates as $acate):?>
                <option value="<?php echo $acate['id'];?>"><?php echo $acate['pcname']?></option>
               <?php endforeach;?>
        </select>
		</td>
	</tr>
    <tr>
		<td align="right">商品图像</td>
		<td>
			<input type="file" name="snimg">
		</td>
	</tr>
	<tr>
		<td align="right">简介</td>
		<td><input type="text" name="psn"  placeholder="请输入文章简介"/></td>
	</tr>
	<tr>
		<td align="right">内容</td>
		<td>
			<textarea name="pdesc" id="editor_id" style="width:100%;height:300px;"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit"  value="发布文章"/></td>
	</tr>
</table>
</form>
</body>
</html>