<?php
class IndexController extends HomeController
{
    public function actionIndex($cid=0)
    {
        // 三场比赛
        $matchs = MatchExt::model()->normal()->findAll(['limit'=>3]);
        // 所有分类
        $cates = ArticleCateExt::model()->normal()->findAll();
        $criteria = new CDbCriteria;
        $criteria->limit = 20;
        if(!$cid) {
            isset($cates[0]) && $cid = $cates[0]['id'];
        }
        if($cid) {
            $criteria->addCondition('cid=:cid');
            $criteria->params[':cid'] = $cid;
        }
        // 精品导读
        $jpdds = RecomExt::getObjFromCate(1,4);
        // 热门推荐
        $rmtjs = RecomExt::getObjFromCate(2,6);
        
        $news = ArticleExt::model()->normal()->findAll($criteria);
        // 三个联赛
        $leas = LeagueExt::model()->normal()->findAll(['limit'=>3]);
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
        $comms = CommentExt::model()->normal()->findAll(['limit'=>10]);
        $rights = ['leas'=>$leas,'points'=>$points,'rmtjs'=>$rmtjs,'comms'=>$comms];
        $this->render('index',['matchs'=>$matchs,'cates'=>$cates,'cid'=>$cid,'news'=>$news,'jpdds'=>$jpdds,'rights'=>$rights]);
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
}
