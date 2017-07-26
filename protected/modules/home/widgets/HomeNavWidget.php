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
		$path = Yii::app()->request->getPathInfo();
		// var_dump($path);exit;
		$path = ltrim($path,'/');
		$menus = $this->owner->getHomeMenu();
		$html = "";
		foreach ($menus as $key => $value) {
			// var_dump($path);exit;
			!isset($value['active']) && $value['active'] = '';
			$url = $this->owner->createUrl('/'.$value['url']);
			if($value['active']) {
				if(strstr($path, $value['active']))
					// $active = 'current-menu-item ';
					$active = 'headMenuNow';
				else
					$active = '';
			}else
				$active = '';
				
			$name = $value['name'];
			// if($this->type == 'home')
			// 	$html .= '<li class="nav_menu-item">'.$name.'</a></li>';
			// else
				$html .= '<li class="nav_menu-item"><a class="'.$active.'" href="'.$url.'"><p>'.$name.'</p></a></li>';
			// if($this->type == 'home')
			// 	$html .= '<li id="menu-item-'.$key.'" class="menu-item menu-item-type-custom menu-item-object-custom '.$active.' menu-item-home menu-item-'.$key.'"><a href="'.$url.'">'.$name.'</a></li>';
			// else
			// 	$html .= '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-'.$key.'"><a href="'.$url.'">'.$name.'</a></li>';
		}
		echo $html;
	}
}