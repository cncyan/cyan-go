<?php
require_once '../include.php';
$sql="select * from cb_acate";
$acates=fetchall($sql);
$id=$_REQUEST['id'];
$sql1="select * from cb_article where id={$id}";
$row=fetchone($sql1);
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
<form action="doarticle.php?act=editarticle&id=<?php echo $row['id']?>" method="post" enctype="multipart/form-data">
<table width="70%"  border="1" cellpadding="5" cellspacing="0" bgcolor="#cccccc">
	<tr>
		<td align="right">文题</td>
		<td><input type="text" name="aname" value="<?php echo $row['aname']?>"/></td>
	</tr>
	<tr>
		<td align="right">类别</td>
		<td>
		<select name="aid">
               <?php foreach($acates as $acate):?>
                <option value="<?php echo $acate['id'];?>"><?php echo $acate['acname']?></option>
               <?php endforeach;?>
        </select>
		</td>
	</tr>
    <tr>
        <td align="right">图片</td>
        <td><input type="file" name="asnimg" /></td>
    </tr>
	<tr>
		<td align="right">简介</td>
		<td><input type="text" name="asn"   value="<?php echo $row['asn']?>"/></td>
	</tr>
	<tr>
		<td align="right">内容</td>
		<td>
			<textarea name="adesc" id="editor_id" style="width:100%;height:300px;"><?php echo $row['adesc']?></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit"  value="提交修改"/></td>
	</tr>
</table>
</form>
</body>
</html>