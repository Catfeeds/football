<?php
/**
 * 数据迁移脚本
 * @author tivon
 * @date 2015-10-09
 */
class DataCommand extends CConsoleCommand
{
	public function actionLeague($id=0,$page=0)
	{
		begin:

		$url = SiteExt::getAttr('qjpz','leagueApi');
		// if($id)
		$res = HttpHelper::get($url.'?id='.$id.'&page='.$page);
		if(isset($res['content']) && $data = json_decode($res['content'],true)) {
			if($data) {
				foreach ($data as $key => $value) {
					// var_dump($value);exit;
					$name = $value['name'];
					// if(Yii::app()->db->createCommand("select id from league where name='$name'")->queryScalar()) {
					// 	continue;
					// } 
					$league = new LeagueExt;
					$league->old_id = $value['no'];
					foreach (['id','name','country','image','land'] as $v) {
						$league->$v = $value[$v];
					}
					// $league->attributes = $value;
					if(!$league->save()) {
						echo current(current($league->getErrors()));
					}
				}
			}
			echo "finishing 100*$page=============\n";
			$page++;
			goto begin;
		} else {
			echo "finished==================\n";
		}
	}

	public function actionNews($id=0,$date='')
	{
		$page = 0;
		if(!$date) {
			$date = date('Ymd',time());
		}
		begin:

		$url = SiteExt::getAttr('qjpz','newsApi');
		// if($id)
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
					$cid && $league->cid = $cid;
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

	public function actionTeam($id=0,$page=0)
	{
		begin:

		$url = SiteExt::getAttr('qjpz','teamApi');
		// if($id)
		$res = HttpHelper::get($url.'?id='.$id.'&page='.$page);
		if(isset($res['content']) && $data = json_decode($res['content'],true)) {
			if($data) {
				foreach ($data as $key => $value) {
					// var_dump($value);exit;
					$name = $value['name'];
					if(Yii::app()->db->createCommand("select id from team where name='$name'")->queryScalar()) {
						continue;
					} 
					$team = new TeamExt;
					$team->old_id = $value['no'];
					foreach (['name','city','coach','image'] as $v) {
						$team->$v = $value[$v];
					}
					if($team->save()) {
						$tid = $team->id;
						$points = new PointsExt;
						foreach (['lose_ball'=>'goal','score_ball'=>'fumble','points'=>'score','win'=>'win','lose'=>'lose','same'=>'draw'] as $k => $v) {
							$points->$k = $value[$v];
						}
						$oldlid = $value['league'];
						$points->lid = Yii::app()->db->createCommand("select id from league where old_id=$oldlid")->queryScalar();
						$points->tid = $tid;
						// var_dump($points->attributes);exit;
						if(!$points->save()) {
							echo current(current($points->getErrors()));
						}
					} else {
						echo current(current($team->getErrors()));
					}
				}
			}
			echo "finishing 100*$page=============\n";
			$page++;
			goto begin;
		} else {
			echo "finished==================\n";
		}
	}
}