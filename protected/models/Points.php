<?php

/**
 * This is the model class for table "points".
 *
 * The followings are the available columns in table 'points':
 * @property integer $id
 * @property string $points
 * @property integer $lose_ball
 * @property integer $score_ball
 * @property integer $lose
 * @property integer $same
 * @property integer $win
 * @property string $round
 * @property string $year
 * @property integer $lid
 * @property integer $tid
 * @property integer $old_id
 * @property integer $status
 * @property integer $deleted
 * @property integer $sort
 * @property integer $created
 * @property integer $updated
 */
class Points extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'points';
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
			array('lose_ball, score_ball, lose, same, win, lid, tid, old_id, status, deleted, sort, created, updated, ranking', 'numerical', 'integerOnly'=>true),
			array('points, round, year', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, points, lose_ball, score_ball, lose, same, win, round, year, lid, tid, old_id, status, deleted, sort, created, updated,ranking', 'safe', 'on'=>'search'),
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
			'points' => 'Points',
			'lose_ball' => 'Lose Ball',
			'score_ball' => 'Score Ball',
			'lose' => 'Lose',
			'same' => 'Same',
			'win' => 'Win',
			'round' => 'Round',
			'year' => 'Year',
			'lid' => 'Lid',
			'tid' => 'Tid',
			'old_id' => 'Old',
			'status' => 'Status',
			'deleted' => 'Deleted',
			'sort' => 'Sort',
			'created' => 'Created',
			'updated' => 'Updated',
			'ranking' => 'Ranking'
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
		$criteria->compare('points',$this->points,true);
		$criteria->compare('lose_ball',$this->lose_ball);
		$criteria->compare('score_ball',$this->score_ball);
		$criteria->compare('lose',$this->lose);
		$criteria->compare('same',$this->same);
		$criteria->compare('win',$this->win);
		$criteria->compare('round',$this->round,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('lid',$this->lid);
		$criteria->compare('tid',$this->tid);
		$criteria->compare('old_id',$this->old_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('deleted',$this->deleted);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('created',$this->created);
		$criteria->compare('updated',$this->updated);
		$criteria->compare('raning',$this->raning);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Points the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
