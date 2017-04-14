<?php
require_once 'include.php';
@$keywords=$_REQUEST['keywords']?$_REQUEST['keywords']:null;
$where=$keywords?"where cb_project.pname like '%{$keywords}%'":null;
$pagesize=2;
$rows=getrowbypage("cb_project",$pagesize,$where);
if(!$rows){
	echo "<script>window.location='cyanproject.php';</script>";
	echo "<script>alert('无此相关文章!');</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>乔超楠|项目</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<header id="com_head">
    <div class="com_top">
        <div class="com_logo">
            <img src="image/logo.jpg" alt="my logo">
            <p>
                Cyan<br>
                <span>坚持,你可以做到</span>
            </p>

        </div>
        <nav>
            <ul>
                 <li><a href="index.php">首页</a> </li>
                 <li><a href="cyanarticle.php">文章</a> </li>
                 <li><a href="cyanproject.php">项目</a> </li>
                 <li><a href="cyantalking.php">留言吧</a> </li>
            </ul>
        </nav>
    </div>
    <div class="com_search">
        <div class="com_form" method="post" action="#">
            <input type="text" name="com_search" id="projectkey" placeholder="请输入关键字后回车">
            <button id="projectsearch" class="coms_btn">搜索</button>
        </div>
    </div>
</header>

<section id="cp_main">
    <div class="cp_main_left">
        <ul>
        <?php foreach($rows as $row):?>
            <li>
                <div class="time"><p><?php echo date("d",$row['ptime']);?></p><span><?php echo date("Y.M",$row['ptime']);?></span></div>
                <article>
                    <img src="admin/project/<?php echo $row['snimg']?>" alt="jlsdfj">
                    <a href="#"><h3><?php echo $row['pname'];?></h3></a>
                    <p><?php echo $row['pdesc']?></p>
                </article>
            </li>
         <?php endforeach;?>
        </ul>
        <?php if($pagesize<$totalrows):?>
        <div class="pagee">
            <ul class="pageshow">
                <?php echo showpage($page,$totalpage);?>
            </ul>
        </div>
        <?php endif;?>
    </div>
    <?php include"pright.php"?>
</section>


<?php include"foot.php";?>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/func.js"></script>
</body>
</html>