<?php
require_once '../include.php';
$act=$_REQUEST['act']?$_REQUEST['act']:null;
@$id=$_REQUEST['id']?$_REQUEST['id']:null;	
if($act=='addpcate'){
	$mes=addpcate();
	}else if($act=='delpcate'){
		$mes=delpcate($id);
		}else if($act=='editpcate'){
			$mes=editpcate($id);
			}else if($act=='addproject'){
				$mes=addproject();
				}else if($act=='delproject'){
					$mes=delproject($id);
					}else if($act=='editproject'){
						$mes=editproject($id);
						}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>dopro</title>
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