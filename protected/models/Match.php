<?php

/**
 * This is the model class for table "match".
 *
 * The followings are the available columns in table 'match':
 * @property integer $id
 * @property integer $visitor_score
 * @property integer $home_score
 * @property string $visitor_name
 * @property integer $visitor_id
 * @property string $ext
 * @property string $home_name
 * @property integer $home_id
 * @property integer $time
 * @property integer $lid
 * @property string $old_id
 * @property string $image
 * @property integer $status
 * @property integer $deleted
 * @property integer $sort
 * @property integer $created
 * @property integer $updated
 */
class Match extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'match';
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
			array('visitor_score, home_score, visitor_id, home_id, time, lid, status, deleted, sort, created, updated', 'numerical', 'integerOnly'=>true),
			array('visitor_name, ext, home_name, image', 'length', 'max'=>255),
			array('old_id', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, visitor_score, home_score, visitor_name, visitor_id, ext, home_name, home_id, time, lid, old_id, image, status, deleted, sort, created, updated', 'safe', 'on'=>'search'),
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
			'visitor_score' => 'Visitor Score',
			'home_score' => 'Home Score',
			'visitor_name' => 'Visitor Name',
			'visitor_id' => 'Visitor',
			'ext' => 'Ext',
			'home_name' => 'Home Name',
			'home_id' => 'Home',
			'time' => 'Time',
			'lid' => 'Lid',
			'old_id' => 'Old',
			'image' => 'Image',
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
		$criteria->compare('visitor_score',$this->visitor_score);
		$criteria->compare('home_score',$this->home_score);
		$criteria->compare('visitor_name',$this->visitor_name,true);
		$criteria->compare('visitor_id',$this->visitor_id);
		$criteria->compare('ext',$this->ext,true);
		$criteria->compare('home_name',$this->home_name,true);
		$criteria->compare('home_id',$this->home_id);
		$criteria->compare('time',$this->time);
		$criteria->compare('lid',$this->lid);
		$criteria->compare('old_id',$this->old_id,true);
		$criteria->compare('image',$this->image,true);
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
	 * @return Match the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
