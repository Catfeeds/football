<?php 
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/home-album.css");
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/home-common.css");
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/home-newslist.css");
?>
<section class="container">
<div class="content-wrap">
<div class="pic-falls" style="margin-top: 0;margin-left:0;width: 760px;padding-right: 10px">
<div class="archive-header">
    <div class="dao_nav">
        <div class="dao_nav1">
        <div class="dao_nav1_l fl"> <h1 style="font-size: 24px;margin-bottom:0;color: #00b7ee;border-bottom: 2px #00b7ee solid;padding-bottom: 8px"><?=$cid?TkCateExt::model()->findByPk($cid)->name:'图库列表'?></h1></div>
        <div class="dao_nav1_r fr"><span>
        <?php if($cates) foreach ($cates as $key => $value) {?>
            <?php if($key!=$cid):?><a href="<?=$this->createUrl('/image/'.Pinyin::get($value))?>"><?=$value?></a> | <?php endif;?>
        <?php } ?>
        </span></div>
        </div>
    </div>
</div>
        <div id="listing" class="container-fluid masonry" style="position: relative; height: 1403px;padding-left: 0;padding-right: 0;margin-right: 0;width: 100%">
        <?php if($infos) foreach ($infos as $key => $value) {?>
            <div class="post masonry-brick walbum" style="<?=($key+1)%3==0?'margin-right: 0':''?>">
                    <a href="<?=$this->createUrl('info',['id'=>$value->id])?>"> <img src="<?=ImageTools::fixImage($value->album?$value->album[0]['url']:'',250,166)?>" alt=""></a>
                    <div class="textarea">
                        <h3><a href="javascript:;"><?=Tools::u8_title_substr($value->title,28)?></a></h3>
                        <p><?=Tools::u8_title_substr($value->descpt,38)?>                        </p>
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
</div>
<aside class="sidebar">
<?php $this->widget('NewsRightWidget')?>
</aside>
 </section>