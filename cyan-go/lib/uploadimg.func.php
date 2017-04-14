<?php
//文件上传原理
function getext($filename){
	$tep_name=explode(".",$filename);
	return strtolower(end($tep_name));
	}
function uploadeone($file,$path="upload",$allowtype=array("jpg","png","gif","txt"),$maxsize=1024000,$imgflag=false){
	if(!$file){
		return;
	}
	$fileinfo=$file;
	if($fileinfo['error']==0){
		if(!file_exists($path)){                //如果文件夹不存在先创建文件夹
				mkdir($path,0777,true);
				}		
		$ext=getext($fileinfo['name']);
		if(!in_array($ext,$allowtype)){
			exit("文件格式错误");
			}
		if($fileinfo['size']>$maxsize){
			exit("文件过大");
			}
		$filename=$fileinfo['name'];
		//判断是不是通过http post上传的
		if(is_uploaded_file($fileinfo['tmp_name'])){                                          
			$destination=$path.'/'.$filename;
			 if(move_uploaded_file($fileinfo['tmp_name'],$destination)){
				 $fileinfo['name']=$filename;		 
				 }else{
					 exit("文件移动失败");
					 }
			}else{
				exit("文件非HTTP POST方式上传");
				}
		}else{
			switch($fileinfo['error']){
				case(1):exit("文件超出配置要求大小");break;  //UPLOAD_ERR_INI_SIZE
				case(2):exit("文件超出表单要求大小");break;  //UPLOAD_ERR_FORM_SIZE
				case(3):exit("文件超出部分被上传");break;    //UPLOAD_ERR_PARTICAL
				//case(4):exit("没有文件被上传");break;  //UPLOAD_ERR_NO_SIZE
				//case(6):exit("没有找到临时文件夹");break;  //UPLOAD_ERR_NO_TMP_DIR
				case(7):exit("文件不可写");break;    //UPLOAD_ERR_CANT_WRITE
				case(8):exit("由于php的扩展程序中断上传");break;    //UPLOAD_ERR_EXTENTION
				}
			}
		return $fileinfo;
	}