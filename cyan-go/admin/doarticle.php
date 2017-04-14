<?php
require_once '../include.php';
$act=$_REQUEST['act'];
@$id=$_REQUEST['id'];
if($act=="addacate"){
	$mes=addacate();
	}else if($act=="delacate"){
		$mes=delacate($id);
		}else if($act=="editacate"){
			$mes=editacate($id);
			}else if($act=="addarticle"){
				$mes=addarticle();
				}else if($act=="delarticle"){
					$mes=delarticle($id);
					}else if($act=="editarticle"){
						$mes=editarticle($id);
						}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
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