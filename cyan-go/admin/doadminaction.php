<?php
require_once '../include.php';
$act=$_REQUEST['act'];
$id=$_REQUEST['id'];
if($act=="addadmin"){
	$mes=addmin();
	}else if($act=="deladmin"){
		$mes=deladmin($id);
		}else if($act=="editadmin"){
			$mes=editadmin($id);
			}else if($act=="logout"){
				$mes=logout();
				}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>doadmin</title>
<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<div class="warning_message">
<?php
if($mes){
	echo $mes;
	}
?>
</div>
</body>
</html>