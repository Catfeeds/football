<?php 
    Yii::app()->clientScript->registerCssFile("/wp-content/themes/sky1.0/share.css");
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/album/css/style.css");
?>
<section class="container">
           <!--  <div class="speedbar">
                <div class="toptip"><strong class="text-success"><i class="fa fa-volume-up"></i> </strong> <?=SiteExt::getAttr('qjpz','pcIndexGun')?></div>
            </div> -->
            <div class="content-wrap">
                <div class="content">
                    <ol class="breadcrumb container" style="width: 96%;">
                        <li class="home"><i class="fa fa-home"></i> <a href="<?=$this->createUrl('/home/index/index')?>">首页&nbsp;&gt;&nbsp;</a></li>
                        <li class="active"> <a href="<?=$this->createUrl('/home/album/list')?>">图库列表</a> &gt;<?php if($cate = $info->cate):?><a href="<?=$this->createUrl('/home/album/list',['cid'=>$cate->pinyin])?>"><?=$cate->name?></a> &gt;<?php endif;?> <?=$info->title?></li>
                    </ol>
                    <header class="article-header">
                        <h1 class="article-title" style="font-size: 26px"><?=$info->title?></h1>
                        <br>
                        <div class="meta">
                            <?php if($info->cid):?><span id="mute-category" class="muted"><i class="fa fa-list-alt"></i><a href="<?=$this->createUrl('/home/news/list',['cid'=>$info->cid])?>"> <?=$info->cate->name?></a></span> <span class="muted"><i class="fa fa-user"></i> </span><?php endif;?>
                            <time class="muted"><i class="fa fa-clock-o"></i> <?=date('Y-m-d',$info->created)?></time>
                    </header>
                    <style type="text/css">
                    .article-content a {
                            color: #00b7ee !important; 
                        }</style>
                    <article class="article-content" id="content_img">
                    <?php $imgs =  $info->album;?>
                    <?=$info->descpt?>
                    <?php if($this->iswap):?>
                        <?php if($imgs) foreach ($imgs as $key => $value) {?>
                            <img class="alignnone size-full wp-image-160" src="<?=ImageTools::fixImage($value->url)?>" width="697" height="502" sizes="(max-width: 697px) 100vw, 697px">
                            <span>
                                <?=$value['name']?>
                            </span>
                        <?php } ?>
                    <?php endif;?>
                    <div class="zoombox">
                    <ul id="slideshow">
                    <?php if($imgs) foreach ($imgs as $key => $value) {?>
                        <li>
                            <h3><?=$info->title?></h3>
                            <span><?=ImageTools::fixImage($value->url)?></span>
                            <p><?=$value->name?></p>
                            <a href="<?=ImageTools::fixImage($value->url)?>" target="_blank"><img src="<?=ImageTools::fixImage($value->url)?>" /></a>
                        </li>
                    <?php }  ?>
                        
                    </ul>
    <?php if($this->iswap==0):?>
    <div id="wrapper">
        <div id="fullsize">
            <div id="imgprev" class="imgnav" title="Previous Image"></div>
            <div id="imglink"></div>
            <div id="imgnext" class="imgnav" title="Next Image"></div>
            <div id="image"></div>
            <div id="information">
                <h3></h3>
                <p></p>
            </div>
        </div>
        <div id="thumbnails">
            <div id="slideleft" title="Slide Left"></div>
            <div id="slidearea">
                <div id="slider"></div>
            </div>
            <div id="slideright" title="Slide Right"></div>
        </div>
    </div>
    <?php endif;?>
</div>
                    <style>
                    .popover-content a {
    color: white !important;
}
                    </style> 
                    <span style="font-size: 10px;color: gray">
                        <center> 严禁商业机构或公司转载，违者必究；球迷转载请注明来源“球布斯”</center> 
                        <div class="article-social">
          <span class="action action-share bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1499305983388"><i class="fa fa-share-alt"></i>分享 <div class="action-popover"><div class="popover top in"><div class="arrow"></div><div class="popover-content"><a href="#" class="sinaweibo fa fa-weibo" data-cmd="tsina" title="" data-original-title="分享到新浪微博"></a><a href="#" class="bds_qzone fa fa-star" data-cmd="qzone" title="" data-original-title="分享到QQ空间"></a><a href="#" class="tencentweibo fa fa-tencent-weibo" data-cmd="tqq" title="" data-original-title="分享到腾讯微博"></a><a href="#" class="qq fa fa-qq" data-cmd="sqq" title="" data-original-title="分享到QQ好友"></a><a href="#" class="bds_renren fa fa-renren" data-cmd="renren" title="" data-original-title="分享到人人网"></a><a href="#" class="bds_weixin fa fa-weixin" data-cmd="weixin" title="" data-original-title="分享到微信"></a><a href="#" class="bds_more fa fa-ellipsis-h" data-cmd="more" data-original-title="" title=""></a></div><script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></div></div></span>   
</div></span>
<?php if($preid):?>
    上一篇：<a href="<?=$this->createUrl('info',['id'=>$preid])?>"><?=TkExt::model()->findByPk($preid)->title?></a><br>
    <?php endif;?>
    <?php if($nextid):?>
    下一篇：<a href="<?=$this->createUrl('info',['id'=>$nextid])?>"><?=TkExt::model()->findByPk($nextid)->title?></a><br>
    <?php endif;?>
                    </article>
                    <?php if($rels = $info->getRelAlbum()) {?>
                    <div class="related_top">
            <div class="related_posts"><ul class="related_img">
    <h2>相关图库</h2>

    <?php foreach ($rels as $key => $value) {?>
       <li class="related_box">
        <a href="<?=$this->createUrl('info',['id'=>$value->id])?>" title="<?=$value->title?>" target="_blank">
        <img src="<?=ImageTools::fixImage($value->album[0]['url'])?>" style="width: 185px;height: 110px" ><br><span class="r_title"><?=Tools::u8_title_substr($value->title,40)?></span></a>
        </li>
    <?php }?>
    </ul>
</div>      </div>
   <?php  }?>
    
    
                    
                    
                </div>
            </div>
            <aside class="sidebar">
                <?php $this->widget('NewsRightWidget')?>
            </aside>
        </section>
        <script type="text/javascript">
        function check_uid() {
            <?php if(!$this->user):?>
                alert('请先登录！');
                $('textarea').attr('disabled','disabled');
            <?php endif;?>
        }
        function setp(obj) {
            var id = $(obj).data('id');
            $.ajax({
                'type':'get',
                'url':'setPraise',
                'dataType':'json',
                'data':{'id':id},
                'success':function(e) {
                    if(e.s=='success') {
                        $(obj).next().html(e.num);
                    } else {
                        alert(e.msg);
                    }
                }
            });
        }
            
        </script>
        <?php if($this->iswap==0):?>
        <script type="text/javascript" src="/themes/v2/static/album/js/compressed.js"></script>
        <script type="text/javascript">
        $('slideshow').style.display='none';
        $('wrapper').style.display='block';
        var slideshow=new TINY.slideshow("slideshow");
        window.onload=function(){
            slideshow.auto=true;
            slideshow.speed=5;
            slideshow.link="linkhover";
            slideshow.info="information";
            slideshow.thumbs="slider";
            slideshow.left="slideleft";
            slideshow.right="slideright";
            slideshow.scrollSpeed=4;
            slideshow.spacing=5;
            slideshow.active="#fff";
            slideshow.init("slideshow","image","imgprev","imgnext","imglink");
        }
        </script>
    <?php endif;?>