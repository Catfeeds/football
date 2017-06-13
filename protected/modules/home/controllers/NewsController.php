<?php
class NewsController extends HomeController{

	public $cates = [];

	public $rights = [];

	public function init()
	{
		parent::init();
		$this->cates = CHtml::listData(ArticleCateExt::model()->normal()->findAll(),'id','name');
		// 热门推荐
        $rmtjs = RecomExt::getObjFromCate(2,6);
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
        $this->rights = ['leas'=>$leas,'points'=>$points,'rmtjs'=>$rmtjs,'comms'=>$comms];
	}
	public function actionList($cid='')
	{
		$criteria = new CDbCriteria;
		if($cid) {
			$criteria->addCondition('cid=:cid');
			$criteria->params[':cid'] = $cid;
		}
		$datas = ArticleExt::model()->normal()->getList($criteria,20);
		$infos = $datas->data;
		$pager = $datas->pagination;
		
        // var_dump($this->cates);exit;
		$this->render('list',['infos'=>$infos,'pager'=>$pager,'cid'=>$cid,'cates'=>$this->cates,'rights'=>$this->rights]);
	}

	public function actionInfo($id='')
	{
		// var_dump($this->user);exit;
		$info = ArticleExt::model()->findByPk($id);
		$info->hits += 1;
		$info->save();
		$this->render('info',['info'=>$info,'rights'=>$this->rights]);
	}
}