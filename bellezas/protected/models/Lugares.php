<?php

/**
 * This is the model class for table "lugares".
 *
 * The followings are the available columns in table 'lugares':
 * @property integer $ID_LUGAR
 * @property integer $ID_USUARIO
 * @property integer $ID_CATEGORIA
 * @property string $NOMBRE
 * @property integer $GRATUITO
 * @property string $PRECIO_APROX
 * @property string $DIRECCION
 * @property string $CONCACTO
 * @property string $TELEFONO
 * @property string $E_MAIL
 * @property integer $ACTIVOS
 * @property string $DESCRIPCION
 *
 * The followings are the available model relations:
 * @property Comentarios[] $comentarioses
 * @property Fotos[] $fotoses
 * @property LugarDetalle[] $lugarDetalles
 * @property Categorias $iDCATEGORIA
 * @property Usuarios $iDUSUARIO
 * @property Ubicaciones[] $ubicaciones
 */
class Lugares extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lugares';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_USUARIO, ID_CATEGORIA, GRATUITO, ACTIVOS', 'numerical', 'integerOnly'=>true),
			array('NOMBRE', 'length', 'max'=>120),
			array('PRECIO_APROX', 'length', 'max'=>20),
			array('TELEFONO', 'length', 'max'=>15),
			array('E_MAIL', 'length', 'max'=>50),
			array('DIRECCION, CONCACTO, DESCRIPCION', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_LUGAR, ID_USUARIO, ID_CATEGORIA, NOMBRE, GRATUITO, PRECIO_APROX, DIRECCION, CONCACTO, TELEFONO, E_MAIL, ACTIVOS, DESCRIPCION', 'safe', 'on'=>'search'),
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
			'comentarioses' => array(self::HAS_MANY, 'Comentarios', 'ID_LUGAR'),
			'fotoses' => array(self::HAS_MANY, 'Fotos', 'ID_LUGAR'),
			'lugarDetalles' => array(self::HAS_MANY, 'LugarDetalle', 'ID_LUGAR'),
			'iDCATEGORIA' => array(self::BELONGS_TO, 'Categorias', 'ID_CATEGORIA'),
			'iDUSUARIO' => array(self::BELONGS_TO, 'Usuarios', 'ID_USUARIO'),
			'ubicaciones' => array(self::HAS_MANY, 'Ubicaciones', 'ID_LUGAR'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_LUGAR' => 'Id Lugar',
			'ID_USUARIO' => 'Id Usuario',
			'ID_CATEGORIA' => 'Id Categoria',
			'NOMBRE' => 'Nombre',
			'GRATUITO' => 'Gratuito',
			'PRECIO_APROX' => 'Precio Aprox',
			'DIRECCION' => 'Direccion',
			'CONCACTO' => 'Concacto',
			'TELEFONO' => 'Telefono',
			'E_MAIL' => 'E Mail',
			'ACTIVOS' => 'Activos',
			'DESCRIPCION' => 'Descripcion',
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

		$criteria->compare('ID_LUGAR',$this->ID_LUGAR);
		$criteria->compare('ID_USUARIO',$this->ID_USUARIO);
		$criteria->compare('ID_CATEGORIA',$this->ID_CATEGORIA);
		$criteria->compare('NOMBRE',$this->NOMBRE,true);
		$criteria->compare('GRATUITO',$this->GRATUITO);
		$criteria->compare('PRECIO_APROX',$this->PRECIO_APROX,true);
		$criteria->compare('DIRECCION',$this->DIRECCION,true);
		$criteria->compare('CONCACTO',$this->CONCACTO,true);
		$criteria->compare('TELEFONO',$this->TELEFONO,true);
		$criteria->compare('E_MAIL',$this->E_MAIL,true);
		$criteria->compare('ACTIVOS',$this->ACTIVOS);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lugares the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
