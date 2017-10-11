<?php 
class CommentController extends HomeController{
	public function actionAdd()
	{
		if(Yii::app()->request->getIsPostRequest()) {
			$info = new CommentExt;
			$info->uid = $this->user->id;
			$info->username = $this->user->name;
			$info->type = Yii::app()->request->getPost('type','1');
			$info->status = 1;
			$info->content = Yii::app()->request->getPost('comment','');
			str_replace('/\n/g', '<br>', $info->content);
			$info->major_id = Yii::app()->request->getPost('comment_post_ID','');
			$info->comment_id = Yii::app()->request->getPost('comment_parent','');
			if($sens = SiteExt::getAttr('sen','sen')) {
				foreach (array_filter(explode(',', $sens)) as $key => $value) {
					if(strstr($info->content,$value)) {
						echo json_encode(['msg'=>'提交失败，含有敏感词'.$value]);
						return ;
					}
				}
			}
			if($info->save())
				echo json_encode(['msg'=>'提交成功']);
			else
				echo json_encode(['msg'=>current(current($info->getErrors()))]);
		}
	}	
}