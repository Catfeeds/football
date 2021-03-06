<?php

/**
 * This is the model class for table "league".
 *
 * The followings are the available columns in table 'league':
 * @property integer $id
 * @property string $full_name
 * @property string $name
 * @property string $eng
 * @property string $land
 * @property string $country
 * @property string $pinyin
 * @property string $rule
 * @property string $descpt
 * @property string $image
 * @property integer $old_id
 * @property integer $status
 * @property integer $deleted
 * @property integer $sort
 * @property integer $created
 * @property integer $updated
 */
class League extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'league';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, created', 'required'),
			array('old_id, status, deleted, sort, created, updated', 'numerical', 'integerOnly'=>true),
			array('full_name, descpt, image', 'length', 'max'=>255),
			array('name, eng, land, country, pinyin', 'length', 'max'=>100),
			array('rule', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, full_name, name, eng, land, country, pinyin, rule, descpt, image, old_id, status, deleted, sort, created, updated', 'safe', 'on'=>'search'),
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
			'full_name' => 'Full Name',
			'name' => 'Name',
			'eng' => 'Eng',
			'land' => 'Land',
			'country' => 'Country',
			'pinyin' => 'Pinyin',
			'rule' => 'Rule',
			'descpt' => 'Descpt',
			'image' => 'Image',
			'old_id' => 'Old',
			'status' => 'Status',
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
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('eng',$this->eng,true);
		$criteria->compare('land',$this->land,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('pinyin',$this->pinyin,true);
		$criteria->compare('rule',$this->rule,true);
		$criteria->compare('descpt',$this->descpt,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('old_id',$this->old_id);
		$criteria->compare('status',$this->status);
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
	 * @return League the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
