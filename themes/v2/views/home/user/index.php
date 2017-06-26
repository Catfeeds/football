<?php 
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-common.css");

	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-left.css");
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-set.css");
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-wap.css");
?>
<div class="clearfix-row m-t-55 m-b-55">
    <div class="content">
        <div class="nav-left">
            <div class="user-panel">
                <div class="user-icon">
                    <div class="user-icon-img box-none" style="background-image: url(&quot;<?=ImageTools::fixImage($this->user->image)?>&quot;);"></div>
                </div>
                <div class="clearfix-row color-block f-s-16 m-b-15"><span class="tip vip hide">VIP</span> <span class="name o-hidden"><?=$this->user->name?></span></div><a class="vip-status button" href="<?=$this->createUrl('logout')?>">退出登录</a></div>
            <div class="nav-list m-t-10">
            <a class="link <?=strstr(Yii::app()->request->getPathInfo(),'user/index')?'active':''?>" href="<?=$this->createUrl('index')?>"><b class="iconfont icon-inputbox-user"></b> <span class="text">我的资料</span></a>
            <a class="link <?=strstr(Yii::app()->request->getPathInfo(),'user/msg')?'active':''?>" href="<?=$this->createUrl('msg')?>"><i class="iconfont icon-ico-user-info"></i> <span class="text">我的互动</span> </a></div>
        </div>
        <div class="nav-right">
            <div class="clearfix-row">
                <div class="right-header">
                    <div class="top">
                        <div class="list">
                        	<a class="link <?=$type=='info'?'active':''?>" href="<?=$this->createUrl('index',['type'=>'info'])?>">基本资料</a>
                        	<a class="link <?=$type=='pwd'?'active':''?>" href="<?=$this->createUrl('index',['type'=>'pwd'])?>">修改密码</a>
                        	<a class="link <?=$type=='phone'?'active':''?>" href="<?=$this->createUrl('index',['type'=>'phone'])?>">修改手机号</a>
                        </div>
                    </div>
                    <div class="bottom" style="line-height: 20px">
                        <div class="clearfix-row text-a-c m-t-50 m-b-30">
                            <div class="user-panel" style="">
                            	<!-- <div > -->
                            		<?php $this->widget('FileUpload',array('model'=>$this->user,'attribute'=>'image','inputName'=>'img','width'=>200,'height'=>200,'words'=>'修改头像','style'=>'width:200px')); ?>
                            	<!-- </div> -->
                            </div>
                            <script>
                            	$('.removebutton').click(function(){
                            		$('#singlePicyw0').empty();
                            	});
                            </script>
                        </div>
                        <div class="clearfix-row text-a-c">
                            <div class="display-i-b w-340 text-a-l">
                            	<div class="clearfix-row">
                                    <div class="float-left">昵称</div>
                                    <div class="float-left m-l-20">
                                        <input id="name" value="<?=$this->user->name?>" type="text" class="text-type w-250">
                                    </div>
                                </div>
                                <div class="clearfix-row">
                                    <div class="float-left">邮箱</div>
                                    <div class="float-left m-l-20">
                                        <input id="email" type="text" class="text-type w-250">
                                    </div>
                                </div>
                                <div class="clearfix-row">
                                    <div class="float-left">微信</div>
                                    <div class="float-left m-l-20">
                                        <input id="qq" type="text" class="text-type w-250">
                                    </div>
                                </div>
                                <div class="clearfix-row m-t-30 m-b-100 text-a-c"><a class="button w-60" onclick="profile.save();">保存</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
