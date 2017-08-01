
<?php 
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/home-index.css");
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/home-newslist.css");
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/cms.css");
?>
<section class="container">
        <!-- <div class="speedbar" style="height: 25px;line-height: 25px">
            <div class="top-tip">
                <strong class="text-success"><i class="fa fa-volume-up"></i> </strong><?=SiteExt::getAttr('qjpz','pcIndexGun')?>
            </div>
        </div> -->
        <?php $nopic = SiteExt::getAttr('qjpz','newsImg')?>
        <div class="content-wrap">
            <div class="content">
                <div class="slick_bor">
                    <script src="<?=Yii::app()->theme->baseUrl?>/static/home/js/responsiveslides.min.js"></script>
                    <ul class="slick" style="<?=$this->imgstyle?>">
                    <?php $objs = RecomExt::getObjFromCate('3','3');if($objs) foreach ($objs as $key => $value) { $obj = $value->getObj(); $img = $value->image?$value->image:$obj->image;?>
                        <li>
                            <a href="<?=$this->createUrl('/home/news/info',['id'=>$obj->id])?>"><img style="<?=$this->imgstyle?>" class="img_855x300" src="<?=ImageTools::fixImage($img,855,390)?>" alt=""><span></span></a><span style="width: 100%;padding-left:  10px;background-color: rgba(0,0,0,0.5);height: <?=$this->iswap?'30px':'40px'?>;bottom: 0px;font: 700 <?=$this->iswap?'16px':'20px'?>/<?=$this->iswap?'30px':'40px'?> 'Microsoft Yahei';"><?=$obj->title?></span>
                        </li>
                    <?php } ?>
                    </ul>
                    <script>
                    $(function() {
                        var mx = document.body.clientWidth;
                        $(".slick").responsiveSlides({
                            auto: true,
                            pager: true,
                            nav: true,
                            speed: 700,
                            timeout: 7000,
                            maxwidth: mx,
                            namespace: "centered-btns"
                        });
                    });
                    </script>
                    <div class="ws_shadow"></div>
                </div>
                <?php if($jpdds):?>
                    <?php if($this->iswap):?>
                       <!--  <h4 style="line-height: 16px">热门<span style="font-size: 16px"> NEWS</span></h4>
                        <div class="cms_4" style="    margin: 10px -9px;">
                            <ul style="    padding: 0 !important;margin: 0 !important;list-style: none !important;">
                            <?php if($jpdds) foreach ($jpdds as $key => $value) { $obj = $value->getObj(); $img = $value->image?$value->image:$obj->image; ?>
                                <li>
                                    <div class="cms_4_div">
                                        <a target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$obj->id])?>">
                                            <img src="<?=ImageTools::fixImage($img?$img:$nopic)?>" style="display: inline;width: <?=$this->ispad?'360':'194'?>px;height: <?=$this->ispad?'230':'120'?>px" /> </a>
                                        <header class="cms_4_a">
                                            <a target="_blank" rel="bookmark" href="<?=$this->createUrl('/home/news/info',['id'=>$obj->id])?>">
    <?=Tools::u8_title_substr($obj->title)?> </a>
                                        </header>
                                    </div>
                                </li>
                            
                        <?php } ?>
                                
                            </ul>
                    </div> -->
                    <section class="cms">
                        <ul>
                        <?php if($cates) foreach ($cates as $key => $value) { if($newss = $value->getNews('7')) { ?>
                            <li>
                                <article class="cate-post left">
                                    <div class="cate-title"> <i class="fa fa-bars"></i> <a href="<?=$this->createUrl('/home/news/list',['cid'=>$value->pinyin])?>"><?=$value->name?></a> </div>
                                    <?php if($newss) { $top = $newss[0];$list = array_slice($newss, 1,6); ?>
                                        <div class="post-thumb">
                                        <a target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$top['id']])?>">
                                            <img src="<?=ImageTools::fixImage($top['image'],339,150)?>" style="display: inline;" /> </a>
                                        <header class="post-head">
                                            <h2> <a target="_blank" rel="bookmark" href="<?=$this->createUrl('/home/news/info',['id'=>$top['id']])?>"><?=$top['title']?> </a> </h2>
                                        </header>
                                    </div>
                                    <ul class="cate-list">
                                    <?php if($list) foreach ($list as $v) {?>
                                        <li>
                                            <h2><a href="<?=$this->createUrl('/home/news/info',['id'=>$v['id']])?>" rel="bookmark" target="_blank" ><?=$v->title?> </a> </h2>
                                            <span class="cate-time"><?=date('m-d',$v->updated)?> </span> </li>
                                    <?php } ?>

                                   <?php  }?>
                                    </ul>
                                </article>
                            </li>
                        <?php } }?>
                        </ul>
                    </section>
                    <?php else:?>
                <div class="daodu clr">
                    <div class="tip">
                        <h4><span style="font-size: 16px"> <strong style="background-color:#00b7ee;color:white;padding: 5px">热门资讯</strong></span> <span style="float: right;font-size: 14px;margin-right: 5px"><a href="<?=$this->createUrl('/home/news/list')?>">更多资讯 ></a></span></h4>

                    </div>
                    <ul class="dd-list">
                    <?php if($jpdds) foreach ($jpdds as $key => $value) { $obj = $value->getObj(); $img = $value->image?$value->image:$obj->image; ?>
                        <li style="width:98%">
                            <figure class="dd-img">
                                <a title="<?=$obj->title?>" target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$obj->id])?>">
                                    <img src="<?=ImageTools::fixImage($img?$img:$nopic,200,180)?>" style="display: inline;height: 180px;width: 250px" /> </a>
                            </figure>
                            <span style="    margin-bottom: -114px;margin-top: 0;margin-left: -250px;background-color: rgba(0,0,0,0.5);height: <?=$this->iswap?'30px':'40px'?>;bottom: -150px;font: 700 15px/<?=$this->iswap?'30px':'40px'?> 'Microsoft Yahei';position: relative;color: white;"><label style="display: inline-block;width:245px;margin-left: 5px"><?=Tools::u8_title_substr($obj->title,30)?></label></span>
                        </li>
                   <?php } ?>
                        
                    </ul>
                    <div style="height: 400px;width: 460px;margin-left: 290px;margin-top: -400px;">
                        <?php $criteria = new CDbCriteria;
                        $criteria->addCondition('status=1 and deleted=0 and created>=:be and created<=:en');
                        $criteria->params[':be'] = TimeTools::getDayBeginTime(time()-86400*7);
                        $criteria->params[':en'] = time();

                        $criteria->order = 'hits desc';
                        $criteria->limit = 10;
                         $nowInfos = ArticleExt::model()->normal()->findAll($criteria); if($nowInfos) {?>
                         <ul style="margin-top: 18px">
                         <?php  foreach ($nowInfos as $key => $value) {?>
                         <?php if($key==5):?><br><li class="l11"><a style="color: #848484" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>"><?=$value->title?></a>
                             </li><?php else:?>
                             <li class="l11"><a style="color: #848484;" class="lia" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>"><?=Tools::u8_title_substr($value->title,54)?></a>
                             </li><?php endif;?>
                        <?php  } ?>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
            <?php endif;?>
            <?php endif;?>
                <?php if($this->iswap==0):?>
                <div class="zixun1">
                <?php if($cates) foreach ($cates as $key => $value) {?>
                   <a onmouseover="changeA(this)" href="<?=$this->createUrl('/home/news/list',['cid'=>$value->pinyin])?>" data-id="<?=$value->id?>" class="zxcate <?=$key==0?'zixun_sk':''?>" id=""><h2 style="font-size: 18px"><?=$value->name?></h2></a>
                <?php } ?>
                    </div>
                    <?php if($news) foreach ($news as $key => $values) { if($values) foreach ($values as $k => $value) {?>
                        <article class="excerpt <?=isset($cates[0])&&$key==$cates[0]['id']?'show':'noshow'?>" data-cid="<?=$key?>">
                    <div class="focus">
                        <a target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>"><img style="width: 180px"  class="thumb" src="<?=ImageTools::fixImage($value->image?$value->image:$nopic)?>" alt="<?=$value->title?>" /></a>
                    </div>
                    <header>
                        <h2><a target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>" title="<?=$value->title?>"><?=Tools::u8_title_substr($value->title,40)?> </a></h2>
                    </header>
                    <p class="auth-span">
                        <span class="muted"><i class="fa fa-clock-o"></i> <?=date('Y-m-d',$value->updated)?></span> <span class="muted"><i class="fa fa-eye"></i> <?=$value->hits?></span> <span class="muted"><i class="fa fa-comments-o"></i> <a target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>"><?=$value->comment_num?>评论</a></span></p>
                    <span class="note">
                    <?php if(!$value->descpt) {
                        $html = preg_replace("/<([a-z]+)[^>]*>/i","",$value->content);
                        if($html) {
                            $html = preg_replace("/\<\/[a-z]+\>/","",$html);
                            // var_dump($html);exit;
                            $wd = $html;
                        }} else { $wd = $value->descpt;} echo Tools::u8_title_substr($wd,150)?>
                            
                        </span>
                        <!-- <br> -->
                        <div class="detail_title_nav_r " style="margin-top: 5px">
                        
                            <?php if($tags = $value->getTagString()) {?>
                                <span class="note">标签：
                                <?php $tags = explode(' ', $tags);
                                foreach ($tags as $k => $v) {?>
                                    <a href="<?=$this->createUrl('/home/news/list',['tag'=>Pinyin::get($v)])?>" class="biaoqian2"><?=$v?></a>
                                <?php }?>
                                </span>
                                <?php }?>
                           
                        </div>
                </article>
                   <?php  } ?>
                    
                   <?php } ?>
               
               <?php endif;?>
               <?php if($this->iswap):?>
                <?php $album = TkExt::model()->normal()->findAll(['limit'=>4]);?>
                <h4 style="line-height: 16px">热门<span style="font-size: 16px"> 图库</span></h4>
                <div class="cms_4" style="    margin: 10px -5px;">
                            <ul style="    padding: 0 !important;margin: 0 !important;list-style: none !important;">
                            <?php if($album) foreach ($album as $key => $value) { ?>
                                <li>
                                    <div class="cms_4_div">
                                        <a target="_blank" href="<?=$this->createUrl('/home/album/info',['id'=>$value->id])?>">
                                            <img src="<?=ImageTools::fixImage($value->album[0]['url'])?>"  style="display: inline;width: <?=$this->ispad?'360':'194'?>px;height: <?=$this->ispad?'230':'120'?>px" /> </a>
                                        <header class="cms_4_a">
                                            <a target="_blank" rel="bookmark" href="<?=$this->createUrl('/home/album/info',['id'=>$value->id])?>">
    <?=Tools::u8_title_substr($value->title)?> </a>
                                        </header>
                                    </div>
                                </li>
                            
                        <?php } ?>
                                
                            </ul>
                    </div>
               <?php else:?>
                   <header class="archive-header">
                    <h4><strong style="background-color:#00b7ee;color:white;padding: 5px">精彩视频</strong><span style="float: right;font-size: 14px;margin-right: 5px"><a href="<?=$this->createUrl('/home/video/list')?>">更多视频 ></a></span>
                    </h4></header>
                    <ul class="dd-list" style="background-color: white">
                    <?php if($videos) foreach ($videos as $key => $value) {?>
                        <li style="float: left;margin-left: 3px;margin-top: 10px">
                            <figure class="dd-img">
                                <a title="<?=$value->title?>" target="_blank" href="<?=$this->createUrl('/home/video/info',['id'=>$value->id])?>">
                                    <img src="<?=ImageTools::fixImage($value->image?$value->image:$nopic,250,180)?>" style="display: inline;height: 180px;width: 250px" /> </a>
                            </figure>
                            <span style="    margin-bottom: -114px;margin-top: 0;margin-left: -250px;background-color: rgba(0,0,0,0.5);height: 40px;bottom: -150px;font: 700 15px/40px 'Microsoft Yahei';position: relative;color: white;"><label style="display: inline-block;width:244px;margin-left: 5px"><?=Tools::u8_title_substr($value->title,30)?></label></span>
                        </li>
                    <?php } ?>
                    </ul>
                    <header class="archive-header" style="margin-top: 210px">
                    <h4><strong style="background-color:#00b7ee;color:white;padding: 5px">精彩图库</strong><span style="float: right;font-size: 14px;margin-right: 5px"><a href="<?=$this->createUrl('/home/album/list')?>">更多图片 ></a></span>
                    </h4></header>
                    <ul class="pic-list">
                    <?php $album = TkExt::model()->normal()->findAll(['limit'=>4]);?>
                    <?php if($album) foreach ($album as $key => $value) {?>
                        <li <?php if($key%2!=0) {echo 'style="margin-left: 15px"';}  ?>><a href="<?=$this->createUrl('/home/album/info',['id'=>$value->id])?>"><img src="<?=ImageTools::fixImage($value->album[0]['url'],372,212)?>" alt="">
                            <span style="    margin-bottom: -114px;margin-top: 0;margin-left: 0;background-color: rgba(0,0,0,0.5);height: 52px;bottom: 40px;font: 700 20px/54px 'Microsoft Yahei';position: relative;color: white;"><label style="display: inline-block;width:100%;margin-left: 5px"><?=Tools::u8_title_substr($value->title,30)?></label></span></a>
                        </li>
                    <?php } ?>
                        
                    </ul>
                <?php endif;?>
            </div>
        </div>

        <aside class="sidebar">
        <?php $this->widget('CommonRightWidget',$rights)?>
        <div class="widget widget_text">
                <div class="title">
                    <span class="title_span" style="padding-left: 0"><strong style="background-color:#00b7ee;color: white;padding: 4px 15px;">友情链接</strong></span></div>
                <div class="textwidget" style="margin-top: 10px"><div class="d_tags_1">
                <?php $links = LinkExt::model()->normal()->findAll(['limit'=>10]); if($links) foreach ($links as $key => $value) {?>
                   <a target="_blank" href="<?=$value['url']?>"><?=$value['name']?></a>
               <?php  } ?>
                     </div>
                </div>
            </div>
        </aside>
    </section>
    <script type="text/javascript">
        // 换tab
        function changeA(obj) {
            $('.zxcate').attr('class','');
            cid = $(obj).data('id');
            $(obj).attr('class','zixun_sk zxcate');
            $('.excerpt').attr('class','excerpt noshow');
            $(".excerpt[data-cid='"+cid+"']").attr('class','excerpt show');
        }
    </script>