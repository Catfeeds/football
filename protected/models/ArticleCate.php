<?php

/**
 * This is the model class for table "article_cate".
 *
 * The followings are the available columns in table 'article_cate':
 * @property integer $id
 * @property string $name
 * @property string $pinyin
 * @property integer $status
 * @property string $seo
 * @property integer $deleted
 * @property integer $sort
 * @property integer $created
 * @property integer $updated
 */
class ArticleCate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'article_cate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('created', 'required'),
			array('status, deleted, sort, created, updated', 'numerical', 'integerOnly'=>true),
			array('name, pinyin', 'length', 'max'=>255),
			array('seo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, pinyin, status, seo, deleted, sort, created, updated', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'pinyin' => 'Pinyin',
			'status' => 'Status',
			'seo' => 'Seo',
			'deleted' => 'Deleted',
			'sort' => 'Sort',
			'created' => 'Created',
			'updated' => 'Updated',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('pinyin',$this->pinyin,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('seo',$this->seo,true);
		$criteria->compare('deleted',$this->deleted);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('created',$this->created);
		$criteria->compare('updated',$this->updated);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ArticleCate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
