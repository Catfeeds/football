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
    .notshow {
        display: none;
    }
</style>
<section class="container" style="<?=$this->iswap?'padding-left: 15px;padding-right: 15px;':''?>">
           
            <div class="content-wrap">
                <div class="content">
                <?php if($this->iswap==0):?>
                    <ol class="breadcrumb container" style="<?=$this->iswap?'':'width: 730px !important;'?>">
                        <li class="home"><i class="fa fa-home"></i> <a href="<?=$this->createUrl('/home/index/index')?>">首页&nbsp;&gt;&nbsp;</a></li>
                        <li class="active"> <a href="<?=$this->createUrl('/home/album/list')?>">图库列表</a> &gt;<?php if($cate = $info->cate):?><a href="<?=$this->createUrl('/image/'.Pinyin::get($cate->name))?>"><?=$cate->name?></a> &gt;<?php endif;?> <?=$info->title?></li>
                    </ol>
                    <?php endif;?>
                    <header class="article-header">
                        <h1 class="article-title" style="font-size: <?=$this->iswap?'20':'26'?>px;word-wrap:break-word;word-break: normal;";><?=$info->title?></h1>
                        <br>
                        <div class="meta">
                            <?php if($info->cid):?><span id="mute-category" class="muted"><i class="fa fa-list-alt"></i><a href="<?=$this->createUrl('/image/'.Pinyin::get($info->cate->name))?>"> <?=$info->cate->name?></a></span> <span class="muted"><i class="fa fa-user"></i> </span><?php endif;?>
                            <span class="muted"><i class="fa fa-eye"></i><?=$info->hits?></span>
                            <time class="muted"><i class="fa fa-clock-o"></i> <?=date('Y-m-d H:i:s',$info->updated)?></time>
                            <span class="muted"><i class="fa fa-comments-o"></i> <?=$info->comment_num?>评论</span> </div>
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
                            <br>
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
                                <span class="notshow"><?=$value['name']?></span>
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
       <li class="related_box" style="<?=$key%2?'':'margin-left: 0'?>">
        <a href="<?=$this->createUrl('info',['id'=>$value->id])?>" title="<?=$value->title?>" target="_blank">
        <img src="<?=ImageTools::fixImage($value->album?$value->album[0]['url']:'')?>" style="width: 185px;height: 110px" ><br><span class="r_title"><?=Tools::u8_title_substr($value->title,40)?></span></a>
        </li>
    <?php }?>
    </ul>
</div>      </div>
   <?php  }?>
    <div id="respond" class="no_webshot">
                        <form action="" method="post" id="commentform">
                            <div class="comt-title">
                                <div class="comt-avatar pull-left">
                                    <img alt='' src='<?=isset($this->user->image)?ImageTools::fixImage($this->user->image):ImageTools::fixImage(SiteExt::getAttr('qjpz','userImg'))?>' class='avatar avatar-54 photo' height='54' width='54' /> </div>
                                <div class="comt-author pull-left">
                                    <?=$this->user?$this->user->name:''?> <span>发表我的评论</span> &nbsp; </div>
                                <a id="cancel-comment-reply-link" class="pull-right" href="javascript:;">取消评论</a>
                            </div>
                            <div class="comt">
                                <div class="comt-box" onclick="check_uid()">
                                    <textarea placeholder="写点什么..." class="input-block-level comt-area" name="comment" id="comment" cols="100%" rows="3" tabindex="1" onkeydown="if(event.ctrlKey&amp;&amp;event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
                                    <div class="comt-ctrl">
                                        <button class="btn btn-primary pull-right" type="submit" name="submit" id="submit" tabindex="5"><i class="fa fa-check-square-o"></i> 提交评论</button>
                                        <div class="comt-tips pull-right">
                                            <input type='hidden' name='comment_post_ID' value='<?=$info->id?>' id='comment_post_ID' />
                                            <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                            <input type='hidden' name='type' id='type' value='2' />
                                            <p style="display: none;">
                                                <input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="1c0ce1ceba" />
                                            </p>
                                            <p style="display: none;">
                                                <input type="hidden" id="ak_js" name="ak_js" value="7" />
                                            </p>
                                        </div>
                                        <!-- <span data-type="comment-insert-smilie" class="muted comt-smilie"><i class="fa fa-smile-o"></i> 表情</span> -->
                                        <span class="muted comt-mailme"><label for="comment_mail_notify" class="checkbox inline" style="padding-top:0"><input type="checkbox" name="comment_mail_notify" id="comment_mail_notify" value="comment_mail_notify" checked="checked"/>有人回复时邮件通知我</label></span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="postcomments" style="<?=$this->iswap==0?'width: 760px':''?>">
                        <div id="comments">
                            <i class="fa fa-comments-o"></i> <b> (<?=$info->comment_num?>)</b>个小伙伴在吐槽
                        </div>
                        <ol class="commentlist">
                        <?php foreach ($info->comments as $key => $value) { $user = $value->user ?>
                            <li class="comment even thread-even depth-2" id="comment-<?=$value->id?>">
                                <div class="c-avatar"><img alt='' srcset='<?=ImageTools::fixImage($user->image)?>' class='avatar avatar-54 photo' height='54' width='54' />
                                    <div class="c-main" id="div-comment-<?=$value->id?>"><?=$value->content?>
                                        <?php if($obj = $value->getObj()):?>
                                        <div style="    margin-left: 20px;background-color: #eee;padding-left: 10px;padding-top: 5px;color: #999;font-size: small">
                                            <?=$obj->content?>
                                            <div class=""><span class="c-author"><?=$obj->user->name?></span><?=Tools::friendlyDate($obj->created)?> </div>
                                        </div>
                                        <?php endif;?>
                                        <div class="c-meta"><span class="c-author"><a href='' rel='external nofollow' class='url'><?=$user->name?></a></span><?=Tools::friendlyDate($value->created)?> <a rel='nofollow' class='comment-reply-link' href='' onclick='return addComment.moveForm( "div-comment-<?=$value->id?>", "<?=$value->id?>", "respond", "<?=$info->id?>" )'>回复</a><span style="float: right"><a data-id="<?=$value->id?>" onclick="setp(this)">点赞</a>(<span><?=$value->praise?></span>)</span></div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                        </ol>
                        <div class="commentnav">
                        </div>
                    </div>
    
                    
                    
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
                window.location.href = '<?=$this->createUrl('/home/user/index')?>';
                $('textarea').attr('disabled','disabled');
            <?php endif;?>
        }
        function setp(obj) {
            var id = $(obj).data('id');
            $.ajax({
                'type':'get',
                'url':'/setPraise',
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