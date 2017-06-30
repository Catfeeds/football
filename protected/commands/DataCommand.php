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

	public function actionNews($id=1,$date='')
	{
		$page = 1;
		if(!$date) {
			$date = date('Ymd',time());
		}
		begin:

		$url = SiteExt::getAttr('qjpz','newsApi');
		if($id)
			$res = HttpHelper::get($url.'?id='.$id.'&page='.$page.'&time='.$date);
		if(isset($res['content']) && $data = json_decode($res['content'],true)) {
			// $count = count($data);
			// for ($i=0; $i < $count/200 + 1; $i++) { 
				foreach ($data as $key => $value) {
					// var_dump($url.'?id='.$id.'&page='.$page.'&time='.date('Ymd',time()),$value);exit;
					// $name = $value['name'];
					$cname = $value['league'];
					
					$cid = Yii::app()->db->createCommand("select id from article_cate where name='$cname' and status=1 and deleted=0")->queryScalar();

					if(!$cid && $cname) {
						$catemodel = new ArticleCateExt;
						$catemodel->name = $cname;
						$catemodel->status = 1;
						$catemodel->save();
						$cid = $catemodel->id;
					} else {
						$cid = 0;
					}

					$no =  $value['no'];
					if($oldo = Yii::app()->db->createCommand("select id from article where old_id=$no")->queryScalar())
						continue;
					$league = new ArticleExt;
					$league->old_id = $value['no'];
					foreach (['old_id'=>'no','image'=>'coverPhoto','content'=>'content','title'=>'title','created'=>'createtime','descpt'=>'intruduction'] as $k => $v) {
						$league->$k = $value[$v];
					}
					$league->created = strtotime($league->created);
					$league->status = 1;
					// var_dump($cid);exit;
					$league->cid = $cid;
					// var_dump($league->attributes);exit;
					// $league->attributes = $value;
					if(!$league->save()) {
						echo current(current($league->getErrors()));
					}
				}
				echo "finishing 100*$page=============";
				$page++;
				goto begin;
			// } 
		} else {
			echo "finished==================\n";
		}
		// $this->end();
	}
}