<?php 
//验证是否登录
function checklogin(){
	if(@$_SESSION['adminid']==null&&@$_SESSION['adminname']==null){
			echo "<script>alert('请先登录');</script>";
	        echo "<script>window.location='login.php';</script>";
			}
	}
//添加管理员
function addmin(){
	$arr=$_POST;
	$arr['password']=md5($_POST['password']);
	if(insert("cb_admin",$arr)){
		$mes="添加成功， |  <a href='addmin.php'>继续添加</a>  |  <a href='adminlist.php'>查看管理员列表</a>  |";
		}else{
			$mes="添加失败， |  <a href='addmin.php'>重新添加</a>  |  <a href='adminlist.php'>查看管理员列表</a>  |";
			}
	return $mes;
	}
//获取所有管理员
function fetchalladmin(){
	$sql="select * from cb_admin";
	$rows=fetchall($sql);
	return $rows;
	}
//删除管理员
function deladmin($id){
	$where="id=".$id;
	$res=del("cb_admin",$where);
	if($res){
		$mes="删除成功     |  <a href='adminlist.php'>返回管理员列表</a>";
		}else{
			$mes="删除失败     |  <a href='adminlist.php'>返回管理员列表</a>";
			}
	return $mes;
	}
//修改管理员
function editadmin($id){
	$arr=$_POST;
	$arr['password']=md5($_POST['password']);
	if(update("cb_admin",$arr,"id=".$id)){
		$mes="更新成功， |  <a href='addmin.php'>继续添加</a>  |  <a href='adminlist.php'>查看管理员列表</a>  |";
		}else{
			$mes="更新失败， |  <a href='addmin.php'>重新添加</a>  |  <a href='adminlist.php'>查看管理员列表</a>  |";
			}
	return $mes;
	}
//管理员退出
function logout(){
	$_SESSION=array();
	if(isset($_COOKIE[session_name()])){
		setcookie(session_name(),"",time()-1);
	}
	if(isset($_COOKIE["adminid"])){
		setcookie("adminname","",time()-1);
	}
	if(isset($_COOKIE[session_name()])){
		setcookie("adminname","",time()-1);
	}
	session_destroy();
	header('location:login.php');
	}
