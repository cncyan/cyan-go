<?php
require_once '../include.php';
$pagesize=2;
$rows=getrowbypage("cb_pcate",$pagesize);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>pcatelist</title>
<link rel="stylesheet" href="css/admin.css">
</head>

            <div class="cont">
                <div class="title">类别列表</div>
                <div class="details">
                    <div class="details_operation clearfix">
                        <div class="bui_select">
                            <input type="button" value="添&nbsp;&nbsp;加" onclick="turnadd()" class="add">
                        </div>
                      </div>  
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="20%">编号</th>
                                <th width="45%">类名</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($rows as $row):?>
                            <tr>
                                <td><input type="checkbox" id="c1" class="check">
                                <label for="c1" class="label"><?php echo $row['id'];?></label></td>
                                <td><?php echo $row['pcname'];?></td>
                                <td align="center">
                                <input type="button" value="修改" onclick="editcate(<?php echo $row['id'];?>)" class="btn">
                                <input type="button" value="删除" onclick="delcate(<?php echo $row['id'];?>)" class="btn">
                                </td>
                            </tr>
                        <?php endforeach;?>
                        <?php if($pagesize<$totalrows):?>
                            <tr>
                                <td colspan="4"><?php echo showpage($page,$totalpage);?></td>
                            </tr>
                        <?php endif;?>
                          </tbody>
                    </table>
                </div>
				</div>
                <script>
				function editcate(id){
					window.location="editpcate.php?id="+id;
					}
				function delcate(id){
					if(confirm("确定要删除吗？删除后不可恢复哦！")){
					  window.location="doproject.php?act=delpcate&id="+id;
					}
					}
                 function turnadd(){
					   window.location="addpcate.php";
					   }
                </script>
</body>
</html>
