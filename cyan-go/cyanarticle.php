<?php
require_once 'include.php';
@$keywords=$_REQUEST['keywords']?$_REQUEST['keywords']:null;
$where=$keywords?"where cb_article.aname like '%{$keywords}%'":null;
$pagesize=2;
$rows=getrowbypage("cb_article",$pagesize,$where);
if(!$rows){
	echo "<script>window.location='cyanarticle.php';</script>";
	echo "<script>alert('无此相关文章!');</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>乔超楠|文章</title>
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
        <div class="com_form">
            <input type="text" name="com_search" id="articlekey" placeholder="请输入关键字后回车">
            <button id="articlesearch" class="coms_btn">搜索</button>
        </div>
    </div>
</header>

<section id="ca_main">
    <section class="ca_main_left">
        <ul>
        <?php foreach($rows as $row):?>
            <li>
                <div class="time"><p><?php echo date("d",$row['atime']);?></p><span><?php echo date("Y.m",$row['atime'])?></span></div>
                <article>
                    <img src="image/bg.jpg" alt="jlsdfj">
                    <a href="#"><h3><?php echo $row['aname']?></h3></a>
                    <p><?php echo $row['adesc']?></p>
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
    </section>
    <section class="ca_main_right">
        <?php include "aright.php";?>
    </section>
</section>

<?php echo include"foot.php";?>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/func.js"></script>
</body>
</html>