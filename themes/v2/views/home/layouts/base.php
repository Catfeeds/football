<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <?php if(isset($this->obj) && get_class($this->obj)=='ArticleExt') {
        foreach (['{site}'=>'球布斯','{title}'=>$this->obj->title,'{tag}'=>$this->obj->getTagString(),'{descpt}'=>$this->obj->descpt,'{cate}'=>isset($this->obj->cate->name)?$this->obj->cate->name:''] as $key => $value) {
            // if(isset($value)) {
                $this->pageTitle = str_replace($key, $value, $this->pageTitle);
                $this->keyword = str_replace($key, $value, $this->keyword);
                $this->description = str_replace($key, $value, $this->description);
            // }
        }
        
        } else {
            foreach (['{site}'=>'球布斯'] as $key => $value) {
            // if(isset($value)) {
                $this->pageTitle = str_replace($key, $value, $this->pageTitle);
                $this->keyword = str_replace($key, $value, $this->keyword);
                $this->description = str_replace($key, $value, $this->description);
            // }
        }
            }?>
    <title><?=$this->pageTitle?></title>
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
    <script type='text/javascript' src='<?=Yii::app()->theme->baseUrl?>/static/home/js/jquery.min.js?ver=1.0'></script>
    <script type='text/javascript' src='<?=Yii::app()->theme->baseUrl?>/static/home/js/jquery.js?ver=1.0'></script>
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
</head>
<body class="home blog">
<style>

</style>
<div class="content indexnav kj">
        <div class="top">
            <div id="top">
                <img src="<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcLogo'))?>" style="    float: left;height: 40px;margin-left: -43px;margin-right: 30px;margin-top: 5px;" alt="" />
                <div class="nav fl">
                    <ul class="nav_menu">
                        <?php $this->widget('HomeNavWidget')?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header id="masthead" class="site-header">
        <div id="nav-header" style="height: 0;">
            <div id="top-menu">
                <div id="top-menu_1"><span class="nav-search" style="    margin-top: -36px;"><i class="fa fa-search" style="    position: initial;"></i></span> <span class="nav-search_1"><a href="#nav-search_1"><i class="fa fa-navicon"></i></a></span>
                    <!-- <hgroup class="logo-site">
                        <h1 class="site-title"> <a href="/"><img src="<?=ImageTools::fixImage(SiteExt::getAttr('qjpz','pcLogo'))?>" style="height:50px" alt="" /></a></h1>
                    </hgroup>
                    <div id="site-nav-wrap">
                        <nav id="site-nav" class="main-nav">
                            <div>
                                <ul class="down-menu nav-menu">
                                <?php $this->widget('HomeNavWidget')?>
                                </ul>
                            </div>
                        </nav>
                    </div> -->
                </div>
            </div>
        </div>
        <nav>
            <ul class="nav_sj" style="margin-top: 0" id="nav-search_1"><?php $this->widget('HomeNavWidget',['type'=>'wap'])?>
            </ul>
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
    <footer class="footer">
        <div class="footer-inner">
            <p>
                <a href="" title="球布斯资讯站">球布斯资讯站</a> 版权所有，保留一切权利© 2017 · 托管于阿里云服务器&nbsp;&nbsp; </p>
        </div>
    </footer>
    <script type='text/javascript' src='<?=Yii::app()->theme->baseUrl?>/static/home/js/um.js?ver=4.5.9'></script>
    <script type='text/javascript' src='<?=Yii::app()->theme->baseUrl?>/static/home/js/wp-embed.min.js?ver=4.5.9'></script>
</body>

</html>