<?php 
require_once '../include.php';
$pagesize=2;
@$keywords=$_REQUEST['keywords']?$_REQUEST['keywords']:null;
$where=$keywords?"where cb_project.pname like '%{$keywords}%'":null;
$rows=getrowbypage("cb_project",$pagesize,$where);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>project</title>
<link rel="stylesheet" href="css/admin.css">
<link rel="stylesheet" href="js/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
<script src="js/jquery-ui/js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="js/jquery-ui/js/jquery-ui-1.10.4.custom.min.js"></script>
</head>

<body>
<div id="showdetail"  style="display:none;">
</div>
<div class="details">
                    <div class="details_operation clearfix">
                        <div class="bui_select">
                            <input type="button" value="添&nbsp;&nbsp;加" class="add" onclick="addproject()">
                        </div>
                        <div class="fr">
                            <div class="text">
                                <span>搜索</span>
                                <input type="text" value="" class="search"  id="search" onkeypress="search()" >
                            </div>
                        </div>
                    </div>
                   <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="10%">编号</th>
                                <th width="20%">文章名称</th>
                                <th width="10%">文章分类</th>
                                <th width="20%">文章简介</th>
                                <th width="10%">发布时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($rows as $row):?>
                              <tr>
                                <td><input type="checkbox" id="c" class="check">
                                   <label for="c1" class="label"><?php echo $row['id'];?></label>
                                </td>
                                <td><?php echo $row['pname'];?></td>
                                <td><?php 
								$sql="select * from cb_pcate where id={$row['pid']}";
								$cate=fetchone($sql);
								echo $cate['pcname'];
								?></td>
                                <td><?php echo $row['psn'];?></td>
                                <td><?php echo date("Y-m-d",$row['ptime']);?></td>
                                <td align="center">
          <input type="button" value="详情" class="btn" onClick="showdetail(<?php echo $row['id'];?>,'<?php echo $row['pname'];?>')">
                                    <input type="button" value="修改" class="btn" onclick="editproject(<?php echo $row['id'];?>)">
                                    <input type="button" value="删除" class="btn"onclick="delproject(<?php echo $row['id'];?>)">
                                </td>
                                <td align="center">
                                     <div id="showdetail<?php echo $row['id'];?>" style="display:none;">
                                         <table class="table" cellspacing="0" cellpadding="0">
                                                <tr>
                                                 <td width="20%" align="right">文章名称</td>
                                                 <td><?php echo $row['pname'];?></td>
                                                 </tr>
                                                  <tr>
                                                  <td width="20%"  align="right">文章类别</td>
                                                  <td><?php 
								                    $sql="select * from cb_pcate where id={$row['pid']}";
								                    $cate=fetchone($sql);
								                    echo $cate['pcname'];
								                    ?></td>
                                                   </tr>
                                                   <tr>
                                                   <td width="20%"  align="right">文章简介</td>
                                                   <td><?php echo $row['psn'];?></td>
                                                   </tr>
                                                   <tr>
                                                    <td width="20%"  align="right">发布时间</td>
                                                   <td><?php echo date("Y-m-d",$row['ptime']);?></td>
                                                   <tr>
                                                   <td width="20%"  align="right">图片</td>
                                                   <td>
                                                <img width="100" height="100" src="project/<?php echo $row['snimg'];?>">&nbsp;
                                                   </td>
                                                   </tr>
                                               </table>
                                               <span style="display:block;width:80%;">
                                                    文章描述<br/>
                                                    <?php echo $row['pdesc'];?>                                          
                                               </span>    
                                          </div>                            
                                </td>
                            </tr>
                            <?php endforeach;?>
                            <?php if($pagesize<$totalrows):?>
                             <tr>
                            	<td colspan="7"><?php echo showpage($page,$totalpage)?></td>
                            </tr>
                            <?php endif;?>
                         </tbody>
                    </table>
</div>


<script type="text/javascript">
function showdetail(id,t){
	$("#showdetail"+id).dialog({
		  height:"auto",
	      width: "auto",
	      position: {my: "center", at: "center",  collision:"fit"},
	      modal:false,//是否模式对话框
	      draggable:true,//是否允许拖拽
	      resizable:true,//是否允许拖动
	      title:"商品名称："+t,//对话框标题
	      show:"slide",
	      hide:"slide"
	});
}
	function addproject(){
		window.location='addproject.php';
	}
	function editproject(id){
		window.location='editproject.php?id='+id;
	}
	function delproject(id){
		if(window.confirm("您确认要删除嘛？且删且珍惜!")){
			window.location="doproject.php?act=delproject&id="+id;
		}
	}
	function search(){
		if(event.keyCode==13){
			var val=$('#search').val();
			window.location="projectlist.php?keywords="+val;
			}
		}
</script>
</body>
</html>