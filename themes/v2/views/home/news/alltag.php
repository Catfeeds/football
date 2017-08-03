<?php 
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/home-newslist.css");
?>
<style>
    .d_tags a:hover{
        color: #00b7ee !important;
        border: 1px #00b7ee solid !important;
    }
</style>
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
                    <a style="width: auto !important;border: 1px #999 solid;background: white;color: #080808;height: 22px;    border-radius: 3px;"  href="<?=$this->createUrl('/home/news/list',['tag'=>Pinyin::get($value['name'])])?>"><?=$value['name']?></a>
                <?php } ?> 
                </div>
            </div>
                     </article>
                  </div> 
            </div>
            <aside class="sidebar">
                <div class="widget d_tag">
                <div class="title">
                    <sapn class=    "title_span" style="padding-left: 0;padding-right: 0"><strong  style="font-weight:normal !important;background-color:#00b7ee;color: white;padding: 4px 15px;">栏目</strong></span></div>
                <div class="d_tags tag1"  style="width: 86%">
                <a style="width: 80%" href="<?=$this->createUrl('/home/index/about')?>"><?='关于我们'?></a>
                <a style="width: 80%" href="<?=$this->createUrl('/home/index/contact')?>"><?='联系我们'?></a>
                <a style="width: 80%"  href="<?=$this->createUrl('/home/news/alltag')?>" >所有标签</a>
                </div>
            </div>
            </aside>
        </section>