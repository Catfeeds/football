<?php 
    Yii::app()->clientScript->registerCssFile("/wp-content/themes/sky1.0/share.css");
    if($this->iswap==0)
        Yii::app()->clientScript->registerCssFile("/themes/v2/static/albumnew/css/zzsc.css");
?>
<style type="text/css">
    .article-content li:before {
        content: none !important;
    }
    .ps-current ul{
        margin-left: 0 !important;
        margin-top: 0 !important;
    }
</style>
<section class="container" style="<?=$this->iswap?'padding-left: 15px;padding-right: 15px;':''?>">
           
            <div class="content-wrap">
                <div class="content">
                <?php if($this->iswap==0):?>
                    <ol class="breadcrumb container" style="<?=$this->iswap?'':'width: 760px !important;'?>">
                        <li class="home"><i class="fa fa-home"></i> <a href="<?=$this->createUrl('/home/index/index')?>">首页&nbsp;&gt;&nbsp;</a></li>
                        <li class="active"> <a href="<?=$this->createUrl('/home/album/list')?>">图库列表</a> &gt;<?php if($cate = $info->cate):?><a href="<?=$this->createUrl('/image/'.Pinyin::get($cate->name))?>"><?=$cate->name?></a> &gt;<?php endif;?> <?=$info->title?></li>
                    </ol>
                    <?php endif;?>
                    <header class="article-header">
                        <h1 class="article-title" style="font-size: <?=$this->iswap?'20':'26'?>px;word-wrap:break-word;word-break: normal;";><?=$info->title?></h1>
                        <br>
                        <div class="meta">
                            <?php if($info->cid):?><span id="mute-category" class="muted"><i class="fa fa-list-alt"></i><a href="<?=$this->createUrl('/image/'.Pinyin::get($info->cate->name))?>"> <?=$info->cate->name?></a></span> <span class="muted"><i class="fa fa-user"></i> </span><?php endif;?>
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
                            <img class="alignnone size-full wp-image-160" src="<?=ImageTools::fixImage($value->url)?>" width="697" height="502" sizes="(max-height: 697px) 100vw, 697px">
                            <span>
                                <?=$value['name']?>
                            </span>
                        <?php } ?>
                    <?php endif;?>
                    <?php if($this->iswap==0):?>

                    <div class="cntr mt20">
                            <ul class="pgwSlideshow" >
                            <?php if($imgs) foreach ($imgs as $key => $value) {?>
                                <li><img src="<?=ImageTools::fixImage($value['url'])?>" data-description="<?=$value['name']?>"></li>
                            <?php } ?>
                            </ul>
                        </div>
                <?php endif;?>
                    <style>
                    .popover-content a {
    color: white !important;
}
                    </style> 
                    <span style="font-size: 10px;color: gray">
                                <center> 严禁商业机构或公司转载，违者必究；球迷转载请注明来源“球布斯”</center> 
                                <div class="article-social">
                                <div class="bdsharebuttonbox"></div>
                                    <span class="action action-share bdsharebuttonbox bdshare-button-style0-24" data-bd-bind="1499305983388"><i class="fa fa-share-alt"></i>分享 <div class="action-popover">
                                    <div class="popover top in"><div class="arrow"></div>
                                        <div class="popover-content">

                                            <!-- <a href="#" class="sinaweibo fa fa-weibo" data-cmd="tsina" title="" data-original-title="分享到新浪微博"></a>
                                            <a href="#" class="bds_qzone fa fa-star" data-cmd="qzone" title="" data-original-title="分享到QQ空间"></a>
                                            <a href="#" class="tencentweibo fa fa-tencent-weibo" data-cmd="tqq" title="" data-original-title="分享到腾讯微博"></a>
                                            <a href="#" class="qq fa fa-qq" data-cmd="sqq" title="" data-original-title="分享到QQ好友"></a>
                                            <a href="#" class="bds_renren fa fa-renren" data-cmd="renren" title="" data-original-title="分享到人人网"></a>
                                            <a href="#" class="bds_weixin fa fa-weixin" data-cmd="weixin" title="" data-original-title="分享到微信"></a>
                                            <a href="#" class="bds_more fa fa-ellipsis-h" data-cmd="more" data-original-title="" title=""></a>
                                            <a href=" " class="bds_more" data-cmd="more"></a> -->

                                            <a href="#" class="bds_qzone fa fa-star" data-cmd="qzone" title="分享到QQ空间"></a>
                                            <a href="#" class="bds_tsina sinaweibo fa fa-weibo" data-cmd="tsina" title="分享到新浪微博"></a>
                                            <a href="#" class="bds_tqq tencentweibo fa fa-tencent-weibo" data-cmd="tqq" title="分享到腾讯微博"></a>
                                            <a href="#" class="bds_renren fa fa-renren" data-cmd="renren" title="分享到人人网"></a>
                                            <a href="#" class="bds_weixin fa fa-weixin" data-cmd="weixin" title="分享到微信"></a>
                                        </div>
                                    <script>
                                    window._bd_share_config = {
                                        "common": {
                                            "bdSnsKey": {},
                                            "bdText": "",
                                            "bdMini": "2",
                                            "bdMiniList": false,
                                            "bdPic": "",
                                            "bdStyle": "0",
                                            "bdSize": "16"
                                        },
                                        "share": {},
                                        "image": {
                                            "viewList": ["qzone", "tsina", "tqq", "renren", "weixin"],
                                            "viewText": "分享到：",
                                            "viewSize": "16"
                                        },
                                        "selectShare": {
                                            "bdContainerClass": null,
                                            "bdSelectMiniList": ["qzone", "tsina", "tqq", "renren", "weixin"]
                                        }
                                    };
                                    with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
                                    </script>
                                    </div>
                                    </div></span>   
                                </div>
                            </span>
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
    <span style="   
     text-align: left;
    display: block;
    font-size: 130%;
    /* font-weight: inherit !important; */
    margin: 5px 0;
    font-weight: blod;
    line-height: 35px;">相关图库</span>

    <?php foreach ($rels as $key => $value) {?>
       <li class="related_box">
        <a href="<?=$this->createUrl('info',['id'=>$value->id])?>" title="<?=$value->title?>" target="_blank">
        <img src="<?=ImageTools::fixImage($value->album?$value->album[0]['url']:'')?>" style="width: 185px;height: 110px" ><br><span class="r_title"><?=Tools::u8_title_substr($value->title,40)?></span></a>
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
            <script src="/themes/v2/static/albumnew/js/jquery.min.js" type="text/javascript"></script>
    <?php endif;?>