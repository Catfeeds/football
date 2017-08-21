<style>
    .note{
    display: block !important;
}
</style>
<section class="container">
           <!--  <div class="speedbar">
                <div class="toptip"><strong class="text-success"><i class="fa fa-volume-up"></i> </strong> <?=SiteExt::getAttr('qjpz','pcIndexGun')?></div>
            </div> -->
            <?php $nopic = SiteExt::getAttr('qjpz','newsImg')?>
            <div class="content-wrap">
                <div class="content">
                    <div class="archive-header">
                        <ol class="breadcrumb container" style="<?=$this->iswap?'':'width: 96%'?>">
                        <style type="text/css">
                            .active a{
                                color: #999 !important;
                            }
                        </style>
                            <li class="home"> <a href="<?=$this->createUrl('/home/index/index')?>">&nbsp;球布斯&nbsp;</a></li>
                            <li class=""><a href="<?=$this->createUrl('list')?>">&nbsp;<?='视频'?>&nbsp;</a></li>
                        </ol>
                    </div>
                    
                    <?php if($infos) foreach ($infos as $key => $value) {?>
                    <article class="excerpt">
                        <div style="margin:0 10px 15px 0;">
                            <h2><a target="_blank" href="<?=$this->createUrl('info',['id'=>$value->id])?>" ><?=Tools::u8_title_substr($value->title,$this->iswap?36:56)?></a></h2>
                        </div>
                        <div class="focus">
                            <a target="_blank" href="<?=$this->createUrl('info',['id'=>$value->id])?>"><img class="thumb" src="<?=ImageTools::fixImage($value->image?$value->image:$nopic,200,123)?>" /></a>
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
                            <span class="muted"><i class="fa fa-comments-o"></i><a target="_blank" href="<?=$this->createUrl('info',['id'=>$value->id])?>#respond"><?=$value->comment_num?>评论</a> </span>
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