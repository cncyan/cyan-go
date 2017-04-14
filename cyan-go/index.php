<?php
require_once 'include.php';
$mpsql="select * from cb_project limit 0,8";
$pros=fetchall($mpsql);
$masql="select * from cb_article limit 0,8";
$arts=fetchall($masql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>乔超楠|I Like</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<header id="head">
    <section class="head_top">
        <img src="image/logo.jpg">
        <span>Cyan</span>
    </section>
    <nav class="main_nav">
        <ul>
            <li><a href="index.php">首页</a> </li>
            <li><a href="cyanarticle.php">文章</a> </li>
            <li><a href="cyanproject.php">项目</a> </li>
            <li><a href="cyantalking.php">留言吧</a> </li>
        </ul>
    </nav>
    <section class="main_pic">
        <section>
            <p>
                时间像个天使，让你的幸福蔓延；<br>时间像个恶魔，让你煎熬的等待着你期望的那一天......<br>
            </p>
            <p>
                分享让天使永存，<span>坚持</span>让恶魔蜕变天使......
            </p>
        </section>
    </section>
</header>
<section id="main_article">
    <header><h2>我的文章</h2></header>
    <article>
        <div class="article_pic">
        <?php foreach($arts as $art):?>
            <a href="#">
                <div class="article_can">
                    <img src="admin/article/<?php echo $art['asnimg']?>">
                    <div class="article_des">
                        <p><?php echo $art['aname'];?></p>
                    </div>
                </div>
            </a>
         <?php endforeach;?>
        </div>
    </article>
    <footer class="article_foot">
        <a href="#"><div>查看更多</div></a>
    </footer>
</section>

<section id="main_project">
    <header><h2>我的项目</h2></header>
    <article>
        <div class="project_pic">
        <?php foreach($pros as $pro):?>
            <a href="#">
                <div class="project_can">
                    <img src="admin/project/<?php echo $pro['snimg']?>">
                    <div class="project_des">
                        <p><?php echo $pro['pname'];?></p>
                    </div>
                </div>
            </a>
        <?php endforeach;?>
        </div>
    </article>
    <footer class="project_foot">
        <a href="#"><div>查看更多</div></a>
    </footer>
</section>

<section id="main_code">
    <div class="code_can">
        <div>
            <img src="image/weixincode.png">
            <p><span>dkjf阿萨德</span><br>wodeerwiqeifus<br>dkjf阿萨德</p>
        </div>
        <div>
            <img src="image/weixincode.png">
            <p><span>dkjf阿萨德</span><br>wodeerwiqeifus<br>dkjf阿萨德</p>
        </div>
    </div>
</section>

<?php include"foot.php";?>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/style.js"></script>
</body>
</html>