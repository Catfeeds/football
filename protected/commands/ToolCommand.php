<?php

/**
 * 工具类脚本
 */
class ToolCommand extends CConsoleCommand
{
    /**
     * 同步本地静态文件到七牛
     */
    public function actionQnSync()
    {
        $basePath = Yii::app()->basePath;
        $baseDir = Yii::app()->name;
        $date = date('YmdHis');
        $QnUrl = Yii::app()->staticFile->host.'/';
        $fileArr = [
            'pro.js' => '/resoldwap/build/pro.js'
        ];
        echo "Start Sync:\n";
        echo "Version:{$date}\n";
        echo "==========================\n";
        foreach ($fileArr as $name => $path) {
            $path = $basePath.'/../'.$path;
            $extPath = $baseDir.'/'.$date.'/'.$name;
            $r = Yii::app()->staticFile->consoleFileUpload($path, $extPath);

            if (isset($r['key'])) {
                echo $QnUrl.$r['key']."\n";
            } else {
                var_dump($r);
            }
        }
    }
    public function actionDo()
    {
        $infos = ArticleExt::model()->findAll();
        foreach ($infos as $key => $value) {
            $value->save();
        }
        echo "ok";
    }
    public function actionCreateUsers()
    {
        $namearr = ["MALDINI_DC1Q","ζ junior,","FC-B","Se7en-madrid","┊佐岸|佑转┊_vIMV","@红与黑","高中文","利物浦常在欧冠","junior,","Nirvana的尾巴","臻心爱球","wmy19850726","Einsame Menschen_9cVm","窝你码卖批","安德尔·赫雷拉","o(∩_∩)o_46MN","ゞ 木 木ゞ_VsYh","o(∩_∩)o_46MN","逐风者的微笑","ζ junior,","Ousmane-登贝莱","永远的杰拉队","忘の記①切","骏骏199508","过往_uvNZ","鲁伊科斯塔粉","拜仁魔力廖","宇智波 俊于","罗纳尔多为足球而来","空心菜_Zb2z","boss_qdor","圣·卡西","逐风者的微笑","@红与黑","闫yY焱","雄狮_7Lil","小宝_89EZ","90后点球手","Tiger_sySe","CasaMilan","冉_jzlV","kaka_zFTV","kaka_zFTV","白马张三郎","追梦人_4x4L","静而生慧","甘沁","梦里花落知多少100","じòぴé独自沉醉 夜的黑","夏威夷的柠檬树","MSN累啊","neil满天星","鲁伊科斯塔粉","就是爱德仁","磕着瓜子看红魔","我不配_iglv","咱单身依然幸福","擦屁大点事儿","我是小卧底","蔡月跃","屎哥","我是小卧底","Ade_1R3S","我是小卧底","KAKA_IbLf","穿越时空隧道_3dcz","世界五彩_挚爱纯白","z江平","种超","申佐达洁具","武士硝烟","申佐达洁具","皇马名宿皮克","潇洒哥lo","皇马名宿皮克","我是小卧底","念想_rhFJ","伯纳乌的一只鱼","至尊宝1986","马竞9号","谎 is 👅","灰度存在_KAzr","哥点评不犀利","夏至未至_kycu","Ade_1R3S","伪球迷真小人","Se7en-madrid","梦里花落知多少100","甘沁","Ｔ-Ｂａｇ","颠覆制造者1901","Ade_1R3S","._ezLr","阳光周生","M2K3N","碧海蓝天_FqOf","马克_o3sU"];
        $imagearr = ["http://q.qlogo.cn/qqapp/101028709/8A41A21D7B66F1817A1E4CAE0C724082/100","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-09-29/001135_2960436_avatar_middle.jpg","http://q.qlogo.cn/qqapp/101169587/7A51E12ACEDFE510FC284C442EEA3029/100","http://q.qlogo.cn/qqapp/101028709/1B69B97CC5999D43D9DFCAA49E1CE813/100","http://q.qlogo.cn/qqapp/101028709/C65BB4CEEF718EFA1728FBF3049F0A78/100","http://q.qlogo.cn/qqapp/101169587/DA4DCA891B6A8CD65CA6DC4F785C72B7/100","http://q.qlogo.cn/qqapp/101169587/12B200CFF187485B50ACF66F27B66662/100","http://wx.qlogo.cn/mmopen/xbYMGuPfCANAKhUSxjdvhoLTN5gSmzaFrw7pltObMjeibdRiabbyU9ibJIFR9hU0P19kTekJaWOlfmxBp6C0EicGxa9ru5hKsp1Q/0","http://q.qlogo.cn/qqapp/101169587/12B200CFF187485B50ACF66F27B66662/100","http://wx.qlogo.cn/mmopen/Q3auHgzwzM5ZYr3VUicNjYx20CmgRvYd8z2ntYoklAPOsFcvdNADNdlRynBNBsbAZ00SEYxEwib86InZwa78Lf1g/0","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-08-14/071006_1431977_avatar_middle.jpg","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-08-23/170842_3955979_avatar_middle.jpg","http://tva3.sinaimg.cn/crop.0.8.496.496.50/72272b05jw8fan48l4xx2j20ds0e8jrm.jpg","http://wx.qlogo.cn/mmopen/06naibxMxocicLZncNQ8P1zLUQnibLc2lAORcXcrY1UdZuk4n79X7ia73xAUONicB4D8iarjKhbplwgI4JjVbUeiaDYIQmQeIPbmvca/0","http://wx.qlogo.cn/mmopen/YHRExvrGMhicMOiaBiawzZKkPxI3mqJyNhNvQ1LEFhCictZjtwFSGEkOMI3k8icxTD6R2Oicp8RicZS2gLcOvlGbbs8ZM1dYgxrOEoR/0","http://q.qlogo.cn/qqapp/101028709/9042077DC99F626C983B0F168E747ACC/40","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-06-03/134050_3310498_avatar_middle.jpg","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-08-20/053427_2830824_avatar_middle.jpg","http://uc.zhibo8.cc/avatar.php?size=small&uid=1210900","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-06-01/112728_2086208_avatar_middle.jpg","http://q.qlogo.cn/qqapp/101028709/D8D4AD34A3955DF0FF6E35D6408E78BC/40","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-09-13/094657_3850805_avatar_middle.jpg","http://wx.qlogo.cn/mmopen/1aSwp6pOWt258KMQ7TKicv1HmicbOfK3RIPoLN32yUSGATS3CoDicn2ncdOQHWRyA1AkqUcocT9XTYKiasF3Q6Nb9UFyYhTJbKYt/0","http://q.qlogo.cn/qqapp/101028709/12DDAA97C1EE22CF5EAF2F8269B1927F/100","http://q.qlogo.cn/qqapp/101169587/C947F711AEB94DA71EC7A6A7AC06B89D/100",
"//tu.zhibo8.cc/uploads/qqimages/logo_small.png","http://wx.qlogo.cn/mmopen/YHRExvrGMh8kkOyymXppjia8Z7TIvY28CSGruG1QegYAGLaBSrGTP5QgbicSiabMeic8S2adQFibfOrQ6Dyf2tyPcGqzWu6TccZJA/0","http://q.qlogo.cn/qqapp/101169587/857095EB26F2A58CD7190B326EADAD56/100","http://uc.zhibo8.cc/avatar.php?size=small&uid=79870","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-09-05/141122_3238385_avatar_middle.jpg","http://wx.qlogo.cn/mmopen/xbYMGuPfCAPfVY6AyVOpL52yHhMmg7wf1uLPDaO92L9Fcjl6alITSQo7jIibquRGCpY2OI1byRsT13miaZADj3f7PRNAfzBlul/0","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-07-24/193109_2441731_avatar_middle.jpg","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-09-02/095713_2556074_avatar_middle.jpg","http://q.qlogo.cn/qqapp/101028709/55C99A54A640D7D11F2832C7B150F5CD/100","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-06-01/193349_1340451_avatar_middle.jpg","http://wx.qlogo.cn/mmopen/06naibxMxocicLZncNQ8P1zHkl7GLh9Bib4oqOvNibJIxRTO4o2CUibsAdICW2cPaSRyKagONm6LnvO1mJRGZE2aJP9kDicbcRKXF3/0","http://wx.qlogo.cn/mmopen/06naibxMxocicLZncNQ8P1zHkl7GLh9Bib4oqOvNibJIxRTO4o2CUibsAdICW2cPaSRyKagONm6LnvO1mJRGZE2aJP9kDicbcRKXF3/0","http://wx.qlogo.cn/mmopen/06naibxMxocicLZncNQ8P1zPAHQlFcaA3BawhRkjQYKtgKmJahAXevicYwOT4ibdpRAicMxwmhqxc8DV1PH0Kib57Ua9Erhlgdm33W/0","http://wx.qlogo.cn/mmopen/vi_32/5TMwfgyZbtGyibGPBLvsypATapNsITdDG6F1ATuNqCgQyHooE2WRgI1jicE2Z18Xc8ZF1Eic7qcphiauKnjbaIsUyQ/0","http://q.qlogo.cn/qqapp/101028709/94CA69907C4DC3D6C2DA55D7B3C03FBB/100","http://q.qlogo.cn/qqapp/101028709/69D7E9F78FF470FB924E9073CDACF4AD/40","http://q.qlogo.cn/qqapp/101028709/B9D29FBE094CF2FEC8251820B5341889/100","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-09-07/173313_1316425_avatar_middle.jpg","http://wx.qlogo.cn/mmopen/YHRExvrGMhicMOiaBiawzZKkBTJqIHtUy7dTLHKmGkqQibh0NkdztuvKr1jTibm7ia1y0MURaQ39u5wGz1ugCZjr3Nkn5YXv2YofLic/0","http://tva2.sinaimg.cn/crop.0.11.1021.1021.50/8b78f559tw1ef4yvvunlhj20sg0vl7cq.jpg","http://wx.qlogo.cn/mmopen/xbYMGuPfCAPkflQhAoa5Ir5XJ5O0UqAKJFehaeX1nXd4UsBiaj31Tyuibc7HCJlh8ic4cR9Ynic4lvw7fYrIdRhN3evfJfRd6Yzx/0","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-05-27/191620_3257901_avatar_middle.jpg","http://q.qlogo.cn/qqapp/101028709/10C11FEBAA609FD01CB64D64BAF8109A/40","http://q.qlogo.cn/qqapp/101169587/DD5835D64FD2DB794B8E157280FE1E76/100","http://wx.qlogo.cn/mmopen/YHRExvrGMhicMOiaBiawzZKkNRf579EYqXq9CvXiakXCBqmuOhlgVYf8ib4kLDNdQtgah3Z4Ez8w9d3A4Ad0tns5RwnbPXBmOcRdX/0","http://wx.qlogo.cn/mmopen/1pH7H1uHTh3uNUYYPaZnDZibKRSKdP8r6jTy05qicno92mEkRoEkdovIcNWEpTt0YLMRe6Rpjib2SaicZQHgLCfVt2p2ROp0ak6T/0","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-06-01/112728_2086208_avatar_middle.jpg","http://q.qlogo.cn/qqapp/101169587/E8872FEDE5834C21A890A108ABCB2A29/100","http://uc.zhibo8.cc/avatar.php?size=small&uid=79870","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-09-01/123304_2006819_avatar_middle.jpg","http://q.qlogo.cn/qqapp/101028709/B9251C8343ECDA18EFF630C2A91BD89E/40","http://q.qlogo.cn/qqapp/101028709/13A2B1FB939BFFFC95882B911E4B998D/100","http://wx.qlogo.cn/mmopen/xbYMGuPfCAPkflQhAoa5Ir5XJ5O0UqAKJFehaeX1nXd4UsBiaj31Tyuibc7HCJlh8ic4cR9Ynic4lvw7fYrIdRhN3evfJfRd6Yzx/0","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-06-01/112728_2086208_avatar_middle.jpg","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-09-05/175501_1463090_avatar_middle.jpg","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-09-10/194229_3337515_avatar_middle.jpg","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-09-02/120708_3928706_avatar_middle.jpg","http://wx.qlogo.cn/mmopen/7N2JRaWooRC4YthzE6wJpHZtnr129PbNJpBcgyicnspwdHWv9dcGofMRaqicwTrFe3Ij8YJ3O0QcA4dicK3qH15NMnTErY14xHg/0","http://wx.qlogo.cn/mmopen/7N2JRaWooRCCCStx7N6l3t92SW9TwEOKbnsGcAScyeuldoOEncKmFllBB9q1WzKQabYvAB7AnEobXnwhOra4Yw/0","http://q.qlogo.cn/qqapp/101028709/F91E56DB635C367633C6A47DFA2A286D/100","http://q.qlogo.cn/qqapp/101169587/12B200CFF187485B50ACF66F27B66662/100","http://q.qlogo.cn/qqapp/101028709/F91E56DB635C367633C6A47DFA2A286D/100","http://q.qlogo.cn/qqapp/101028709/F91E56DB635C367633C6A47DFA2A286D/100","http://uc.zhibo8.cc/avatar.php?size=small&uid=79870","http://q.qlogo.cn/qqapp/101028709/F91E56DB635C367633C6A47DFA2A286D/100","http://wx.qlogo.cn/mmopen/xbYMGuPfCAPkflQhAoa5Ir5XJ5O0UqAKJFehaeX1nXd4UsBiaj31Tyuibc7HCJlh8ic4cR9Ynic4lvw7fYrIdRhN3evfJfRd6Yzx/0","http://q.qlogo.cn/qqapp/101028709/92B4F14AC7A90849E25EDEAF4A966F45/100","http://wx.qlogo.cn/mmopen/xbYMGuPfCAPkflQhAoa5Ir5XJ5O0UqAKJFehaeX1nXd4UsBiaj31Tyuibc7HCJlh8ic4cR9Ynic4lvw7fYrIdRhN3evfJfRd6Yzx/0","http://q.qlogo.cn/qqapp/101169587/09914A9CC25F1662FC07920E05C3E78F/100","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-06-11/161539_2870592_avatar_middle.jpg","http://q.qlogo.cn/qqapp/101028709/92B4F14AC7A90849E25EDEAF4A966F45/100","http://wx.qlogo.cn/mmopen/xbYMGuPfCAPkflQhAoa5Ir5XJ5O0UqAKJFehaeX1nXd4UsBiaj31Tyuibc7HCJlh8ic4cR9Ynic4lvw7fYrIdRhN3evfJfRd6Yzx/0","http://tu.zhibo8.cc/uploads/qqimages/logo_small.png","http://tu.zhibo8.cc/uploads/qqimages/logo_small.png","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-09-01/193919_2745156_avatar_middle.jpg","http://tu.zhibo8.cc/uploads/qqimages/logo_small.png","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-09-30/081815_3198663_avatar_middle.jpg","http://q.qlogo.cn/qqapp/101028709/6CB955EB358C012DA1D7F53488A19B74/100","http://tu.zhibo8.cc/uploads/qqimages/logo_small.png","http://wx.qlogo.cn/mmopen/Q3auHgzwzM47993VxB8HsJeqotKsveMbxS1AnzlHibyBUxAPIibHQ7JD0ylJB8GrrPU7t8hdibuQkb0eJsvMNiazrg/0","http://wx.qlogo.cn/mmopen/ajNVdqHZLLAuBTAt9s0NicMHIQenn90ryibZ3k3v1SPQflRmC6AyX3LSX0952l6XaRiczFYib2AnNU62sdF7U4FDwQ/0","http://tu.zhibo8.cc/uploads/qqimages/logo_small.png","http://uc.zhibo8.cc/avatar.php?size=small&uid=79870","http://q.qlogo.cn/qqapp/101169587/74AA0666737A1CB5FCD5A3734AE2D966/100","http://q.qlogo.cn/qqapp/101169587/F80913A563DB036640D82E8DD4C0B534/100","http://q.qlogo.cn/qqapp/101028709/3E1EA08F162B9D959C8BD231B8CD26E4/100","http://tva4.sinaimg.cn/crop.0.0.180.180.50/3f3d597djw1e8qgp5bmzyj2050050aa8.jpg","http://wx.qlogo.cn/mmopen/Q3auHgzwzM7AICSfnGY1iatPuzXS7XZu2gJDmiagKHNNY9eRWF6wFVRSibicZYqpGSsTw36JDmUkia7ibkT9zhkHw5Og/0","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-09-03/114137_2046984_avatar_middle.jpg","http://q.qlogo.cn/qqapp/101028709/4D6C398DC6CD5F00D2E94CDDBF100936/100","http://wx.qlogo.cn/mmopen/Q3auHgzwzM6xZ4GYTibOicOsh34O6kMnMyyHjxfeBIRap8OU6JNTLo08xRwiaRxpNhMvZ1DsiciblbggEPBa9j18Dqume7kyX99uIF4G8UNXnQuk/0","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-08-20/105944_1384760_avatar_middle.jpg","http://q.qlogo.cn/qqapp/101028709/3E1EA08F162B9D959C8BD231B8CD26E4/100","http://tp4.sinaimg.cn/2079952807/180/5677369970/1","http://bbsimg.zhibo8.cc/bbsimg/data/avatar/2017-09-18/170556_4005543_avatar_middle.jpg"];
        foreach ($namearr as $k => $name) {
            $key = Yii::app()->file->fetch($imagearr[$k]);
            // var_dump($name);exit;
            if(!$key)
                continue;
            $obj = new UserExt;
            $obj->name = $name;
            $obj->image = $key;
            $obj->status = 1;
            $obj->pwd = md5('zheshigemajia');
            $obj->save();
        }
    }

    public function actionInitLeaImg()
    {
        $page = 0;
        begin:
        $lim = $page * 200;
        $imgs = LeagueExt::model()->findAllBySql("select id,image from league where image like 'http%' limit $lim,200");
        // var_dump($imgs[0]);
        if($imgs) {
            foreach ($imgs as $key => $value) {
                if(strstr($value->image, '?')) {
                    list($value->image,$a) = explode('?', $value->image);
                }
                $value->image = Yii::app()->file->fetch($value->image);
                LeagueExt::model()->updateByPk($value->id,['image'=>$value->image]);
            }
        } else {
            echo "finished";
        }
    }
}