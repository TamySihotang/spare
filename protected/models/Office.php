<?php

/**
 * This is the model class for table "t_r_office".
 *
 * The followings are the available columns in table 't_r_office':
 * @property integer $id_office
 * @property string $branch_office
 *
 * The followings are the available model relations:
 * @property TDAuthorBranchOffice[] $tDAuthorBranchOffices
 * @property TDRequest[] $tDRequests
 * @property TDRequest[] $tDRequests1
 * @property TDSpareOffice[] $tDSpareOffices
 */
class Office extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Office the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 't_r_office';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('branch_office, address', 'required'),
            array('branch_office, address', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id_office, branch_office, address', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'tDAuthorBranchOffices' => array(self::HAS_MANY, 'TDAuthorBranchOffice', 'id_office'),
            'tDRequests' => array(self::HAS_MANY, 'TDRequest', 'id_origin'),
            'tDRequests1' => array(self::HAS_MANY, 'TDRequest', 'id_destiny'),
            'tDSpareOffices' => array(self::HAS_MANY, 'TDSpareOffice', 'id_office'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id_office' => 'Id Office',
            'branch_office' => 'Branch Office',
            'address' =>'Address',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id_office', $this->id_office);
        $criteria->compare('branch_office', $this->branch_office, true);
        $criteria->compare('address', $this->address, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getStockOffice($id) {
        //$id = Yii::app()->user->Id;
        $spareoffice = SpareOffice::model()->findAll();
        //$model = StatusPermohonancuti::model()->findAll($criteria);
        $counter=0;
        foreach ($spareoffice as $value) {
            if ($value->id_office == $id) {
                $counter++;
            }
        }
        return $counter;
    }

}
