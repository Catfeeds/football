<?php 
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/home-newslist.css");
?>
<section class="container">
            <!-- <div class="speedbar">
                <div class="toptip"><strong class="text-success"><i class="fa fa-volume-up"></i> </strong> <?=SiteExt::getAttr('qjpz','pcIndexGun')?></div>
            </div> -->
            <?php $nopic = SiteExt::getAttr('qjpz','newsImg')?>
            <div class="content-wrap">
                <div class="content">
                    <div class="archive-header">
                        <div class="dao_nav">
                            <div class="dao_nav1" style="<?=$this->iswap?'line-height: 30px':''?>">
                            <?php if(isset($_GET['tag'])) {
                                $nowtag = TagExt::model()->find("pinyin='".$_GET['tag']."'")->name;
                                } else {
                                    $nowtag = '';
                                    }?>
                            <div class="dao_nav1_l fl"> <h1 style="font-size: 24px;margin-bottom:0;color: #00b7ee;border-bottom: 2px #00b7ee solid;padding-bottom: 8px;margin-left: 20px"><?=($cid?ArticleCateExt::model()->findByPk($cid)->name:($nowtag?($nowtag):'资讯列表'))?></h1></div>
                            <div class="dao_nav1_r fr"><span>
                            <?php if($cates) foreach ($cates as $key => $value) {?>
                                <?php if($key!=$cid):?><a href="<?=$this->createUrl('list',['cid'=>Pinyin::get($value)])?>"><?=$value?></a> | <?php endif;?>
                            <?php } ?>
                            </span></div>
                            </div>
                        </div>
                    </div>
                    <?php if($infos) foreach ($infos as $key => $value) {?>
                    <article class="excerpt">
                        <header>
                            <h2><a target="_blank" href="<?=$this->createUrl('info',['id'=>$value->id])?>" ><?=Tools::u8_title_substr($value->title,$this->iswap?36:56)?></a></h2>
                        </header>
                        <div class="focus">
                            <a target="_blank" href="<?=$this->createUrl('info',['id'=>$value->id])?>"><img style="width: 180px" class="thumb" src="<?=ImageTools::fixImage($value->image?$value->image:$nopic,200,123)?>" /></a>
                        </div>
                        <span class="note">
                    <?php if(!$value->descpt) {
                        $html = preg_replace("/<([a-z]+)[^>]*>/i","",$value->content);
                        if($html) {
                            $html = preg_replace("/\<\/[a-z]+\>/","",$html);
                            // var_dump($html);exit;
                            $wd = $html;
                        }} else { $wd = $value->descpt;} echo Tools::u8_title_substr($wd,$this->iswap?60:200)?>
                            
                        </span>
                        <?php if($this->iswap==0):?>
                        <br><br>
                        <div class="detail_title_nav_r ">
                        
                            <?php if($tags = $value->getTagString()) {?>
                                <span class="note">标签：
                                <?php $tags = explode(' ', $tags);
                                foreach ($tags as $k => $v) {?>
                                    <a href="<?=$this->createUrl('list',['tag'=>Pinyin::get($v)])?>" class="biaoqian<?=$nowtag?($v==$nowtag?2:1):2?>"><?=$v?></a>
                                <?php }?>
                                </span>
                                <?php }?>
                           
                        </div>
                        <p class="auth-span">
                            <span class="muted"><i class="fa fa-clock-o"></i><?=Tools::friendlyDate($value->created)?></span>
                            <span class="muted"><i class="fa fa-eye"></i><?=$value->hits?> </span>
                            <span class="muted"><i class="fa fa-comments-o"></i><a target="_blank" href="<?=$this->createUrl('info',['id'=>$value->id])?>#respond"><?=$value->comment_num?>评论</a> </span>
                        </p>
                    <?php else:?>
                        
                        <p class="auth-span" style="display: block;margin-top: -16px">
                            <span class="muted"><i class="fa fa-clock-o"></i><?=Tools::friendlyDate($value->created)?></span>
                            <span class="muted"><i class="fa fa-eye"></i><?=$value->hits?> </span>
                            <span class="muted"><i class="fa fa-comments-o"></i><a target="_blank" href="<?=$this->createUrl('info',['id'=>$value->id])?>#respond"><?=$value->comment_num?>评论</a> </span>
                        </p>
                        <div class="detail_title_nav_r ">
                        
                            <?php if($tags = $value->getTagString()) {?>
                                <span class="note"  style="height: 24px;width: 100%">标签：
                                <?php $tags = explode(' ', $tags);
                                foreach ($tags as $k => $v) {?>
                                    <a href="<?=$this->createUrl('list',['tag'=>Pinyin::get($v)])?>" class="biaoqian<?=$nowtag?($v==$nowtag?2:1):2?>"><?=$v?></a>
                                <?php }?>
                                </span>
                                <?php }?>
                           
                        </div>
                    <?php endif;?>
                        </article>
                    <?php } ?>
                <?php $this->widget('HomeLinkPager',['pages'=>$pager])?>    
                </div>
            </div>
            <aside class="sidebar">
            <?php $this->widget('NewsRightWidget')?>
            </aside>
        </section>