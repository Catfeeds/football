<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
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
    .indexnav .nav {
    width: 700px;
    height: 50px;
    margin-bottom: 10px;
    line-height: 50px;
    margin-left: auto;
    margin-right: auto;
    color: #fff;
}
.indexnav #top {
    width: 1000px;
    margin: 0 auto;
    padding: 0 30px;
    height: 50px;
}
.indexnav .top {
    min-width: 1280px;
    font-size: 16px;
    height: 50px;
    margin-top: 0px;
    background-color: white;
}
.kj {
    width: 100%;
    height: 50px
}
.indexnav .fl {
    float: left;
}
.indexnav .nav_menu {
    line-height: 50px;
    text-transform: uppercase;
}
.indexnav .nav_menu-item {
    display: inline-block;
    position: relative;
    float: left;
    width: 100px;
    text-align: center;
}
.indexnav .headMenuNow p {
    position: relative;
    font-weight: bold;
    font-size: 16px;
    z-index: 999;
    color: white;
}
.indexnav .nav a {
    line-height: inherit;
    color: #FFF;
}
.indexnav   .nav a:hover{
    background-color: #16b13a;
    width: 100px;
    transform: skew(0deg) !important;
    position: relative;
}
.indexnav .headMenuNow {
    background-color: #16b13a;
    width: 100px;
    transform: skew(0deg) !important;
    position: relative;
}
.indexnav a{
        color: #5e5e5e;
    text-decoration: none;
    cursor: pointer;
    display: block;
    background-color: transparent;
}
.indexnav .nav_menu {
    line-height: 50px;
    text-transform: uppercase;
}
.indexnav .nav a {
    line-height: inherit;
    color: #FFF;
}
.indexnav p{
    color: #7a6f6f;
    height: 35px;
    padding-top: 15px
}
.indexnav p:hover{
    color: white;
}
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
            <!-- <div id="top-menu">
                <div id="top-menu_1"><span class="nav-search"><i class="fa fa-search" style="    position: initial;"></i></span> <span class="nav-search_1"><a href="#nav-search_1"><i class="fa fa-navicon"></i></a></span>
                    <hgroup class="logo-site">
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
                    </div>
                </div>
            </div> -->
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