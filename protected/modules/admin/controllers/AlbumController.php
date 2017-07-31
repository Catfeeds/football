<?php
/**
 * 图库控制器
 */
class AlbumController extends AdminController{
	
	public $cates = [];

	public $controllerName = '';

	public $modelName = 'TkExt';

	public function init()
	{
		parent::init();
		$this->controllerName = '图库';
		$this->cates = CHtml::listData(TkCateExt::model()->normal()->findAll(),'id','name');
	}
	public function actionList($type='title',$value='',$time_type='created',$time='',$cate='')
	{
		$modelName = $this->modelName;
		$criteria = new CDbCriteria;
		if($value = trim($value))
            if ($type=='title') {
                $criteria->addSearchCondition('name', $value);
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
			$criteria->addCondition('cid=:cid');
			$criteria->params[':cid'] = $cate;
		}
		$infos = $modelName::model()->undeleted()->getList($criteria,20);
		$this->render('list',['infos'=>$infos->data,'pager'=>$infos->pagination,'type' => $type,'value' => $value,'time' => $time,'time_type' => $time_type,'cates'=>$this->cates,'cate'=>$cate]);
	}

	public function actionEdit($id='')
	{
		$modelName = $this->modelName;
		$info = $id ? $modelName::model()->findByPk($id) : new $modelName;
		if(Yii::app()->request->getIsPostRequest()) {
			
			$values = Yii::app()->request->getPost($modelName,[]);
			$album = $values['album'];
			$des = $values['image_des'];
			unset($values['album']);
			unset($values['image_des']);
			$info->attributes = $values;
			// $info->is_album = 1;
			// var_dump($album);exit;
			!$info->status && $info->status = 1;
			if($info->save()) {
				AlbumExt::model()->deleteAllByAttributes(['aid'=>$info->id]);
				if($album) {
					foreach ($album as $key => $value) {
						$albu = new AlbumExt;
						$albu->aid = $info->id;
						$albu->name = isset($des[$key]) && $des[$key]?$des[$key]:'';
						$albu->url = $value;
						$albu->save();
					}
				}
				$this->setMessage('操作成功','success',['list']);
			} else {
				$this->setMessage(array_values($info->errors)[0][0],'error');
			}
		} 
		$this->render('edit',['cates'=>$this->cates,'article'=>$info]);
	}
}