<?php 
/**
 * 文章类
 * @author steven.allen <[<email address>]>
 * @date(2017.2.12)
 */
class ArticleExt extends Article{
    /**
     * @var array 状态
     */
    static $status = array(
        0 => '禁用',
        1 => '启用',
        2 => '回收站',
    );

    static $keywordsSwitch = array(
        0 => '否',
        1 => '是',
    );

    /**
     * @var array 状态按钮样式
     */
    static $statusStyle = array(
        0 => 'btn btn-sm btn-warning',
        1 => 'btn btn-sm btn-primary',
        2 => 'btn btn-sm btn-danger'
    );
	/**
     * 定义关系
     */
    public function relations()
    {
        return array(
            'cate'=>array(self::BELONGS_TO, 'ArticleCateExt', 'cid'),
            'comment_num'=>array(self::STAT, 'CommentExt', 'major_id','condition'=>'t.status=1'),
            'comments'=>array(self::HAS_MANY, 'CommentExt', ['major_id'=>'id'],'condition'=>'comments.status=1','order'=>'comments.praise desc,comments.created asc'),
            'album'=>array(self::HAS_MANY, 'AlbumExt', ['aid'=>'id']),
            'tags'=>array(self::HAS_MANY, 'ArticleTagExt', ['aid'=>'id']),
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
        if(!$this->image){
            preg_match('/<img.+src=\"?(.+\.(jpg|gif|bmp|bnp|png))\"?.+>/i',$this->content,$match);
            // var_dump($match);exit;   
            $this->image = isset($match[1])?$match[1]:'';
        }
    }

    public function beforeValidate() {
        if($this->getIsNewRecord()) {
            if($this->created) {
                $this->updated = $this->created;
            } else
                $this->created = $this->updated = time();
        }
        if(!$this->day) {
            $this->day = TimeTools::getDayBeginTime($this->updated);
        }
        // else
        //     $this->updated = time();
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
                'condition' => "{$alias}.status=1 and {$alias}.deleted=0 and {$alias}.is_top_video=0",
                'order'=>"{$alias}.day desc,{$alias}.sort desc",
            ),
            'undeleted' => array(
                'condition' => "{$alias}.deleted=0",
                // 'order'=>"{$alias}.sort desc,{$alias}.updated desc",
            ),
            'isvideo'=>array(
                'condition' => "{$alias}.status=1 and {$alias}.is_top_video=1 and {$alias}.deleted=0",
                'order'=>"{$alias}.day desc,{$alias}.sort desc",
            ),
            // 'album_undeleted' => array(
            //     'condition' => "{$alias}.deleted=0 and {$alias}.is_album=1",
            //     // 'order'=>"{$alias}.sort desc,{$alias}.updated desc",
            // ),
            // 'album_normal' => array(
            //     'condition' => "{$alias}.status=1 and {$alias}.deleted=0 and {$alias}.is_album=1",
            //     // 'order'=>"{$alias}.sort desc,{$alias}.updated desc",
            // ),

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