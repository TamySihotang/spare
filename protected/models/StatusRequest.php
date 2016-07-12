<?php

/**
 * This is the model class for table "t_r_status_request".
 *
 * The followings are the available columns in table 't_r_status_request':
 * @property integer $id_stat_req
 * @property integer $id_request
 * @property integer $status_request
 */
class StatusRequest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StatusRequest the static model class
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
		return 't_r_status_request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_request, status_request', 'required'),
			array('id_request, status_request', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_stat_req, id_request, status_request', 'safe', 'on'=>'search'),
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
			'id_stat_req' => 'Id Stat Req',
			'id_request' => 'Id Request',
			'status_request' => 'Status Request',
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

		$criteria->compare('id_stat_req',$this->id_stat_req);
		$criteria->compare('id_request',$this->id_request);
		$criteria->compare('status_request',$this->status_request);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}