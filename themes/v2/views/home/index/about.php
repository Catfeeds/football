<section class="container">
            <div class="content-wrap">
                <div class="content">
                    <ol class="breadcrumb container" style="width: auto;">
                        <li class="home"><i class="fa fa-home"></i> <a href="<?=$this->createUrl('/home/index/index')?>">球布斯&nbsp;&gt;&nbsp;</a></li>
                        <li class="active"> 关于我们</li>
                    </ol>
                    <article class="article-content" id="content_img">
                    <?=$info?>

                    </article>
                    
                </div>
            </div>
            <aside class="sidebar">
                <div class="widget d_tag">
                <div class="title">
                    <sapn class="title_span" style="padding-left: 0;padding-right: 0"><strong  style="font-weight:normal !important;background-color:#00b7ee;color: white;padding: 4px 15px;">栏目</strong></span></div>
                <div class="d_tags tag1"  style="width: 86%">
                <a style="width: 80%" href="<?=$this->createUrl('/home/index/about')?>"><?='关于我们'?></a>
                <a style="width: 80%" href="<?=$this->createUrl('/home/index/contact')?>"><?='联系我们'?></a>
                <a style="width: 80%"  href="<?=$this->createUrl('/home/news/alltag')?>" >所有标签</a>
                </div>
            </div>
            </aside>
        </section>