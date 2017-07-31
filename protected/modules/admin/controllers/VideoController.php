<?php
/**
 * 视频控制器
 */
class VideoController extends AdminController{
	
	public $cates = [];

	public $controllerName = '';

	public $modelName = 'ArticleExt';

	public function init()
	{
		parent::init();
		$this->controllerName = '视频';
		// $matchs = MatchExt::model()->normal()->video()->findAll();
		// $mts = [];
		// if($matchs) {
		// 	foreach ($matchs as $key => $value) {
		// 		$wd = '';
		// 		$value->league && $wd = $wd.$value->league->name.' ';
		// 		$wd .= $value->home_name.'vs'.$value->visitor_name.' ';
		// 		$wd .= date('Y-d-d H:i:s',$value->time);
		// 		$mts[$value->id] = $wd;
		// 	}
		// }
		// $this->cates = $mts;
	}
	public function actionList($type='title',$value='',$time_type='created',$time='',$cate='')
	{
		$modelName = $this->modelName;
		$criteria = new CDbCriteria;
		if($value = trim($value))
            if ($type=='title') {
                // $criteria->addSearchCondition('title', $value);
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
		$infos = $modelName::model()->isvideo()->getList($criteria,20);
		$this->render('list',['cate'=>$cate,'infos'=>$infos->data,'cates'=>$this->cates,'pager'=>$infos->pagination,'type' => $type,'value' => $value,'time' => $time,'time_type' => $time_type,]);
	}

	public function actionEdit($id='')
	{
		$modelName = $this->modelName;
		$info = $id ? $modelName::model()->findByPk($id) : new $modelName;
		if(Yii::app()->request->getIsPostRequest()) {
			$info->attributes = Yii::app()->request->getPost($modelName,[]);
			$info->is_top_video = 1;
			// if(!$info->image && $info->video) {
			// 	$this->getVideoCover($info->video,1,'video.jpg');
			// 	$info->image = Yii::app()->file->fetch('/upload/image/video.jpg');
			// 	var_dump($info->image);exit;
			// 	unlink('/upload/image/video.jpg');
			// }
			!$info->status && $info->status = 1;
			if($info->save()) {
				$this->setMessage('操作成功','success',['list']);
			} else {
				$this->setMessage(array_values($info->errors)[0][0],'error');
			}
		} 
		$this->render('edit',['cates'=>$this->cates,'article'=>$info]);
	}

	public function getVideoCover($file,$time,$name) {
	     if(empty($time))$time = '1';//默认截取第一秒第一帧
	     $strlen = strlen($file);
	     // $videoCover = substr($file,0,$strlen-4);
	     // $videoCoverName = $videoCover.'.jpg';//缩略图命名
	     //exec("ffmpeg -i ".$file." -y -f mjpeg -ss ".$time." -t 0.001 -s 320x240 ".$name."",$out,$status);
	     $str = "ffmpeg -i ".$file." -y -f mjpeg -ss 3 -t ".$time." -s 320x240 ".$name;

	     //echo $str."</br>";
	     $result = system($str);
	     var_dump($strlen);exit;
     }
}