<?php

/**
 * This is the model class for table "t_d_stock".
 *
 * The followings are the available columns in table 't_d_stock':
 * @property integer $id_stock
 * @property integer $id_spare
 * @property integer $used
 * @property integer $remain
 * @property integer $on_the_way
 * @property integer $stock_total
 *
 * The followings are the available model relations:
 * @property TRSpare $idSpare
 */
class Stock extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Stock the static model class
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
		return 't_d_stock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_spare, used, remain, on_the_way, stock_total', 'required'),
			array('id_spare, used, remain, on_the_way, stock_total', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_stock, id_spare, used, remain, on_the_way, stock_total', 'safe', 'on'=>'search'),
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
			'idSpare' => array(self::BELONGS_TO, 'Spare', 'id_spare'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_stock' => 'Id Stock',
			'id_spare' => 'Id Spare',
			'used' => 'Used',
			'remain' => 'Remain',
			'on_the_way' => 'On The Way',
			'stock_total' => 'Stock Total',
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
                
                $spare = Spare::model()->findByAttributes(array('id_spare' => $this->id_spare));
                
		$criteria->compare('id_stock',$this->id_stock);
                $criteria->compare('id_spare',$this->id_spare);
		//$criteria->compare('aliasname',$spare->aliasname);
		$criteria->compare('used',$this->used);
		$criteria->compare('remain',$this->remain);
		$criteria->compare('on_the_way',$this->on_the_way);
		$criteria->compare('stock_total',$this->stock_total);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}