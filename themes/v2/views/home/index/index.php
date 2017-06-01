<?php
  $this->pageTitle = '首页';
?>
<section class="container">
        <div class="speedbar" style="height: 25px;line-height: 25px">
            <div class="top-tip">
                <strong class="text-success"><i class="fa fa-volume-up"></i> </strong>懂球帝新版上线啦！
            </div>
        </div>
        <div class="content-wrap">
            <div class="content">
                <div class="slick_bor">
                    <script src="<?=Yii::app()->theme->baseUrl?>/static/home/js/responsiveslides.min.js"></script>
                    <ul class="slick">
                    <?php $imgs = SiteExt::getAttr('qjpz','pcIndexImages');if($imgs) foreach ($imgs as $key => $value) {?>
                        <li>
                            <a href=""><img class="img_855x300" src="<?=ImageTools::fixImage($value,855,300)?>" alt=""><span></span></a>
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
                        <li>
                            <figure class="dd-img">
                                <a title="Google Chrome终于支持CSS Variables了！" target="_blank" href="http://demo7.ledkongzhiqi.com/css/105.html">
                                    <img src="http://demo7.ledkongzhiqi.com/wp-content/themes/sky1.0/timthumb.php?src=http://demo7.ledkongzhiqi.com/wp-content/uploads/2016/02/28-1.jpg&q=90&zc=1&ct=1&h=112&w=168" style="display: inline;" alt="Google Chrome终于支持CSS Variables了！" /> </a>
                            </figure>
                            <div class="dd-content">
                                <h2 class="dd-title"> <a rel="bookmark" title="Google Chrome终于支持CSS Variables了！" href="http://demo7.ledkongzhiqi.com/css/105.html">Google Chrome终于支持CSS Variables了！</a> </h2>
                                <div class="dd-site xs-hidden">
                                    这篇文章要报道的并不是“新闻”，因为W3C早已开始着手CSS变量（又称 自定义...</div>
                            </div>
                        </li>
                        <li>
                            <figure class="dd-img">
                                <a title="CSS代码重构与优化之路" target="_blank" href="http://demo7.ledkongzhiqi.com/zhuti/91.html">
                                    <img src="http://demo7.ledkongzhiqi.com/wp-content/themes/sky1.0/timthumb.php?src=http://demo7.ledkongzhiqi.com/wp-content/uploads/2016/01/QQ截图20160403161243.jpg&q=90&zc=1&ct=1&h=112&w=168" style="display: inline;" alt="CSS代码重构与优化之路" /> </a>
                            </figure>
                            <div class="dd-content">
                                <h2 class="dd-title"> <a rel="bookmark" title="CSS代码重构与优化之路" href="http://demo7.ledkongzhiqi.com/zhuti/91.html">CSS代码重构与优化之路</a> </h2>
                                <div class="dd-site xs-hidden">写CSS的同学们往往会体会到，随着项目规模的增加，项目中的CSS代码也会越来越多...</div>
                            </div>
                        </li>
                        <li>
                            <figure class="dd-img">
                                <a title="如何选择html5 移动开发公司" target="_blank" href="http://demo7.ledkongzhiqi.com/zhuti/75.html">
                                    <img src="http://demo7.ledkongzhiqi.com/wp-content/themes/sky1.0/timthumb.php?src=http://demo7.ledkongzhiqi.com/wp-content/uploads/2016/02/38dbb6fd5266d01608d37e4e902bd40734fa3589.jpg&q=90&zc=1&ct=1&h=112&w=168" style="display: inline;" alt="如何选择html5 移动开发公司" /> </a>
                            </figure>
                            <div class="dd-content">
                                <h2 class="dd-title"> <a rel="bookmark" title="如何选择html5 移动开发公司" href="http://demo7.ledkongzhiqi.com/zhuti/75.html">如何选择html5 移动开发公司</a> </h2>
                                <div class="dd-site xs-hidden">
                                    随着移动设备越来越先进，对html5 移动开发的支持度越来越高，我们进军移动领...</div>
                            </div>
                        </li>
                        <li>
                            <figure class="dd-img">
                                <a title="如何看待HTML5抓住微信应用号千亿级市场！" target="_blank" href="http://demo7.ledkongzhiqi.com/zhuti/73.html">
                                    <img src="http://demo7.ledkongzhiqi.com/wp-content/themes/sky1.0/timthumb.php?src=http://demo7.ledkongzhiqi.com/wp-content/uploads/2016/01/193812552249-1.jpg&q=90&zc=1&ct=1&h=112&w=168" style="display: inline;" alt="如何看待HTML5抓住微信应用号千亿级市场！" /> </a>
                            </figure>
                            <div class="dd-content">
                                <h2 class="dd-title"> <a rel="bookmark" title="如何看待HTML5抓住微信应用号千亿级市场！" href="http://demo7.ledkongzhiqi.com/zhuti/73.html">如何看待HTML5抓住微信应用号千亿级市场！</a> </h2>
                                <div class="dd-site xs-hidden">不久前，“微信之父”张小龙轻描淡写的宣布了计划推出“应用号”的消息，激起了千层浪...</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <header class="archive-header">
                    <h1>最新发布</h1></header>
                <article class="excerpt">
                    <div class="focus">
                        <a target="_blank" href="http://demo7.ledkongzhiqi.com/mysql/119.html"><img class="thumb" src="http://demo7.ledkongzhiqi.com/wp-content/themes/sky1.0/timthumb.php?src=http://www.cuizl.com/wp-content/uploads/2016/03/2016030103410612.jpg&h=150&w=220&q=90&zc=1&ct=1" alt="DTCC 2016:MySQL中国组主席谈DBA的炼成" /></a>
                    </div>
                    <header><a class="label label-important" href="http://demo7.ledkongzhiqi.com/category/mysql">mysql<i class="label-arrow"></i></a>
                        <h2><a target="_blank" href="http://demo7.ledkongzhiqi.com/mysql/119.html" title="DTCC 2016:MySQL中国组主席谈DBA的炼成">DTCC 2016:MySQL中国组主席谈DBA的炼成  </a></h2>
                    </header>
                    <p class="auth-span">
                        <span class="muted"><i class="fa fa-clock-o"></i> 2016-02-25</span> <span class="muted"><i class="fa fa-eye"></i> 2606℃</span> <span class="muted"><i class="fa fa-comments-o"></i> <a target="_blank" href="http://demo7.ledkongzhiqi.com/mysql/119.html#comments">2评论</a></span></p>
                    <span class="note"> 【IT168 专稿】高速发展的互联网推动着大数据云计算的成熟以及行业变革，而互联网的发展少不了MySQL的支撑，作为市场占有率排名前三的数据库，MySQL随着WEB2.0的兴起而...</span>
                </article>
               
                <div class="pagination">
                    <ul>
                        <li class="prev-page"></li>
                        <li class="active"><span>1</span></li>
                        <li><a href='http://demo7.ledkongzhiqi.com/page/2'>2</a></li>
                        <li class="next-page"><a href="http://demo7.ledkongzhiqi.com/page/2">下一页</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <aside class="sidebar">
            <div class="widget widget_text">
                <div class="textwidget">
                    <div class="social">
                        <a href="000" rel="external nofollow" title="新浪微博" target="_blank"><i class="sinaweibo fa fa-weibo"></i></a><a href="" rel="external nofollow" title="腾讯微博" target="_blank"><i class="tencentweibo fa fa-tencent-weibo"></i></a><a class="weixin"><i class="weixins fa fa-weixin"></i><div class="weixin-popover"><div class="popover bottom in"><div class="arrow"></div><div class="popover-title">订阅号“0000”</div><div class="popover-content"><img src="http://demo7.ledkongzhiqi.com/wp-content/themes/sky1.0/img/weixin.gif" ></div></div></div></a><a href="tencent://message/?uin=458940846&Site=&Menu=yes" rel="external nofollow" title="联系QQ" target="_blank"><i class="qq fa fa-qq"></i></a><a href="" rel="external nofollow" target="_blank" title="订阅本站"><i class="rss fa fa-rss"></i></a></div>
                </div>
            </div>
            <div class="widget d_textbanner"><a class="style01" href="http://www.cuizl.com/bokezhuti/1822.html#6677"><strong>近期比赛</strong>
            <!-- <h2>放点数据</h2> -->
            <p>SKY wordpress主题是翠竹林当前使用的主题，是翠竹林积累多年wordpress主题经验设计而成，更加扁平的风格和干净，白色的架构会让网站显得内涵而出色..SKY wordpress主题是翠竹林当前使用的主题，是翠竹林积累多年wordpress主题经验设计而成，更加扁平的风格和干净，白色的架构会让网站显得内涵而出色...</p>
            </a></div>
            <!-- <div class="widget widget_umucenter form-inline">
                <li><span class="local-account"><a data-sign="0" class="btn btn-primary user-login"><i class="fa fa-wordpress"></i>本地帐号</a></span><span class="other-sign"><a class="qqlogin btn" href="http://demo7.ledkongzhiqi.com/?connect=qq&action=login&redirect=http%3A%2F%2Fdemo7.ledkongzhiqi.com%2Fcategory%2Fcss"><i class="fa fa-qq"></i><span>QQ 登 录</span></a>
                    </span><span class="other-sign"><a class="weibologin btn" href="http://demo7.ledkongzhiqi.com/?connect=weibo&action=login&redirect=http%3A%2F%2Fdemo7.ledkongzhiqi.com%2Fcategory%2Fcss"><i class="fa fa-weibo"></i><span>微博登录</span></a>
                    </span>
                </li>
            </div> -->
            <div class="widget d_banner">
                <div class="d_banner_inner">
                    <a href="http://www.cuizl.com/bokezhuti/1761.html#5566" target="_blank" title="垂直自媒体wordpress博客主题：Geek"><img src="http://www.cuizl.com/wp-content/uploads/2016/04/2016050208553249.jpg" alt="棕红色响应式垂直自媒体wordpress博客主题：Geek"><span></span></a>
                </div>
            </div>
            <div class="widget d_postlist">
                <div class="title">
                    <h2><sapn class="title_span">热门推荐</span></h2></div>
                <ul>
                    <li><a href="http://demo7.ledkongzhiqi.com/mysql/119.html" title="DTCC 2016:MySQL中国组主席谈DBA的炼成"><span class="thumbnail"><img src="http://demo7.ledkongzhiqi.com/wp-content/themes/sky1.0/timthumb.php?src=http://www.cuizl.com/wp-content/uploads/2016/03/2016030103410612.jpg&h=86&w=125&q=90&zc=1&ct=1" alt="DTCC 2016:MySQL中国组主席谈DBA的炼成" /></span><span class="text">DTCC 2016:MySQL中国组主席谈DBA的炼成</span><span class="muted">2016-02-25</span><span class="muted_1">2评论</span></a></li>
                    <li><a href="http://demo7.ledkongzhiqi.com/html/53.html" title="WordPress页面链接添加.html后缀"><span class="thumbnail"><img src="http://demo7.ledkongzhiqi.com/wp-content/themes/sky1.0/timthumb.php?src=http://demo7.ledkongzhiqi.com/wp-content/uploads/2016/02/2016-07-0754.jpg&h=86&w=125&q=90&zc=1&ct=1" alt="WordPress页面链接添加.html后缀" /></span><span class="text">WordPress页面链接添加.html后缀</span><span class="muted">2016-01-18</span><span class="muted_1">1评论</span></a></li>
                    <li><a href="http://demo7.ledkongzhiqi.com/zhuti/77.html" title="HTML5响应式网站给我们的生活带来哪些改变"><span class="thumbnail"><img src="http://demo7.ledkongzhiqi.com/wp-content/themes/sky1.0/timthumb.php?src=http://demo7.ledkongzhiqi.com/wp-content/uploads/2016/01/193812552249-1.jpg&h=86&w=125&q=90&zc=1&ct=1" alt="HTML5响应式网站给我们的生活带来哪些改变" /></span><span class="text">HTML5响应式网站给我们的生活带来哪些改变</span><span class="muted">2016-01-26</span><span class="muted_1">1评论</span></a></li>
                    <li><a href="http://demo7.ledkongzhiqi.com/css/105.html" title="Google Chrome终于支持CSS Variables了！"><span class="thumbnail"><img src="http://demo7.ledkongzhiqi.com/wp-content/themes/sky1.0/timthumb.php?src=http://demo7.ledkongzhiqi.com/wp-content/uploads/2016/02/28-1.jpg&h=86&w=125&q=90&zc=1&ct=1" alt="Google Chrome终于支持CSS Variables了！" /></span><span class="text">Google Chrome终于支持CSS Variables了！</span><span class="muted">2016-02-25</span><span class="muted_1">1评论</span></a></li>
                    <li><a href="http://demo7.ledkongzhiqi.com/zhuti/93.html" title="避免使用复杂的选择器，层级越少越好"><span class="thumbnail"><img src="http://demo7.ledkongzhiqi.com/wp-content/themes/sky1.0/timthumb.php?src=http://demo7.ledkongzhiqi.com/wp-content/uploads/2016/02/28-1.jpg&h=86&w=125&q=90&zc=1&ct=1" alt="避免使用复杂的选择器，层级越少越好" /></span><span class="text">避免使用复杂的选择器，层级越少越好</span><span class="muted">2016-02-17</span><span class="muted_1">1评论</span></a></li>
                </ul>
            </div>
            <div class="widget widget_categories">
                <div class="title">
                    <h2><sapn class="title_span">分类目录</span></h2></div>
                <ul>
                    <li class="cat-item cat-item-3"><a href="http://demo7.ledkongzhiqi.com/category/css">css</a>
                    </li>
                    <li class="cat-item cat-item-2"><a href="http://demo7.ledkongzhiqi.com/category/html">html</a>
                    </li>
                    <li class="cat-item cat-item-4"><a href="http://demo7.ledkongzhiqi.com/category/javascript">JavaScript</a>
                    </li>
                    <li class="cat-item cat-item-5"><a href="http://demo7.ledkongzhiqi.com/category/jquery">jquery</a>
                    </li>
                    <li class="cat-item cat-item-7"><a href="http://demo7.ledkongzhiqi.com/category/mysql">mysql</a>
                    </li>
                    <li class="cat-item cat-item-6"><a href="http://demo7.ledkongzhiqi.com/category/php">php</a>
                    </li>
                    <li class="cat-item cat-item-1"><a href="http://demo7.ledkongzhiqi.com/category/zhuti">wordpress主题</a>
                    </li>
                    <li class="cat-item cat-item-8"><a href="http://demo7.ledkongzhiqi.com/category/qianduan">前端开发</a>
                    </li>
                </ul>
            </div>
            <div class="widget d_banner">
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
            </div>
            <div class="widget d_comment">
                <div class="title">
                    <h2><sapn class="title_span">最新评论</span></h2></div>
                <ul>
                    <li>
                        <a href="http://demo7.ledkongzhiqi.com/php/114.html#comment-576" title="PHP 7.0.2正式版发布：WordPress速度提升3倍！上的评论"><img alt='' data-original='http://demo7.ledkongzhiqi.com/avatar/36*b1ba69f855c62a7033283fbb625b9950.jpg' srcset='http://demo7.ledkongzhiqi.com/avatar/72*b1ba69f855c62a7033283fbb625b9950.jpg' class='avatar avatar-36 photo' height='36' width='36' />
                            <div class="muted"><i>不错</i>&nbsp;&nbsp;9个月前 (08-28)说：
                                <br/>很简介的wordpress主题</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://demo7.ledkongzhiqi.com/zhuti/93.html#comment-574" title="避免使用复杂的选择器，层级越少越好上的评论"><img alt='' data-original='http://demo7.ledkongzhiqi.com/avatar/36*f7ae1a9208bf91d706c76e2bf022a992.jpg' srcset='http://demo7.ledkongzhiqi.com/avatar/72*f7ae1a9208bf91d706c76e2bf022a992.jpg' class='avatar avatar-36 photo' height='36' width='36' />
                            <div class="muted"><i>翠竹林</i>&nbsp;&nbsp;9个月前 (08-26)说：
                                <br/>顶一下</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://demo7.ledkongzhiqi.com/mysql/119.html#comment-573" title="DTCC 2016:MySQL中国组主席谈DBA的炼成上的评论"><img alt='' data-original='http://demo7.ledkongzhiqi.com/avatar/36*f7ae1a9208bf91d706c76e2bf022a992.jpg' srcset='http://demo7.ledkongzhiqi.com/avatar/72*f7ae1a9208bf91d706c76e2bf022a992.jpg' class='avatar avatar-36 photo' height='36' width='36' />
                            <div class="muted"><i>翠竹林</i>&nbsp;&nbsp;10个月前 (08-15)说：
                                <br/>顶一下</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="widget widget_text">
                <div class="title">
                    <h2><sapn class="title_span">友情链接</span></h2></div>
                <div class="textwidget">
                    <div class="d_tags_1"> <a target="_blank" href="http://www.cuizl.com/">翠竹林wordpress主题</a> <a target="_blank" href="http://www.zhixin99.com/">知新SEO</a> </div>
                </div>
            </div>
        </aside>
    </section>
    <div class="branding branding-black">
        <div class="container_f">
            <h2>高效，专业，符合SEO</h2><a class="btn btn-lg" href="tencent://message/?uin=458940846&Site=&Menu=yes" target="_blank">联系我们</a> </div>
    </div>
