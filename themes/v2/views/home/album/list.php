<?php 
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/home-album.css");
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/home-common.css");
?>

<div class="pic-falls">
<div class="archive-header" style="margin-left: 15px;margin-right: 30px;margin-bottom: 10px">
    <ol class="breadcrumb container" style="padding-left: 15px;
    padding-right: 30px;
    width: 992px;">
    <style type="text/css">
        .active a{
            color: #999 !important;
        }
    </style>
        <li class="home"> <a href="<?=$this->createUrl('list')?>">&nbsp;全部&nbsp;</a></li>
                            <?php if($cates) foreach ($cates as $key => $value) {?>
                                <li class="<?=$cid==$key?'active':''?>"><a href="<?=$this->createUrl('list',['cid'=>$key])?>">&nbsp;<?=$value?>&nbsp;</a></li>
                            <?php } ?>
    </ol>
</div>
        <div id="listing" class="container-fluid masonry" style="position: relative; height: 1403px;">
        <?php if($infos) foreach ($infos as $key => $value) {?>
            <div class="post masonry-brick" style="width: 250px">
                    <a href="<?=$this->createUrl('info',['id'=>$value->id])?>"> <img src="<?=ImageTools::fixImage($value->album[0]['url'],250,166)?>" alt=""></a>
                    <div class="textarea">
                        <h3><a href="javascript:;"><?=Tools::u8_title_substr($value->title,28)?></a></h3>
                        <p><?=Tools::u8_title_substr($value->descpt,40)?>                        </p>
                    </div>
                    <!-- <div class="share-box">
                        <div>
                            <a href="javascript:;"><i class="icon-icon-like"></i>点赞</a>
                            <a href="javascript:;"><i class="icon-icon-comment"></i>0</a>
                            <a href="javascript:;" class="last-body"><i class="icon-icon-share"></i>分享</a>
                        </div>
                    </div> -->
                </div>
        <?php } ?>
        <?php $this->widget('HomeLinkPager',['pages'=>$pager])?>            
       </div>

</div>