<?php
error_reporting(0);
//数据库连接
function connect(){
	global $link;
	$link=mysqli_connect(DB_HOST,DB_USER,DB_PWD)or die("the database's linking is wrong");
	mysqli_query($link,"set names 'utf8'");
	mysqli_set_charset($link,DB_CHARSET);
	mysqli_select_db($link,DB_DBNAME);
	return $link;
	}
//数据插入
function insert($table,$array){
	global $link;
	$keys=join(',',array_keys($array));
	$vals="'".join("','",array_values($array))."'";
	$sql="insert {$table} ({$keys}) values({$vals})";
	//print_r($sql);die;
	$result=mysqli_query(connect(),$sql);
	return mysqli_insert_id($link);
	}
//数据库更新
function update($table,$array,$where=null){
	$str=null;
	foreach($array as $key=>$val){
		if($str==null){
			$sep=" ";
			}else{
				$sep=",";
				}
			$str=$str.$sep.$key."='".$val."' ";
		}
		$sql="update {$table} set {$str}".($where==null?null:"where ".$where);
		$result=mysqli_query(connect(),$sql);
		return $result;
	}
//数据库删除
function del($table,$where){
	$where=$where==null?null:"where ".$where;
	$sql="delete from {$table} {$where}";
	$result=mysqli_query(connect(),$sql);
	return $result;
	}
//查询单条数据
function fetchone($sql){
	$result=mysqli_query(connect(),$sql);
	$row=mysqli_fetch_assoc($result);
	return $row;
	}
//多条数组查询
function fetchall($sql){
	$result=mysqli_query(connect(),$sql);
	while($row=mysqli_fetch_assoc($result)){
		$rows[]=$row;
	}
	return $rows;
}
//查询到数据条数
function getrownum($sql){
	$result=mysqli_query(connect(),$sql);
	$rows=mysqli_num_rows($result);
	return $rows;
	}