<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <link rel="canonical" href="<?=$this->canonical?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <?php if(isset($this->obj) && get_class($this->obj)=='ArticleExt') {
        foreach (['{site}'=>'球布斯','{title}'=>$this->obj->title,'{tag}'=>$this->obj->getTagString(','),'{descpt}'=>$this->obj->descpt,'{cate}'=>isset($this->obj->cate->name)?$this->obj->cate->name:''] as $key => $value) {
            // if(isset($value)) {
                $this->pageTitle && $this->pageTitle = str_replace($key, $value, $this->pageTitle);
                $this->keyword && $this->keyword = str_replace($key, $value, $this->keyword);
                $this->description && $this->description = str_replace($key, $value, $this->description);
            // }
        }
        
        } else {
            foreach (['{site}'=>'球布斯'] as $key => $value) {
            // if(isset($value)) {
                $this->pageTitle && $this->pageTitle = str_replace($key, $value, $this->pageTitle);
                $this->keyword && $this->keyword = str_replace($key, $value, $this->keyword);
                $this->description && $this->description = str_replace($key, $value, $this->description);
            // }
        }
            }?>
    <title><?=trim($this->pageTitle)?></title>
    <meta name="keywords" content="<?=$this->keyword?>" />
    <meta name="description" content="<?=$this->description?>" />
    <?php if($this->styleowner):?>
    <link href="/static/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <?php endif;?>
    <script src="/static/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/static/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel='stylesheet' id='um-css' href='<?=Yii::app()->theme->baseUrl?>/static/home/style/um.css?ver=4.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='fa-css' href='<?=Yii::app()->theme->baseUrl?>/static/home/style/font-awesome.css?ver=4.5.9' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='<?=Yii::app()->theme->baseUrl?>/static/home/style/style.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='<?=Yii::app()->theme->baseUrl?>/static/home/style/style_1.css?ver=1.0' type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href='<?=Yii::app()->theme->baseUrl?>/static/home/style/index.css' type='text/css' media='all' />
    <link rel="shortcut icon" href="http://cdn.qiubs.cn/201707031317" />
    <link rel="bookmark" href="http://cdn.qiubs.cn/201707031317" />
    <script type='text/javascript' src='<?=Yii::app()->theme->baseUrl?>/static/home/js/jquery.min.js?ver=1.0'></script>
    <script type='text/javascript' src='<?=Yii::app()->theme->baseUrl?>/static/home/js/jquery.js?ver=1.0'></script>
    <?php if($this->iswap):?>
        <link rel='stylesheet' id='style-css' href='<?=Yii::app()->theme->baseUrl?>/static/home/style/ty.css' type='text/css' media='all' />
        <link rel='stylesheet' id='style-css' href='<?=Yii::app()->theme->baseUrl?>/static/home/style/newadds.css' type='text/css' media='all' />
        <link rel='stylesheet' id='style-css' href='<?=Yii::app()->theme->baseUrl?>/static/home/style/foxSlide.min.css' type='text/css' media='all' />
    <?php endif;?>
    <script>
    window._deel = {
        name: 'football',
        url: '',
        ajaxpager: '',
        commenton: 0,
        roll: [4, ]
    }
    </script>
    <script type="text/javascript">
    var um = {
        "ajax_url": "",
        "admin_url": "",
        "wp_url": "",
        "um_url": "",
        "uid": 0,
        "is_admin": 0,
        "redirecturl": "",
        "loadingmessage": "",
        "paged": 1,
        "cpage": 1,
        "timthumb": ""
    };
    </script>
    <?php if($this->iswap):?>
        <style>
            .nav_sj a {
                background-color: rgba(51,51,51,.8);
            }
        </style>
    <?php endif;?>
    <?=SiteExt::getAttr('qjpz','headCode')?>
    <?php if($this->iswap):?>
        <script src="//msite.baidu.com/sdk/c.js?appid=1578412332922322"></script>
    <?php endif;?>
</head>
<body class="home blog">

<style>

