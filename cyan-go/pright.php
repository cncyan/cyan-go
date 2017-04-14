<?php 
$sql="select * from cb_pcate";
$cates=fetchall($sql);
$rsql="select * from cb_project order by cb_project.ptime limit 0,4";
$news=fetchall($rsql);
?>
<div class="cp_main_right">
        <div class="cp_list">
            <h4>项目分类</h4>
            <ul>
              <?php foreach($cates as $cate):?>
                <li><a href="#"><?php echo $cate['pcname'];?></a> </li>
            <?php endforeach;?>
            </ul>
        </div>
        <div class="cp_new">
            <h4>最新项目</h4>
            <ul>
               <?php foreach($news as $new):?>
                <li><a href="#"><?php echo $new['psn'];?></a> </li>
               <?php endforeach;?>
            </ul>
        </div>
</div>