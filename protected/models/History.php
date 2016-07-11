<?php

/**
 * This is the model class for table "t_d_history".
 *
 * The followings are the available columns in table 't_d_history':
 * @property integer $id_history
 * @property integer $id_user
 * @property integer $id_request
 * @property string $description
 * @property string $start_date_his
 * @property string $end_date_his
 *
 * The followings are the available model relations:
 * @property TDRequest $idRequest
 * @property TDUser $idUser
 */
class History extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return History the static model class
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
		return 't_d_history';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, id_request', 'required'),
			array('id_user, id_request', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>100),
			array('start_date_his, end_date_his', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_history, id_user, id_request, description, start_date_his, end_date_his', 'safe', 'on'=>'search'),
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
			'idUser' => array(self::BELONGS_TO, 'TDUser', 'id_user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_history' => 'Id History',
			'id_user' => 'Id User',
			'id_request' => 'Id Request',
			'description' => 'Description',
			'start_date_his' => 'Start Date His',
			'end_date_his' => 'End Date His',
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

		$criteria->compare('id_history',$this->id_history);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_request',$this->id_request);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('start_date_his',$this->start_date_his,true);
		$criteria->compare('end_date_his',$this->end_date_his,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}