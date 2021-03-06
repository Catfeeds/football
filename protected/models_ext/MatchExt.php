<?php 
/**
 * 比赛类
 * @author steven.allen <[<email address>]>
 * @date(2017.2.12)
 */
class MatchExt extends Match{
	/**
     * 定义关系
     */
    public function relations()
    {
        return array(
            'league'=>array(self::BELONGS_TO, 'LeagueExt', 'lid'),
            'home_team'=>array(self::HAS_ONE, 'TeamExt', ['id'=>'home_id']),
            'visit_team'=>array(self::HAS_ONE, 'TeamExt', ['id'=>'visitor_id']),
            'videos'=>array(self::HAS_MANY, 'VideoExt', 'mid'),
        );
    }

    /**
     * @return array 验证规则
     */
    public function rules() {
        $rules = parent::rules();
        return array_merge($rules, array(
            // array('name', 'unique', 'message'=>'{attribute}已存在')
        ));
    }

    /**
     * 返回指定AR类的静态模型
     * @param string $className AR类的类名
     * @return CActiveRecord Admin静态模型
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function afterFind() {
        parent::afterFind();
        // if(!$this->image){
        //     $this->image = SiteExt::getAttr('qjpz','productNoPic');
        // }
    }

    public function beforeValidate() {
        if($this->getIsNewRecord())
            $this->created = $this->updated = time();
        else
            $this->updated = time();
        // var_dump($visitor_id);exit;
        if($home_id = $this->home_id)
            $this->home_name = TeamExt::model()->findByPk($home_id)->name;
        if($visitor_id = $this->visitor_id)
            $this->visitor_name = TeamExt::model()->findByPk($visitor_id)->name;
        return parent::beforeValidate();
    }

    /**
     * 命名范围
     * @return array
     */
    public function scopes()
    {
        $alias = $this->getTableAlias();
        return array(
            'sorted' => array(
                'order' => "{$alias}.sort desc,{$alias}.updated desc",
            ),
            'normal' => array(
                'condition' => "{$alias}.status=1 and {$alias}.deleted=0",
                'order'=>"{$alias}.sort desc,{$alias}.time asc,{$alias}.updated desc",
            ),
            'undeleted' => array(
                'condition' => "{$alias}.deleted=0"
                ),
                // 昨天至未来
            'video'=>array(
                'condition' => "{$alias}.time>".time()-24*86400,
            ),
        );
    }

    /**
     * 绑定行为类
     */
    public function behaviors() {
        return array(
            'CacheBehavior' => array(
                'class' => 'application.behaviors.CacheBehavior',
                'cacheExp' => 0, //This is optional and the default is 0 (0 means never expire)
                'modelName' => __CLASS__, //This is optional as it will assume current model
            ),
            'BaseBehavior'=>'application.behaviors.BaseBehavior',
        );
    }

}