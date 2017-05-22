<?php
  $this->pageTitle = '弘钢机械设备-首页';
?>

        <div id="indexPage" data-scroll-ease="Expo.easeInOut" data-scroll-speed="1" data-control="0" data-control-wheel="0" data-singlescreen="0">
            <div id="topSlider" class="mslider module">
                <ul class="content_list"  style="height:527px">
                    <li>
                        <div class="item_bg image" data-thumb="<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcImage'))?>" style="background-image:url(<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcImage'))?>)"></div>
                        <a target="_blank">
                        </a>
                    </li>
                </ul>
                <div class="sliderArrow">
                    <div></div>
                </div>
            </div>
            <div class="mlist service module" style="">
                <div class="bgmask"></div>
                <div class="module_container">
                    <div class="container_header wow">
                        <p class="title">业务服务</p>
                        <p class="subtitle">/ SERVICE</p>
                    </div>
                    <div class="container_category wow movedx one" data-movedx-mid="2" data-movedx-distance="15"><a href="<?=$this->createUrl('/home/serve/info')?>" class="active"><span>全部</span></a></div>
                    <div class="container_content">
                        <div class="content_wrapper slider" data-slider-num='3' data-slider-loop="1">
                            <ul class="content_list">
                            <?php if($serves) foreach($serves as $key=>$value) {?>
                                    <li id="item_block_<?=$key?>" class="item_block wow" style="animation-delay:.0s">
                                    <a href="<?=$this->createUrl('/home/serve/info',['id'=>$value->id])?>" class="item_img" target="_blank"><img src="<?=ImageTools::fixImage($value->image,370,200)?>" width="370px" height="200px" />
                                        <div class="item_mask">
                                            <div class="item_link_icon"><i class="fa fa-link" aria-hidden="true"></i></div>
                                        </div>
                                    </a>
                                    <div class="item_wrapper">
                                        <div class="item_info">
                                            <p class="title ellipsis"><?=$value->title?></p>
                                            <div class="description"><?=Tools::u8_title_substr($value->desc,100)?></div>
                                        </div>
                                    </div>
                                </li>
                                 <?php }?>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="mcounter module" style="">
                <div class="bgmask"></div>
                <div id="counterBgdx" style="position:absolute; width:100%; height:100%"></div>
                <div class="module_container">
                    <div class="container_content">
                        <ul class="content_list">
                            <li>
                                <div>
                                    <p class="number"><span class="counterDX" data-counter-value="<?=SiteExt::getAttr('qjpz','clnf')?>"><?=SiteExt::getAttr('qjpz','clnf')?></span><span class="unit">年</span></p>
                                    <p class="title">成立</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p class="number"><span class="counterDX" data-counter-value="<?=SiteExt::getAttr('qjpz','fwgs')?>"><?=SiteExt::getAttr('qjpz','fwgs')?></span><span class="unit">+</span></p>
                                    <p class="title">服务</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p class="number"><span class="counterDX" data-counter-value="<?=SiteExt::getAttr('qjpz','xmgs')?>"><?=SiteExt::getAttr('qjpz','xmgs')?></span><span class="unit">+</span></p>
                                    <p class="title">项目</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p class="number"><span class="counterDX" data-counter-value="<?=SiteExt::getAttr('qjpz','khs')?>"><?=SiteExt::getAttr('qjpz','khs')?></span><span class="unit">+</span></p>
                                    <p class="title">客户</p>
                                </div>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="mlist project module" style="">
                <div class="bgmask"></div>
                <div class="module_container">
                    <div class="container_header wow">
                        <p class="title">设备</p>
                        <p class="subtitle"> / Product</p>
                    </div>
                    <div class="container_category wow movedx" data-movedx-mid="2" data-movedx-distance="15"><?php if($cates = TagExt::getTagArrayByCate('hjlx')) foreach ($cates as $key => $value) {?>
                        <a href="<?=$this->createUrl('/home/product/list',['cate'=>$key])?>"><span><?=$value?></span></a>
                    <?php } ?></div>
                    <div class="container_content">
                        <div class="content_wrapper">
                            <ul class="content_list">
                            <?php if($products) foreach ($products as $key => $value) {?>
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
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
             <div id="mcontact" class="module" style="">
                <div class="module_container">
                    <div class="container_header wow">
                        <p class="title">联系我们</p>
                        <p class="subtitle"> / CONTACT</p>
                    </div>
                    <div class="container_content">
                        <div class="content_wrapper">
                            <div id="contactlist">
                                <div id="contactinfo" class="wow">
                                    <h3 class="ellipsis">上海弘钢机械设备有限公司</h3>
                                    <p class="ellipsis">地址：上海市四平路2158号国定·富庆大厦1305室</p>
                                    <p class="ellipsis">邮编：200433</p>
                                    <p class="ellipsis">电话：021-62609991</p>
                                    <p class="ellipsis">手机：13817785788</p>
                                    <p class="ellipsis">传真：021-62290358</p>
                                    <p class="ellipsis">邮箱：yanan_76@sina.com</p>
                                    <div><a class="fl" target="_blank" href="http://weibo.com/web"><i class="fa fa-weibo"></i></a><a class="fl" target="_blank" href="tencent://message/?uin=<?=SiteExt::getAttr('qjpz','qq')?> &Site=uemo&Menu=yes"><i class="fa fa-qq"></i></a> </div>
                                </div>
                                <div id="contactform" style="margin-left: 40%;" class="wow">
                                    <form action="" method="post">
                                        <p>
                                            <input type="text" class="inputtxt" name="name" placeholder="姓名" autocomplete="off" />
                                        </p>
                                        <p>
                                            <input type="text" class="inputtxt" name="email" placeholder="邮箱" autocomplete="off" />
                                        </p>
                                        <p>
                                            <input type="text" class="inputtxt" name="tel" placeholder="电话" autocomplete="off" />
                                        </p>
                                        <p>
                                            <textarea class="inputtxt" name="content" placeholder="内容" autocomplete="off"></textarea>
                                        </p>
                                        <p>
                                            <input class="inputtxt submit" type="submit" value="提交" />
                                        </p>
                                    </form>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mcustomize module bgShow bgParallax" style=" background-image:url(<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcLxwm'))?>);">
                <div class="bgmask"></div>
                <div class="module_container">
                    <div class="container_content">
                        <div class="contentbody">
                            <div class="wrapper">
                                <div class="description wow">
                                    <p style="text-align: center;"><span style="font-size: 20px;"><br/></span></p>
                                    <p><span style="font-size: 20px;"><br/></span></p>
                                    <p style="text-align: center;"><span style="font-size: 24px; color: rgb(255, 255, 255);">如果你<strong> </strong></span><span style="font-size: 24px; color: rgb(255, 255, 255); text-decoration: none;">想要</span><span style="font-size: 24px; color: rgb(255, 255, 255);">更多的<span style="font-size: 24px; color: rgb(0, 176, 240);">了解</span>，请联系我们 <?=SiteExt::getAttr('qjpz','sitePhone')?></span>
                                    </p>
                                    <p style="text-align: center;"><span style="font-size: 12px; color: rgb(191, 191, 191);">If you want more understanding, please contact us</span>
                                        <br/>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
           
        </div>
