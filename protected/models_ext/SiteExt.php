<?php 
/**
 * 站点配置类
 * 数据结构为 name为 qjpz value为 属性分类的key-value组成的json数据
 * @author steven.allen <[<email address>]>
 * @date(2017.2.13)
 */
class SiteExt extends Site{

    // 属性
    public static $cates = [
        // pc首页轮播图
        'pcIndexImages'=>[],
        // pcLogo
        'pcLogo'=>'',
        // 站点客服
        'sitePhone'=>'',
        // 联系qq
        'qq'=>'',
        // 邮箱
        'mail'=>'',
        // 微信二维码
        'wxQr'=>'',
        // 销售微信二维码
        'staffQr'=>'',
        // pc联系我们广告图
        'pcLxwm'=>'',
        // pc首页关于背景图
        'pcIndexAbout'=>'',
        // pc联系我们头图
        'pcContact'=>'',
        // pc公司介绍头图
        'pcGsjs'=>'',
        // pc资讯列表头图
        'pcNewsTop'=>'',
        // pc头图
        'pcImage'=>'',
        // 客户数
        'khs'=>'0',
        // 项目个数
        'xmgs'=>'0',
        // 服务个数
        'fwgs'=>'0',
        // 成立年份
        'clnf'=>'0',
        // 微信公众号
        'wxgzh'=>'',
        // 微信公众号
        'wx_img'=>'',
        // pc首页小喇叭
        'pcIndexGun'=>'',
        // 用户默认头像
        'userImg'=>'',
        // 资讯默认头像
        'newsImg'=>'',
        // 联赛调用接口地址
        'leagueApi'=>'',
        // 资讯调用接口地址
        'newsApi'=>'',
        // 球队调用接口地址
        'teamApi'=>'',
        // 球员调用接口地址
        'playerApi'=>'',
        // 比赛调用接口地址
        'matchApi'=>'',
        'title'=>'',
        'desc'=>'',
        'keyword'=>'',
        'home_index_index_title'=>'',
        'home_index_index_desc'=>'',
        'home_index_index_keyword'=>'',
        'home_news_list_title'=>'',
        'home_news_list_desc'=>'',
        'home_news_list_keyword'=>'',
        'home_news_info_title'=>'',
        'home_news_info_desc'=>'',
        'home_news_info_keyword'=>'',
        'home_video_list_title'=>'',
        'home_video_list_desc'=>'',
        'home_video_list_keyword'=>'',
        'home_video_info_title'=>'',
        'home_video_info_desc'=>'',
        'home_video_info_keyword'=>'',
        'home_match_index_title'=>'',
        'home_match_index_desc'=>'',
        'home_match_index_keyword'=>'',
        'home_data_index_title'=>'',
        'home_data_index_desc'=>'',
        'home_data_index_keyword'=>'',
        'home_album_list_title'=>'',
        'home_album_list_desc'=>'',
        'home_album_list_keyword'=>'',
        'home_album_info_title'=>'',
        'home_album_info_desc'=>'',
        'home_album_info_keyword'=>'',
        'home_news_tag_title'=>'',
        'home_news_tag_desc'=>'',
        'home_news_tag_keyword'=>'',
        'headCode'=>'',
        'footCode'=>'',
        'sen'=>'',
        'about'=>'',
        'contact'=>'',


    ];
    public static $cateName = [
        'qjpz' => '全局配置',
        'seo'=>'seo配置',
        'sen'=>'敏感词配置',
    ];

