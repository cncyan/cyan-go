<?php
require_once '../include.php';
$id=$_REQUEST['id'];
$where="id=".$id;
$sql="select * from cb_admin where ".$where;
$row=fetchone($sql);
var_dump($row);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>editadmin</title>
<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<div class="cont">
       <div class="title">添加管理员</div>
                <div class="details">
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <tbody>
                        <form method="post" action="doadminaction.php?act=editadmin&id=<?php echo $row['id']?>">
                        <tr>
                        <td><label>姓名：</label></td>
                        <td><input type="text" name="username"  placeholder="请输入账户"/></td>
                        </tr>
                        <tr>
                        <td><label>密码：</label></td>
                        <td><input type="password" name="password"  placeholder="请输入密码"/></td>
                        </tr>
                        <tr>
                        <td><label>邮箱：</label></td>
                        <td><input type="email" name="email"  placeholder="请输入邮箱"/></td>
                        </tr>
                        <tr>
                        <td colspan="2" style="text-align:center;">
                        <input type="submit"value="提交" style="cursor:pointer;" />
                        </td>
                        </tr>
                        </form>
                        </tbody>
                    </table>
                </div>
				</div>
</body>
</html>