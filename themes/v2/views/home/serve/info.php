<?php $this->pageTitle = '上海弘钢机械设备有限公司-业务中心'?>
<div class="npagePage post">
            <div id="pageTarget" class="module">
                <div class="module_container">
                    <div class="container_target wow">您的位置：<a href="<?=$this->createUrl('/home/index/index')?>">首页</a><i class="fa fa-angle-right"></i><a href="#">业务中心</a></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="content">
                <div class="mlistpost service module">
                    <div class="module_container">
                        <div class="container_content">
                            <div class="content_wrapper">
                                <div id="postWrapper">
                                    <div id="postNav">
                                        <div class="wrapper scrollFixed" data-sf-top="20">
                                            <ul class="nav bgMove">
                                            <?php if($cates) foreach ($cates as $key => $value) {?>
                                                <li class="navitem"><a href="<?=$this->createUrl('/home/serve/info',['id'=>$key])?>" class="<?=$info?($info['id']==$key?'active':''):''?>"><span data-title="<?=$value['title']?>"><?=$value['title']?></span><i class="fa fa-angle-right"></i></a></li>
                                             <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="postContent">
                                        <div id="postInfo">
                                            <p class="title"><?=$info['title']?></p>
                                            <p class="subtitle"><?=date('Y-m-d',$info['created'])?></p>
                                        </div>
                                        <div class="postbody">
                                            <p><img src="<?=ImageTools::fixImage($info['image'],600,400)?>" /></p>
                                            <p>
                                                <br/>
                                            </p>
                                            <?=$info['content']?>
                                            <p>
                                                <br/>
                                            </p>
                                        </div>
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
        </div>