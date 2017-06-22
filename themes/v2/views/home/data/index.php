<?php 
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/data-index.css");
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/match-common.css");
?>
<section class="container">
<!-- <div style="height: 40px;background-color: white;margin-top: 10px;margin-bottom: 10px ">
</div> -->
<div style="margin-top: 20px;background-color: white" class="liansai-content-wrap wrap">
    <div class="content-left">
        <div class="panlu-table">
            <ul class="tab-title">
                <?php foreach ($liarr as $key => $value) {?>
                    <li class="<?=$type==$key?'active':''?>"><a href="<?=$this->createUrl('/home/data/index',['type'=>$key])?>"><?=$value?></a></li>
                <?php } ?>
            </ul>
            <div class="table-wrap">
            <?php switch ($type) {
                case 'p': ?>
                    <table>
                    <thead>
                        <tr>
                            <td>排名</td>
                            <td>球队</td>
                            <td>已赛场数</td>
                            <td>胜场数</td>
                            <td>平场数</td>
                            <td>负场数</td>
                            <td>进球数</td>
                            <td>失球数</td>
                            <td>净胜球数</td>
                            <td>积分</td>
                            <!-- <td>近期走势</td> -->
                        </tr>
                    </thead>
                    <!--总榜单-->
                    <tbody>
                    <?php if($points) foreach ($points as $key => $value) {?>
                        <tr>
                            <!--排名-->
                            <td class="rank"><?=$key+1?></td>
                            <!--球队-->
                            <td class="red name"><a href="#"><?=$value->team->name?></a></td>
                            <td><?=$value->win+$value->same+$value->lose?></td>
                            <td><?=$value->win?></td>
                            <td><?=$value->same?></td>
                            <td><?=$value->lose?></td>
                            <td><?=$value->score_ball?></td>
                            <td><?=$value->lose_ball?></td>
                            <td><?=$value->score_ball-$value->lose_ball?></td>
                            <td><?=$value->points?></td>
                            <!--近期6场走势-->
                            <!-- <td class="icon-wrap"> -->
                                <!-- 胜：icon-ico_win，负：icon-ico_lose，平：icon-ico_draw-->
                                <!-- <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                            </td> -->
                        </tr>
                    <?php } ?>
                        
                    </tbody>
                </table>
                <?php break; case 's' : ?>
                <table>
                    <thead>
                        <tr>
                            <td>排名</td>
                            <td>球员</td>
                            <td>球队</td>
                            <td>进球数</td>
                            <!-- <td>平场数</td>
                            <td>负场数</td>
                            <td>进球数</td>
                            <td>失球数</td>
                            <td>净胜球数</td>
                            <td>积分</td> -->
                            <!-- <td>近期走势</td> -->
                        </tr>
                    </thead>
                    <!--总榜单-->
                    <tbody>
                    <?php if($points) foreach ($points as $key => $value) {?>
                        <tr>
                            <!--排名-->
                            <td class="rank"><?=$key+1?></td>
                            <!--球队-->
                            <td class="red name"><a href="#"><?=$value->player->name?></a></td>
                            <td><?=$value->player->team->name?></td>
                            <td><?=$value->score?></td>
                            <!--近期6场走势-->
                            <!-- <td class="icon-wrap"> -->
                                <!-- 胜：icon-ico_win，负：icon-ico_lose，平：icon-ico_draw-->
                                <!-- <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                            </td> -->
                        </tr>
                    <?php } ?>
                        
                    </tbody>
                </table>
                <?php break; case 'a' : ?>
                <table>
                    <thead>
                        <tr>
                            <td>排名</td>
                            <td>球员</td>
                            <td>球队</td>
                            <td>助攻数</td>
                            <!-- <td>平场数</td>
                            <td>负场数</td>
                            <td>进球数</td>
                            <td>失球数</td>
                            <td>净胜球数</td>
                            <td>积分</td> -->
                            <!-- <td>近期走势</td> -->
                        </tr>
                    </thead>
                    <!--总榜单-->
                    <tbody>
                    <?php if($points) foreach ($points as $key => $value) {?>
                        <tr>
                            <!--排名-->
                            <td class="rank"><?=$key+1?></td>
                            <!--球队-->
                            <td class="red name"><a href="#"><?=$value->player->name?></a></td>
                            <td><?=$value->player->team->name?></td>
                            <td><?=$value->assist?></td>
                            <!--近期6场走势-->
                            <!-- <td class="icon-wrap"> -->
                                <!-- 胜：icon-ico_win，负：icon-ico_lose，平：icon-ico_draw-->
                                <!-- <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                            </td> -->
                        </tr>
                    <?php } ?>
                        
                    </tbody>
                </table>
                <?php break; case 't' : ?>
                <div class="saizhi ">
                <?=$points->rule?>
                </div>
                <?php break; ?>
            <?php  } ?>
                <!--联赛赛制-->
                
            </div>
        </div>
        <p>以上资料仅供参考 更新于 <?=date('Y-m-d ',TimeTools::getDayBeginTime())?></p>
    </div>
    <div class="content-right">
        <div class="side-nav">
            <p class="side-title"><i class="icon-icon_datum"></i>联赛数据中心</p>
            <ul>
            <?php $get = $_GET;unset( $get['lid']); if($leas) foreach ($leas as $key => $value) {  ?>
                <li class="<?=$lid==$value['id']?'active':''?>"><i class="icon-icon_datum_n"></i><a href="<?=$this->createUrl('/home/data/index',['lid'=>$value->id]+$get)?>"><?=$value->name?></a></li>
            <?php } ?>
                
            </ul>
        </div>
    </div>
</div>
</section>
