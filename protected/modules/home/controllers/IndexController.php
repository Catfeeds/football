<?php
class IndexController extends HomeController
{
    public function actionIndex($cid=0)
    {
        // 三场比赛
        $matchs = MatchExt::model()->normal()->findAll(['limit'=>3]);
        // 所有分类
        $cates = ArticleCateExt::model()->normal()->findAll(['limit'=>8]);
        
        // if(!$cid) {
        //     isset($cates[0]) && $cid = $cates[0]['id'];
        // }\
        $news = [];
        if($cates) {
            foreach ($cates as $key => $value) {
                $criteria = new CDbCriteria;
                $criteria->limit = 3;
                $criteria->addCondition('cid=:cid');
                $criteria->params[':cid'] = $value['id'];
                if($infos = ArticleExt::model()->normal()->findAll($criteria))
                    $news[$value->id] = $infos;
            }
            
        }
        // 精品导读
        $jpdds = RecomExt::getObjFromCate(1,2);
        // 热门推荐
        $rmtjs = RecomExt::getObjFromCate(2,6);
        
        // $news = ArticleExt::model()->normal()->findAll($criteria);
        // 三个联赛
        $leas = LeagueExt::model()->normal()->findAll(['limit'=>3]);
        // 三个视频
        $videos = ArticleExt::model()->isvideo()->findAll(['limit'=>3]);
        // 积分
        $points = [];
        if($leas) {
            foreach ($leas as $key => $value) {
                $criteria = new CDbCriteria;
                $criteria->addCondition('lid=:lid');
                $criteria->params[':lid'] = $value->id;
                $criteria->order = 'points desc';
                $criteria->limit = 10;
                $points[] = PointsExt::model()->findAll($criteria);

            }
        }
        // 十个评论
        $comms = CommentExt::model()->normal()->findAll(['limit'=>10,'order'=>'praise desc, created asc']);
        $rights = ['leas'=>$leas,'points'=>$points,'rmtjs'=>$rmtjs,'comms'=>$comms,'matchs'=>$matchs];
        $this->render('index',['matchs'=>$matchs,'cates'=>$cates,'cid'=>$cid,'news'=>$news,'jpdds'=>$jpdds,'rights'=>$rights,'videos'=>$videos]);
    }

    public function actionAbout()
    {
        $info = ArticleExt::model()->getJs()->normal()->find();
        // var_dump($info->attributes);exit;
        $this->render('about',['info'=>$info]);
    }

    public function actionContact()
    {
        $info = ArticleExt::model()->getLx()->normal()->find();
        // var_dump($info->attributes);exit;
        $this->render('contact',['info'=>$info]);
    }
    public function actionTest()
    {
        var_dump(Yii::app()->mns->run('13861242596','1234'));exit;
    }
}
