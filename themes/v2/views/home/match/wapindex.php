<?php 
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/wap-match.css");
?>
<style type="text/css">
    .match-ing{
        background-color: white;
    }
</style>
<section class="container">
           <!--  <div class="speedbar">
                <div class="toptip"><strong class="text-success"><i class="fa fa-volume-up"></i> </strong> <?=SiteExt::getAttr('qjpz','pcIndexGun')?></div>
            </div> -->
            <div class="content-wrap">
                <div class="content">
                    <div class="archive-header">
                        <ol class="breadcrumb container" style="<?=$this->iswap?'':'width: 96%'?>">
                        <style type="text/css">
                            .active a{
                                color: #999 !important;
                            }
                        </style>
                            <li class="home"> <a href="<?=$this->createUrl('/home/index/index')?>">&nbsp;球布斯&nbsp;</a></li>
                            <li class=""><a href="">&nbsp;<?='比赛'?>&nbsp;</a></li>
                        </ol>
                    </div>
                    <div id="list">
                        <div class="list-module" id="list_con">
                            <div class="match-box-time">今天是 <?=date('m月d日',time())?></div>
                            <?php if($matchs) foreach ($matchs as $key => $value) { ?>
                                
                            <div class="match-ing" >
                                <div class="match-box">
                                    <div class="match-box-img"> <center><img src="<?=ImageTools::fixImage($value->home_team->image)?>"></center>
                                        <p><?=$value->home_name?></p>
                                    </div>
                                </div>
                                <div class="match-box">
                                    <p style="padding-top:2px"> <span><?=date('h:s',$value->time)?></span> <?=$value->league->name?> </p>
                                    <p>网络直播</p>
                                    <p class="match-score"> <span>                                                <?php if($value->time>time()):?>未开赛<?php else:?><?=$value->home_score?> - <?=$value->visitor_score?><?php endif;?>                           </span>
                                    </p>
                                </div>
                                <div class="match-box">
                                    <div class="match-box-img"> <center><img src="<?=ImageTools::fixImage($value->visit_team->image)?>"></center>
                                        <p><?=$value->visitor_name?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="match-box-time" style="display: block;">比赛日期：<?=date('m月d日',$value->time)?></div>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>