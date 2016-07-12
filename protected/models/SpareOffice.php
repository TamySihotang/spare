<?php

/**
 * This is the model class for table "t_d_spare_office".
 *
 * The followings are the available columns in table 't_d_spare_office':
 * @property integer $id_spare_off
 * @property integer $id_sparelist
 * @property integer $id_spare
 * @property integer $id_office
 *
 * The followings are the available model relations:
 * @property TDSparepartList $idSparelist
 * @property SparepartLists $idSpareOff
 * @property TROffice $idOffice
 */
class SpareOffice extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SpareOffice the static model class
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
		return 't_d_spare_office';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_sparelist, id_office', 'required'),
			array('id_sparelist, id_office', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_spare_off, id_sparelist, id_office', 'safe', 'on'=>'search'),
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
			'idSparelist' => array(self::BELONGS_TO, 'TDSparepartList', 'id_sparelist'),
                        'idSpareoffice' => array(self::BELONGS_TO, 'Spare', 'id_spare'),
			'idOffice' => array(self::BELONGS_TO, 'TROffice', 'id_office'),
                        'tDRequests' => array(self::HAS_MANY, 'Request', 'id_spare_off'),
                        'SparepartLists' => array(self::HAS_MANY, 'SparepartList', 'id_spare_off'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_spare_off' => 'Id Spare Off',
			'id_sparelist' => 'Id Sparelist',
                        'id_spare' => 'Id Spare',
			'id_office' => 'Id Office',
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

		$criteria->compare('id_spare_off',$this->id_spare_off);
		$criteria->compare('id_sparelist',$this->id_sparelist);
                $criteria->compare('id_spare',$this->id_spare);
		$criteria->compare('id_office',$this->id_office);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}