<?php $this->pageTitle = '上海弘钢机械设备有限公司-设备列表'?>

<div class="npagePage">
            <!-- <div id="banner">
                <div style="background-image:url(http://resources.jsmo.xin/templates/upload/1400/201612/1482994447555.jpg);"></div>
            </div> -->
            <div id="pageTarget" class="module">
                <div class="module_container">
                    <div class="container_target wow">您的位置：<a href="<?=$this->createUrl('/home/index/index')?>">首页</a><i class="fa fa-angle-right"></i><a href="#"><?=$cate==50?'设备租赁':'设备列表'?></a></div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="content">
                <div class="mlist project module" style="">
                    <div class="bgmask"></div>
                    <div class="module_container">
                        <div class="container_category wow"><?php if($cates = TagExt::getTagArrayByCate('hjlx')) foreach ($cates as $key => $value) { if($cate!=50){ ?>
                        <a class="<?=$cate==$key?'active':''?>" href="<?=$this->createUrl('/home/product/list',['cate'=>$key])?>"><?=$value?></a>
                    <?php  } } ?>
                        </div>
                        <div class="container_content">
                            <div class="content_wrapper">
                                <ul class="content_list">
                                <?php if($infos) foreach ($infos as $key => $value) {?>
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
                             <?php } ?>
                                   
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <?php $this->widget('HomeLinkPager',['pages'=>$pager])?>

                           <!--  <div id="pages"><a href="http://mo005-1400.mo5.line1.uemo.net/list/id/11061/page/1/" class="active">1</a><a href="http://mo005-1400.mo5.line1.uemo.net/list/id/11061/page/2/">2</a><a class="next" href="http://mo005-1400.mo5.line1.uemo.net/list/id/11061/page/2/">&nbsp;<i class="fa fa-angle-right"></i></a></div> -->
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>