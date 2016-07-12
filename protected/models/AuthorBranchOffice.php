<?php

/**
 * This is the model class for table "t_d_author_branch_office".
 *
 * The followings are the available columns in table 't_d_author_branch_office':
 * @property integer $id_author
 * @property integer $id_user
 * @property integer $id_office
 * @property string $author_name
 *
 * The followings are the available model relations:
 * @property TROffice $idOffice
 * @property TDUser $idUser
 * @property TDRequest[] $tDRequests
 */
class AuthorBranchOffice extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AuthorBranchOffice the static model class
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
		return 't_d_author_branch_office';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_user, id_office', 'required'),
			array('id_user, id_office', 'numerical', 'integerOnly'=>true),
			array('author_name', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_author, id_user, id_office, author_name', 'safe', 'on'=>'search'),
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
			'idOffice' => array(self::BELONGS_TO, 'TROffice', 'id_office'),
			'idUser' => array(self::BELONGS_TO, 'TDUser', 'id_user'),
			'tDRequests' => array(self::HAS_MANY, 'TDRequest', 'id_author'),
                        'idUser' => array(self::BELONGS_TO, 'User', 'id_user'),
                        'idOffice' => array(self::BELONGS_TO, 'Office', 'id_office'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_author' => 'Id Author',
			'id_user' => 'Id User',
			'id_office' => 'Id Office',
			'author_name' => 'Author Name',
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

		$criteria->compare('id_author',$this->id_author);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('id_office',$this->id_office);
		$criteria->compare('author_name',$this->author_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}