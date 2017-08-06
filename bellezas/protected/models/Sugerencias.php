<?php

/**
 * This is the model class for table "sugerencias".
 *
 * The followings are the available columns in table 'sugerencias':
 * @property integer $ID_SUGER
 * @property integer $ID_USUARIO
 * @property integer $ID_ESTA
 * @property string $FECHA
 * @property string $NOMBRE
 * @property string $DESCRIPCION
 * @property string $UBICACION
 * @property string $FOTO
 *
 * The followings are the available model relations:
 * @property Usuarios $iDUSUARIO
 * @property Estatus $iDESTA
 */
class Sugerencias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sugerencias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_USUARIO, ID_ESTA', 'numerical', 'integerOnly'=>true),
			array('NOMBRE', 'length', 'max'=>120),
			array('UBICACION', 'length', 'max'=>255),
			array('FOTO', 'length', 'max'=>150),
			array('FECHA, DESCRIPCION', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_SUGER, ID_USUARIO, ID_ESTA, FECHA, NOMBRE, DESCRIPCION, UBICACION, FOTO', 'safe', 'on'=>'search'),
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
			'iDESTA' => array(self::BELONGS_TO, 'Estatus', 'ID_ESTA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_SUGER' => 'Id Suger',
			'ID_USUARIO' => 'Id Usuario',
			'ID_ESTA' => 'Id Esta',
			'FECHA' => 'Fecha',
			'NOMBRE' => 'Nombre',
			'DESCRIPCION' => 'Descripcion',
			'UBICACION' => 'Ubicacion',
			'FOTO' => 'Foto',
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

		$criteria->compare('ID_SUGER',$this->ID_SUGER);
		$criteria->compare('ID_USUARIO',$this->ID_USUARIO);
		$criteria->compare('ID_ESTA',$this->ID_ESTA);
		$criteria->compare('FECHA',$this->FECHA,true);
		$criteria->compare('NOMBRE',$this->NOMBRE,true);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);
		$criteria->compare('UBICACION',$this->UBICACION,true);
		$criteria->compare('FOTO',$this->FOTO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sugerencias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
