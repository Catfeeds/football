<?php
/**
 * 资讯分类控制器
 */
class AlbumcateController extends AdminController{
	public function actionList($type='title',$value='',$time_type='created',$time='',$cate='')
	{
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
		$infos = TkCateExt::model()->undeleted()->getList($criteria,20);
		// var_dump($infos);exit;
		$this->render('list',['cate'=>$cate,'infos'=>$infos->data,'pager'=>$infos->pagination,'type' => $type,'value' => $value,'time' => $time,'time_type' => $time_type,]);
	}

	public function actionEdit($id='')
	{
		$info = $id ? TkCateExt::model()->findByPk($id) : new TkCateExt;
		if(Yii::app()->request->getIsPostRequest()) {
			$values = Yii::app()->request->getPost('TkCateExt',[]);
			$title = $values['seo_title'];
			$desc = $values['seo_desc'];
			$key = $values['seo_key'];	
			$info->seo = json_encode(['t'=>$title,'d'=>$desc,'k'=>$key]);
			unset($values['seo_title']);
			unset($values['seo_desc']);
			unset($values['seo_key']);
			$info->attributes = $values;

			if($info->save()) {
				$this->setMessage('操作成功','success',['list']);
			} else {
				$this->setMessage(array_values($info->errors)[0][0],'error');
			}
		} 
		$this->render('edit',['article'=>$info]);
	}
	
}