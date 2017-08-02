<?php if($this->iswap==0):?>
<style>
    iframe{
        width: auto !important;
    }
</style>
<?php endif;?>
<section class="container">
            <!-- <div class="speedbar">
                <div class="toptip"><strong class="text-success"><i class="fa fa-volume-up"></i> </strong> <?=SiteExt::getAttr('qjpz','pcIndexGun')?></div>
            </div> -->
            <div class="content-wrap">
                <div class="content">
                <?php if($this->iswap==0):?>
                    <ol class="breadcrumb container" style="width: 96%;">
                        <li class="home"><i class="fa fa-home"></i> <a href="<?=$this->createUrl('/home/index/index')?>">首页&nbsp;&gt;&nbsp;</a></li>
                        <li class="active"> <a href="<?=$this->createUrl('/home/video/list')?>">视频列表</a> &gt; <?=$info->title?></li>
                    </ol>
                    <?php endif;?>
                    <header class="article-header">
                        <h1 class="article-title" style="font-size: 26px"><?=$info->title?></h1>
                        <div class="meta">
                            <span class="muted"><i class="fa fa-user"></i> <a href=""><?=$info->author?></a></span>
                            <time class="muted"><i class="fa fa-clock-o"></i> <?=date('Y-m-d',$info->created)?></time>
                            <span class="muted"><i class="fa fa-eye"></i><?=$info->hits?></span>
                            <span class="muted"><i class="fa fa-comments-o"></i> <a href="http://demo3.ledkongzhiqi.com/php/114.html#respond"><?=$info->comment_num?>评论</a></span> </div>
                    </header>
                    <article class="article-content" id="content_img">
                    <?=$info->content?>

                    </article>
                    
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
                        </form>
                    </div>
                    <div id="postcomments">
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
                                        <div class="c-meta"><span class="c-author"><a href='' rel='external nofollow' class='url'><?=$user->name?></a></span><?=Tools::friendlyDate($value->created)?> <a rel='nofollow' class='comment-reply-link' href='' onclick='return addComment.moveForm( "div-comment-<?=$value->id?>", "<?=$value->id?>", "respond", "<?=$info->id?>" )'>回复</a></div>
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
                $('textarea').attr('disabled','disabled');
            <?php endif;?>
        }
            
        </script>