<?php
class DataController extends HomeController{
	public function actionIndex($lid='',$type='')
	{
		$liarr = ['p'=>'积分榜','s'=>'射手榜','a'=>'助攻榜','t'=>'联赛赛制'];
		$leas = LeagueExt::model()->normal()->findAll();
		!$lid && $lid = $leas[0]['id'];
		$criteria = new CDbCriteria;
		$criteria->limit = 20;
		$type = $type?$type:array_keys($liarr)[0];
		switch ($type) {
			case 'p':
				if($lid) {
					$criteria->addCondition('lid=:lid');
					$criteria->params[':lid'] = $lid;
				}
				$criteria->order = 'points desc';
				$points = PointsExt::model()->normal()->findAll($criteria);
				break;
			// case 's':
			// 	$points = PlayExt::model()->normal()->findAll($criteria);
			// 	break;
			// case 'p':
			// 	$points = PointsExt::model()->normal()->findAll($criteria);
			// 	break;
			// case 'p':
			// 	$points = PointsExt::model()->normal()->findAll($criteria);
			// 	break;
			
			default:
				# code...
				break;
		}
		
		$this->render('index',['leas'=>$leas,'lid'=>$lid,'points'=>$points,'type'=>$type?$type:array_keys($liarr)[0],'liarr'=>$liarr]);
	}
}