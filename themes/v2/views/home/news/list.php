<section class="container">
            <div class="speedbar">
                <div class="toptip"><strong class="text-success"><i class="fa fa-volume-up"></i> </strong> <?=SiteExt::getAttr('qjpz','pcIndexGun')?></div>
            </div>
            <div class="content-wrap">
                <div class="content">
                    <div class="archive-header">
                        <ol class="breadcrumb container" style="width: 95%">
                        <style type="text/css">
                            .active a{
                                color: #999 !important;
                            }
                        </style>
                            <li class="home"> <a href="<?=$this->createUrl('list')?>">&nbsp;全部&nbsp;</a></li>
                            <?php if($cates) foreach ($cates as $key => $value) {?>
                                <li class="<?=$cid==$key?'active':''?>"><a href="<?=$this->createUrl('list',['cid'=>$key])?>">&nbsp;<?=$value?>&nbsp;</a></li>
                            <?php } ?>
                        </ol>
                    </div>
                    
                    <?php if($infos) foreach ($infos as $key => $value) {?>
                    <article class="excerpt">
                        <header>
                            <h2><a target="_blank" href="<?=$this->createUrl('info',['id'=>$value->id])?>" ><?=Tools::u8_title_substr($value->title,56)?></a></h2>
                        </header>
                        <div class="focus">
                            <a target="_blank" href="<?=$this->createUrl('info',['id'=>$value->id])?>"><img class="thumb" src="<?=ImageTools::fixImage($value->image,200,123)?>" /></a>
                        </div>
                        <span class="note"> <?=Tools::u8_title_substr($value->descpt,280)?></span>
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
            <aside class="sidebar">
            <?php $this->widget('CommonRightWidget',$rights)?>
            </aside>
        </section>