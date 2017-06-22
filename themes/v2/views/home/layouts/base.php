<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10,IE=9,IE=8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title><?=$this->pageTitle?></title>
    <meta name="keywords" content="<?=$this->keyword?>" />
    <meta name="description" content="<?=$this->description?>" />
    
    <link href="/static/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
    <header id="masthead" class="site-header">
        <!-- <nav id="top-header">
            <div class="top-nav">
                <div id="user-profile">
                    <span class="nav-set"><span class="nav-login">
                    <a href="http://demo7.ledkongzhiqi.com/wp-login.php" class="signin-loader">Hi, 请登录</a>&nbsp; &nbsp; <a href="/wp-login.php?action=register" class="signup-loader">我要注册</a>
                </span> </span>
                </div>
                <div class="menu-container">
                    <ul id="menu-%e5%a4%b4%e9%83%a8" class="top-menu">
                        <a target="_blank" href="http://www.cuizl.com/aboutus">关于我们</a> | <a target="_blank" href="http://www.cuizl.com/aboutus">联系我们</a> </ul>
                </div>
            </div>
        </nav> -->
        <div id="nav-header">
            <div id="top-menu">
                <div id="top-menu_1"><span class="nav-search"><i class="fa fa-search" style="    position: initial;"></i></span> <span class="nav-search_1"><a href="#nav-search_1"><i class="fa fa-navicon"></i></a></span>
                    <hgroup class="logo-site">
                        <h1 class="site-title"> <a href="/"><img src="http://okwfe8mj2.bkt.clouddn.com/2017/0601/1496322204731234802.PNG" style="height:50px" alt="" /></a></h1>
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