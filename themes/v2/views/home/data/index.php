<?php 
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/data-index.css");
    Yii::app()->clientScript->registerCssFile("/themes/v2/static/home/style/match-common.css");
?>
<section class="container">
<!-- <div style="height: 40px;background-color: white;margin-top: 10px;margin-bottom: 10px ">
</div> -->
<div style="margin-top: 20px;background-color: white" class="liansai-content-wrap wrap">
    <div class="content-left">
        <div class="panlu-table">
            <ul class="tab-title">
                <?php foreach ($liarr as $key => $value) {?>
                    <li class="<?=$type==$key?'active':''?>"><a href="<?=$this->createUrl('/home/data/index',['type'=>$key])?>"><?=$value?></a></li>
                <?php } ?>
                <li class="js-saizhi">联赛赛制</li>
            </ul>
            <div class="table-wrap">
            <?php switch ($type) {
                case 'p': ?>
                    <table>
                    <thead>
                        <tr>
                            <td>排名</td>
                            <td>球队</td>
                            <td>已赛场数</td>
                            <td>胜场数</td>
                            <td>平场数</td>
                            <td>负场数</td>
                            <td>进球数</td>
                            <td>失球数</td>
                            <td>净胜球数</td>
                            <td>积分</td>
                            <!-- <td>近期走势</td> -->
                        </tr>
                    </thead>
                    <!--总榜单-->
                    <tbody>
                    <?php if($points) foreach ($points as $key => $value) {?>
                        <tr>
                            <!--排名-->
                            <td class="rank"><?=$key+1?></td>
                            <!--球队-->
                            <td class="red name"><a href="#"><?=$value->team->name?></a></td>
                            <td><?=$value->win+$value->same+$value->lose?></td>
                            <td><?=$value->win?></td>
                            <td><?=$value->same?></td>
                            <td><?=$value->lose?></td>
                            <td><?=$value->score_ball?></td>
                            <td><?=$value->lose_ball?></td>
                            <td><?=$value->score_ball-$value->lose_ball?></td>
                            <td><?=$value->points?></td>
                            <!--近期6场走势-->
                            <!-- <td class="icon-wrap"> -->
                                <!-- 胜：icon-ico_win，负：icon-ico_lose，平：icon-ico_draw-->
                                <!-- <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                                <i class="icon-ico_win"></i>
                            </td> -->
                        </tr>
                    <?php } ?>
                        
                    </tbody>
                </table>
                <?php break; case 's' : ?>

                <?php break; case 'a' : ?>
                <?php break; case 't' : ?>
                <?php break; ?>
            <?php  } ?>
                <!--联赛赛制-->
                <div class="saizhi hide">
                    <p>&nbsp; &nbsp;中国足球协会超级联赛（官方英文名称：Chinese Football Association Super League，简称为CSL）是由中国足球协会组织的，中国最优秀的职业足球俱乐部参加的全国最高水平的足球职业联赛，仿照英格兰足球超级联赛，简称为中超联赛。该联赛开始于2004年，脱胎自原中国足球甲级A组联赛。第一届有12支球队参加，首两届暂停升降级制度，于2006年恢复“升二降二”的升降级制度（但由于2006年四川冠城解散、2007年上海申花与上海联城合并、2008年武汉光谷退出及2012年大连实德解散，故这四年都只实行“升二降一”，即从中甲中升两队，降一队到中甲）。</p>
                    <p>&nbsp; &nbsp;2008年赛季起正式恢复到原先计划的“升二降二”制度。在中超成立之初，由于硬件设施不能达到中国足协所制定的中超准入标准，辽宁队的参赛资格曾引起过很大争议。2006年4月，为进一步完善中国足球产业的市场化进程，中国足球协会与所有中超联赛参赛俱乐部共同出资成立了中超联赛有限责任公司。2007年由于上海联城和上海申花的合并，总共有15支俱乐部队参加2007赛季中超联赛。2008年，第一次有16支队伍参加中超联赛，但是于10月初，武汉光谷因称中国足协违反程序对其进行不公处罚而退出中超联赛。</p>
                    <p>&nbsp; &nbsp;因为国家队长期成绩不佳，加上中国足球各级联赛均存在管理腐败，赌球成风问题，2009年后已经引起了中华人民共和国中央领导的关注，包括习近平，刘延东等党和国家领导人分别在不同场合提到中国足球问题以及亲身参与中国足球的会议。2009年11月中华人民共和国公安部展开中国足坛反赌风暴行动，大范围打击抑制足球发展的赌球行为。</p>
                    <p>&nbsp; &nbsp;2012年中国足球超级联赛十六支球队单赛季投入超过30亿人民币（约5亿美元），为历届最高；一些财力雄厚的球队亦网罗了如德罗巴，阿内尔卡，凯塔，罗申巴克，卡努特，雅库布，巴里奥斯等球星，中超自赌球风波后再次开始被中国国内社会甚至世界球坛所关注；而2012年全年的票房亦为2004年中超成立以来最高。</p>
                    <p>&nbsp; &nbsp;2013年中国足球超级联赛初期，虽然阿内尔卡，德罗巴离开分别加盟尤文图斯和加拉塔萨雷，但中国足球超级联赛依旧吸引了埃尔克森，米西莫维奇，瓦罗，斯基亚维，托兰佐，勒夫等球星的加盟。2014年中国足球超级联赛亦吸引了蒙蒂略、迪亚曼蒂、吉拉迪诺、比亚特里及汉克等大牌球星加盟。而且2014赛季中超各俱乐部的总收入突破20亿元，创下中超历史新高。另外中超上座率高居亚洲第一。但在同时，各俱乐部收支失衡，经营模式仍不具备可持续发展性。直至2014赛季中超联赛结束时，各俱乐部总体仍处于亏损状态，只有5家俱乐部实现盈利，分别是广州恒大、贵州人和、上海上港、上海申鑫以及广州富力。[1]&nbsp;长远发展，16队中超球会也会投资兴建自己球会运动场及足球场。</p>
                    <h2>赛制</h2>
                    <p>联赛采取主客双循环赛制比赛，每支队伍与各球队对赛两次，主客各一次。</p>
                    <ul>
                        <li><b>中超联赛决定名次办法</b></li>
                    </ul>
                    <p>（一）每队胜一场得3分，平一场得1分，负一场得0分；</p>
                    <p>（二）中超联赛结束，积分多的队名次列前；</p>
                    <p>（三）如果两队或两队以上积分相等，依下列顺序排列名次：</p>
                    <ol>
                        <li>积分相等队之间相互比赛积分多者，名次列前</li>
                        <li>积分相等队之间相互比赛净胜球多者，名次列前</li>
                        <li>积分相等队之间相互比赛进球数多者，名次列前</li>
                        <li>积分相等队其队所属俱乐部的预备队在本赛季预备队联赛中的积分多者，名次列前；</li>
                        <li>积分相等队在当年中超联赛全部比赛中净胜球多者，名次列前</li>
                        <li>积分相等队在当年中超联赛全部比赛中进球数多者，名次列前</li>
                        <li>全年比赛红黄牌扣分少者(不包括纪律处罚)，名次列前；</li>
                        <li>以抽签的办法决定名次</li>
                    </ol>
                    <h2>历届冠军</h2>
                    <table style="font-size: 14px; margin: 1em 0px; border: 1px solid rgb(170, 170, 170); border-collapse: collapse; color: black; font-family: sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 22.4px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-align: center; background-color: rgb(249, 249, 249);">
                        <tbody>
                            <tr>
                                <th rowspan="2" style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="8%"><b>赛季</b></th>
                                <th rowspan="2" style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="12%"><b>冠军</b></th>
                                <th rowspan="2" style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="5%"><b>次数</b></th>
                                <th colspan="10" style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);"><b>冠军队伍联赛成绩</b></th>
                                <th rowspan="2" style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="12%"><b>亚军</b></th>
                                <th rowspan="2" style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="12%"><b>季军</b></th>
                            </tr>
                            <tr>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="5%"><b>场次</b></th>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="5%"><b>貹</b></th>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="5%"><b>平</b></th>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="5%"><b>负</b></th>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="5%"><b>进球</b></th>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="5%"><b>失球</b></th>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="5%"><b>净胜球</b></th>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="5%"><b>积分</b></th>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="5%"><b>场均分</b></th>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="5%"><b>胜率</b></th>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2004年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>深圳健力宝</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">1</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">22</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">11</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">9</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">30</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">13</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">+17</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>42</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">1.91</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">50.00%</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">山东鲁能泰山</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">上海国际</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2005年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>大连实德</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">1</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">26</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">21</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">3</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">57</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">18</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">+39</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>65</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2.50</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">80.77%</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">上海申花</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">山东鲁能泰山</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2006年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>山东鲁能泰山</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">1</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">28</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">22</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">3</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">3</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">74</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">26</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">+48</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>69</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2.46</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">78.57%</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">上海申花</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">北京国安</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2007年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>长春亚泰</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">1</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">28</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">16</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">7</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">5</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">48</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">25</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">+23</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>55</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">1.96</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">57.14%</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">北京国安</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">山东鲁能泰山</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2008年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>山东鲁能泰山</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">30</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">18</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">9</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">3</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">54</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">25</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">+29</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>63</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2.10</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">60.00%</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">上海申花</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">北京国安</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2009年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>北京国安</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">1</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">30</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">13</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">12</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">5</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">48</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">28</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">+20</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>51</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">1.70</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">43.33%</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">长春亚泰</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">河南建业</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2010年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>山东鲁能泰山</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">3</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">30</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">18</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">9</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">3</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">59</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">34</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">+25</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>63</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2.10</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">60.00%</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">天津泰达</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">上海申花</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2011年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>广州恒大</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">1</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">30</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">20</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">8</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">67</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">23</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">+44</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>68</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2.27</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">66.67%</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">北京国安</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">辽宁宏运</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2012年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>广州恒大</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">30</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">17</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">7</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">6</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">51</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">30</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">+21</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>58</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">1.93</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">56.67%</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">江苏舜天</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">北京国安</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2013年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>广州恒大</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">3</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">30</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">24</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">5</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">1</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">78</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">18</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">+60</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>77</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2.57</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">80.00%</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">山东鲁能泰山</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">北京国安</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2014年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>广州恒大</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">4</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">30</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">22</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">4</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">4</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">76</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">28</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">+48</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>70</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2.33</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">73.33%</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">北京国安</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">广州富力</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2015年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>广州恒大淘宝</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">5</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">30</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">19</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">10</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">1</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">71</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">28</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">+43</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><b>67</b></td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2.23</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">63.33%</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">上海上港</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">山东鲁能泰山</td>
                            </tr>
                        </tbody>
                    </table>
                    <h2>&nbsp;</h2>
                    <h2>历届金靴奖得主</h2>
                    <table style="font-size: 14px; margin: 1em 0px; border: 1px solid rgb(170, 170, 170); border-collapse: collapse; color: black; font-family: sans-serif; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 22.4px; orphans: auto; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-align: center; background-color: rgb(249, 249, 249);">
                        <tbody>
                            <tr>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="10%">球 季</th>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="20%">球 员</th>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="15%">球 队</th>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="10%">入 球</th>
                                <th style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em; text-align: center; background-color: rgb(242, 242, 242);" width="15%">球队最后成绩</th>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2004年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><img alt="加纳" data-file-height="300" data-file-width="450" height="15" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Flag_of_Ghana.svg/22px-Flag_of_Ghana.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/19/Flag_of_Ghana.svg/33px-Flag_of_Ghana.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/19/Flag_of_Ghana.svg/44px-Flag_of_Ghana.svg.png 2x" width="22">&nbsp;阿尤</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">上海国际</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">17球</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">季军</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2005年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><img alt="塞尔维亚" data-file-height="900" data-file-width="1350" height="15" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Flag_of_Serbia.svg/22px-Flag_of_Serbia.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Flag_of_Serbia.svg/33px-Flag_of_Serbia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Flag_of_Serbia.svg/44px-Flag_of_Serbia.svg.png 2x" width="22">&nbsp;耶利奇</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">北京国安</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">21球</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">第6名</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2006年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><img alt="中国" data-file-height="600" data-file-width="900" height="15" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/22px-Flag_of_the_People%27s_Republic_of_China.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/33px-Flag_of_the_People%27s_Republic_of_China.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/44px-Flag_of_the_People%27s_Republic_of_China.svg.png 2x" width="22">&nbsp;李金羽</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">山东鲁能泰山</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">26球</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">冠军</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2007年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><img alt="中国" data-file-height="600" data-file-width="900" height="15" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/22px-Flag_of_the_People%27s_Republic_of_China.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/33px-Flag_of_the_People%27s_Republic_of_China.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/44px-Flag_of_the_People%27s_Republic_of_China.svg.png 2x" width="22">&nbsp;李金羽</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">山东鲁能泰山</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">15球</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">季军</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2008年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><img alt="巴西" data-file-height="504" data-file-width="720" height="15" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/22px-Flag_of_Brazil.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/33px-Flag_of_Brazil.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/44px-Flag_of_Brazil.svg.png 2x" width="22">&nbsp;路易斯</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">天津泰达</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">14球</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">第4名</td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2009年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><img alt="洪都拉斯" data-file-height="500" data-file-width="1000" height="11" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Flag_of_Honduras.svg/22px-Flag_of_Honduras.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/8/82/Flag_of_Honduras.svg/33px-Flag_of_Honduras.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/8/82/Flag_of_Honduras.svg/44px-Flag_of_Honduras.svg.png 2x" width="22">&nbsp;拉米雷斯</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">广州医药</td>
                                <td rowspan="2" style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">17球</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">第9名</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><img alt="阿根廷" data-file-height="500" data-file-width="800" height="14" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/22px-Flag_of_Argentina.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/33px-Flag_of_Argentina.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/44px-Flag_of_Argentina.svg.png 2x" width="22">&nbsp;巴尔克斯</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">上海申花（上半赛程）
                                    <br> 深圳红钻（下半赛程）
                                </td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">第5名
                                    <br> 第11名
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2010年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><img alt="哥伦比亚" data-file-height="300" data-file-width="450" height="15" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/22px-Flag_of_Colombia.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/33px-Flag_of_Colombia.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/44px-Flag_of_Colombia.svg.png 2x" width="22">&nbsp;里亚斯克斯</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">上海申花</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">20球</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">季军</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2011年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><img alt="巴西" data-file-height="504" data-file-width="720" height="15" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/22px-Flag_of_Brazil.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/33px-Flag_of_Brazil.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/44px-Flag_of_Brazil.svg.png 2x" width="22">&nbsp;穆里奇</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">广州恒大</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">16球</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">冠军</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2012年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><img alt="罗马尼亚" data-file-height="400" data-file-width="600" height="15" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/22px-Flag_of_Romania.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/33px-Flag_of_Romania.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/7/73/Flag_of_Romania.svg/44px-Flag_of_Romania.svg.png 2x" width="22">&nbsp;达纳拉赫</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">江苏舜天</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">23球</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">亚军</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2013年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><img alt="巴西" data-file-height="504" data-file-width="720" height="15" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/22px-Flag_of_Brazil.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/33px-Flag_of_Brazil.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/44px-Flag_of_Brazil.svg.png 2x" width="22">&nbsp;埃尔克森</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">广州恒大</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">24球</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">冠军</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2014年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><img alt="巴西" data-file-height="504" data-file-width="720" height="15" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/22px-Flag_of_Brazil.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/33px-Flag_of_Brazil.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/44px-Flag_of_Brazil.svg.png 2x" width="22">&nbsp;埃尔克森</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">广州恒大</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">28球</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">冠军</td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">2015年</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;"><img alt="巴西" data-file-height="504" data-file-width="720" height="15" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/22px-Flag_of_Brazil.svg.png" srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/33px-Flag_of_Brazil.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/44px-Flag_of_Brazil.svg.png 2x" width="22">&nbsp;阿洛伊西奥</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">山东鲁能泰山</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">22球</td>
                                <td style="border: 1px solid rgb(170, 170, 170); padding: 0.2em 0.4em;">季军</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
        <p>以上资料仅供参考 更新于 <?=date('Y-m-d ',TimeTools::getDayBeginTime())?></p>
    </div>
    <div class="content-right">
        <div class="side-nav">
            <p class="side-title"><i class="icon-icon_datum"></i>联赛数据中心</p>
            <ul>
            <?php $get = $_GET;unset( $get['lid']); if($leas) foreach ($leas as $key => $value) {  ?>
                <li class="<?=$lid==$value['id']?'active':''?>"><i class="icon-icon_datum_n"></i><a href="<?=$this->createUrl('/home/data/index',['lid'=>$value->id]+$get)?>"><?=$value->name?></a></li>
            <?php } ?>
                
            </ul>
        </div>
    </div>
</div>
</section>
