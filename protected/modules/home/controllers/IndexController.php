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
        $news = ArticleExt::model()->normal()->findAll($criteria);
        $this->render('index',['matchs'=>$matchs,'cates'=>$cates,'cid'=>$cid,'news'=>$news]);
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
