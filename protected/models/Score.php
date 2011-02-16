<?php

/**
 * This is the model class for table "score".
 *
 * The followings are the available columns in table 'score':
 * @property string $id
 * @property string $user_id
 * @property integer $country
 * @property integer $clothes
 * @property integer $choreography
 * @property integer $song
 * @property integer $heart
 */
class Score extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Score the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'score';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, country, clothes, choreography, song, heart', 'required'),
			array('country, clothes, choreography, song, heart', 'numerical', 'integerOnly'=>true),
			array('user_id', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, country, clothes, choreography, song, heart', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'country' => 'Country',
			'clothes' => 'Clothes',
			'choreography' => 'Choreography',
			'song' => 'Song',
			'heart' => 'Heart',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('user_id',$this->user_id,true);
		$criteria->compare('country',$this->country);
		$criteria->compare('clothes',$this->clothes);
		$criteria->compare('choreography',$this->choreography);
		$criteria->compare('song',$this->song);
		$criteria->compare('heart',$this->heart);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}