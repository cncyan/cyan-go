<?php 
$artsql="select * from cb_article order by cb_article.atime limit 0,5";
$articles=fetchall($artsql);
$prosql="select * from cb_project order by cb_project.ptime limit 0,6";
$projects=fetchall($prosql);
?>
<footer id="foot">
    <div class="foot_can">
        <div class="article_link">
            <h4>最热文章</h4>
            <ul>
                <li><a href="">我的爱情一万光年</a></li>
                <li><a href="">我的爱情一万xsx光年</a></li>
                <li><a href="">我的爱情一潇洒的成都市万光年</a></li>
                <li><a href="">我的爱情一万光年</a></li>
                <li><a href="">我的爱情一万光年</a></li>
            </ul>
        </div>
        <div class="project_link">
            <h4>最热项目</h4>
            <ul>
                <li><a href="">我的爱情一万光年</a></li>
                <li><a href="">我的爱情一万光年</a></li>
                <li><a href="">我的爱情一万光年</a></li>
                <li><a href="">我的爱情一万光年</a></li>
                <li><a href="">我的爱情一万光年</a></li>
                <li><a href="">我的爱情一万光年</a></li>
            </ul>
        </div>
        <div class="tag_link">
            <h4>热词</h4>
            <ul>
                <li><a href="">我的爱</a></li>
                <li><a href="">我的爱光年</a></li>
                <li><a href="">我的爱情一万光年</a></li>
                <li><a href="">我的爱年</a></li>
                <li><a href="">我的爱万光年</a></li>
                <li><a href="">我的爱</a></li>
                <li><a href="">我的爱</a></li>
                <li><a href="">我的爱光年</a></li>
                <li><a href="">我的爱情一万光年</a></li>
                <li><a href="">我的爱年</a></li>
                <li><a href="">我的爱万光年</a></li>
                <li><a href="">我的爱</a></li>
                <li><a href="">我的爱光年</a></li>
                <li><a href="">我的爱情一万光年</a></li>
                <li><a href="">我的爱年</a></li>
                <li><a href="">我的爱万光年</a></li>
            </ul>
        </div>
        <div class="weixin">
            <img src="image/weixincode.png">
        </div>
    </div>
    <footer class="foot_bot"><span>copyright © 2016 CyanScikit | 京ICP备15060006号-1</span></footer>
</footer>