    // 属性分类
    public static $cateTag = [
        'qjpz'=> [
            'pcIndexImages'=>['type'=>'multiImage','max'=>5,'name'=>'pc首页轮播图'],
            'pcLogo'=>['type'=>'image','max'=>1,'name'=>'pc版logo'],
            'sitePhone'=>['type'=>'text','name'=>'站点客服'],
            'qq'=>['type'=>'text','name'=>'联系qq'],
            'mail'=>['type'=>'text','name'=>'邮箱'],
            'pcIndexGun'=>['type'=>'text','name'=>'pc首页小喇叭'],

            'wxgzh'=>['type'=>'text','name'=>'微信公众号'],
            // 'xmgs'=>['type'=>'text','name'=>'项目个数'],
            // 'clnf'=>['type'=>'text','name'=>'成立年份'],
            // 'pcContact'=>['type'=>'image','max'=>1,'name'=>'pc联系我们头图'],
            'wx_img'=>['type'=>'image','max'=>1,'name'=>'微信公众号二维码'],
            'leagueApi'=>['type'=>'text','name'=>'联赛调用接口地址'],
            'teamApi'=>['type'=>'text','name'=>'球队调用接口地址'],
            'playerApi'=>['type'=>'text','name'=>'球员调用接口地址'],
            'matchApi'=>['type'=>'text','name'=>'比赛调用接口地址'],
            'newsApi'=>['type'=>'text','name'=>'资讯调用接口地址'],
            // 'pcGsjs'=>['type'=>'image','max'=>1,'name'=>'pc公司介绍头图'],
            // 'pcLxwm'=>['type'=>'image','max'=>1,'name'=>'pc联系我们广告图'],
            // 'pcIndexAbout'=>['type'=>'image','max'=>1,'name'=>'pc首页关于背景图'],
            // 'pcIndexServe'=>['type'=>'image','max'=>1,'name'=>'pc首页服务背景图'],
            // 'pcNewsTop'=>['type'=>'image','max'=>1,'name'=>'pc资讯列表头图'],
            // 'pcContactTop'=>['type'=>'image','max'=>1,'name'=>'pc联系列表头图'],
            'userImg'=>['type'=>'image','max'=>1,'name'=>'用户默认头像'],
            'newsImg'=>['type'=>'image','max'=>1,'name'=>'资讯默认封面图'],
            'headCode'=>['type'=>'textarea','name'=>'头部代码'],
            'footCode'=>['type'=>'textarea','name'=>'底部代码'],
            'about'=>['type'=>'textarea','name'=>'关于我们'],
            'contact'=>['type'=>'textarea','name'=>'联系我们'],
            // 'pcTeamTop'=>['type'=>'image','max'=>1,'name'=>'pc团队列表头图'],
            // 'productNoPic'=>['type'=>'image','max'=>1,'name'=>'产品默认图'],
            // 'houseNoPic'=>['type'=>'image','max'=>1,'name'=>'酒庄默认图'],
            ],
        'seo'=>[
            'title'=>['type'=>'text','name'=>'默认标题'],
            'desc'=>['type'=>'text','name'=>'默认简介'],
            'keyword'=>['type'=>'text','name'=>'默认关键词'],
            'home_index_index_title'=>['type'=>'text','name'=>'首页标题'],
            'home_index_index_desc'=>['type'=>'text','name'=>'首页简介'],
            'home_index_index_keyword'=>['type'=>'text','name'=>'首页关键词'],
            'home_news_list_title'=>['type'=>'text','name'=>'资讯列表标题'],
            'home_news_list_desc'=>['type'=>'text','name'=>'资讯列表简介'],
            'home_news_list_keyword'=>['type'=>'text','name'=>'资讯列表关键词'],
            'home_news_info_title'=>['type'=>'text','name'=>'资讯详情标题'],
            'home_news_info_desc'=>['type'=>'text','name'=>'资讯详情简介'],
            'home_news_info_keyword'=>['type'=>'text','name'=>'资讯详情关键词'],
            'home_video_list_title'=>['type'=>'text','name'=>'视频列表标题'],
            'home_video_list_desc'=>['type'=>'text','name'=>'视频列表简介'],
            'home_video_list_keyword'=>['type'=>'text','name'=>'视频列表关键词'],
            'home_video_info_title'=>['type'=>'text','name'=>'视频详情标题'],
            'home_video_info_desc'=>['type'=>'text','name'=>'视频详情简介'],
            'home_video_info_keyword'=>['type'=>'text','name'=>'视频详情关键词'],
            'home_match_index_title'=>['type'=>'text','name'=>'比赛标题'],
            'home_match_index_desc'=>['type'=>'text','name'=>'比赛简介'],
            'home_match_index_keyword'=>['type'=>'text','name'=>'比赛关键词'],
            'home_data_index_title'=>['type'=>'text','name'=>'数据标题'],
            'home_data_index_desc'=>['type'=>'text','name'=>'数据简介'],
            'home_data_index_keyword'=>['type'=>'text','name'=>'数据关键词'],
            'home_album_list_title'=>['type'=>'text','name'=>'图库列表标题'],
            'home_album_list_desc'=>['type'=>'text','name'=>'图库列表简介'],
            'home_album_list_keyword'=>['type'=>'text','name'=>'图库列表关键词'],
            'home_album_info_title'=>['type'=>'text','name'=>'图库详情标题'],
            'home_album_info_desc'=>['type'=>'text','name'=>'图库详情简介'],
            'home_album_info_keyword'=>['type'=>'text','name'=>'图库详情关键词'],
            // 'home/index/index_title'=>['type'=>'text','name'=>'首页标题'],
            // 'home/index/index_title'=>['type'=>'text','name'=>'首页标题'],
            'home_news_tag_title'=>['type'=>'text','name'=>'标签页详情标题'],
            'home_news_tag_desc'=>['type'=>'text','name'=>'标签页详情简介'],
            'home_news_tag_keyword'=>['type'=>'text','name'=>'标签页详情关键词'],
        ],
        'sen'=>[
            'sen'=>['type'=>'text','name'=>'敏感词'],
        ],
    ];

