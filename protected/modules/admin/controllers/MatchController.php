<?php
/**
 * 比赛控制器
 */
class MatchController extends AdminController{
	
	public $cates = [];

	public $leas = [];

	public $controllerName = '';

	public $modelName = 'MatchExt';

	public function init()
	{
		parent::init();
		$this->controllerName = '比赛';
		$this->cates = CHtml::listData(TeamExt::model()->normal()->findAll(),'id','name');
		$this->leas = CHtml::listData(LeagueExt::model()->normal()->findAll(),'id','name');
	}

	public function actionList($type='title',$value='',$time_type='created',$time='',$cate='',$cate1='',$lea='')
	{
		$modelName = $this->modelName;
		$criteria = new CDbCriteria;
		if($value = trim($value))
            if ($type=='title') {
                $criteria->addSearchCondition('title', $value);
            } 
        //添加时间、刷新时间筛选
        if($time_type!='' && $time!='')
        {
            list($beginTime, $endTime) = explode('-', $time);
            $beginTime = (int)strtotime(trim($beginTime));
            $endTime = (int)strtotime(trim($endTime));
            $criteria->addCondition("{$time_type}>=:beginTime");
            $criteria->addCondition("{$time_type}<:endTime");
            $criteria->params[':beginTime'] = TimeTools::getDayBeginTime($beginTime);
            $criteria->params[':endTime'] = TimeTools::getDayEndTime($endTime);

        }
		if($cate) {
			$criteria->addCondition('home_id=:cid');
			$criteria->params[':cid'] = $cate;
		}
		if($cate1) {
			$criteria->addCondition('visitor_id=:cid');
			$criteria->params[':cid'] = $cate1;
		}
		if($lea) {
			$criteria->addCondition('lid=:cid');
			$criteria->params[':cid'] = $lea;
		}
		$infos = $modelName::model()->undeleted()->getList($criteria,20);
		$this->render('list',['cate'=>$cate,'infos'=>$infos->data,'cates'=>$this->cates,'pager'=>$infos->pagination,'type' => $type,'value' => $value,'time' => $time,'time_type' => $time_type,'cate1'=>$cate1,'leas'=>$this->leas,'lea'=>$lea]);
	}

	public function actionEdit($id='')
	{
		$modelName = $this->modelName;
		$info = $id ? $modelName::model()->findByPk($id) : new $modelName;
		if(Yii::app()->request->getIsPostRequest()) {
			$info->attributes = Yii::app()->request->getPost($modelName,[]);
			// $spid = Yii::app()->request->getPost('spid',[]);
			// $scores = Yii::app()->request->getPost('scores',[]);
			// $apid = Yii::app()->request->getPost('apid',[]);
			// $assists = Yii::app()->request->getPost('assists',[]);
			// $tmp = $tmp['scores'] = $tmp['assists'] = [];
			// if($scores = array_filter($scores) && $spid = array_filter($spid) && count($spid) == count($scores)) {
			// 	$tmp['scores'] = array_combine($spid, $scores);
			// }
			// if($assists = array_filter($assists) && $apid = array_filter($apid) && count($apid) == count($assists)) {
			// 	$tmp['assists'] = array_combine($apid, $assists);
			// }
			// $info->ext = json_encode($tmp);
			$info->time = strtotime($info->time);
			if($info->save()) {
				$this->setMessage('操作成功','success',['list']);
			} else {
				$this->setMessage(array_values($info->errors)[0][0],'error');
			}
		} 
		$this->render('edit',['cates'=>$this->cates,'article'=>$info,'leas'=>$this->leas]);
	}
}