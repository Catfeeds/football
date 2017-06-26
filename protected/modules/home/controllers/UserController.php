<?php 
class UserController extends HomeController{
	public function init()
	{
		parent::init();
		
	}
	public function actionIndex($type='info')
	{
		if(!$this->user) {
			$this->redirect('login');
		}
		$this->render('index',['type'=>$type]);
	}
	public function actionLogin()
	{
		$wrong = 0;
		$phone = $pwd = '';
		if(Yii::app()->request->getIsPostRequest()) {
			$phone = $this->cleanXss(Yii::app()->request->getPost('name'));
			$pwd = $this->cleanXss(Yii::app()->request->getPost('pwd'));
			$model = new HomeLoginForm();
			$model->username = $phone;
			$model->password = $pwd;
			if($model->login())
				$this->redirect('/home/index/index');
			else {
				$wrong = 1;
			}
		}
		// var_dump($wrong);exit;
		$this->render('login',['wrong'=>$wrong,'phone'=>$phone,'pwd'=>$pwd]);
	}

	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect('/home/index/index');
	}
}