<?php 
class CommentController extends HomeController{
	public function actionAdd()
	{
		if(Yii::app()->request->getIsPostRequest()) {
			$info = new CommentExt;
			$info->uid = $this->user->id;
			$info->username = $this->user->name;
			$info->type = 1;
			$info->status = 1;
			$info->content = Yii::app()->request->getPost('comment','');
			$info->major_id = Yii::app()->request->getPost('comment_post_ID','');
			$info->comment_id = Yii::app()->request->getPost('comment_parent','');
			if($info->save())
				echo json_encode('提交成功');
		}
	}	
}