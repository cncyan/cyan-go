<?php 
$sql="select * from cb_acate";
$cates=fetchall($sql);
$rsql="select * from cb_article order by cb_article.atime limit 0,4";
$news=fetchall($rsql);
?>
            <div class="ca_list">
            <h4>文章类别</h4>
            <ul>
            <?php foreach($cates as $cate):?>
                <li><a href="#"><?php echo $cate['acname'];?></a> </li>
            <?php endforeach;?>
            </ul>
        </div>
        <div class="ca_new">
            <h4>最新文章</h4>
            <ul>
            <?php foreach($news as $new):?>
                <li><a href="#"><?php echo $new['asn'];?></a> </li>
            <?php endforeach;?>
            </ul>
        </div>
