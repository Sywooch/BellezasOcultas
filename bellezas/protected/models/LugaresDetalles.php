<?php

/**
 * This is the model class for table "lugar_detalle".
 *
 * The followings are the available columns in table 'lugar_detalle':
 * @property integer $ID_LUGAR_DET
 * @property integer $ID_LUGAR
 * @property integer $ACCESO_DIS
 * @property integer $EMBARAZADA
 * @property integer $MENOR_EDAD
 *
 * The followings are the available model relations:
 * @property Lugares $iDLUGAR
 */
class LugaresDetalles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lugar_detalle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_LUGAR, ACCESO_DIS, EMBARAZADA, MENOR_EDAD', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_LUGAR_DET, ID_LUGAR, ACCESO_DIS, EMBARAZADA, MENOR_EDAD', 'safe', 'on'=>'search'),
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
			'iDLUGAR' => array(self::BELONGS_TO, 'Lugares', 'ID_LUGAR'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_LUGAR_DET' => 'Id Lugar Det',
			'ID_LUGAR' => 'Id Lugar',
			'ACCESO_DIS' => 'Acceso Dis',
			'EMBARAZADA' => 'Embarazada',
			'MENOR_EDAD' => 'Menor Edad',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID_LUGAR_DET',$this->ID_LUGAR_DET);
		$criteria->compare('ID_LUGAR',$this->ID_LUGAR);
		$criteria->compare('ACCESO_DIS',$this->ACCESO_DIS);
		$criteria->compare('EMBARAZADA',$this->EMBARAZADA);
		$criteria->compare('MENOR_EDAD',$this->MENOR_EDAD);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LugaresDetalles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
