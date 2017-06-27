<?php 
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-common.css");

	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-left.css");
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-set.css");
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-wap.css");
?>
<section class="container" >
<div class="clearfix-row m-t-55 m-b-55">
    <div class="content">
        <div class="nav-left">
            <div class="user-panel">
                <div class="user-icon">
                    <div class="user-icon-img box-none" style="background-image: url(&quot;<?=ImageTools::fixImage($this->user->image)?>&quot;);"></div>
                </div>
                <div class="clearfix-row color-block f-s-16 m-b-15"><span class="tip vip hide">VIP</span> <span class="name o-hidden"><?=$this->user->name?></span></div><a class="vip-status button" href="<?=$this->createUrl('logout')?>">退出登录</a></div>
            <div class="nav-list m-t-10" style="padding-left: 0;
    padding-right: 0;">
            <a class="link <?=strstr(Yii::app()->request->getPathInfo(),'user/index')?'active':''?>" href="<?=$this->createUrl('index')?>"><b class="iconfont icon-inputbox-user"></b> <span class="text">我的资料</span></a>
            <a class="link <?=strstr(Yii::app()->request->getPathInfo(),'user/msg')?'active':''?>" href="<?=$this->createUrl('msg')?>"><i class="iconfont icon-ico-user-info"></i> <span class="text">我的互动</span> </a></div>
        </div>
        <div class="nav-right">
            <div class="clearfix-row">
                <div class="right-header">
                    <div class="top">
                        <div class="list">
                        	<a class="link <?=$type=='news'?'active':''?>" href="<?=$this->createUrl('msg',['type'=>'news'])?>">我的发布</a>
                        	<a class="link <?=$type=='comments'?'active':''?>" href="<?=$this->createUrl('msg',['type'=>'comments'])?>">我的评论</a>
                        	<!-- <a class="link <?=$type=='phone'?'active':''?>" href="<?=$this->createUrl('index',['type'=>'phone'])?>">修改手机号</a> -->
                        </div>
                    </div>
                    
                    <div class="bottom" style="margin-left: 30px;margin-top: 30px">
                        <ul>
                            <?php if($infos) foreach ($infos as $key => $value) {?>
                                <li><a href="<?=$this->createUrl('/home/news/info',['id'=>$value->id])?>"><?=$value->title?></a> <?=date('Y-m-d',$value->updated)?><hr></li>
                            <?php } ?>
                        </ul>
                        <?php $this->widget('HomeLinkPager',['pages'=>$pager])?>  
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>