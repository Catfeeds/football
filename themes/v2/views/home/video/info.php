<section class="container">
            <!-- <div class="speedbar">
                <div class="toptip"><strong class="text-success"><i class="fa fa-volume-up"></i> </strong> <?=SiteExt::getAttr('qjpz','pcIndexGun')?></div>
            </div> -->
            <div class="content-wrap">
                <div class="content">
                    <ol class="breadcrumb container" style="width: 96%;">
                        <li class="home"><i class="fa fa-home"></i> <a href="<?=$this->createUrl('/home/index/index')?>">首页&nbsp;&gt;&nbsp;</a></li>
                        <li class="active"> <a href="<?=$this->createUrl('/home/video/list')?>">视频列表</a> &gt; <?=$info->title?></li>
                    </ol>
                    <header class="article-header">
                        <h1 class="article-title" style="font-size: 26px"><?=$info->title?></h1>
                        <div class="meta">
                            <span id="mute-category" class="muted"><i class="fa fa-list-alt"></i><a href="<?=$this->createUrl('/home/news/list',['cid'=>$info->cid])?>"> <?=$info->cate->name?></a></span> <span class="muted"><i class="fa fa-user"></i> <a href=""><?=$info->author?></a></span>
                            <time class="muted"><i class="fa fa-clock-o"></i> <?=date('Y-m-d',$info->created)?></time>
                            <span class="muted"><i class="fa fa-eye"></i><?=$info->hits?></span>
                            <span class="muted"><i class="fa fa-comments-o"></i> <a href="http://demo3.ledkongzhiqi.com/php/114.html#respond"><?=$info->comment_num?>评论</a></span> </div>
                    </header>
                    <article class="article-content" id="content_img">
                    <center><a href="<?=$info->video?>" target="_blank">
                        <div style='width: 600px;height: 400px; '><img src="<?=ImageTools::fixImage($info->image,600,400)?>" style ="width: 600px;height: 400px" width="600px" height="400px"></div>
                        <p>点击播放视频</p>
                    </a></center>
                    </video>
                    <?=$info->content?>
                    </article>
                    <!-- <footer class="article-footer">
                    </footer>
                    <nav class="article-nav">
                        <span class="article-nav-prev"><i class="fa fa-angle-double-left"></i> <a href="http://demo3.ledkongzhiqi.com/jquery/111.html" rel="prev">最受欢迎JavaScript库：jQuery已经10岁啦！</a></span>
                        <span class="article-nav-next"><a href="http://demo3.ledkongzhiqi.com/mysql/119.html" rel="next">DTCC 2016:MySQL中国组主席谈DBA的炼成</a> <i class="fa fa-angle-double-right"></i></span>
                    </nav>
                    <div class="related_top">
                        <div class="related_posts">
                            <ul class="related_img">
                                <h2>猜您还喜欢</h2>
                                <li class="related_box">
                                    <a href="http://demo3.ledkongzhiqi.com/zhuti/95.html" title="精简页面的样式文件，去掉不用的样式" target="_blank">
                                        <img src="http://demo3.ledkongzhiqi.com/wp-content/themes/rivers1.0/timthumb.php?src=http://demo3.ledkongzhiqi.com/wp-content/uploads/2016/02/20160227113231_59344.jpg&amp;h=110&amp;w=185&amp;q=90&amp;zc=1&amp;ct=1" alt="精简页面的样式文件，去掉不用的样式">
                                        <br><span class="r_title">精简页面的样式文件，去掉不用的样式</span></a>
                                </li>
                                <li class="related_box">
                                    <a href="http://demo3.ledkongzhiqi.com/zhuti/77.html" title="HTML5响应式网站给我们的生活带来哪些改变" target="_blank">
                                        <img src="http://demo3.ledkongzhiqi.com/wp-content/themes/rivers1.0/timthumb.php?src=http://demo3.ledkongzhiqi.com/wp-content/uploads/2016/01/cui.jpg&amp;h=110&amp;w=185&amp;q=90&amp;zc=1&amp;ct=1" alt="HTML5响应式网站给我们的生活带来哪些改变">
                                        <br><span class="r_title">HTML5响应式网站给我们的生活带来哪些改变</span></a>
                                </li>
                                <li class="related_box">
                                    <a href="http://demo3.ledkongzhiqi.com/php/73.html" title="如何看待HTML5抓住微信应用号千亿级市场！" target="_blank">
                                        <img src="http://demo3.ledkongzhiqi.com/wp-content/themes/rivers1.0/timthumb.php?src=http://demo3.ledkongzhiqi.com/wp-content/uploads/2016/02/QQ截图20160403172438.jpg&amp;h=110&amp;w=185&amp;q=90&amp;zc=1&amp;ct=1" alt="如何看待HTML5抓住微信应用号千亿级市场！">
                                        <br><span class="r_title">如何看待HTML5抓住微信应用号千亿级市场！</span></a>
                                </li>
                                <li class="related_box">
                                    <a href="http://demo3.ledkongzhiqi.com/zhuti/65.html" title="微商城和微店有什么区别" target="_blank">
                                        <img src="http://demo3.ledkongzhiqi.com/wp-content/themes/rivers1.0/timthumb.php?src=http://demo5.ledkongzhiqi.com/wp-content/uploads/2016/01/QQ截图20160403161243.jpg&amp;h=110&amp;w=185&amp;q=90&amp;zc=1&amp;ct=1" alt="微商城和微店有什么区别">
                                        <br><span class="r_title">微商城和微店有什么区别</span></a>
                                </li>
                                <li class="related_box">
                                    <a href="http://demo3.ledkongzhiqi.com/zhuti/61.html" title="为何要学HTML5开发?HTML5发展前景如何？" target="_blank">
                                        <img src="http://demo3.ledkongzhiqi.com/wp-content/themes/rivers1.0/timthumb.php?src=http://demo3.ledkongzhiqi.com/wp-content/uploads/2016/01/QQ截图20160118112108.png&amp;h=110&amp;w=185&amp;q=90&amp;zc=1&amp;ct=1" alt="为何要学HTML5开发?HTML5发展前景如何？">
                                        <br><span class="r_title">为何要学HTML5开发?HTML5发展前景如何？</span></a>
                                </li>
                                <li class="related_box">
                                    <a href="http://demo3.ledkongzhiqi.com/php/46.html" title="兄弟连PHP培训：如何从崛起走向IT巅峰" target="_blank">
                                        <img src="http://demo3.ledkongzhiqi.com/wp-content/themes/rivers1.0/timthumb.php?src=http://demo3.ledkongzhiqi.com/wp-content/uploads/2016/01/QQ截图20160115152804.png&amp;h=110&amp;w=185&amp;q=90&amp;zc=1&amp;ct=1" alt="兄弟连PHP培训：如何从崛起走向IT巅峰">
                                        <br><span class="r_title">兄弟连PHP培训：如何从崛起走向IT巅峰</span></a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    
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
                                <!-- <div class="comt-comterinfo" id="comment-author-info" style="display:none">
                                    <h4>Hi，您需要填写昵称和邮箱！</h4>
                                    <ul>
                                        <li class="form-inline">
                                            <label class="hide" for="author">昵称</label>
                                            <input class="ipt" type="text" name="author" id="author" value="tivon" tabindex="2" placeholder="昵称"><span class="help-inline">昵称 (必填)</span></li>
                                        <li class="form-inline">
                                            <label class="hide" for="email">邮箱</label>
                                            <input class="ipt" type="text" name="email" id="email" value="123@11.com" tabindex="3" placeholder="邮箱"><span class="help-inline">邮箱 (必填)</span></li>
                                        <li class="form-inline">
                                            <label class="hide" for="url">网址</label>
                                            <input class="ipt" type="text" name="url" id="url" value="" tabindex="4" placeholder="网址"><span class="help-inline">网址</span></li>
                                    </ul>
                                </div> -->
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