<?php 
//添加文章列表
function addacate(){
	$arr=$_POST;
	//var_dump($arr);
	$row=insert("cb_acate",$arr);
	if($row){
		$mes="添加成功    |<a href='addacate.php'>继续添加</a>   |  <a href='acatelist.php'>返回列表</a>";
		}else{
			$mes="添加失败    |<a href='addacate.php'>重新添加</a>   |  <a href='acatelist.php'>返回列表</a>";
			}
	return $mes;
	}
//删除文章列表
function delacate($id){
	$where="id={$id}";
	$row=del("cb_acate",$where);
	if($row){
		$mes="删除成功   |  <a href='acatelist.php'>返回列表</a>";
		}else{
			$mes="删除失败    |  <a href='acatelist.php'>返回列表</a>";
			}
	return $mes;
	}
//修改文章类别
function editacate($id){
	$where="id={$id}";
	$arr=$_POST;
	$row=update("cb_acate",$arr,$where);
	if($row){
		$mes="修改成功      |  <a href='acatelist.php'>返回列表</a>";
		}else{
			$mes="修改失败      |  <a href='acatelist.php'>返回列表</a>";
			}
	return $mes;	
	}
	
//添加文章
function addarticle(){
	$arr=$_POST;
	$arr['atime']=time();
	$file=$_FILES['asnimg'];
	$path="article";
	$imgfile=uploadeone($file,$path);
	//var_dump($file);die;
	$arr['asnimg']=$imgfile['name'];
	$row=insert("cb_article",$arr);
	if($row){
		$mes="添加成功    |<a href='addarticle.php'>继续添加</a>   |  <a href='articlelist.php'>返回列表</a>";
		}else{
			if(file_exists("article/".$imgfile['name'])){
					unlink("article/".$imgfile['name']);
					}
			$mes="添加失败    |<a href='addarticle.php'>重新添加</a>   |  <a href='articlelist.php'>返回列表</a>";
			}
	return $mes;
	}
//删除文章
function delarticle($id){
	$where="id={$id}";
	$delsql="select * from cb_article where {$where}";
	$snimg=fetchone($delsql);
	//var_dump($delsql);die;
	if(file_exists("article/".$snimg['asnimg'])){
			unlink("article/".$snimg['asnimg']);
			}
	$row=del("cb_article",$where);
	if($row){
		$mes="删除成功   |  <a href='articlelist.php'>返回列表</a>";
		}else{
			$mes="删除失败    |  <a href='articlelist.php'>返回列表</a>";
			}
	return $mes;
	}
//修改文章
function editarticle($id){
	$where="id={$id}";
	$editsql="select * from cb_article where {$where}";
	$editimg=fetchone($editsql);
	$arr=$_POST;
	$arr['atime']=time();
	$path="article";
	$file=$_FILES['asnimg'];
	$imgfile=uploadeone($file,$path);
	$arr['asnimg']=$imgfile['name'];
	if($editimg['asnimg']!=$arr['asnimg']&&$arr['asnimg']){
		unlink("article/".$editimg['asnimg']);
		}
	if($editimg['asnimg']==$arr['asnimg']||!$arr['asnimg']){
		$arr['asnimg']=$editimg['asnimg'];
		}		
	$row=update("cb_article",$arr,$where);
	if($row){
		$mes="修改成功      |  <a href='articlelist.php'>返回列表</a>";
		}else{
			if(file_exists("article/".$imgfile['name'])){
					unlink("article/".$imgfile['name']);
					}
			$mes="修改失败      |  <a href='articlelist.php'>返回列表</a>";
			}
	return $mes;	
	}
