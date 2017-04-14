<?php
/*require_once '../include.php';
$sql="select * from cyan_admin";
$totalrows=getresultnum($sql);
$pagesize=1;
$totalpage=ceil($totalrows/$pagesize);
$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
if($page<1||$page==null||!is_numeric($page)){
	$page=1;
	}
if($page>$totalpage){
	$page=$totalpage;
	}
$offset=($page-1)*$pagesize;
$sql="select * from cyan_admin limit {$offset},{$pagesize}";
$rows=fetchall($sql);
foreach($rows as $row){
	echo "<hr/>";
	echo "管理员编号：".$row['id'],"<br/>";
	echo "管理员名称：".$row['username'],"<hr/>";
	}
	*/
function getrowbypage($table,$pagesize,$where=null){
	global $page,$totalrows,$totalpage;
	$where=$where?$where:null;
	$sql="select * from {$table} {$where}";
	$totalrows=getrownum($sql);
	$totalpage=ceil($totalrows/$pagesize);
	@$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;
	if($page<1||$page==null||!is_numeric($page)){
		$page=1;
		}
	if($page>$totalpage){
		$page=$totalpage;
		}
	$offset=($page-1)*$pagesize;
	$sql1="select * from {$table} {$where} limit {$offset},{$pagesize}";
	$rows=fetchall($sql1);
	return $rows;
	}
function showpage($page,$totalpage,$where=null,$sep="&nbsp;"){
$where=($where==null)?null:"&".$where;
$url=$_SERVER['PHP_SELF'];
$index=($page==1)?" <span>首页</span> ":"<a href='{$url}?page=1{$where}'> <span>首页</span> </a>";
$last=($page==$totalpage)?"<span> 尾页 </span>":"<a href='{$url}?page={$totalpage}{$where}'> <span>尾页<span> </a>";
$prev=($page==1)?" <span>上一页 </span>":"<a href='{$url}?page=".($page-1)."{$where}'> <span>上一页</span> </a>";
$next=($page==$totalpage)?"<span> 下一页 </span>":"<a href='{$url}?page=".($page+1)."{$where}'> <span>下一页</span> </a>";
$str="<span>总共<b>{$totalpage}</b>页/当前是第<b>{$page}</b>页 </span> ";
$p=null;
for($i=1;$i<=$totalpage;$i++){
	if($page==$i){
		$p.="<span> [{$i}]</span> ";
		}else{
			$p.="<a href='{$url}?page={$i}{$where}'><span> [{$i}] </span></a>";
			}
	}
	$pagestr=$str.$sep.$index.$sep.$prev.$sep.$p.$sep.$next.$sep.$last;
	return $pagestr;
}