	/**
     * 定义关系
     */
    public function relations()
    {
        return array(
            // 'baike'=>array(self::BELONGS_TO, 'BaikeExt', 'bid'),
        );
    }

    /**
     * @return array 验证规则
     */
    public function rules() {
        $rules = parent::rules();
        return array_merge($rules, array(
            array(implode(",", array_keys(self::$cates)) ,'safe'),
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
    }

    public function beforeValidate() {
        if($this->getIsNewRecord())
            $this->created = $this->updated = time();
        else
            $this->updated = time();
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
                'order' => 'sort desc',
            )
        );
    }

    // 重写get魔术方法
    public function __get($value)
    {
        if(in_array($value, array_keys(self::$cates))) {
            $dc = json_decode($this->value,true);
            if($dc && isset($dc[$value])) {
                return $dc[$value];
            }
        } else {
            return parent::__get($value);
        }
    }

    // 重写set魔术方法
    public function __set($name, $value)
    {
        if(isset(self::$cates[$name])) {
            if(is_array($this->value))
                $data_conf = $this->value;
            else
                $data_conf = CJSON::decode($this->value);
            self::$cates[$name] = $value;
            $data_conf[$name] = $value;
            $this->value = json_encode($data_conf);
        }
        else
            parent::__set($name, $value);
    }

    /**
     * 通过name获取
     */
    public function getSiteByCate($cate)
    {
        $this->getDbCriteria()->mergeWith(array(
            'condition' => 'name=:cate',
            'order' => 'id ASC',
            'params' => array(':cate'=>$cate)
        ));
        return $this;
    }

    /**
     * [getAttr 获取配置]
     * @param  string $cate [类别]
     * @param  string $attr [属性]
     * @return [type]       [description]
     */
    public static function getAttr($cate='',$attr='')
    {
        if(!in_array($attr, array_keys(SiteExt::$cates)))
            return '';
        $model = self::model()->getSiteByCate($cate)->find();
return isset($model)&&$model->$attr?$model->$attr:'';
    }

}