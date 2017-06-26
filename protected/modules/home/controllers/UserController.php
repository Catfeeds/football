<?php 
class UserController extends HomeController{
	public function actionIndex($type='info')
	{
		$this->render('index',['type'=>$type]);
	}
}