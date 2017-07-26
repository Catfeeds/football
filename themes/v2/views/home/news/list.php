<section class="container">
            <!-- <div class="speedbar">
                <div class="toptip"><strong class="text-success"><i class="fa fa-volume-up"></i> </strong> <?=SiteExt::getAttr('qjpz','pcIndexGun')?></div>
            </div> -->
            <?php $nopic = SiteExt::getAttr('qjpz','newsImg')?>
            <div class="content-wrap">
                <div class="content">
                    <div class="archive-header">
                        <ol class="breadcrumb container" style="width: 96%">
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
                    <?php if(isset($_GET['tag']) &&  ($tag = TagExt::model()->findByPk($_GET['tag'])->name )) {?>
                       <span style="margin-top: 10px">相关标签： <a href="<?=$this->createUrl('list')?>" style="    width: auto;opacity: .70;filter: alpha(opacity=80);color: #fff;background-color: #09a8c5;display: inline-block;margin: 6px 5px 5px 0;padding: 2px 6px;line-height: 24px;">
                            <?=$tag.' x'?>
                        </a></span>
                    <?php }

                    ?>
                    <?php if($infos) foreach ($infos as $key => $value) {?>
                    <article class="excerpt">
                        <header>
                            <h2><a target="_blank" href="<?=$this->createUrl('/cms/'.$value->id.'.html')?>" ><?=Tools::u8_title_substr($value->title,56)?></a></h2>
                        </header>
                        <div class="focus">
                            <a target="_blank" href="<?=$this->createUrl('/cms/'.$value->id.'.html')?>"><img style="width: 180px" class="thumb" src="<?=ImageTools::fixImage($value->image?$value->image:$nopic,200,123)?>" /></a>
                        </div>
                        <span class="note">
                    <?php if(!$value->descpt) {
                        $html = preg_replace("/<([a-z]+)[^>]*>/i","",$value->content);
                        if($html) {
                            $html = preg_replace("/\<\/[a-z]+\>/","",$html);
                            // var_dump($html);exit;
                            $wd = $html;
                        }} else { $wd = $value->descpt;} echo Tools::u8_title_substr($wd,200)?>
                            
                        </span>
                        <p class="auth-span">
                            <span class="muted"><i class="fa fa-clock-o"></i><?=Tools::friendlyDate($value->created)?></span>
                            <span class="muted"><i class="fa fa-eye"></i><?=$value->hits?> </span>
                            <span class="muted"><i class="fa fa-comments-o"></i><a target="_blank" href="<?=$this->createUrl('/cms/'.$value->id.'.html')?>#respond"><?=$value->comment_num?>评论</a> </span>
                        </p>
                        </article>
                    <?php } ?>
                <?php $this->widget('HomeLinkPager',['pages'=>$pager])?>    
                </div>
            </div>
            <aside class="sidebar">
            <?php $this->widget('NewsRightWidget')?>
            </aside>
        </section>