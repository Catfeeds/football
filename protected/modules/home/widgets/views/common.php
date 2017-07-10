<div class="widget d_postlist">
<?php $nopic = SiteExt::getAttr('qjpz','newsImg')?>
                <div class="title">
                    <h2><sapn class="title_span">热门推荐</span></h2></div>
                <ul>
                <?php if($rmtjs) foreach ($rmtjs as $key => $v) {  $value = $v->getObj();  if($value): ?>
                   <li>
                   <a href="<?=$this->owner->createUrl('/home/news/info',['id'=>$value->id])?>" title="<?=$value->title?>">
                   <span class="thumbnail" style="border: none"><img src="<?=ImageTools::fixImage($value->image?$value->image:$nopic,93,64)?>" /></span>
                   <span class="text"><?=$value->title?></span>
                   <span class="muted"><?=date('Y-m-d',$value->updated)?></span><span class="muted_1"><?=$value->comment_num?>评论</span>
                   </a></li>
                <?php endif; } ?>
                </ul>
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
                            padding: 4px 15px;background-color: #2eb398;
                        }
                    </style>
            <style type="text/css">
                       .tabli1{
                        width: 33% !important;
                       }
                       .tab1{
                        margin-left: 0!important;
                        padding-right: 0!important;
                        padding-left: 0!important;
                        border: none !important;
                       }
                   </style>
            <div class="widget widget_categories d_textbanner"><strong class="str1">积分榜</strong>
               <div class="row" style="width: 90%;margin:0 auto">
                   <ul class="nav nav-tabs" style="margin-bottom: 0px;">
                   <?php if($leas) foreach ($leas as $key => $value) {?>
                       <li class="<?=$key==0?'active':''?> tabli1">
                            <a class="tab1" style="font-size: 14px" href="#tab_1_<?=$key+1?>" data-toggle="tab">
                            <center><?=$value->name?> </center></a>
                        </li>
                  <?php  } ?>
                    </ul>
                    <div class="tab-content">
                    <?php foreach ($points as $key => $value) {?>
                        <div class="tab-pane fade <?=$key==0?'active':''?> in" id="tab_1_<?=$key+1?>">
                        <?php if($value): ?>
                            <table class="table table-striped table-hover" style="margin-top: -1px;font-size: 12px">
                                <?php foreach ($value as $r => $v) {?>
                                    <tr>
                                            <td align='center'><?=$r+1?></td>
                                            <td align='center' style="width: 40%"><?=Tools::u8_title_substr($v->team->name,12) ?></td>
                                            <td  align='center'>胜<?=$v->win?>负<?=$v->lose?></td>
                                            <td align='center'><?=$v->points?></td>
                                        </tr>
                                <?php } ?>
                                    </table>
                                <?php endif; ?>
                        </div>
                    <?php } ?>
                    </div>
               </div>
            </div>
            <div class="widget d_comment">
                <div class="title">
                    <h2><sapn class="title_span">热门评论</span></h2></div>
                <ul>
                <?php if($comms) foreach ($comms as $key => $value) { $user = $value->user?>
                <li>
                        <a href="<?=$this->owner->createUrl('/home/news/info',['id'=>$value->major_id])?>" ><img alt='' src='<?=ImageTools::fixImage($user->image)?>' class='avatar avatar-36 pehoto'  height='36' width='36' />
                            <div class="muted"><i><?=$user->name?></i>&nbsp;&nbsp;于 <?=Tools::friendlyDate($value->created)?> 说：
                                <br/><?=Tools::u8_title_substr($value->content,40) ?></div>
                        </a>
                    </li>
               <?php } ?>
                </ul>
            </div>