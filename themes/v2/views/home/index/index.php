<?php
  $this->pageTitle = '首页';
?>
<section class="container">
        <div class="speedbar" style="height: 25px;line-height: 25px">
            <div class="top-tip">
                <strong class="text-success"><i class="fa fa-volume-up"></i> </strong><?=SiteExt::getAttr('qjpz','pcIndexGun')?>
            </div>
        </div>
        <?php $nopic = SiteExt::getAttr('qjpz','newsImg')?>
        <div class="content-wrap">
            <div class="content">
                <div class="slick_bor">
                    <script src="<?=Yii::app()->theme->baseUrl?>/static/home/js/responsiveslides.min.js"></script>
                    <ul class="slick" style="<?=$this->imgstyle?>">
                    <?php $objs = RecomExt::getObjFromCate('3','3');if($objs) foreach ($objs as $key => $value) { $obj = $value->getObj(); ?>
                        <li>
                            <a href="<?=$this->createUrl('/home/news/info',['id'=>$obj->id])?>"><img style="<?=$this->imgstyle?>" class="img_855x300" src="<?=ImageTools::fixImage($obj->image,855,390)?>" alt=""><span></span></a><span style="width: 100%;padding-left:  10px;background-color: rgba(0,0,0,0.5);height: 40px;bottom: 0px;font: 700 20px/30px 'Microsoft Yahei';"><?=$obj->title?></span>
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
                <div class="daodu clr">
                    <div class="tip">
                        <h4>精选导读</h4>
                    </div>
                    <ul class="dd-list">
                    <?php if($jpdds) foreach ($jpdds as $key => $value) { $value = $value->getObj();?>
                        <li>
                            <figure class="dd-img">
                                <a title="<?=$value->title?>" target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>">
                                    <img src="<?=ImageTools::fixImage($value->image?$value->image:$nopic,168,112)?>" style="display: inline;" /> </a>
                            </figure>
                            <div class="dd-content">
                                <h2 class="dd-title"> <a rel="bookmark" title="<?=$value->title?>" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>"><?=Tools::u8_title_substr($value->title,60)?></a> </h2>
                                <div class="dd-site xs-hidden">
                                    <?=Tools::u8_title_substr($value->descpt,60)?></div>
                            </div>
                        </li>
                   <?php } ?>
                        
                    </ul>
                </div>
            <?php endif;?>
                <style type="text/css">
                    .catew1{
                        color: #999;
                        font-family: 黑体;
                    }
                    .wactive{
                        color: rgb(128,201,165);
                    }
                </style>
                <header class="archive-header">
                    <h4><a class="catew1 <?=!$cid?'wactive':''?>" href="<?=$this->createUrl('/home/index/index')?>"><?='全部'?></a>&nbsp;<?php if($cates) foreach ($cates as $key => $value) {?>
                        <a class="catew1 <?=$value->id==$cid?'wactive':''?>" href="<?=$this->createUrl('/home/index/index',['cid'=>$value->id])?>"><?=$value->name?></a>&nbsp;
                    <?php } ?></h4></header>
                    <?php if($news) foreach ($news as $key => $value) {?>
                        <article class="excerpt">
                    <div class="focus">
                        <a target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>"><img style="width: 200px"  class="thumb" src="<?=ImageTools::fixImage($value->image?$value->image:$nopic,200,123)?>" alt="<?=$value->title?>" /></a>
                    </div>
                    <header>
                        <h2><a target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>" title="<?=$value->title?>"><?=Tools::u8_title_substr($value->title,40)?> </a></h2>
                    </header>
                    <p class="auth-span">
                        <span class="muted"><i class="fa fa-clock-o"></i> <?=date('Y-m-d',$value->updated)?></span> <span class="muted"><i class="fa fa-eye"></i> <?=$value->hits?></span> <span class="muted"><i class="fa fa-comments-o"></i> <a target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>"><?=$value->comment_num?>评论</a></span></p>
                    <span class="note"><?=Tools::u8_title_substr($value->descpt,200)?></span>
                </article>
                   <?php } ?>
            </div>
        </div>
        <aside class="sidebar">
            <div class="widget widget_text">
                <div class="textwidget">
                    <div class="social">
                    <style type="text/css">
                        .fa{
                                line-height: initial;
                        }
                        .str1{
                            color: #fff;
                            display: inline-block;
                            font-size: 14px;
                            font-weight: normal;
                            margin: -1px 0 0;
                            padding: 4px 15px;background-color: #428bca;
                        }
                    </style>
                        <a href="http://service.weibo.com/share/share.php?appkey=3206975293&" rel="external nofollow" title="新浪微博" target="_blank"><i class="sinaweibo fa fa-weibo"></i></a><a href="" rel="external nofollow" title="腾讯微博" target="_blank"><i class="tencentweibo fa fa-tencent-weibo"></i></a><a class="weixin"><i class="weixins fa fa-weixin"></i><div class="weixin-popover"><div class="popover bottom in"><div class="arrow"></div><div class="popover-title">微信公众号：<?=SiteExt::getAttr('qjpz','wxgzh')?></div><div class="popover-content"><img src="<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','wx_img'),224,224)?>" ></div></div></div></a><a href="tencent://message/?uin=<?=SiteExt::getAttr('qjpz','qq')?>&Site=&Menu=yes" rel="external nofollow" title="联系QQ" target="_blank"><i class="qq fa fa-qq"></i></a><a href="" rel="external nofollow" target="_blank" title="订阅本站"><i class="rss fa fa-rss"></i></a></div>
                </div>
            </div>
            <!-- <div class="widget widget_umucenter form-inline">
                <li><span class="local-account"><a data-sign="0" class="btn btn-primary user-login"><i class="fa fa-wordpress"></i>本地帐号</a></span><span class="other-sign"><a class="qqlogin btn" href="http://demo7.ledkongzhiqi.com/?connect=qq&action=login&redirect=http%3A%2F%2Fdemo7.ledkongzhiqi.com%2Fcategory%2Fcss"><i class="fa fa-qq"></i><span>QQ 登 录</span></a>
                    </span><span class="other-sign"><a class="weibologin btn" href="http://demo7.ledkongzhiqi.com/?connect=weibo&action=login&redirect=http%3A%2F%2Fdemo7.ledkongzhiqi.com%2Fcategory%2Fcss"><i class="fa fa-weibo"></i><span>微博登录</span></a>
                    </span>
                </li>
            </div> -->
            <!-- <div class="widget d_banner">
                <div class="d_banner_inner">
                    <a href="http://www.cuizl.com/bokezhuti/1761.html#5566" target="_blank" title="垂直自媒体wordpress博客主题：Geek"><img src="http://www.cuizl.com/wp-content/uploads/2016/04/2016050208553249.jpg" alt="棕红色响应式垂直自媒体wordpress博客主题：Geek"><span></span></a>
                </div>
            </div> -->
            <?php $this->widget('CommonRightWidget',$rights)?>
            <!-- <div class="widget widget_text">
                <div class="title">
                    <h2><sapn class="title_span">友情链接</span></h2></div>
                <div class="textwidget">
                    <div class="d_tags_1"> <a target="_blank" href="http://www.cuizl.com/">翠竹林wordpress主题</a> <a target="_blank" href="http://www.zhixin99.com/">知新SEO</a> </div>
                </div>
            </div> -->
        </aside>
    </section>
  <!--   <div class="branding branding-black">
        <div class="container_f">
            <h2>高效，专业，符合SEO</h2><a class="btn btn-lg" href="tencent://message/?uin=458940846&Site=&Menu=yes" target="_blank">联系我们</a> </div>
    </div> -->
