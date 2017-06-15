<?php 
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/match-index.css");
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/match-common.css");
?>
<section class="container">
<div class="ls-recommand" id="ls-recommand" style="height: 600px">
        <div class="recom-wrap wrap">
            <div class="recom-border">
                <div class="recom-content" style="padding-top: 20px">
                    <div style="height: 22px"><form method="get"><input style="    background-color: #2f889a;float: right;border: none;color: white;" type="submit" value="搜索"></input><input style="height:20px;border:none;float: right;width: 140px" type="date" name="time" value="<?=$time?date('Y-m-d',$time):''?>" ><?=CHtml::dropDownList('lid',$lid,CHtml::listData(LeagueExt::model()->normal()->findAll(),'id','name'),['style'=>'float:right;height:20px;width:100px;border:none','empty'=>'选择联赛'])?></form></div><br>
                    <p class="time">今天是：<?=date('Y-m-d',time())?><a style="float: right" href="<?=$this->createUrl('/home/match/index')?>" class="btn blue">所有比赛</a><a style="float: right" href="<?=$this->createUrl('/home/match/index',['time'=>date('Y-m-d',time())])?>" class="btn blue">今日比赛</a></p>
                    <div class="recom-list">
                        <div class="compet-list">
                            <ul>
                            <?php if($matchs) foreach ($matchs as $key => $value) { $league = $value->league;$d='';if($value->time<=TimeTools::getDayEndTime() && $value->time>=TimeTools::getDayBeginTime())$d = '今日';elseif($value->time<=TimeTools::getDayEndTime(time()-86400) && $value->time>=TimeTools::getDayBeginTime(time()-86400))$d='昨日';elseif ($value->time<=TimeTools::getDayEndTime(time()+86400) && $value->time>=TimeTools::getDayBeginTime(time()+86400)) {
                                $d='明日';
                            } ?>
                                <li class="match-recommend event-<?=$value->id?> <?=$key==0?'active':''?>" data-sid="" data-time="">
                                    <i></i>
                                    <div class="list-now-wrap">
                                        <div class="recom-list-now">
                                            <i class="icon-line_vertical_r"></i>
                                            <div class="compet-name">
                                                <span><b><?=date('h:s',$value->time)?></b><b><?=date('m-d',$value->time)?></b></span><span><b><i class="icon-matchflag_Country" style="background-image:url(<?=ImageTools::fixImage($league->image)?>)"></i><?=$league->name?></b></span><a href="javascript:;"><i><?=$d?></i><span class="no-border vs-name"><i></i><?=$value->home_name?> &nbsp;&nbsp;<?php if($value->time>time()):?>未开赛<?php else:?><?=$value->home_score?> : <?=$value->visitor_score?><?php endif;?>&nbsp;&nbsp; <?=$value->visitor_name?></span></a>
                                            </div>
                                            <div class="btn-wrap" style="margin-right: 20px">
                                                <span class="no-border now-time"></span><?php if($videos = $value->videos) foreach ($videos as $k => $v) {?>
                                                    <a href="<?=$v->link?>">直播地址<?=$k+1?></a>&nbsp;
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                           <?php  } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>