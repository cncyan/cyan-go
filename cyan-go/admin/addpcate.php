<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>pcate</title>
<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<div class="cont">
       <div class="title">添加项目类别</div>
                <div class="details">
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <tbody>
                        <form method="post" action="doproject.php?act=addpcate">
                        <tr>
                        <td><label>类别名称：</label></td>
                        <td><input type="text" name="pcname"  placeholder="请输入类名"/></td>
                        </tr>
                        <td colspan="2" style="text-align:center;">
                        <input type="submit"value="添加类别" style="cursor:pointer;" />
                        </td>
                        </tr>
                        </form>
                        </tbody>
                    </table>
                </div>
				</div>
</body>
</html>