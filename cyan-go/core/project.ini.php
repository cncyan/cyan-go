<?php  
//添加项目类别
function addpcate(){
	$arr=$_POST;
	$row=insert("cb_pcate",$arr);
	if($row){
		$mes="添加成功   |<a href='addpcate.php'>继续添加</a>     |<a href='pcatelist.php'>返回列表</a>";
		}else{
			$mes="添加失败   |<a href='addpcate.php'>重新添加</a>     |<a href='pcatelist.php'>返回列表</a>";
			}
	return $mes;
	}
//删除项目类别
function delpcate($id){
	$where="id={$id}";
	$row=del("cb_pcate",$where);
	if($row){
		$mes="删除成功    |<a href='pcatelist.php'>返回列表</a>";
		}else{
			$mes="删除失败     |<a href='pcatelist.php'>返回列表</a>";
			}
	return $mes;
	}
//修改项目类别
function editpcate($id){
	$where="id={$id}";
	$arr=$_POST;
	$row=update("cb_pcate",$arr,$where);
	if($row){
		$mes="修改成功    |<a href='pcatelist.php'>返回列表</a>";
		}else{
			$mes="修改失败     |<a href='pcatelist.php'>返回列表</a>";
			}
	return $mes;
	}
//添加项目
function addproject(){
	$arr=$_POST;
	$arr['ptime']=time();
	$path="project";
	$file=$_FILES['snimg'];
	$imgfile=uploadeone($file,$path);
	$arr['snimg']=$imgfile['name'];
	$row=insert("cb_project",$arr);
	if($row){
		$mes="添加成功    |<a href='addproject.php'>继续添加</a>   |  <a href='projectlist.php'>返回列表</a>";
		}else{
			if(file_exists("project/".$imgfile['name'])){
					unlink("project/".$imgfile['name']);
					}
			$mes="添加失败    |<a href='addproject.php'>重新添加</a>   |  <a href='projectlist.php'>返回列表</a>";
			}
	return $mes;
	}
//删除项目
function delproject($id){
	$where="id={$id}";
	$delsql="select * from cb_project where {$where}";
	$snimg=fetchone($delsql);
	//var_dump($delsql);die;
	if(file_exists("project/".$snimg['snimg'])){
			unlink("project/".$snimg['snimg']);
			}
	$row=del("cb_project",$where);
	if($row){
		$mes="删除成功   |  <a href='projectlist.php'>返回列表</a>";
		}else{
			$mes="删除失败    |  <a href='projectlist.php'>返回列表</a>";
			}
	return $mes;
	}
//修改项目
function editproject($id){
	$where="id={$id}";
	$editsql="select * from cb_project where {$where}";
	$editimg=fetchone($editsql);
	$arr=$_POST;
	$arr['ptime']=time();
	$path="project";
	$file=$_FILES['snimg'];
	$imgfile=uploadeone($file,$path);
	$arr['snimg']=$imgfile['name'];
	//var_dump($arr['snimg']);die;
	if($editimg['snimg']!=$arr['snimg']&&$arr['snimg']){
		unlink("project/".$imgfile['name']);
		}
	if($editimg['snimg']==$arr['snimg']||!$arr['snimg']){
		$arr['snimg']=$editimg['snimg'];
		}
	$row=update("cb_project",$arr,$where);
	if($row){
		$mes="修改成功      |  <a href='projectlist.php'>返回列表</a>";
		}else{
			if(file_exists("project/".$imgfile['name'])){
					unlink("project/".$imgfile['name']);
					}
			$mes="修改失败      |  <a href='projectlist.php'>返回列表</a>";
			}
	return $mes;	
	}
