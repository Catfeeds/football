<?php 
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-common.css");

	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-regis.css");
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-login.css");
	Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-wap.css");
?>
<style type="text/css">
	.step-panel .table .lab-left {
		width: 380px
	}
</style>
<section class="container" style="margin-top: 40px">
<div class="step-panel register-panel" style="width: 100%">
    <div class="clearfix-row">
    <br><br>
        <center><h3><img style="height: 50px" src="<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcLogo'))?>">&nbsp;&nbsp;球布斯登录</h3></center>
    </div>
    <form id="fm1" method="post">
    <div class="clearfix-row" >
        <div id="register-bind" class="table">
            <!-- <div class="clearfix-row m-t-72" style="margin-top: 50px">
                <div class="lab-left"><span class="line-h-40">手机号：</span></div>
                <div class="lab-right">
                    <div class="text-box">
                        <input class="text w-308" id="username"  name="name" type="text" placeholder="" onblur="ckit(this)">
                    </div>
                </div>
            </div> -->
            <div class="clearfix-row m-t-16" style="margin-top: 50px">
                <div class="lab-left"><span class="line-h-40">手机号：</span></div>
                <div class="lab-right">
                    <div class="text-box phone-panel"><span id="phone-code" class="tip" data-code="86">+86</span>
                        <input class="text w-263" id="phone" name="phone" type="text" placeholder="请输入手机号"> <span id="sendSMS" class="get-phone" onclick="ckphone(this)">发送验证码</span></div>
                </div>
            </div>
            <div class="clearfix-row m-t-16">
                <div class="lab-left"><span class="line-h-40">验证码：</span></div>
                <div class="lab-right">
                    <div class="text-box">
                        <input class="text w-308" id="code" onblur="ckcode(this)" name="code" type="text" placeholder="请输入短信验证码">
                    </div>
                </div>
            </div>
            <div class="clearfix-row m-t-16">
                <div class="lab-left"><span class="line-h-40">密码：</span></div>
                <div class="lab-right">
                    <div class="text-box">
                        <input class="text w-308" id="new" onblur="cknew(this)" name="pwd" type="password" placeholder="请输入密码">
                    </div>
                </div>
            </div>
            <div class="clearfix-row m-t-16">
                <div class="lab-left"><span class="line-h-40">确认密码：</span></div>
                <div class="lab-right">
                    <div class="text-box">
                        <input class="text w-308" id="new2" onblur="cknew2(this)" type="password" placeholder="再次输入登录密码">
                    </div>
                </div>
            </div>
            <div class="clearfix-row m-t-16 text-a-c m-b-50"><a class="botton btn-border active submit line-h-35 w-120" onclick="ckfm()">提交</a>&nbsp;&nbsp;&nbsp;<a href="<?=$this->createUrl('regis')?>" style="color:gray">立即注册</a>&nbsp;&nbsp;&nbsp;<a href="<?=$this->createUrl('login')?>" style="color:gray">登录</a></div>
        </div>
    </div>
    </form>
</div>
</section>
<script type="text/javascript">
	function ckit(obj) {
		$('#namespan').remove();
		if($(obj).val()=='') {
			$(obj).after('<span id="namespan" style="margin-left:20px;color:red">此项不能为空！</span>');
			$(obj).focus();
		}
	}
	function ckfm() {
		var name = $('#name').val();
		var pwd = $('#pwd').val();
		$('#namespan').remove();
		$('#pwdspan').remove();
		if(name=='') {
			$('#name').after('<span id="namespan" style="margin-left:20px;color:red">此项不能为空！</span>');
			$('#name').focus();
			return false;
		}
		if(pwd=='') {
			$('#pwd').after('<span id="pwdspan" style="margin-left:20px;color:red">此项不能为空！</span>');
			$('#pwd').focus();
			return false;
		}
		document.getElementById('fm1').submit()
	}
	function clearit() {
		$('#pwdspan').remove();
	}
</script>
<script>
    function ckname(obj) {
        var name = $(obj).val();
        $('#nameafter').remove();
        var reg = /^[A-Za-z0-9-_\u4e00-\u9fa5]{4,30}$/;
        if (!reg.test(name) || name.length < 5 || name.length > 20) {
            $(obj).after('<span id="nameafter" class="bad" style="margin-left:5px;color:red;font-size:10px">5-20个字符，支持中英文、数字下划线</span>');
        } 

    }
    function cknew() {
        $('#newafter').remove();
        var newpwd = $('#new').val();
        if(newpwd.length < 6 || newpwd.length > 16 ) {
            $('#new').after('<span id="newafter" class="bad" style="margin-left:5px;color:red;font-size:10px">长度为6-16</span>');
            // $('#new').focus();
        }
    }
    function cknew2() {
        $('#new2after').remove();
        var newpwd2 = $('#new2').val();
        if(newpwd2!=$('#new').val()) {
            $('#new2').after('<span id="new2after" class="bad" style="margin-left:5px;color:red;font-size:10px">两次密码不一</span>');
            // $('#new2').focus();
        }
    }
    function ckphone(obj) {
        var setTime;
        $('#phoneafter').remove();
        var phone = $('#phone').val();
        var reg = /^1[3|4|5|7|8][0-9]{9}$/;
        if (!reg.test(phone)) {
            $('.phone-panel').after('<span id="phoneafter" class="bad" style="margin-left:5px;color:red;font-size:10px">请填写正确的手机号</span>');
        } else {
            // alert(1);
            $.ajax({
                'type':'get',
                'url':'checkPhone',
                'dataType':'json',
                'data':{'phone':phone},
                'success':function(e) {
                    if(e.s!='error') 
                        $('.phone-panel').after('<span id="phoneafter" class="bad" style="margin-left:5px;color:red;font-size:10px">该手机号未注册</span>');
                    else 
                        sendS(phone);
                }
            });

            
        }
    }
    function sendS(phone) {
        // alert(1);
        $.ajax({
            'type':'get',
            'url':'addOne',
            'dataType':'json',
            'data':{'phone':phone},
            'success':function(e) {
                if(e.s=='success') 
                    alert('已发送');
            }
        });
        if($("#sendSMS").text()=='发送验证码') {
            $("#sendSMS").text('剩余'+'10');
            var time=parseInt(10);
            setTime=setInterval(function(){
                
                if(time<=0){
                    clearInterval(setTime);
                    return;
                }
                time--;
                $("#sendSMS").text('剩余'+time);
                if(time<=0) {
                    $("#sendSMS").attr('onclick','ckphone(this)');
                    $("#sendSMS").text('发送验证码');
                }
            },1000);
        }

        
    }
    function ckfm() {
        if($('.bad').length > 0) {
            alert('请正确填写所有字段');
        } else if($('#username').val()==''||$('#new').val()==''||$('#new2').val()==''||$('#phone').val()==''||$('#code').val()==''){
            alert('请填写所有字段');
        } else {
        	alert('提交成功');
            // $('#new').val(hex_md5($('#new').val()));
            $('#fm1').submit();
        }
    }
    function ckcode(obj) {
        $('#codeafter').remove();
        var code = $('#code').val();
        $.ajax({
            'type':'get',
            'url':'checkCode',
            'dataType':'json',
            'data':{'code':code,'phone':$('#phone').val()},
            'success':function(e) {
                if(e.s=='success') {
                    $('#codeafter').remove();
                } else {
                    $('#code').after('<span id="codeafter" class="bad" style="margin-left:5px;color:red;font-size:10px">验证码错误</span>');
                    // $('#old').focus();
                }
            }
        });
    }
</script>