<?php $this->pageTitle = '上海弘钢机械设备有限公司-'.$info->name?>
<div class="npagePage post">
            <div id="pageTarget" class="module">
                <div class="module_container">
                    <div class="container_target wow">您的位置：<a href="<?=$this->createUrl('/home/index/index')?>">首页</a><i class="fa fa-angle-right"></i><a href="<?=$this->createUrl('/home/product/list')?>">设备列表</a><i class="fa fa-angle-right"></i><a href="#"><?=$info->name?></a></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="content">
                <div class="mlistpost project module">
                    <div class="module_container">
                        <div class="container_content">
                            <div class="content_wrapper">
                                <div id="postWrapper">
                                    <div id="postInfo">
                                        <div class="wrapper scrollFixed" data-sf-top="20">
                                            <p class="title">订单提交</p>
                                            <br>
                                            <!-- <p class="subtitle">仅供参考</p> -->
                                            <div id="contactform" style="" class="wow">
                                                <form id="f1" action=""  method="post">
                                                    <p>
                                                        <input id="pname" type="text" class="inputtxt" name="name" placeholder="姓名" autocomplete="off" />
                                                    </p>
                                                    <p>
                                                        <input type="text" class="inputtxt" name="email" placeholder="邮箱" autocomplete="off" />
                                                    </p>
                                                    <p>
                                                        <input id="pphone" type="text" class="inputtxt" name="tel" placeholder="电话" autocomplete="off" />
                                                    </p>
                                                    <p>
                                                        <textarea class="inputtxt" name="content" placeholder="备注" autocomplete="off"></textarea>
                                                    </p>
                                                    <p>
                                                        <input class="inputtxt submit" onclick="orderIt()" type="button" value="提交" />
                                                        <input type="hidden" name="pid" value="<?=$info->id?>">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="postContent">
                                        <div class="postbody">
                                        <h2>设备型号：<?=$info->name?></h2>
                                        <br>
                                        <img src="<?=ImageTools::fixImage($info->image,600,400)?>">
                                        
                                        <?=$info->td?>
                                        <h2>设备参数</h2>
                                        <br>
                                        <?=$info->cs?>
                                        </div>
                                        <div class="clear"></div>
                                        <div id="listContent">
                                            <div class="item_tags"><i class="fa fa-tags"></i><a href="<?=$this->createUrl('/home/product/list',['cid'=>$info->cid])?>" target="_blank">同类型设备服务</a></div>
                                            <div class="mlist project">
                                                <div class="content_wrapper">
                                                    <ul class="content_list">
                                                    <?php $infos = ProductExt::model()->normal()->findAll(['condition'=>'cid=:cid','params'=>[':cid'=>$info->cid]]);?>
                                                        <?php if($infos) foreach ($infos as $key => $value) { if($value->id!=$info->id){?>
                                                                <li id="item_block_<?=$key?>" class="item_block wow" style="animation-delay:.0s">
                                                                    <a href="<?=$this->createUrl('/home/product/info',['id'=>$value->id])?>" class="item_img" target="_blank"><img src="<?=ImageTools::fixImage($value->image,280,200)?>" />
                                                                        <div class="item_mask"></div>
                                                                        <div class="item_link_icon"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                                    </a>
                                                                    <div class="item_wrapper">
                                                                        <div class="item_info">
                                                                            <p class="title ellipsis"><?=$value->name?></p>
                                                                            <p class="subtitle ellipsis"><?=TagExt::getNameByTag($value->cid)?></p>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                             <?php } }?>
                                                    </ul>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
    <?php Tools::startJs()?>
    function orderIt() {
        if($('#pname').val() == '') {
            alert('请填写姓名');
            return false; 
        }
        var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
        if(!myreg.test($("#pphone").val())) 
        { 
            alert('请输入有效的手机号码'); 
            return false; 
        } 
        alert('提交成功');
        document.getElementById('f1').submit();
    }
    <?php Tools::endJs('js')?>
</script>