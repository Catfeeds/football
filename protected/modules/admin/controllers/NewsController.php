<?php
/**
 * 资讯控制器
 */
class NewsController extends AdminController{
	// 红酒类型
	public $cates = [];

	public function init()
	{
		parent::init();
		$this->cates = CHtml::listData(ArticleCateExt::model()->normal()->findAll(),'id','name');
	}
	public function actionList($type='title',$value='',$time_type='created',$time='',$cate='',$tag='')
	{
		$tagArr = [];
		$tagName = '';
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
			$criteria->addCondition('cid=:cid');
			$criteria->params[':cid'] = $cate;
		}
		$criteria->order = 'day desc,sort desc';
		if($tag) {
			$tagName = TagExt::model()->findByPk($tag)->name;
			// $tag = TagExt::getIdByPinyin($tag);
			$infos = ArticleTagExt::findNewsByTag($tag,20);
		} else {
			$infos = ArticleExt::model()->undeleted()->getList($criteria,20);
		}
		// $infos = ArticleExt::model()->undeleted()->getList($criteria,20);
		$tags = Yii::app()->db->createCommand("select tid,name,count(tid) as ct from article_tag group by tid")->queryAll();
		if($tags){
			foreach ($tags as $k => $v) {
				$tagArr[$v['tid']] = $v['name'];
			}
		}
		$this->render('list',['cate'=>$cate,'infos'=>$infos->data,'cates'=>$this->cates,'pager'=>$infos->pagination,'type' => $type,'value' => $value,'time' => $time,'time_type' => $time_type,'tags'=>$tagArr,'tagName'=>$tagName]);
	}

	public function actionEdit($id='',$page='')
	{
		$info = $id ? ArticleExt::model()->findByPk($id) : new ArticleExt;
		if(Yii::app()->request->getIsPostRequest()) {
			$values = Yii::app()->request->getPost('ArticleExt',[]);
			$tags = $values['tags'];
			unset($values['tags']);
			$info->attributes = $values;
			if(strstr($info->content,'<img')) {
				preg_match_all('/<img.*?src="(.*?)".*?>/is',$info->content,$match);
				// var_dump($match);exit;
				if(isset($match[1]) && $match[1]) {
					foreach ($match[1] as $key => $value) {
						$info->content = str_replace($value, ImageTools::fixImage(Yii::app()->file->fetch($value)), $info->content);
					}
					
				}
			}
			$info->updated = time();
			if($info->save()) {
				if($tags) {
					ArticleTagExt::model()->deleteAllByAttributes(['aid'=>$info->id]);
					$tags = explode(' ', $tags);
					foreach ($tags as $key => $value) {
						$tag = New ArticleTagExt;
						$tag->name = $value;
						$tag->aid = $info->id;
						$tag->save();
					}
				} else {
					ArticleTagExt::model()->deleteAllByAttributes(['aid'=>$info->id]);
				}
				$this->setMessage('操作成功','success',['list?page='.$page]);
			} else {
				$this->setMessage(array_values($info->errors)[0][0],'error');
			}
		} 
		$this->render('edit',['cates'=>$this->cates,'article'=>$info]);
	}

	public function actionGetNews()
	{
		Yii::import('application.commands.DataCommand');
        $runner = new CConsoleCommandRunner;
        $v2 = new DataCommand('',$runner);
        $v2->actionNews();
        $this->redirect('list');
        $this->setMessage('操作成功','success');
        // return ;
	}
}