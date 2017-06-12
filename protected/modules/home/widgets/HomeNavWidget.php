<?php
/**
 * pc导航
 * @author tivon
 * @version 2017.6.1
 */
class HomeNavWidget extends CWidget
{
	public $type = 'home';

	public function run()
	{
		$path = Yii::app()->request->getUrl();
		// var_dump($path);exit;
		$path = ltrim($path,'/');
		$menus = $this->owner->getHomeMenu();
		$html = "";
		foreach ($menus as $key => $value) {
			// var_dump($path);exit;
			!isset($value['active']) && $value['active'] = [$value['url']];
			$url = $this->owner->createUrl('/'.$value['url']);
			if(in_array($path, $value['active']))
				$active = 'current-menu-item ';
			else
				$active = '';
			$name = $value['name'];
			if($this->type == 'home')
				$html .= '<li id="menu-item-'.$key.'" class="menu-item menu-item-type-custom menu-item-object-custom '.$active.' menu-item-home menu-item-'.$key.'"><a href="'.$url.'">'.$name.'</a></li>';
			else
				$html .= '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-'.$key.'"><a href="'.$url.'">'.$name.'</a></li>';
		}
		echo $html;
	}
}