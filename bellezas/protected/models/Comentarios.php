<?php

/**
 * This is the model class for table "comentarios".
 *
 * The followings are the available columns in table 'comentarios':
 * @property integer $ID_COMEN
 * @property integer $ID_LUGAR
 * @property integer $ID_USUARIO
 * @property string $DESCRIPCION_COM
 *
 * The followings are the available model relations:
 * @property Usuarios $iDUSUARIO
 * @property Lugares $iDLUGAR
 */
class Comentarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comentarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_LUGAR, ID_USUARIO', 'numerical', 'integerOnly'=>true),
			array('DESCRIPCION_COM', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_COMEN, ID_LUGAR, ID_USUARIO, DESCRIPCION_COM', 'safe', 'on'=>'search'),
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
			'iDUSUARIO' => array(self::BELONGS_TO, 'Usuarios', 'ID_USUARIO'),
			'iDLUGAR' => array(self::BELONGS_TO, 'Lugares', 'ID_LUGAR'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_COMEN' => 'Id Comen',
			'ID_LUGAR' => 'Id Lugar',
			'ID_USUARIO' => 'Id Usuario',
			'DESCRIPCION_COM' => 'Descripcion Com',
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

		$criteria->compare('ID_COMEN',$this->ID_COMEN);
		$criteria->compare('ID_LUGAR',$this->ID_LUGAR);
		$criteria->compare('ID_USUARIO',$this->ID_USUARIO);
		$criteria->compare('DESCRIPCION_COM',$this->DESCRIPCION_COM,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comentarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
