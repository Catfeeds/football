<?php 
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/home-newslist.css");
?>
<section class="container">
            <!-- <div class="speedbar">
                <div class="toptip"><strong class="text-success"><i class="fa fa-volume-up"></i> </strong> <?=SiteExt::getAttr('qjpz','pcIndexGun')?></div>
            </div> -->
            <div class="content-wrap">
                <div class="content">
                    <div class="archive-header">
                        <div class="dao_nav">
                            <div class="dao_nav1">
                            <div class="dao_nav1_l fl"> <h1 style="font-size: 24px;margin-bottom:0;color: #00b7ee;border-bottom: 2px #00b7ee solid;padding-bottom: 8px;margin-left: 20px">标签列表</h1></div>
                            <div class="dao_nav1_r fr"><span>
                            </span></div>
                            </div>
                        </div>
                    </div>
                     <article class="excerpt">
                     <div class="widget d_tag">
                <!-- <div class="title">
                    <h2>标签列表</h2></div> -->
                <div class="d_tags"  style="width: 86%">
                <?php if($tags) foreach ($tags as $key => $value) {?>
                    <a style="width: 15%" href="<?=$this->createUrl('/home/news/list',['tag'=>Pinyin::get($value['name'])])?>"><?=$value['name']?></a>
                <?php } ?> 
                </div>
            </div>
                     </article>
                  </div> 
            </div>
            <aside class="sidebar">
            <?php $this->widget('NewsRightWidget')?>
            </aside>
        </section>