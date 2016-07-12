<?php

/**
 * This is the model class for table "t_d_request".
 *
 * The followings are the available columns in table 't_d_request':
 * @property integer $id_request
 * @property integer $order_number
 * @property integer $id_sparelist
 * @property integer $id_origin
 * @property integer $id_destiny
 * @property integer $id_author
 * @property string $start_date
 * @property string $end_date
 *
 * The followings are the available model relations:
 * @property TDHistory[] $tDHistories
 * @property TROffice $idOrigin
 * @property TROffice $idDestiny
 * @property TDAuthorBranchOffice $idAuthor
 * @property TDSparepartList $idSparelist
 * @property Spare $idSpare
 */
class Request extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Request the static model class
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
		return 't_d_request';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_sparelist, id_origin, id_destiny, id_author', 'required'),
			array('order_number, id_sparelist, id_origin, id_destiny, id_author', 'numerical', 'integerOnly'=>true),
			array('start_date, end_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_request, order_number, id_sparelist, id_origin, id_destiny, id_author, start_date, end_date', 'safe', 'on'=>'search'),
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
			'tDHistories' => array(self::HAS_MANY, 'TDHistory', 'id_request'),
			'idOrigin' => array(self::BELONGS_TO, 'Office', 'id_origin'),
			'idDestiny' => array(self::BELONGS_TO, 'Office', 'id_destiny'),
			'idAuthor' => array(self::BELONGS_TO, 'AuthorBranchOffice', 'id_author'),
			'idSparelist' => array(self::BELONGS_TO, 'SparepartList', 'id_sparelist'),
                        'idSpare' => array(self::BELONGS_TO, 'Spare', 'id_spare'),
                        'idSpareOffice' => array(self::BELONGS_TO, 'SpareOffice', 'id_spare_off'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_request' => 'Id Request',
			'order_number' => 'Order Number',
                        'id_spare' => 'Sparepart',
			'id_sparelist' => 'Spare Serial Number',
			'id_origin' => 'Origin',
			'id_destiny' => 'Destiny',
			'id_author' => 'Author',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
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

		$criteria->compare('id_request',$this->id_request);
		$criteria->compare('order_number',$this->order_number);
                $criteria->compare('id_spare',$this->id_spare);
		$criteria->compare('id_sparelist',$this->id_sparelist);
		$criteria->compare('id_origin',$this->id_origin);
		$criteria->compare('id_destiny',$this->id_destiny);
		$criteria->compare('id_author',$this->id_author);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function checkSpare($id){
            $spareOffice = SpareOffice::model()->findAll();
            foreach ($spareOffice as $value) {
                if($value->id_sparelist == $id){
                    return true;
                }
            }
            return false;
        }
        
        public function spareList()
{
 $models = Spare::model()->findAll(array('condition' => 'id_spare = ' . $this->id_spare, 'order'=> 'id'));

 foreach ($models as $model)
   $_items[$model->id] = $model->nama;

 return $_items;
}

public function SNList()
{
 $models = SparepartList::model()->findAll(array('condition' => 'id_sparelist = ' . $this->id_sparelist, 'order'=> 'id'));

 foreach ($models as $model)
 $_items[$model->id] = $model->nama;

 return $_items;
}
}