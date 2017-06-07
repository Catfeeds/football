<?php
  $this->pageTitle = '首页';
?>
<section class="container">
        <div class="speedbar" style="height: 25px;line-height: 25px">
            <div class="top-tip">
                <strong class="text-success"><i class="fa fa-volume-up"></i> </strong><?=SiteExt::getAttr('qjpz','pcIndexGun')?>
            </div>
        </div>
        <div class="content-wrap">
            <div class="content">
                <div class="slick_bor">
                    <script src="<?=Yii::app()->theme->baseUrl?>/static/home/js/responsiveslides.min.js"></script>
                    <ul class="slick" style="<?=$this->imgstyle?>">
                    <?php $imgs = SiteExt::getAttr('qjpz','pcIndexImages');if($imgs) foreach ($imgs as $key => $value) {?>
                        <li>
                            <a href=""><img style="<?=$this->imgstyle?>" class="img_855x300" src="<?=ImageTools::fixImage($value,855,390)?>" alt=""><span></span></a>
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
                <div class="daodu clr">
                    <div class="tip">
                        <h4>精选导读</h4>
                    </div>
                    <ul class="dd-list">
                    <?php if($jpdds) foreach ($jpdds as $key => $value) { $value = $value->getObj();?>
                        <li>
                            <figure class="dd-img">
                                <a title="<?=$value->title?>" target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>">
                                    <img src="<?=ImageTools::fixImage($value->image,168,112)?>" style="display: inline;" /> </a>
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
                    <h4>&nbsp;<?php if($cates) foreach ($cates as $key => $value) {?>
                        <a class="catew1 <?=$value->id==$cid?'wactive':''?>" href="<?=$this->createUrl('/home/index/index',['cid'=>$value->id])?>"><?=$value->name?></a>&nbsp;
                    <?php } ?></h4></header>
                    <?php if($news) foreach ($news as $key => $value) {?>
                        <article class="excerpt">
                    <div class="focus">
                        <a target="_blank" href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>"><img class="thumb" src="<?=ImageTools::fixImage($value->image,200,123)?>" alt="<?=$value->title?>" /></a>
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
            <div class="widget d_textbanner" style="    height: 337px;"><strong class="str1">近期比赛</strong>
            <!-- <h2>放点数据</h2> -->
            <div>
                <ul style="margin-top: 20px">
                <?php if($matchs) foreach ($matchs as $key => $value) {?>
                    <li>
                        <div style="display: inline-flex;width: 100%">
                        <style type="text/css">
                            .c1{
                                width: 40%;
                                margin-left:20px;
                                margin-top:10px;
                                margin-right:10px;
                            }
                            .im1{
                                padding-left: 26px;
                                height: 48px;
                            }
                            .c2{
                                width: 100px;
                                padding-top: 10px
                            }
                            .p1{
                                padding-left: 0 !important;
                                padding-right: 0 !important
                            }
                        </style>
                            <div class="c1">
                                <div class="match-img">
                                    <img class="im1" src="<?=ImageTools::fixImage($value->home_team->image)?>">
                                    <center><span style="font-size: 12px"><?=$value->home_name?></span></center>
                                </div>
                            </div>
                            <div class="c2">
                            <center>
                            <p class="p1" style="padding-bottom: 5px">
                                <span><?=$value->league->name?></span>
                                </p>
                                <p class="p1">
                                <span style="font-size: 30px"><?=$value->home_score.':'.$value->visitor_score?></span>
                                </p>
                                </center>
                            </div>
                            <div class="c1"><img class="im1" src="<?=ImageTools::fixImage($value->visit_team->image)?>">
                            <center><span style="font-size: 12px"><?=$value->visitor_name?></span></center></div>
                        </div>
                    </li>
                    <?php if($key<count($matchs)-1):?>
                    <hr style="margin-top: 5px;margin-bottom: 5px"><?php endif;?>
                <?php } ?>
                </ul>
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
            <div class="widget d_postlist">
                <div class="title">
                    <h2><sapn class="title_span">热门推荐</span></h2></div>
                <ul>
                <?php if($rmtjs) foreach ($rmtjs as $key => $value) { $value = $value->getObj();?>
                   <li><a href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>" title="<?=$value->title?>"><span class="thumbnail" style="border: none"><img src="<?=ImageTools::fixImage($value->image,93,64)?>" /></span><span class="text"><?=$value->title?></span><span class="muted"><?=date('Y-m-d',$value->updated)?></span><span class="muted_1"><?=$value->comment_num?>评论</span></a></li>
                <?php } ?>
                </ul>
            </div>
            <style type="text/css">
                       .tabli1{
                        width: 33% !important;
                       }
                       .tab1{
                        border: none !important;
                       }
                   </style>
            <div class="widget widget_categories d_textbanner"><strong class="str1">积分榜</strong>
               <div class="row" style="width: 90%;margin:0 auto">
                   <ul class="nav nav-tabs" style="margin-bottom: 0px;">
                   <?php if($leas) foreach ($leas as $key => $value) {?>
                       <li class="<?=$key==0?'active':''?> tabli1">
                            <a class="tab1" style="font-size: 14px" href="#tab_1_<?=$key+1?>" data-toggle="tab">
                            <?=$value->name?> </a>
                        </li>
                  <?php  } ?>
                    </ul>
                    <div class="tab-content">
                    <?php foreach ($points as $key => $value) {?>
                        <div class="tab-pane fade <?=$key==0?'active':''?> in" id="tab_1_<?=$key+1?>">
                        <?php if($value): ?>
                            <table class="table table-striped table-hover" style="margin-top: -1px;font-size: 12px">
                                <?php foreach ($value as $v) {?>
                                    <tr>
                                            <td align='center' style="width: 40%"><?=Tools::u8_title_substr($v->team->name,12) ?></td>
                                            <td  align='center'>胜<?=$v->win?>负<?=$v->lose?></td>
                                            <td align='center'><?=$v->points?></td>
                                        </tr>
                                <?php } ?>
                                    </table>
                                <?php endif; ?>
                        </div>
                    <?php } ?>
                    </div>
               </div>
            </div>
           <!--  <div class="widget d_banner">
                <div class="d_banner_inner"><img class="alignnone size-full wp-image-516" src="http://demo5.ledkongzhiqi.com/wp-content/uploads/2016/02/t01605ab9200e1b43f8.jpg" alt="ddy" width="308"></div>
            </div>
            <div class="widget d_tag">
                <div class="title">
                    <h2><sapn class="title_span">标签云</span></h2></div>
                <div class="d_tags"><a title="2个话题" href="http://demo7.ledkongzhiqi.com/tag/css">CSS (2)</a><a title="2个话题" href="http://demo7.ledkongzhiqi.com/tag/jquery">jquery (2)</a><a title="1个话题" href="http://demo7.ledkongzhiqi.com/tag/html">HTML (1)</a><a title="1个话题" href="http://demo7.ledkongzhiqi.com/tag/php">PHP (1)</a><a title="1个话题" href="http://demo7.ledkongzhiqi.com/tag/javascript">JavaScript (1)</a><a title="1个话题" href="http://demo7.ledkongzhiqi.com/tag/mysql">MySQL (1)</a><a title="1个话题" href="http://demo7.ledkongzhiqi.com/tag/%e4%ba%92%e8%81%94%e7%bd%91">互联网 (1)</a><a title="1个话题" href="http://demo7.ledkongzhiqi.com/tag/%e5%89%8d%e7%ab%af%e5%bc%80%e5%8f%91">前端开发 (1)</a><a title="1个话题" href="http://demo7.ledkongzhiqi.com/tag/%e7%a7%bb%e5%8a%a8%e5%bc%80%e5%8f%91">移动开发 (1)</a><a title="1个话题" href="http://demo7.ledkongzhiqi.com/tag/html5">HTML5 (1)</a><a title="1个话题" href="http://demo7.ledkongzhiqi.com/tag/%e6%a0%b7%e5%bc%8f">样式 (1)</a></div>
            </div>
            <div class="widget d_subscribe">
                <div class="title">
                    <h2><sapn class="title_span">邮件订阅</span></h2></div>
                <form action="http://list.qq.com/cgi-bin/qf_compose_send" target="_blank" method="post">
                    <p>订阅精彩内容</p>
                    <input type="hidden" name="t" value="qf_booked_feedback" />
                    <input type="hidden" name="id" value="" />
                    <input type="email" name="to" class="rsstxt" placeholder="your@email.com" value="" required />
                    <input type="submit" class="rssbutton" value="订阅" />
                </form>
            </div> -->
            <div class="widget d_comment">
                <div class="title">
                    <h2><sapn class="title_span">最新评论</span></h2></div>
                <ul>
                <?php if($comms) foreach ($comms as $key => $value) { $user = $value->user?>
                <li>
                        <a href="#" ><img alt='' src='<?=ImageTools::fixImage($user->image)?>' class='avatar avatar-36 pehoto'  height='36' width='36' />
                            <div class="muted"><i><?=$user->name?></i>&nbsp;&nbsp;于 <?=Tools::friendlyDate($value->created)?> 说：
                                <br/><?=Tools::u8_title_substr($value->content,40) ?></div>
                        </a>
                    </li>
               <?php } ?>
                </ul>
            </div>
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
