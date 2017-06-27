<?php 
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-common.css");

	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-left.css");
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-set.css");
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-wap.css");
    // Yii::app()->clientScript->registerJs("/themes/v2/static/home/js/md5.js");
?>
<script src="/themes/v2/static/home/js/md5.js"></script>
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
                        	<a class="link <?=$type=='info'?'active':''?>" href="<?=$this->createUrl('index',['type'=>'info'])?>">基本资料</a>
                        	<a class="link <?=$type=='pwd'?'active':''?>" href="<?=$this->createUrl('index',['type'=>'pwd'])?>">修改密码</a>
                        	<!-- <a class="link <?=$type=='phone'?'active':''?>" href="<?=$this->createUrl('index',['type'=>'phone'])?>">修改手机号</a> -->
                        </div>
                    </div>
                    
                    <div class="bottom" style="line-height: 20px">
                    <form id="fm1" method="post">
                        <div class="clearfix-row text-a-c">
                            <div class="display-i-b w-500 text-a-l">
                            	<div class="clearfix-row" style="margin-top: 30px">
                                    <div class="float-left" style="    width: 60px;">原密码</div>
                                    <div class="float-left m-l-20">
                                        <input id="old" onblur="ckpw()" type="password" class="text-type w-250">
                                    </div>
                                </div>
                                <div class="clearfix-row">
                                    <div class="float-left" style="    width: 60px;">新密码</div>
                                    <div class="float-left m-l-20">
                                        <input id="new" onblur="cknew()" type="password" class="text-type w-250">
                                    </div>
                                </div>
                                <div class="clearfix-row">
                                    <div class="float-left" style="    width: 60px;">确认密码</div>
                                    <div class="float-left m-l-20">
                                        <input id="new2" onblur="cknew2()" name="UserExt[pwd]" type="password" class="text-type w-250">
                                    </div>
                                </div>
                                <div class="clearfix-row m-t-30 m-b-100 text-a-c"><a class="button w-60" onclick="ckfm()">保存</a></div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script>
    function ckpw() {
        $('#oldafter').remove();
        var old = $('#old').val();
        $.ajax({
            'type':'get',
            'url':'checkOld',
            'dataType':'json',
            'data':{'pwd':old},
            'success':function(e) {
                if(e.s=='success') {
                    $('#oldafter').remove();
                } else {
                    $('#old').after('<span id="oldafter" class="bad" style="margin-left:20px;color:red">原密码错误</span>');
                    $('#old').focus();
                }
            }
        });
    }
    function cknew() {
        $('#newafter').remove();
        var newpwd = $('#new').val();
        if(newpwd.length < 6 || newpwd.length > 16 ) {
            $('#new').after('<span id="newafter" class="bad" style="margin-left:20px;color:red">长度为6-16</span>');
            // $('#new').focus();
        }
    }
    function cknew2() {
        $('#new2after').remove();
        var newpwd2 = $('#new2').val();
        if(newpwd2!=$('#new').val()) {
            $('#new2').after('<span id="new2after" class="bad" style="margin-left:20px;color:red">两次密码不一</span>');
            // $('#new2').focus();
        }
    }
    function ckfm() {
        var newp = $('#new2').val();
        if($('.bad').length > 0) {
            alert('密码输入有误，请修正');
        } else {
            alert('修改成功');
            $('#new2').val(hex_md5(newp));
            $('form').submit();
        }
    }
</script>