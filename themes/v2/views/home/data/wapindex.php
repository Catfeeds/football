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
                            <li class=""><a href="">&nbsp;<?='数据'?>&nbsp;</a></li>
                        </ol>
                    </div>
                    <div id="lables">
                        <div class="lables-list" id="status-list">
                        <?php $get = $_GET;unset( $get['lid']);  if($leas) foreach ($leas as $key => $value) {?>
                            <a href="<?=$this->createUrl('/home/data/index',['lid'=>$value->id]+$get)?>" data-id="1" data-assists="false" data-schedule="true" data-division="false" data-params="1" class="<?=$lid==$value['id']?'active':''?>"><?=$value->name?></a>
                        <?php } ?>
                        </div>
                    </div>
                    <div id="score-nav">
                        <div class="score-nav">
                        <?php foreach ($liarr as $key => $value) {?>
                        <a href="<?=$this->createUrl('/home/data/index',['type'=>$key])?>" class="<?=$type==$key?'active':''?>" style="display: block"><span><?=$value?>
                              </span>
                        <?php } ?>
                        </div>
                    </div>
                    <div id="match-table">
                        <div class="match-table-list">
                            <div class="match-table-line"></div>
                            <table class="cell_data" style="color: #777">
                                <tbody>
                    <?php switch ($type) {
                        case 'p':?>
                        <tr>
                                    <th></th>
                                    <th class="team">球队</th>
                                    <th>场</th>
                                    <th>胜</th>
                                    <th>负</th>
                                    <th>平</th>
                                    <th>进/失</th>
                                    <th>积分</th>
                                </tr>
                           <?php if($points) foreach ($points as $key => $value) {?>
                               
                                <tr>
                                    <!--排名-->
                                    <td class="<?=$key<=1?'top':''?>"><?=$key+1?></td>
                                    <!--球队-->
                                    <td class="team"><img src="<?=ImageTools::fixImage($value->team->image)?>" style="width: 20px" alt="">&nbsp;&nbsp;<?=$value->team->name?></td>
                                    <td><?=$value->win+$value->same+$value->lose?></td>
                                    <td><?=$value->win?></td>
                                    <td><?=$value->lose?></td>
                                    <td><?=$value->same?></td>
                                    <td><?=$value->score_ball.'/'.$value->lose_ball?></td>
                                    <td><?=$value->points?></td>
                                    
                                </tr>
                            <?php } ?>
                            
                                            
                           
                           <?php break;
                        case 's':?>
                            <tr>             
                            <th>排名</th>             
                            <th>球员</th>             
                            <th class="team">球队</th>             
                            <th>进球数</th>         
                            </tr>
                            <?php if($points) foreach ($points as $key => $value) { $team = $value->player->team; ?>
                        <tr>
                            <!--排名-->
                            <td class="<?=$key<=1?'top':''?>"><?=$key+1?></td>
                            <!--球队-->
                            <td><?=$value->player->name?></td>
                            <td class="team"><img src="<?=ImageTools::fixImage($team->image)?>" style="width: 20px" alt="">&nbsp;&nbsp;<?=$team->name?></td>
                            <td><?=$value->score?></td>
                        </tr>
                    <?php } ?>
                            <?php break;
                             case 'a': ?>
                            <tr>             
                            <th>排名</th>             
                            <th>球员</th>             
                            <th class="team">球队</th>             
                            <th>助攻数</th>         
                            </tr>
                            <?php if($points) foreach ($points as $key => $value) { $team = $value->player->team; ?>
                        <tr>
                            <!--排名-->
                            <td class="<?=$key<=1?'top':''?>"><?=$key+1?></td>
                            <!--球队-->
                            <td><?=$value->player->name?></td>
                            <td class="team"><img src="<?=ImageTools::fixImage($team->image)?>" style="width: 20px" alt="">&nbsp;&nbsp;<?=$team->name?></td>
                            <td><?=$value->assist?></td>
                        </tr>
                        <?php } break;
                     case 't' : ?>
                        <div class="saizhi ">
                        <?=$points->rule?>
                        </div>
                    <?php break; }?>
                     </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </section>