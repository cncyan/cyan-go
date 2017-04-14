<?php
require_once '../include.php';
checklogin();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CYAN||admin</title>
<link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <div class="head">
            <div class="logo fl"><a href="#"></a></div>
            <h3 class="head_text fr">Cyan's blog</h3>
    </div>
    <div class="operation_user clearfix">
        <div class="link fl"><a href="#">CYAN</a><span>&gt;&gt;</span><a href="#">商品管理</a><span>&gt;&gt;</span>商品修改</div>
        <div class="link fr">
            <b>欢迎您，
            <?php
			if(isset($_SESSION["adminname"])){
			   echo $_SESSION["adminname"];
			}elseif(isset($_COOKIE["adminname"])){
				echo $_COOKIE["adminname"];
			}			
			?></b>&nbsp;&nbsp;&nbsp;<a href="#" class="icon icon_i">首页</a>
            <a href="doadminaction.php?act=logout" class="icon icon_e">退出</a>
        </div>
    </div>
    <div class="content clearfix">
        
        <!--左侧列表-->
        <div class="menu">
            <div class="cont">
                <div class="title">管理员</div>
                <ul class="mList">
                    <li>
                        <h3>文章管理</h3>
                        <dl>
                            <dd><a href="addarticle.php" target="myframe">添加文章</a></dd>
                            <dd><a href="articlelist.php" target="myframe">文章列表</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3>文章类别</h3>
                        <dl>
                            <dd><a href="addacate.php" target="myframe">添加文章类别</a></dd>
                            <dd><a href="acatelist.php" target="myframe">文章类别列表</a></dd>
                        </dl>
                    </li>
                   <li>
                        <h3>项目管理</h3>
                        <dl>
                            <dd><a href="addproject.php" target="myframe">添加项目</a></dd>
                            <dd><a href="projectlist.php" target="myframe">项目列表</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3>项目类别</h3>
                        <dl>
                            <dd><a href="addpcate.php" target="myframe">添加项目类别</a></dd>
                            <dd><a href="pcatelist.php" target="myframe">项目类别列表</a></dd>
                        </dl>
                    </li>
					 <li>
                        <h3>管理员管理</h3>
                        <dl>
                            <dd><a href="addadmin.php" target="myframe">添加管理员</a></dd>
                            <dd><a href="adminlist.php" target="myframe">管理员列表</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
		<div class="main">           
         <iframe name="myframe" src="main.php" width="100%" id="myframe" scrolling=no height="600" class="mian_con"></frame>
        </div>

    </div>
</body>
</html>