<?php

/**
 * This is the model class for table "t_d_sparepart_list".
 *
 * The followings are the available columns in table 't_d_sparepart_list':
 * @property integer $id_sparelist
 * @property integer $id_status
 * @property integer $id_spare
 * @property integer $id_spare_off
 * @property integer $SN
 *
 * The followings are the available model relations:
 * @property TDRequest[] $tDRequests
 * @property TDSpareOffice[] $tDSpareOffices
 * @property TRSpare $idSpare
 * @property TRStatus $idStatus
 */
class SparepartList extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SparepartList the static model class
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
		return 't_d_sparepart_list';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_status, id_spare', 'required'),
			array('id_status, id_spare, SN', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_sparelist, id_status, id_spare, SN', 'safe', 'on'=>'search'),
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
			'tDRequests' => array(self::HAS_MANY, 'TDRequest', 'id_sparelist'),
			'tDSpareOffices' => array(self::HAS_MANY, 'TDSpareOffice', 'id_sparelist'),
			'idSpare' => array(self::BELONGS_TO, 'Spare', 'id_spare'),
			'idStatus' => array(self::BELONGS_TO, 'Status', 'id_status'),
                        'SpareOffices' => array(self::BELONGS_TO, 'SpareOffice', 'id_spare_off'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_sparelist' => 'Id Sparelist',
			'id_status' => 'Id Status',
			'id_spare' => 'Id Spare',
                        'id_spare_off' => 'Id SpareOffice',
			'SN' => 'Sn',
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

		$criteria->compare('id_sparelist',$this->id_sparelist);
		$criteria->compare('id_status',$this->id_status);
		$criteria->compare('id_spare',$this->id_spare);
		$criteria->compare('id_spare_off',$this->id_spare_off);
                $criteria->compare('SN',$this->SN);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
//        public function makeStatus($id){
//            $modelSpare = SparepartList::model()->findByAttributes(array('id_sparelist' => $id));
//            $modelspare->id_status = 1;
//            return $modelspare->id_status;
//        }
}