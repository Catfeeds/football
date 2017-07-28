<?php 
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/album-inner.css");
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/home-common.css");
?>
<section class="container">
<div class="content-wrap">

<div class="inner-main" style="margin-left: 0;width: 760px;padding-right: 10px">
<div class="left-con" style="width: 100%">
        <div class="swp-wrap">
        <ol class="breadcrumb container" style="width: 96%;">
                        <li class="home"><a href="<?=$this->createUrl('/home/index/index')?>">首页&nbsp;&gt;&nbsp;</a></li>
                        <li class="active"> <a href="<?=$this->createUrl('/home/album/list')?>">图库列表</a> &gt;</li>
                        <li class="active"> <a href="<?=$this->createUrl('/image/'.Pinyin::get($info->cate->name))?>"><?=$info->cate->name?></a> &gt; <?=$info->title?></li>
                    </ol>
            <div class="main" style="background-color: white">
                <!--图片特效内容开始-->
                <div class="piccontext">
                    <center>  <h1 style="font-size: 26px"> <?=$info->title?> </h1></center>
                    <div class="source">
                        <div class="source_left"> 发布时间:<span><?=date('Y-m-d H:i:s',$info->updated)?></span> </div>
                        <div class="source_right">
                             </div>
                    </div>
                    <!--大图展示-->
                    <?php $albums = $info->album;$key = isset($_GET['key'])?$_GET['key']:0;$list = isset($_GET['list'])?$_GET['list']:0;?>
                    <div class="picshow">
                        <div class="picshowtop" style="display: block;">
                            <a href="#"><img src="<?=ImageTools::fixImage($albums[$key+$list*6]['url'])?>" alt="" id="pic1" curindex="4"></a>
                            
                        </div>
                        <!--图册展示结束提示-->
                       
                        <div class="picshowtxt">
                            <div class="picshowtxt_left"><span><?=($key+1)+$list*6?></span>/<i><?=count($albums)?></i></div>
                            <div class="picshowtxt_right"><?=$albums[$key]['name']?></div>
                        </div>
                        <div class="picshowlist" style="padding-left: 80px">
                            <!--上一条图库-->
                            
                            <div class="picshowlist_mid">
                            <div class="picmidleft"> <a href="<?=$this->createUrl('info',['id'=>$_GET['id'],'key'=>0,'list'=>$list==0?0:($list-1)])?>" id="preArrow_B"></a> </div>
                                <div class="picmidmid">
                                    <ul>
                                    <?php if($albums) $albums = array_slice($albums, $list*6,6); foreach ($albums as $key => $value) {?>
                                    	<li class=""> <a href="<?=$this->createUrl('info',['id'=>$_GET['id'],'key'=>$key,'list'=>$list])?>"><img src="<?=ImageTools::fixImage($value['url'],70,50)?>" alt="" text="<?=$value['name']?>" class=""></a></li>
                                    <?php }  ?>
                                                                            
                                                                                
                                    </ul>
                                </div>
                                <?php $list =  array_slice($albums, $list+1,6)?$list+1:$list; ?>
                                <div class="picmidright"> <a href="<?=$this->createUrl('info',['id'=>$_GET['id'],'key'=>0,'list'=>$list])?>" id="nextArrow_B"></a> </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="share-box" style="height: auto;width: 100%">
           		<p style="padding-left: 10px"><?=$info->descpt?></p>
                
            </div>
        </div>
    </div>

    </div>
    </div>
    <aside class="sidebar">
                <?php $this->widget('NewsRightWidget')?>
            </aside>
    </section>