</style>
<?php if(!($this->iswap)):?>
<div class="content indexnav kj" >
        <div class="top">
            <div id="top">
                <a href="/"><img src="<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcLogo'))?>" style="    float: left;height: 40px;margin-left: -43px;margin-right: 30px;margin-top: 5px;" /></a>
                
                <div class="nav fl" >
                    <ul class="nav_menu">
                    <?php if(!($this->iswap)):?>
                        <?php $this->widget('HomeNavWidget')?>
                    <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 <?php endif;?>

    <header id="masthead" class="site-header">
        <div id="nav-header" style="<?=$this->iswap?'':'height: 0'?>">
            <div id="top-menu" style="height:100%">
            <?php if($this->iswap==0):?>
                <div id="top-menu_1"><span class="nav-search" style="    margin-top: <?=$this->iswap?'24':'-36'?>px;"><i class="fa fa-search" style="    position: initial;"></i></span> <span class="nav-search_1"><a href="#nav-search_1"><i class="fa fa-navicon"></i></a></span>
            <?php endif;?>
                <?php if($this->iswap):?>
                        <div id="div_menu1">
                            <nav>
                                <div class="top_navs">
                                    <a href="javascript:;" id="head_wzxl">
                                        <div class="top_navs_rig" style="translateX(35px);" onclick="show()"></div>
                                    </a>
                                    <ul class="swiper-wrapper">
                                    <?php $this->widget('HomeNavWidget',['type'=>'wap','limit'=>4])?>
                                        
                                    </ul>
                                </div>
                            </nav>
                            <div class="home_wzxl" style="display:none;">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <?php for ($i=0; $i < count($this->getHomeMenu())/4; $i++) { ?>
                                    <tr height="50" align="center">
                                    <?php foreach (array_slice($this->getHomeMenu(), $i*4,4) as $key => $value) {?>
                                       <td width="25%"><a href="<?=$this->createUrl('/'.$value['url'])?>" class="whitechar"><?=$value['name']?></a></td>
                                    <?php }?>
                                    </tr>
                                <?php }?>
                                </table>
                                <div class=" k30"></div>
                                <div class="home_close" onclick="closeit()"></div>
                            </div>
                        </div>
                        <?php if($this->hideloginhead==0):?>
                        <header>
                            <h1 class="logo"><a href="<?=$this->createUrl('/home/index/index')?>" ><img src="<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcLogo'))?>" style="    display: block;width: 121px;height: 40px;padding-top: 10px;padding-left: 5px;" alt=""></a></h1>
                            <div class="control" style="margin-top:-55px;width:<?=Yii::app()->user->getIsGuest()?'50':'30'?>%;float:right; margin-right: 5px; border-bottom:0;">
                            <?php if(Yii::app()->user->getIsGuest()):?>
                                <a href="<?=$this->createUrl('/home/user/index')?>" class="usercenter ctrl" id="loginDiv">登录</a>
                                <a  rel="nofollow" href="<?=$this->createUrl('/home/user/regis')?>" class="write ctrl" id="regDiv" style="">注册</a>
                                <?php else:?>
                                    <a href="<?=$this->createUrl('/home/user/index')?>" class="write ctrl" id="loginDiv"><?=$this->user->name.'的个人中心'?></a>
                                <?php endif;?>
                            </div>
                        </header>
                        <?php endif;?>
                    <?php endif;?>
                    <?php if($this->iswap==0):?>
                </div>
                <?php endif;?>
            </div>
        </div>
        <nav>
        </nav>
    </header>
    
    <div id="search-main" style="display: <?=isset($this->kw)?'block':'none'?>">
        <div id="searchbar">
            <form id="searchform" action="<?=$this->createUrl('/home/news/list')?>" method="get">
                <input id="s" type="text" required placeholder="<?=isset($this->kw)?$this->kw:'输入搜索内容'?>" name="kw" value="">
                <button id="searchsubmit" type="submit">搜索</button>
            </form>
        </div>
        <div class="clear"></div>
    </div>
    <?=$content?>
    <footer class="footer" style="<?=$this->fixedFooter?>">
        <div class="footer-inner">
        
            <p>
            <a href="/" title="球布斯">球布斯</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a rel="nofollow" href="<?=$this->createUrl('/home/index/about')?>" title="关于我们">关于我们</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a rel="nofollow" href="<?=$this->createUrl('/home/index/contact')?>" title="联系我们">联系我们</a><br>
                球布斯版权所有，保留一切权利© 2017 · 托管于阿里云服务器<?=SiteExt::getAttr('qjpz','footCode')?></p>
        </div>
    </footer>
    <script type='text/javascript' src='<?=Yii::app()->theme->baseUrl?>/static/home/js/um.js?ver=4.5.9'></script>
    <script type='text/javascript' src='<?=Yii::app()->theme->baseUrl?>/static/home/js/wp-embed.min.js?ver=4.5.9'></script>
    <script>
    $(document).ready(function() {
        $('.rollto button').removeAttr('title');
    });
        function show() {
            $('.home_wzxl').attr('class','home_wzxl visible');
            $('.home_wzxl').css('display','block');
        }
        function closeit() {
            $('.home_wzxl').attr('class','home_wzxl');
            $('.home_wzxl').css('display','none');
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://zhanzhang.baidu.com/contexts/cambrian.jsonld",
            "@id": "<?=Yii::app()->request->getHostInfo().Yii::app()->request->getUrl()?>",
            "title": "<?php 
            if(isset($this->obj) && get_class($this->obj)=='ArticleExt') {
                echo trim($this->obj->title);
            }else{
                echo trim($this->pageTitle);
            } ?>",
            "images": ["<?=$this->ldimage?>"],
            "description": "",
            "pubDate": "<?=$this->pbtime?>"
        }
    </script>
</body>
</html>