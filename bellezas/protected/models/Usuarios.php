<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $ID_USUARIO
 * @property integer $ID
 * @property string $NOMBRE
 * @property string $APELLIDO_P
 * @property string $APELLIDO_M
 * @property string $CORREO
 * @property string $CONTRASENA
 * @property string $TELEFONO
 *
 * The followings are the available model relations:
 * @property Comentarios[] $comentarioses
 * @property Lugares[] $lugares
 * @property Sugerencias[] $sugerenciases
 * @property TiposUsuarios $iD
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID', 'numerical', 'integerOnly'=>true),
			array('NOMBRE', 'length', 'max'=>120),
			array('APELLIDO_P, APELLIDO_M', 'length', 'max'=>100),
			array('CORREO, CONTRASENA', 'length', 'max'=>150),
			array('TELEFONO', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_USUARIO, ID, NOMBRE, APELLIDO_P, APELLIDO_M, CORREO, CONTRASENA, TELEFONO', 'safe', 'on'=>'search'),
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
			'comentarioses' => array(self::HAS_MANY, 'Comentarios', 'ID_USUARIO'),
			'lugares' => array(self::HAS_MANY, 'Lugares', 'ID_USUARIO'),
			'sugerenciases' => array(self::HAS_MANY, 'Sugerencias', 'ID_USUARIO'),
			'iD' => array(self::BELONGS_TO, 'TiposUsuarios', 'ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_USUARIO' => 'Id Usuario',
			'ID' => 'ID',
			'NOMBRE' => 'Nombre',
			'APELLIDO_P' => 'Apellido P',
			'APELLIDO_M' => 'Apellido M',
			'CORREO' => 'Correo',
			'CONTRASENA' => 'Contrasena',
			'TELEFONO' => 'Telefono',
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

		$criteria->compare('ID_USUARIO',$this->ID_USUARIO);
		$criteria->compare('ID',$this->ID);
		$criteria->compare('NOMBRE',$this->NOMBRE,true);
		$criteria->compare('APELLIDO_P',$this->APELLIDO_P,true);
		$criteria->compare('APELLIDO_M',$this->APELLIDO_M,true);
		$criteria->compare('CORREO',$this->CORREO,true);
		$criteria->compare('CONTRASENA',$this->CONTRASENA,true);
		$criteria->compare('TELEFONO',$this->TELEFONO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
