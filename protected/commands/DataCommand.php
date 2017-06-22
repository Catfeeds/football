<?php
/**
 * 数据迁移脚本
 * @author tivon
 * @date 2015-10-09
 */
class DataCommand extends CConsoleCommand
{
	public function actionLeague($id=0)
	{
		$url = SiteExt::getAttr('qjpz','leagueApi');
		if($id)
			$res = HttpHelper::get($url.'?id='.$id);
		else
			$res = HttpHelper::get($url);
		if(isset($res['content']) && $data = json_decode($res['content'],true)) {
			$count = count($data);
			for ($i=0; $i < $count/200 + 1; $i++) { 
				$arr = array_slice($data, $i*200,200);
				if($arr) {
					foreach ($arr as $key => $value) {
						// var_dump($value);exit;
						$name = $value['name'];
						// if(Yii::app()->db->createCommand("select id from league where name='$name'")->queryScalar()) {
						// 	continue;
						// } 
						$league = new LeagueExt;
						$league->old_id = $value['no'];
						foreach (['id','name','country','image'] as $v) {
							$league->$v = $value[$v];
						}
						// $league->attributes = $value;
						if(!$league->save()) {
							echo current(current($league->getErrors()));
						}
					}
				}
				$finished = ($i+1)*200;
				echo "finished $finished/$count==============\n";
			}
		}
		echo "finished all \n";
	}
}