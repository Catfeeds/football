<?php
class IndexController extends HomeController
{
    public function actionIndex()
    {
        $matchs = MatchExt::model()->normal()->findAll(['limit'=>3]);
        $this->render('index',['matchs'=>$matchs]);
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
