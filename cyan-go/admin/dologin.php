<?php
require_once '../include.php';
//print_r(md5(cyan));
$username=$_POST['username'];
$pwd=md5($_POST['password']);
$sql="select * from `cb_admin` where `username`='{$username}' and `password`='{$pwd}'";
print_r($sql);
$row=fetchone($sql);
if($row){
	$_SESSION['adminname']=$row['username'];
	$_SESSION['adminid']=$row['id'];
	echo "<script>alert('登录成功');</script>";
	echo "<script>window.location='index.php';</script>";
	}else{
		echo "<script>alert('账户或密码错误');</script>";
	    echo "<script>window.location='login.php';</script>";
		}