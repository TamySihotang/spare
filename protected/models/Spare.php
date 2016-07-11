<?php

/**
 * This is the model class for table "t_r_spare".
 *
 * The followings are the available columns in table 't_r_spare':
 * @property integer $id_spare
 * @property string $category
 * @property string $series
 * @property string $type
 * @property string $model
 * @property string $aliasname
 * @property string $partno
 * @property string $description
 * @property string $suband
 * @property string $hilo
 *
 * The followings are the available model relations:
 * @property TDSparepartList[] $tDSparepartLists
 * @property TDStock[] $tDStocks
 */
class Spare extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Spare the static model class
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
		return 't_r_spare';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category, series, type, model, aliasname, partno, description, suband, hilo', 'required'),
			array('category, series', 'length', 'max'=>255),
			array('suband', 'length', 'max'=>5),
			array('hilo', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_spare, category, series, type, model, aliasname, partno, description, suband, hilo', 'safe', 'on'=>'search'),
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
			'tDSparepartLists' => array(self::HAS_MANY, 'TDSparepartList', 'id_spare'),
			'tDStocks' => array(self::HAS_MANY, 'TDStock', 'id_spare'),
                    'tDSpareOffices' => array(self::HAS_MANY, 'SpareOffice', 'id_spare_off')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_spare' => 'Id Spare',
			'category' => 'Category',
			'series' => 'Series',
			'type' => 'Type',
			'model' => 'Model',
			'aliasname' => 'Aliasname',
			'partno' => 'Partno',
			'description' => 'Description',
			'suband' => 'Suband',
			'hilo' => 'Hilo',
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

		$criteria->compare('id_spare',$this->id_spare);
		$criteria->compare('category',$this->category,true);
		$criteria->compare('series',$this->series,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('aliasname',$this->aliasname,true);
		$criteria->compare('partno',$this->partno,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('suband',$this->suband,true);
		$criteria->compare('hilo',$this->hilo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}