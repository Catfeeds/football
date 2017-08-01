<?php 
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-common.css");

    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-regis.css");
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-login.css");
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/user-wap.css");
?>
<script src="/themes/v2/static/home/js/md5.js"></script>

<style type="text/css">
    .step-panel .table .lab-left {
        width: 380px
    }
</style>
<?php if($this->iswap):?>
                <style>
                .line-h-40{
                    float: left;margin-left: 10px;
                }
                .text-box{
                    margin-left: 10px
                }
                </style>
            <?php endif;?>
<section class="container" >
<div class="step-panel register-panel" style="width: 100%">
    <div class="clearfix-row">
    <br><br>
        <center><h3><img style="height: 50px" src="<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcLogo'))?>">&nbsp;&nbsp;注册</h3></center>
    </div>
    <div class="clearfix-row">
        <div id="register-bind" class="table">
        <form method="post" id="fm1">
            <div class="clearfix-row m-t-72">
                <div class="lab-left"><span class="line-h-40">昵称：</span></div>
                <div class="lab-right">
                    <div class="text-box">
                        <input class="text w-308" onblur="ckname(this)" id="username" name="UserExt[name]" type="text" placeholder="昵称（5-20个字符，中英文、数字下划线）">
                    </div>
                </div>
            </div>
            <div class="clearfix-row m-t-16">
                <div class="lab-left"><span class="line-h-40">密码：</span></div>
                <div class="lab-right">
                    <div class="text-box">
                        <input class="text w-308" id="new" onblur="cknew(this)" name="UserExt[pwd]" type="password" placeholder="请输入密码">
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
            <div class="clearfix-row m-t-16">
                <div class="lab-left"><span class="line-h-40">电话：</span></div>
                <div class="lab-right">
                    <div class="text-box phone-panel"><span id="phone-code" class="tip" data-code="86">+86</span>
                        <input class="text w-263" id="phone" name="UserExt[phone]" type="text" placeholder="请输入手机号"> <span id="sendSMS" class="get-phone" onclick="ckphone(this)">发送验证码</span></div>
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
            
            <div class="box">
                <div id="captcha-sign" class="find"></div>
            </div>
            <div class="clearfix-row m-t-16 text-a-c m-b-50"><a class="botton btn-border active submit line-h-35 w-120" onclick="ckfm()">立即注册</a></div>
            </form>
        </div>
    </div>
</div>
</section>
<script>
    function ckname(obj) {
        var br = '';
        <?php if($this->iswap):?>
        br = '<br>';
        <?php endif;?>
        var name = $(obj).val();
        $('#nameafter').remove();
        var reg = /^[A-Za-z0-9-_\u4e00-\u9fa5]{4,30}$/;
        if (!reg.test(name) || name.length < 5 || name.length > 20) {
            $(obj).after(br+'<span id="nameafter" class="bad" style="margin-left:5px;color:red;font-size:10px">5-20个字符，支持中英文、数字下划线</span>');
        } 

    }
    function cknew() {
        var br = '';
        <?php if($this->iswap):?>
        br = '<br>';
        <?php endif;?>
        $('#newafter').remove();
        var newpwd = $('#new').val();
        if(newpwd.length < 6 || newpwd.length > 16 ) {
            $('#new').after(br+'<span id="newafter" class="bad" style="margin-left:5px;color:red;font-size:10px">长度为6-16</span>');
            // $('#new').focus();
        }
    }
    function cknew2() {
        var br = '';
        <?php if($this->iswap):?>
        br = '<br>';
        <?php endif;?>
        $('#new2after').remove();
        var newpwd2 = $('#new2').val();
        if(newpwd2!=$('#new').val()) {
            $('#new2').after(br+'<span id="new2after" class="bad" style="margin-left:5px;color:red;font-size:10px">两次密码不一</span>');
            // $('#new2').focus();
        }
    }
    function ckphone(obj) {
        var br = '';
        <?php if($this->iswap):?>
        br = '<br>';
        <?php endif;?>
        var setTime;
        $('#phoneafter').remove();
        var phone = $('#phone').val();
        var reg = /^1[3|4|5|7|8][0-9]{9}$/;
        if (!reg.test(phone)) {
            $('.phone-panel').after(br+'<span id="phoneafter" class="bad" style="margin-left:5px;color:red;font-size:10px">请填写正确的手机号</span>');
        } else {
            // alert(1);
            $.ajax({
                'type':'get',
                'url':'checkPhone',
                'dataType':'json',
                'data':{'phone':phone},
                'success':function(e) {
                    if(e.s=='error') 
                        $('.phone-panel').after(br+'<span id="phoneafter" class="bad" style="margin-left:5px;color:red;font-size:10px">该手机号已注册</span>');
                    else 
                        sendS(phone);
                }
            });

            
        }
    }
    function sendS(phone) {
        var br = '';
        <?php if($this->iswap):?>
        br = '<br>';
        <?php endif;?>
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
        var br = '';
        <?php if($this->iswap):?>
        br = '<br>';
        <?php endif;?>
        if($('.bad').length > 0) {
            alert('请正确填写所有字段');
        } else if($('#username').val()==''||$('#new').val()==''||$('#new2').val()==''||$('#phone').val()==''||$('#code').val()==''){
            alert('请填写所有字段');
        } else {
            $('#new').val(hex_md5($('#new').val()));
            $('#fm1').submit();
        }
    }
    function ckcode(obj) {
        var br = '';
        <?php if($this->iswap):?>
        br = '<br>';
        <?php endif;?>
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
                    $('#code').after(br+'<span id="codeafter" class="bad" style="margin-left:5px;color:red;font-size:10px">验证码错误</span>');
                    // $('#old').focus();
                }
            }
        });
    }
</script>