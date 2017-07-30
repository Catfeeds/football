<?php 
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-common.css");

	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-left.css");
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-set.css");
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-wap.css");
?>
<section class="container" >
<div class="content-wrap">
<div class="clearfix-row m-t-55 m-b-55" style="<?=$this->iswap?'margin-top: 20px':''?>">
    <div class="content" style="<?=$this->iswap?'width: auto;min-width: auto;':''?>">
        <div class="nav-left" style="<?=$this->iswap?'width: auto;float: none':''?>">
            <div class="user-panel">
                <div class="user-icon">
                    <div class="user-icon-img box-none" style="background-image: url(&quot;<?=ImageTools::fixImage($this->user->image)?>&quot;);"></div>

                </div>
                <div class="clearfix-row color-block f-s-16 m-b-15"><span class="tip vip hide">VIP</span> <span class="name o-hidden"><?=$this->user->name?></span></div>
                               <?php if($this->iswap):?><center> <?php $this->widget('FileUpload',array('model'=>$this->user,'attribute'=>'image','inputName'=>'img','width'=>200,'height'=>200,'words'=>'修改头像','style'=>'width:200px','preview'=>false,'noremove'=>1,'callback'=>'function(data){callback(data);}')); ?></center><br><br>
                                <form method="post" id="wapform">
                                    <input type="hidden" value="<?=$this->user->id?>" name="UserExt[id]">
                                </form>
                               <?php endif;?>

                <a class="vip-status button" href="<?=$this->createUrl('logout')?>">退出登录</a><?php if($this->iswap):?><br><br><?php endif;?> </div>
               
            <div class="nav-list m-t-10" style="padding-left: 0;
    padding-right: 0;">
    <?php if($this->iswap==0):?>
            <a class="link <?=strstr(Yii::app()->request->getPathInfo(),'user/index')?'active':''?>" href="<?=$this->createUrl('index')?>"><b class="iconfont icon-inputbox-user"></b> <span class="text">我的资料</span></a>
            <a class="link <?=strstr(Yii::app()->request->getPathInfo(),'user/msg')?'active':''?>" href="<?=$this->createUrl('msg')?>"><i class="iconfont icon-ico-user-info"></i> <span class="text">我的互动</span> </a>
        <?php endif;?>
            </div>

        </div>
        <?php if($this->iswap==0): ?>
        <div class="nav-right">
            <div class="clearfix-row">
                <div class="right-header">
                    <div class="top">
                        <div class="list">
                        	<a class="link <?=$type=='info'?'active':''?>" href="<?=$this->createUrl('index',['type'=>'info'])?>">基本资料</a>
                        	<a class="link <?=$type=='pwd'?'active':''?>" href="<?=$this->createUrl('index',['type'=>'pwd'])?>">修改密码</a>
                        	<!-- <a class="link <?=$type=='phone'?'active':''?>" href="<?=$this->createUrl('index',['type'=>'phone'])?>">修改手机号</a> -->
                        </div>
                    </div>
                    
                    <div class="bottom" style="line-height: 20px">
                    <form id="fm1" method="post">
                        <div class="clearfix-row text-a-c m-t-50 m-b-30">
                            <div class="user-panel" style="">
                            	<!-- <div > -->
                            		<?php $this->widget('FileUpload',array('model'=>$this->user,'attribute'=>'image','inputName'=>'img','width'=>200,'height'=>200,'words'=>'修改头像','style'=>'width:200px')); ?>
                            	<!-- </div> -->
                            </div>
                            <script>
                            	$('.removebutton').click(function(){
                            		$('#singlePicyw0').empty();
                            		$('#singlePicyw0').append('<input id="im1" type="hidden" value="" name="UserExt[image]">');
                            	});
                            </script>
                        </div>
                        <div class="clearfix-row text-a-c">
                            <div class="display-i-b w-340 text-a-l">
                            	<div class="clearfix-row">
                                    <div class="float-left">昵称</div>
                                    <div class="float-left m-l-20">
                                        <input id="name" readonly="readonly" value="<?=$this->user->name?>" name="UserExt[name]" type="text" class="text-type w-250">
                                    </div>
                                </div>
                                <div class="clearfix-row">
                                    <div class="float-left">微信</div>
                                    <div class="float-left m-l-20">
                                        <input id="wx" value="<?=$this->user->wx?>" name="UserExt[wx]" type="text" class="text-type w-250">
                                        <input type="hidden" value="<?=$this->user->id?>" name="UserExt[id]">
                                    </div>
                                </div>
                                <div class="clearfix-row m-t-30 m-b-100 text-a-c"><a class="button w-60" onclick="alert('保存成功！');document.getElementById('fm1').submit()">保存</a></div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif;?>
    </div>
</div></div>
</section>
<script type="text/javascript">
    function callback(data){
        // 指定区域出现图片
        var html = "";
        image_html = "<input type='hidden' class='trans_img' name='UserExt[image]' value='"+data.msg.pic+"'></input>";
        $('#wapform').append(image_html);
        $('#wapform').submit();
}
</script>